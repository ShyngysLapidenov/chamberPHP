@extends('layouts.app')
@section('content')
    <section class="news-body">
        <div class="news-heading-body" style="background-image: url('/images/news/{{ $news['img'] }}')">
            <h2 class="news-main-heading">{{ $news['title'] }}</h2>
            <p class="news-date">{{ date('d M Y', strtotime($news['date'])) }}</p>
        </div>
        <div class="news-text-body">
            <p>
                {!! $news['body'] !!}
            </p>
        </div>

{{--        <div class="showcase">--}}
{{--            <img src="assets/images/slider-back.png" width="100%" height="15%" style="position: absolute; top: 42%">--}}
{{--            <div class="showcase__content-wrapper">--}}
{{--                <div class="showcase__content">--}}

{{--                    <div class="showcase-carousel">--}}

{{--                        <div class="swiper-wrapper">--}}

{{--                            <div class="swiper-slide showcase-carousel__item">--}}
{{--                                <div class="showcase-carousel__image-wrapper">--}}
{{--                                    <div class="showcase-carousel__image-left">--}}
{{--                                        <div class="showcase-carousel__image" style="background-image: url(assets/images/news1.png);"></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="showcase-carousel__image-right">--}}
{{--                                        <div class="showcase-carousel__image" style="background-image: url(assets/images/news1.png);"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="swiper-slide showcase-carousel__item">--}}
{{--                                <div class="showcase-carousel__image-wrapper">--}}
{{--                                    <div class="showcase-carousel__image-left">--}}
{{--                                        <div class="showcase-carousel__image" style="background-image: url(assets/images/news2.png);"></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="showcase-carousel__image-right">--}}
{{--                                        <div class="showcase-carousel__image" style="background-image: url(assets/images/news2.png);"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="swiper-slide showcase-carousel__item">--}}
{{--                                <div class="showcase-carousel__image-wrapper">--}}
{{--                                    <div class="showcase-carousel__image-left">--}}
{{--                                        <div class="showcase-carousel__image" style="background-image: url(assets/images/news3.png);"></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="showcase-carousel__image-right">--}}
{{--                                        <div class="showcase-carousel__image" style="background-image: url(assets/images/news3.png);"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="swiper-slide showcase-carousel__item">--}}
{{--                                <div class="showcase-carousel__image-wrapper">--}}
{{--                                    <div class="showcase-carousel__image-left">--}}
{{--                                        <div class="showcase-carousel__image" style="background-image: url(assets/images/news3.png);"></div>--}}
{{--                                    </div>--}}
{{--                                    <div class="showcase-carousel__image-right">--}}
{{--                                        <div class="showcase-carousel__image" style="background-image: url(assets/images/news3.png);"></div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}

{{--                    </div>--}}

{{--                    <div class="showcase-navigation">--}}
{{--                        <div class="showcase-navigation__prev"><img src="assets/images/slider-button-left.png" style="width: 5%; position: absolute; top: 47%; left: 2%"></div>--}}
{{--                        <div class="showcase-navigation__next"><img src="assets/images/slider-button-right.png" style="width: 5%; position:absolute; top: 47%; right: 2%"></div>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
    </section>
@endsection
