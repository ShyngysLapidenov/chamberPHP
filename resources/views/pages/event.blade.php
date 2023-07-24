@extends('layouts.app')
@section('content')
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/test-cards.css">
    <script src="https://cdn.rawgit.com/nizarmah/calendar-javascript-lib/master/calendarorganizer.min.js"></script>


    <div class="overlaytest js-overlay-thank-you" id="scs-pp">
        <div class="popuptest js-thank-you">
            <div class="success-heading">
                <img class="success" src="/assets/images/success-icon.png" width="80">
            </div>
            <div class="success-content">
                <h2>Your message has been sent<br>
                    Our manager will contact you soon</h2>
            </div>
        </div>
    </div>

    <section class="all_event">
        <div class="container">
            <div class="row">
                <div class="col-md-8 pt-5 ev1">
                    <h3>All Events</h3>
                    @foreach($events as $key => $event)
                    <div id="card{{ $key }}" class="card event-big @if($key == 0) big-activate @endif" style="width: 600px;">
                        <img class="card-img-top" src="/images/events/{{ $event->img }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title text-center">{{ $event->title }}</h5>
                            <p class="card-text text-justify">
                                {!! $event->body !!}
                            </p>
                            <div class="row">
                                <div class="col-md-8"><p class="card-text"><i class="fa-regular fa-clock"></i> {{ date('d.m.Y H:i', strtotime($event->date)) }}<br><i class="fa-solid fa-location-dot"></i> {{ $event->location }}</p></div>
                                <div class="col-md-4"><button class="regist btn btn-primary" onclick="location.href = '#forEvent'">Registration</button></div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>


                <div class="col-md-4">
                    <div data-bs-spy="scroll" data-bs-offset="0" class="scrollspy-event" tabindex="0">
                        <div class="sc" id="event-small">

                            @foreach($events as $key => $event)
                            <a href="#card{{ $key }}" class="card-underline">
                                <div  class="card event-small @if($key == 0) activate @endif" style="width: 18rem;">
                                    <img class="card-img-top" src="/images/events/{{ $event->img }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $event->title }}</h5>
                                        <p class="card-text"><i class="fa-regular fa-clock"></i> {{ date('d.m.Y H:i', strtotime($event->date)) }}<br> <i class="fa-solid fa-location-dot"></i> {{ $event->location }}</p>
                                    </div>
                                </div>
                            </a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="forma" id="forEvent" style="margin-top:22% !important;">
            <form class="form" id="form" name="form">
                <div class="form-heading">
                    <h3 class="p-3 text-white">EVENT REGISTER</h3>
                </div>
                <div class="mb-3 form-input">
                    <div class="input-group" >
                        <select class="custom-select " requierd id="inputGroupSelect04" id="event_id" name="event_id">
                            <option  selected disabled value=''>Choose Event</option>
                            @foreach($events as $event)
                            <option value="{{ $event->id }}">{{ $event->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3 form-input">
                    <input type="text" class="form-field form-control "  id="fio" name="fio" placeholder="Full name">
                </div>
				<div class="mb-3 form-input">
                    <input type="text" class="form-field form-control "  id="сompany_name" name="сompany_name" placeholder="Company name">
                </div>
				<div class="mb-3 form-input">
                    <input type="text" class="form-field form-control "  id="position" name="position" placeholder="Position">
                </div>
                <div class="mb-3 form-input">
                    <input type="text" class="form-field form-control "  id="email" name="email" placeholder="E-mail">
                </div>
                <div class="mb-3 form-input">
                    <input type="text" class="form-field form-control" id="phone" name="phone" placeholder="Phone">
                </div>

                <div class="mb-3 form-check form-input">
                    <input type="checkbox" required class="form-check-input" id="exampleCheckE">
                    <label class="form-check-label" for="exampleCheck1">I agree to the processing of personal data <span>*</span></label>
                </div>
                <button class="form-button btn btn-dark  text-white" id="submit-btnE"><span class="text-button ">Submit</span></button>
            </form>

        </div>



        <!-- <div class="overlaytest js-overlay-thank-you">
          <div class="popuptest js-thank-you">
            <h2>Спасибо за заявку</h2>
            <div class="close-popuptest js-close-thank-you"></div>
          </div>
        </div>
        <div class="scroll-up" id="scroll-up">Наверх</div>
    </div> -->

        <div class="overlaytest js-overlay-thank-you" id="scs-pp">
            <div class="popuptest js-thank-you">
                <div class="success-heading">
                    <img class="success" src="/assets/images/success-icon.png" width="80">
                </div>
                <div class="success-content">
                    <h2>Your message has been sent<br>
                        Our manager will contact you soon</h2>
                </div>
            </div>
        </div>


    </section>
    @push('script')
    <script>
        // Add active class to the current button (highlight it)
        const header = document.getElementById("event-small");
        const btns = header.getElementsByClassName("event-small");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function() {
                const current = document.getElementsByClassName("activate");
                current[0].className = current[0].className.replace(" activate", "");
                this.className += " activate";
            });
        }

        // let form = $('#form');
        // $(document).ready(function() {
        // form.submit(function (e) {
        //     if (document.form.name.value == '' || document.form.phone.value == ''|| document.form.choose5.value == '') {
        //         valid = false;
        //         return valid;
        //     }

        //     $(function()
        //     {
        //         $("#form").validate(
        //         {
        //             rules: 
        //             {
        //             item: 
        //             {
        //                 required: true
        //             }
        //             }
        //         });	
        //     });
        //     e.preventDefault();
        //     let body = {
        //         event_id: document.getElementById('event_id').value,
        //         fio: document.getElementById('fio').value,
        //         email: document.getElementById('email').value,
        //         phone: document.getElementById('phone').value,
        //     }
        //     console.log(body)
        //     $.ajax({
        //         type: 'POST',
        //         url: '/api/send',
        //         data: JSON.stringify(body),
        //         success: function(data){
        //             $('.results').html(data);
        //         }
        //     });
        // })
        // })
    </script>
    @endpush
    <script src="https://kit.fontawesome.com/72acc62cd5.js" crossorigin="anonymous"></script>

@endsection
