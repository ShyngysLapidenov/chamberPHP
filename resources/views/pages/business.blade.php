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

    <section class="business-main">
        <div class="business-text">
            <h2><b>{{ $comps[13]['body'] }}</b></h2>
            <p>
                {{ $comps[14]['body'] }}
            </p>
        </div>
    </section>

    <section class="opportunities">
        <h1 class="business-heading">{{ $comps[15]['body'] }}</h1>
        <p class="text-center">
        {{ $comps[16]['body'] }}
        </p>

        <div class="map container">
            <img class="geo-loc" id="north" src="assets/images/geo-location.png" onmousedown="viewNorthPopUp()">
            <img class="geo-loc" id="south" src="assets/images/geo-location.png" onmousedown="viewSouthPopUp()">
            <img class="geo-loc" id="center" src="assets/images/geo-location.png" onmousedown="viewCenterPopUp()">
            <img class="geo-loc" id="east" src="assets/images/geo-location.png" onmousedown="viewEastPopUp()">
            <img class="geo-loc" id="west" src="assets/images/geo-location.png" onmousedown="viewWestPopUp()">

            <img class="map-img" src="assets/images/map.png">
        </div>
    </section>

    <div class="map-popup" id="north-pp">
        <div class="map-form">
            <div class="map-heading">
                <img class="close close-black" src="assets/images/close-black-icon.png" width="25" onmousedown="closePopUp()">
                <h3>{{ $comps[17]['body'] }}</h3>
            </div>
            <div class="map-content">
                <p>{{ $comps[18]['body'] }}</p>
            </div>
        </div>
    </div>

    <div class="map-popup" id="south-pp">
        <div class="map-form">
            <div class="map-heading">
                <img class="close close-black" src="assets/images/close-black-icon.png" width="25" onmousedown="closePopUp()">
                <h3>{{ $comps[19]['body'] }}</h3>
            </div>
            <div class="map-content">
                <p>{{ $comps[20]['body'] }}</p>
            </div>
        </div>
    </div>

    <div class="map-popup" id="center-pp">
        <div class="map-form">
            <div class="map-heading">
                <img class="close close-black" src="assets/images/close-black-icon.png" width="25" onmousedown="closePopUp()">
                <h3>{{ $comps[21]['body'] }}</h3>
            </div>
            <div class="map-content">
                <p>{{ $comps[22]['body'] }}</p>
            </div>
        </div>
    </div>

    <div class="map-popup" id="east-pp">
        <div class="map-form">
            <div class="map-heading">
                <img class="close close-black" src="assets/images/close-black-icon.png" width="25" onmousedown="closePopUp()">
                <h3>{{ $comps[23]['body'] }}</h3>
            </div>
            <div class="map-content">
                <p>{{ $comps[24]['body'] }}</p>
            </div>
        </div>
    </div>

    <div class="map-popup" id="west-pp">
        <div class="map-form">
            <div class="map-heading">
                <img class="close close-black" src="assets/images/close-black-icon.png" width="25" onmousedown="closePopUp()">
                <h3>{{ $comps[25]['body'] }}</h3>
            </div>
            <div class="map-content">
                <p>{{ $comps[26]['body'] }}</p>
            </div>
        </div>
    </div>




    <section class="business-card">
        <div class="card-group container" id="top-cards">
            <div class="bs card" id="oil" onmousedown="viewOil()">
                <div class="row">
                    <img src="/assets/images/oil-icon.png" alt="" width="30%">
                </div>
                <div class="text-center" id="oil-text">
                    <h5>{{ $comps[27]['body'] }}</h5>
                </div>
            </div>
            <div class="bs card" id="oil-white" onmousedown="closeOil()">
                <div class="row">
                    <img src="/assets/images/oil-blue-icon.png" alt="" width="30%">
                </div>
                <div class="text-center" id="oil-white-text">
                    <h5>{{ $comps[27]['body'] }}</h5>
                </div>
            </div>

            <div class="bs card" id="mining" onmousedown="viewMining()">
                <div class="row">
                    <img src="/assets/images/mining-icon.png" alt="" width="30%">
                </div>
                <div class="text-center" id="mining-text">
                    <h5>{{ $comps[29]['body'] }}</h5>
                </div>
            </div>
            <div class="bs card" id="mining-white" onmousedown="closeMining()">
                <div class="row">
                    <img src="/assets/images/mining-blue-icon.png" alt="" width="30%">
                </div>
                <div class="text-center" id="mining-white-text">
                    <h5>{{ $comps[29]['body'] }}</h5>
                </div>
            </div>

            <div class="bs card" id="finance" onmousedown="viewFinance()">
                <div class="row">
                    <img src="/assets/images/finance-icon.png" alt="" width="30%">
                </div>
                <div class="text-center" id="finance-text">
                    <h5>{{ $comps[31]['body'] }}</h5>
                </div>
            </div>
            <div class="bs card" id="finance-white" onmousedown="closeFinance()">
                <div class="row">
                    <img src="/assets/images/finance-blue-icon.png" alt="" width="30%">
                </div>
                <div class="text-center" id="finance-white-text">
                    <h5>{{ $comps[31]['body'] }}</h5>
                </div>
            </div>
        </div>
        <div class="card-group container" id="bottom-cards">
            <div class="bs card" id="infra" onmousedown="viewInfra()">
                <div class="row">
                    <img src="/assets/images/infra-icon.png" alt="" width="30%">
                </div>
                <div class="text-center" id="infra-text">
                    <h5>{{ $comps[33]['body'] }}</h5>
                </div>
            </div>
            <div class="bs card" id="infra-white" onmousedown="closeInfra()">
                <div class="row">
                    <img src="/assets/images/infra-blue-icon.png" alt="" width="30%">
                </div>
                <div class="text-center" id="infra-white-text">
                    <h5>{{ $comps[33]['body'] }}</h5>
                </div>
            </div>

            <div class="bs card" id="tech" onmousedown="viewTech()">
                <div class="row">
                    <img src="/assets/images/tech-icon.png" alt="" width="30%">
                </div>
                <div class="text-center" id="tech-text">
                    <h5>{{ $comps[35]['body'] }}</h5>
                </div>
            </div>
            <div class="bs card" id="tech-white" onmousedown="closeTech()">
                <div class="row">
                    <img src="/assets/images/tech-blue-icon.png" alt="" width="30%">
                </div>
                <div class="text-center" id="tech-white-text">
                    <h5>{{ $comps[35]['body'] }}</h5>
                </div>
            </div>

            <div class="bs card" id="agri" onmousedown="viewAgri()">
                <div class="row">
                    <img src="/assets/images/agri-icon.png" alt="" width="30%">
                </div>
                <div class="text-center" id="agri-text">
                    <h5>{{ $comps[37]['body'] }}</h5>
                </div>
            </div>
            <div class="bs card" id="agri-white" onmousedown="closeAgri()">
                <div class="row">
                    <img src="/assets/images/agri-blue-icon.png" alt="" width="30%">
                </div>
                <div class="text-center" id="agri-white-text">
                    <h5>{{ $comps[37]['body'] }}</h5>
                </div>
            </div>
        </div>

        <div class="business-open">
            <div class="container" id="oil-card">
                <div class="open-card" id="oil-open-card">
                    <div class="card-text">
                        <h3><b>{{ $comps[27]['body'] }}</b></h3>
                        <p>{{ $comps[28]['body'] }}</p>
                    </div>
                </div>
            </div>
            <div class="container" id="mining-card">
                <div class="open-card" id="mining-open-card">
                    <div class="card-text">
                        <h3><b>{{ $comps[29]['body'] }}</b></h3>
                        <p>{{ $comps[30]['body'] }}</p>
                    </div>
                </div>
            </div>
            <div class="container" id="finance-card">
                <div class="open-card" id="finance-open-card">
                    <div class="card-text">
                        <h3><b>{{ $comps[31]['body'] }}</b></h3>
                        <p>{{ $comps[32]['body'] }}</p>
                    </div>
                </div>
            </div>
            <div class="container" id="infra-card">
                <div class="open-card" id="infra-open-card">
                    <div class="card-text">
                        <h3><b>{{ $comps[33]['body'] }}</b></h3>
                        <p>{{ $comps[34]['body'] }}</p>
                    </div>
                </div>
            </div>
            <div class="container" id="tech-card">
                <div class="open-card" id="tech-open-card">
                    <div class="card-text">
                        <h3><b>{{ $comps[35]['body'] }}</b></h3>
                        <p>{{ $comps[36]['body'] }}</p>
                    </div>
                </div>
            </div>
            <div class="container" id="agri-card">
                <div class="open-card" id="agri-open-card">
                    <div class="card-text">
                        <h3><b>{{ $comps[37]['body'] }}</b></h3>
                        <p>{{ $comps[38]['body'] }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
