@extends('layouts.app')
@section('content')

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

    <section class="membership">
        <div class="join">
            <div class="join-1"><div class="circle-1"></div><p>Access to a diverse business network across a broad range of industry sectors</p></div>
            <div class="join-2"><div class="circle-2"></div><p>Lead and drive Business Network Groups</p></div>
            <div class="join-3"><div class="circle-3"></div><p>Host and sponsor events with Chamber members</p></div>
            <div class="join-4"><div class="circle-4"></div><p>Opportunity for referrals to provide professional services on commercial basis</p></div>
            <div class="join-5"><div class="circle-5"></div><p>Access to regular interactive networking events with the international business communities</p></div>

        </div>
        <div class="application">
            <div class="container">
                <h3 class="text-center pt-5">Membership Application</h3>
                <div class="row pt-5 pb-5">
                    <div class="col-md-3">
                        <div class="card tarif">
                            <div class="had"><div class="text-center"><img src="/assets/images/i_1.png" alt=""></div></div>
                            <div class="card-body">
                                <h5 class="card-title pt-5 text-center" id="cardTitle5">Individual</h5>
                                <h6 class="card-title text-center">£250</h6>
                                <a href="#" class="btn btn-primary" id="individual" onclick = "showModal(individual)" >choose</a>
                                <p class="card-text text-center p-1">Applicable for citizens of UK or Kazakhstan who are interested in developing business, educational or professional ties with UK or Kazakhstan and who are not representatives of a Corporate or Associate member. Individual members can attend and vote at general meeting of the Chamber. Individual members are eligible for election to the Committee.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card tarif">
                            <div class="had"><div class="text-center"><img src="/assets/images/i_2.png" alt=""></div></div>
                            <div class="card-body">
                                <h5 class="card-title pt-5 text-center">Associate</h5>
                                <h6 class="card-title text-center">£400</h6>
                                <a href="#" class="btn btn-primary" id="associate" onclick = "showModal(associate)">choose</a>
                                <p class="card-text text-center p-1">Available for trade and business associations, SMEs, and universities, colleges interested in exploring, entering or expanding in the UK-Kazakhstan market. Also applicable to companies who do not qualify for full corporate membership. Associate members are not eligible to vote at general meeting of the Chamber.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card tarif">
                            <div class="had"><div class="text-center"><img src="/assets/images/i_3.png" alt=""></div></div>
                            <div class="card-body">
                                <h5 class="card-title pt-5 text-center">Small Corporate</h5>
                                <h6 class="card-title text-center">£600</h6>
                                <a href="#" class="btn btn-primary" id="smallCorp" onclick = "showModal(smallCorp)">choose</a>
                                <p class="card-text text-center p-1">Small Corporate membership is available to any potential member which (a) meets the criteria for Large Corporate and (b) has an annual turnover in the Republic of Kazakhstan of less than £2,500,000.

                                    Small Corporate members have weighted voting rights (2 votes on each agenda issue) on a poll of members of the British Chamber.</p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card tarif">
                            <div class="had"><div class="text-center"><img src="/assets/images/i_4.png" alt=""></div></div>
                            <div class="card-body">
                                <h5 class="card-title pt-5 text-center">Large Corporate</h5>
                                <h6 class="card-title text-center">£1000</h6>
                                <a href="#" class="btn btn-primary" id="largeCorp" onclick = "showModal(largeCorp)">choose</a>

                                <p class="card-text text-center p-1">With supporting text below as a natural lead-in to additional Any company incorporated, or whose shares are directly listed on a stock exchange in, the United Kingdom;
                                    Any company registered in the Republic of Kazakhstan which is subsidiary or joint venture of a company incorporated in the United Kingdom;
                                    Any company incorporated, or whose shares are directly listed on a stock exchange in, the United Kingdom;</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="app-popup" id="apps">
        <div class="container">
            <form class="form5" id="form5" name="form5">
                <div class="form-heading">
                    <img class="close" src="assets/images/close-icon.png" width="20" onmousedown="closePopUp1()">
                    <h1>Membership Application</h1>
                    <p class="pt-2" id="formResult"></p>
                    <input type="text" name="type" id="type" value="" style="display: none;">
                </div>
                <div class="mb-1 form-input justify-content-center row">
                    <div class="col-md-5"><input type="name" class="form-control" id="name" name="company_name" placeholder="Company Name"></div>
                    <div class="col-md-5"><input type="name" class="form-control" id="bin" name="company_bin" placeholder="Company BIN"></div>
                </div>
                <div class="mb-1 form-input justify-content-center row">
                    <div class="col-md-5"><input type="name" class="form-control" id="country_inc" name="country_incorporation" placeholder="Country of incorporation"></div>
                    <div class="col-md-5"><input type="name" class="form-control" id="address" name="address" placeholder="Address"></div>
                </div>
                <div class="mb-1 form-input justify-content-center row">
                    <div class="col-md-5"><input type="name" class="form-control" id="city" name="city"  placeholder="Town / City"></div>
                    <div class="col-md-5"><input type="name" class="form-control" id="code" name="postcode" placeholder="Post code"></div>
                </div>
                <div class="mb-1 form-input justify-content-center row">
                    <div class="col-md-5"><input type="name" class="form-control" id="country" name="country"placeholder="Country"></div>
                    <div class="col-md-5"><input type="name" class="form-control" id="phone" name="company_phone"  placeholder="Phone number"></div>
                </div>
                <div class="mb-1 form-input justify-content-center row">
                    <div class="col-md-5"><input type="name" class="form-control" name="message" id="brief"  placeholder="Brief description of your company"></div>
                    <div class="col-md-5"><div class="input-group">
                            <select class="custom-select" name="employes_count" id="inputGroupSelect04">
                                <option selected value=''>No. of employees</option>
                                <option value="1-10">1-10</option>
                                <option value="10-100">10-100</option>
                                <option value="100-1 000">100-1 000</option>
                                <option value="1000-10 000">1000-10 000</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="text-center"><h1>Primary Contact <span>*</span></h1></div>
                <div class="mb-1 form-input justify-content-center row">
                    <div class="col-md-5"><input type="text" class="form-control" id="name" name="name"  placeholder="Name" required></div>
                    <div class="col-md-5"><input type="text" class="form-control" id="job" name="job_title"  placeholder="Job Title" ></div>
                </div>
                <div class="mb-1 form-input justify-content-center row">
                    <div class="col-md-5"><input type="text" class="form-control" id="tel"  name="phone" placeholder="Mobile phone" required></div>
                    <div class="col-md-5"><input type="text" class="form-control" id="email" name="email"  placeholder="E-mail" required></div> 
                </div>
                <div class="mb-1 pl-5 form-check form-input" id="memcheck">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                    <label class="form-check-label"  for="exampleCheck1">I agree to the processing of personal data *</label>
                </div>
                <button class="btn btn-dark" id="submit-btn"  type="submit">Submit</button>
            </form>
        </div>
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





    <section class="members" style="background: #F6F6F6;">
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
    </section>
@endsection
