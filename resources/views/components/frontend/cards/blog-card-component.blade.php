<div class="c_item news-card d-flex flex-column flex-md-row">
    <a href="{{ route('news-details', $new->slug) }}" wire:navigate>
        <div class="c_image">
            @if (isset($new->image) && file_exists($new->image))
                <img src="{{ asset($new->image) }}" alt="{{ $new->title_ar }}">
            @else
                <img src="{{ asset('/front_end_style/images/omgs.png') }}" alt="{{ $new->title_ar }}">
            @endif
        </div>
    </a>

    <div class="c_post d-flex flex-column justify-content-between">
        <div class="c_body">
            <h3>{!! isset($new->title_ar) ? $new->title_ar : '--------' !!} </h3>
            <p style="text-wrap: wrap">{{ $new->short_description ?? '--------' }}</p>
        </div>
        <div class="c_buttn">
            <a href="{{ route('news-details', $new->slug) }}" wire:navigate>اقرأ
                المزيد</a>
        </div>
        @if ($new->category)
            <a href="{{ route('news', $new->category->slug) }}" wire:navigate
                class="p-2 m-1 badge badge-pill badge-primary font-size-14 card-category">
                {{ $new->category->name }}
            </a>
        @endif
    </div>
</div>
