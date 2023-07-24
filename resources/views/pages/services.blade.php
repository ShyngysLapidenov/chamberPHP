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
        <div class="services">
            <div class="container">
                <div class="col-md-7 col-sm-12">

                    <h3>{{ $comps[39]['body'] }}</h3>
                    <p class="services-text pt-3">
                        {{ $comps[40]['body'] }}
                    </p>

                </div>
            </div>

        </div>
        <div class="we-do">
            <div class="container">
                <h3>{{ $comps[41]['body'] }}</h3>
                <div class="row justify-content-center pt-5">
                    <div class="col-md-5 col-sm-10">
                        <div class="row whatCard mt-3">
                            <div class="col-md-2"><img src="/assets/images/service-1.png" alt=""></div>
                            <div class="col-md-8"><p>{{ $comps[42]['body'] }}</p></div>

                        </div>
                        <div class="row whatCard mt-3">
                            <div class="col-md-2"> <img src="/assets/images/service-3.png" alt="" style="padding-left: 1px !important;"></div>
                            <div class="col-md-8"><p>{{ $comps[43]['body'] }}</p></div>
                        </div>
                        <div class="row whatCard mt-3">
                            <div class="col-md-2"><img src="/assets/images/service-5.png" alt="" style="padding-left: 5px !important;"></div>
                            <div class="col-md-8"><p>{{ $comps[44]['body'] }}</p></div>
                        </div>
                    </div>
                    <div class="offset-md-2 offset-sm-0"></div>
                    <div class="col-md-5 col-sm-10">
                        <div class="row whatCard mt-3">

                            <div class="col-md-2"><img src="/assets/images/service-2.png" alt="" style="padding-left: 5px !important;"></div>
                            <div class="col-md-8"><p>{{ $comps[45]['body'] }}</p></div>


                        </div>
                        <div class="row whatCard mt-3">
                            <div class="col-md-2"><img src="/assets/images/service-4.png" alt="" style="padding-left: 5px !important;"></div>
                            <div class="col-md-8"><p>{{ $comps[46]['body'] }}</p></div>
                        </div>
                        <div class="row whatCard mt-3">
                            <div class="col-md-2"><img src="/assets/images/service-6.png" alt=""></div>
                            <div class="col-md-8"><p>{{ $comps[48]['body'] }}</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="third">
            <div class="container">
                <div class="row pt-5">
                    <div class="col-md-12">
                        <div class="card servCard">
                            <div class="card-body">
                                <h3 class="card-title text-center"><b>{{ $comps[49]['body'] }}</b></h3>
                                <p class="card-text m-4">
                                    {!! $comps[52]['body'] !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="fourth" id="services">

            <div class="container">
                <div class="row">
                    <div class="ser mx-auto pt-5">
                        <div class="service_top" id="cardOne" onmousedown="location.href='#popup1'" style="cursor: pointer" onclick="opening()">
                            <div class="number" style="top: 90px !important; left: 40px !important;">01</div>
                            <h5 class="text-center" style="position:absolute; top: 110px !important; left: 30px !important;">Business Matching</h5>
                        </div>
                        <div class="service_center" id="cardCenter">
                            <a style="top: 75px !important; left: 28px !important;">Chamber Services</a>
                        </div>
                        <div class="service_bottom_l" id="cardRightBottom" onmousedown="location.href='#popup2'" style="cursor: pointer" onclick="opening()">
                            <div class="number" style="top: 90px !important; left: 25px !important;">03</div>
                            <h5 class="text-center" style="position:absolute; top: 110px !important; left: 60px !important;">Networking</h5>
                        </div>
                        <div class="service_bottom_r" id="cardLeftBottom" onmousedown="location.href='#popup3'" style="cursor: pointer" onclick="opening()">
                            <div class="number" style="top: 90px !important; left: 20px !important;">04</div>
                            <h5 class="text-center" style="position:absolute; top: 110px !important; left: 12px !important;">Knowledge Exchange</h5>
                        </div>
                        <div class="service_right" id="cardRight" onmousedown="location.href='#popup4'" style="cursor: pointer" onclick="opening()">
                            <div class="number">02</div>
                            <h5 class="text-center" style="position:absolute; top: 110px !important; left: 0px !important;">Business Start-Up Suppport</h5>
                        </div>
                        <div class="service_left" id="cardLeft" onmousedown="location.href='#popup5'" style="cursor: pointer" onclick="opening()">
                            <div class="number" style="top: 90px !important; left: 25px !important;">05</div>
                            <h5 class="text-center" style="position:absolute; top: 110px !important; left: 12px !important;">Market Entry Support</h5>
                        </div>
                    </div>
                </div>

            </div>



            <div id="popup1" class="overlay" onclick="clicking()">
                <div class="popup">
                    <div class="number2" style="top: 290px !important; left: 90px !important;">01</div>
                    <h2>Business Matching</h2>
                    <!--                <a class="close" href="#services">&times;</a>-->
                    <div class="content">
                        Background diligence on potential agents/distributors/partners
                        Partner identification and matching services
                        Support for DIT inward regional or sector missions
                        Advice on regulation, legislation etc.
                    </div>
                </div>
            </div>
            <div id="popup2" class="overlay" onclick="clicking()">
                <div class="popup">
                    <div class="number2">03</div>
                    <h2>Networking</h2>
                    <!--                <a class="close" href="#services">&times;</a>-->
                    <div class="content">
                        Background diligence on potential agents/distributors/partners
                        Partner identification and matching services
                        Support for DIT inward regional or sector missions
                        Advice on regulation, legislation etc.
                    </div>
                </div>
            </div>
            <div id="popup3" class="overlay" onclick="clicking()">
                <div class="popup">
                    <div class="number2" style="top: 290px !important; left: 40px !important;">04</div>
                    <h2>Knowledge Exchange</h2>
                    <!--                <a class="close" href="#services">&times;</a>-->
                    <div class="content">
                        Background diligence on potential agents/distributors/partners
                        Partner identification and matching services
                        Support for DIT inward regional or sector missions
                        Advice on regulation, legislation etc.
                    </div>
                </div>
            </div>
            <div id="popup4" class="overlay" onclick="clicking()">
                <div class="popup">
                    <div class="number2" style="top: 290px !important; left: 60px !important;">02</div>
                    <h2>Business Start-Up Suppport</h2>
                    <!--                <a class="close" href="#services">&times;</a>-->
                    <div class="content">
                        Background diligence on potential agents/distributors/partners
                        Partner identification and matching services
                        Support for DIT inward regional or sector missions
                        Advice on regulation, legislation etc.
                    </div>
                </div>
            </div>
            <div id="popup5" class="overlay" onclick="clicking()">
                <div class="popup">
                    <div class="number2" style="top: 290px !important; left: 60px !important;">05</div>
                    <h2>Market Entry Support</h2>
                    <!--                <a class="close" href="#services">&times;</a>-->

                    <div class="content">
                        Background diligence on potential agents/distributors/partners
                        Partner identification and matching services
                        Support for DIT inward regional or sector missions
                        Advice on regulation, legislation etc.
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
