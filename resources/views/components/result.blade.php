@props([
    'image' => '',
    'titles' => [],
    'url' => 'localhost',
])

<div class="result">
    <div class="result__tabbar">
        <div class="result__tabs">
            @foreach ($titles as $i => $title)
                <div class="result__tab {{ $i === 0 ? 'result__tab--active' : '' }}">
                    <span class="result__tab__title">{{ $title }}</span>
                    <span class="result__tab__close">&#x2715;</span>
                </div>
            @endforeach
            <button class="result__tab-new" aria-label="New tab">&#x2B;</button>
        </div>
        <div class="result__controls">
            <span class="result__control">&#x2212;</span>
            <span class="result__control">&#x25A1;</span>
            <span class="result__control result__control--close">&#x2715;</span>
        </div>
    </div>
    <div class="result__chrome">
        <button class="result__nav result__nav--back" title="Back">&#129128;</button>
        <button class="result__nav result__nav--forward" title="Forward">&#129130;</button>
        <button class="result__nav result__nav--refresh" title="Refresh">&#x27F3;</button>
        <div class="result__addressbar">{{ $url }}</div>
        <button class="result__nav result__nav--menu" title="Options">&#x22EE;</button>
    </div>
    <div class="result__viewport">
        <img src="{{ $image }}" alt="{{ $titles[0] ?? '' }}" class="result__content">
    </div>
</div>
