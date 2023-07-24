@extends('layouts.app')
@section('content')

    <div class="msg-popup" id="msg">
        <form class="form2" id="form2" name="form2">
            <div class="form-heading">
                <img class="close" src="assets/images/close-icon.png" width="25" onclick="closePopUp()">
                <h1>SEND US A QUICK MESSAGE</h1>
            </div>
            <div class="mb-3 form-input">
                <input type="text" class="form-field form-control "  name="name" placeholder="Full name">
            </div>
            <div class="mb-3 form-input">
                <input type="text" class="form-field form-control "  name="email" placeholder="E-mail">
            </div>
            <div class="mb-3 form-input">
                <input type="text" class="form-field form-control" name="phone" placeholder="Phone">
            </div>
            <div class="mb-3 form-input">
                <textarea type="text" class=" form-field form-control" id="message" placeholder="Message" name="message2"></textarea>
            </div>

            <div class="mb-3 form-check form-input">
                <input type="checkbox" required class="form-check-input" id="exampleCheckE">
                <label class="form-check-label" for="exampleCheck1">I agree to the processing of personal data <span>*</span></label>
            </div>
            <button class="form-button btn btn-dark  text-white" id="submit-btnE"><span class="text-button ">Submit</span></button>
        </form>

    </div>

    <div class="overlaytest js-overlay-thank-you" id="scs-pp">
        <div class="popuptest js-thank-you">
            <div class="success-heading">
                <img class="success" src="assets/images/success-icon.png" width="80">
            </div>
            <div class="success-content">
                <h2>Your message has been sent<br>
                    Our manager will contact you soon</h2>
            </div>
        </div>
    </div>

    <section class="main">
        <div class="card utp">
            <div class="card-body utp-info">
                <h1 class="card-title utp-title">{!! $comps[1]['title'] !!}</h1>
                <p class="card-text utp-text">
                {{ $comps[1]['body'] }}
                </p>
                <a href="/member" class="btn btn-join" style="z-index: 2;">Join the Chamber</a>
            </div>
        </div>
        <video autoplay muted loop id="bg-video">
            <source src="/assets/video/London.mp4" type="video/mp4">
        </video>
    </section>

    <section class="news">
        <div class="slider-member">
            <h1 class="news-heading">News</h1>
            <a href="/news" style="position: absolute; top: 135%; right: 10%; color: #00AFCA; font-size: 1.5rem">All News</a>
            <button id="prev" class="btn-member">
                <i class="las la-angle-left"></i>
            </button>
            <div class="card-content">
                @foreach($news as $item)
                <div class="card-news" onclick="location.href = '{{ route('news_detail', ['id' => $item['id']]) }}'">
                    <img class="news-icon" src="/assets/images/news.png">
                    <h6 class="card-date">{{ date('d M Y', strtotime($item['date'])) }}</h6>
                    <h6 class="card-text"><h8 style="font-weight: 1000; color: #00AFCA">|</h8> PRESS RELEASE</h6>
                    <div class="card-text">
                        <h5>{{ $item['title'] }}</h5>
                    </div>
                </div>
                @endforeach
{{--                <div class="card-news">--}}
{{--                    <img class="news-icon" src="assets/images/news.png">--}}
{{--                    <h6 class="card-date">01 september 2022</h6>--}}
{{--                    <h6 class="card-text"><h8 style="font-weight: 1000; color: #00AFCA">|</h8> PRESS RELEASE</h6>--}}
{{--                    <div class="card-text">--}}
{{--                        <h5>QUARTERLY MACROECONOMIC REPORT. EXPERTS SURVEY RESULTS, Q1 - Q2, 2022</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-news">--}}
{{--                    <img class="news-icon" src="assets/images/news.png">--}}
{{--                    <h6 class="card-date">03 august 2022</h6>--}}
{{--                    <h6 class="card-text"><h8 style="font-weight: 1000; color: #00AFCA">|</h8> PRESS RELEASE</h6>--}}
{{--                    <div class="card-text">--}}
{{--                        <h5>KAZAKHSTAN LEGISLATION UPDATEY</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-news">--}}
{{--                    <img class="news-icon" src="assets/images/news.png">--}}
{{--                    <h6 class="card-date">August 01, 2022</h6>--}}
{{--                    <h6 class="card-text"><h8 style="font-weight: 1000; color: #00AFCA">|</h8> PRESS RELEASE</h6>--}}
{{--                    <div class="card-text">--}}
{{--                        <h5>Direct flights to Bangkok from Almaty from October 30, 2022</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-news">--}}
{{--                    <img class="news-icon" src="assets/images/news.png">--}}
{{--                    <h6 class="card-date">June 24, 2022</h6>--}}
{{--                    <h6 class="card-text"><h8 style="font-weight: 1000; color: #00AFCA">|</h8> PRESS RELEASE</h6>--}}
{{--                    <div class="card-text">--}}
{{--                        <h5>June Issue of the Newsletter</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-news">--}}
{{--                    <img class="news-icon" src="assets/images/news.png">--}}
{{--                    <h6 class="card-date">June 09, 2022</h6>--}}
{{--                    <h6 class="card-text"><h8 style="font-weight: 1000; color: #00AFCA">|</h8> PRESS RELEASE</h6>--}}
{{--                    <div class="card-text">--}}
{{--                        <h5>Admissions for the Reception class for 2022/23 academic year are currently in progress</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-news">--}}
{{--                    <img class="news-icon" src="assets/images/news.png">--}}
{{--                    <h6 class="card-date">May 23, 2022</h6>--}}
{{--                    <h6 class="card-text"><h8 style="font-weight: 1000; color: #00AFCA">|</h8> PRESS RELEASE</h6>--}}
{{--                    <div class="card-text">--}}
{{--                        <h5>Express survey: "Wage reconsideration in connection with the economic situation changes in Kazakhstan – Part 2"</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-news">--}}
{{--                    <img class="news-icon" src="assets/images/news.png">--}}
{{--                    <h6 class="card-date">May 06, 2022</h6>--}}
{{--                    <h6 class="card-text"><h8 style="font-weight: 1000; color: #00AFCA">|</h8> PRESS RELEASE</h6>--}}
{{--                    <div class="card-text">--}}
{{--                        <h5>--}}
{{--                            Work reimagined: How to prepare for 'renaissance and recommitment</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-news">--}}
{{--                    <img class="news-icon" src="assets/images/news.png">--}}
{{--                    <h6 class="card-date"> May 05, 2022</h6>--}}
{{--                    <h6 class="card-text"><h8 style="font-weight: 1000; color: #00AFCA">|</h8> PRESS RELEASE</h6>--}}
{{--                    <div class="card-text">--}}
{{--                        <h5>Air Astana Launches Flights from Almaty to London and Bodrum, Turkey</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="card-news">--}}
{{--                    <img class="news-icon" src="assets/images/news.png">--}}
{{--                    <h6 class="card-date">April 29, 2022</h6>--}}
{{--                    <h6 class="card-text"><h8 style="font-weight: 1000; color: #00AFCA">|</h8> PRESS RELEASE</h6>--}}
{{--                    <div class="card-text">--}}
{{--                        <h5>Business Lunch with Huseyin Ozhan and Beth McKendrick/h5>--}}
{{--                    </div>--}}
{{--                </div>--}}


            </div>
            <button id="next" class="btn-member">
                <i class="las la-angle-right"></i>
            </button>
        </div>
    </section>


    <div class= "eventPadding">
        <h2 class="upcoming"> Upcoming Events</h2>
        <a href="/event#card10"> <h4 class="viewAll"> View All Events </h4></a>
    </div>


    <section class="center slider">



		@foreach($events as $event)
        <div>
            <a href="/event">
                <img src="/images/events/{{ $event->img }}" style="box-shadow:   0 10px 5px -10px rgb(96, 95, 95); width: 90%; border: 1px solid rgba(220, 85, 85, 0.9)">
                <h5 class="card-title">{{ $event->title }}</h5>
                <p class="card-text"><i class="fa-regular fa-clock">

                    </i>{{ date('d.m.Y H:i', strtotime($event->date)) }}<br> <i class="fa-solid fa-location-dot"></i>{{ $event->location }}</p>
            </a>

        </div>
		@endforeach


    </section>



    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="./slick/slick.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(document).on('ready', function() {

            $(".center").slick({
                dots: true,
                infinite: true,
                centerMode: true,
                slidesToShow: 3,
                slidesToScroll: 3,
                autoplay:true






            });

        });
    </script>

    <section class="members">
        <div class="container-fluid" id="partners">
            <h2 class="partners-h1">MEMBERS</h2>
            <div class="customer-logos slider">
                <div class="slide"><img class="partners-img" src="/assets/images/camp.png"></div>
                <div class="slide"><img class="partners-img" src="/assets/images/ccc.png"></div>
                <div class="slide"><img class="partners-img" src="/assets/images/ey.png"></div>
                <div class="slide"><img class="partners-img" src="/assets/images/eb.png"></div>
                <div class="slide"><img class="partners-img" src="/assets/images/camp.png"></div>
                <div class="slide"><img class="partners-img" src="/assets/images/ccc.png"></div>
                <div class="slide"><img class="partners-img" src="/assets/images/ey.png"></div>
                <div class="slide"><img class="partners-img" src="/assets/images/eb.png"></div>
            </div>
        </div>

        <div class="container-fluid" id="members">
            <h2 class="partners-h1">FOUNDING MEMBERS</h2>
            <div class="members-logo">
                <img class="members-img" src="/assets/images/KPMG.png">
                <img class="members-img" src="/assets/images/air-astana-logo.png">
                <img class="members-img" src="/assets/images/rio.png">
            </div>
        </div>
    </section>
@endsection
