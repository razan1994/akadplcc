<div class="container_1200">

    <div class="c_block">
        @if (isset($category))
            <div class="c_title">
                <h2>{{ $category->name }}</h2>
            </div>
        @endif

        <div class="row">
            @if (isset($news) && $news->count() > 0)
                @foreach ($news as $index => $new)
                    <div class="col-md-6 col-xs-12 pagenitems">
                        <x-frontend.cards.blog-card-component :new="$new" />
                    </div>

                    {{-- <div class="col-md-6 col-xs-12 pagenitems">
                        <div class="c_item news-card">
                            <a href="{{ route('news-details', $new->slug) }}" wire:navigate>
                                <div class="c_image">
                                    @if (isset($new->image) && file_exists($new->image))
                                        <img src="{{ asset($new->image) }}">
                                    @else
                                        <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                                    @endif
                                </div>
                            </a>
                            <div class="c_post">
                                <div class="c_body">
                                    <h3>{!! isset($new->title_ar) ? $new->title_ar : 'Undefined' !!} </h3>
                                    <p>{!! \Illuminate\Support\Str::limit(
                                        isset($new->short_description) ? str_replace('&nbsp;', ' ', $new->short_description) : '--------',
                                        70,
                                        $end = '...',
                                    ) !!}</p>
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
                    </div> --}}
                @endforeach
            @else
                @for ($i = 0; $i < 8; $i++)
                    <div id="i_show_num" class="col-md-6 col-xs-12 pagenitems">
                        <div class="c_item">
                            <div class="c_image">
                                <img src="{{ asset('/front_end_style/images/omgs.png') }}">
                            </div>
                            <div class="c_post">
                                <div class="c_body">
                                    <h3>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة </h3>
                                    <p>هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن
                                        التركيز على الشكل الخارجي للنص </p>
                                </div>
                                <div class="c_buttn">
                                    <a href="#">اقرأ المزيد</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            @endif
        </div>
        <div class="d-flex justify-content-center">
            {{ $news->links() }}
        </div>
    </div>
</div>
