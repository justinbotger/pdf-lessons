<?php

namespace App\View\Components;

use Closure;
use Highlight\Highlighter;
use Illuminate\Contracts\View\View;
use Illuminate\Support\HtmlString;
use Illuminate\View\Component;
use Throwable;

class Code extends Component
{
    public string $language;
    public ?string $label;
    public bool $lineNumbers;

    public function __construct(
        string $language = 'plaintext',
        ?string $label = null,
        bool $lineNumbers = false
    ) {
        $this->language = $language;
        $this->label = $label;
        $this->lineNumbers = $lineNumbers;
    }

    public function render(): View|Closure|string
    {
        return function (array $data): View {
            $rawCode = $this->normalizeCode((string) $data['slot']);

            return view('components.code', [
                'highlightedCode' => $this->highlight($rawCode),
            ]);
        };
    }

    protected function normalizeCode(string $code): string
    {
        $code = str_replace(["\r\n", "\r"], "\n", $code);
        $code = preg_replace('/^\n+|\n+$/', '', $code) ?? '';

        if ($code === '') {
            return '';
        }

        $lines = explode("\n", $code);
        $minIndent = null;
        $lineIndents = [];
        $firstContentLine = null;

        foreach ($lines as $index => $line) {
            if (trim($line) === '') {
                continue;
            }

            preg_match('/^[\t ]*/', $line, $matches);
            $indentWidth = strlen($matches[0]);

            $lineIndents[$index] = $indentWidth;
            if ($firstContentLine === null) {
                $firstContentLine = $index;
            }

            $minIndent = $minIndent === null ? $indentWidth : min($minIndent, $indentWidth);
        }

        if ($minIndent !== null && $minIndent > 0) {
            foreach ($lines as &$line) {
                $line = preg_replace('/^[\t ]{0,' . $minIndent . '}/', '', $line) ?? $line;
            }

            unset($line);

            return implode("\n", $lines);
        }

        if ($firstContentLine === null || ($lineIndents[$firstContentLine] ?? null) !== 0) {
            return $code;
        }

        // Laravel trims component slots, which can remove indentation from only the first line.
        $minIndentAfterFirst = null;

        foreach ($lineIndents as $index => $indentWidth) {
            if ($index === $firstContentLine) {
                continue;
            }

            $minIndentAfterFirst = $minIndentAfterFirst === null
                ? $indentWidth
                : min($minIndentAfterFirst, $indentWidth);
        }

        if ($minIndentAfterFirst === null || $minIndentAfterFirst === 0) {
            return $code;
        }

        foreach ($lines as $index => &$line) {
            if ($index === $firstContentLine || trim($line) === '') {
                continue;
            }

            $line = preg_replace('/^[\t ]{0,' . $minIndentAfterFirst . '}/', '', $line) ?? $line;
        }

        unset($line);

        return implode("\n", $lines);
    }

    protected function highlight(string $code): HtmlString
    {
        $highlighter = new Highlighter();

        try {
            if ($this->language === 'plaintext') {
                return new HtmlString(e($code));
            }

            $result = $highlighter->highlight($this->language, $code);

            return new HtmlString($result->value);
        } catch (Throwable $e) {
            // Fallback: gewoon escaped code tonen als de taal fout is
            return new HtmlString(e($code));
        }
    }
}
