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

    <section class="main">
        <div class="sp-overlay"></div>
        <div class="sponsor">
            <div class="container">
                <div class="col-md-7 col-sm-12">
                    <h3>Become a Sponsor</h3>
                    <p class="sponsor-text pt-3">Contributing as a sponsor provides high level visibility and direct access to a business community and unique opportunities for brand exposure and effective business networking. <br><br>

                        The Chamber provides a unique opportunity for Sponsors to design your own event or a specifically tailored event to promote your services or launch your product in the market. If you are interested to become a Sponsor, please contact us.</p>
                </div>
            </div>
        </div>
        <div class="benefits">
            <div class="container">
                <div class="col-md-12">
                    <h3>Benefits</h3>
                    <div class="benefits-1 pt-4"><img src="/assets/images/str.png" alt="" width="3%"> Access to Chamber’s support in managing the sponsored event, sending out invitations & receiving RSVPs</div>
                    <div class="benefits-2 pt-4"><img src="/assets/images/str.png" alt="" width="3%"> Access to the participants list before the event</div>
                    <div class="benefits-3 pt-4"><img src="/assets/images/str.png" alt="" width="3%"> Exclusive invitations to VIP gatherings with British high-profile visitors, government officials, Ambassadors, VIP visitors</div>
                    <div class="benefits-4 pt-4"><img src="/assets/images/str.png" alt="" width="3%"> The opportunity to officially welcome invitees & deliver speech to audience</div>
                    <div class="benefits-5 pt-4"><img src="/assets/images/str.png" alt="" width="3%"> Presentation in panels and workshops</div>
                    <div class="benefits-6 pt-4"><img src="/assets/images/str.png" alt="" width="3%"> Special thank you mentioned in the welcome speech</div>
                    <div class="benefits-7 pt-4"><img src="/assets/images/str.png" alt="" width="3%"> High level branding & visible on the Chamber website along with a link to your website</div>
                    <div class="benefits-8 pt-4"><img src="/assets/images/str.png" alt="" width="3%"> Up to five delegate seats at the sponsored event</div>
                    <div class="benefits-9 pt-4"><img src="/assets/images/str.png" alt="" width="3%"> Your company name/logo displayed at the top among main sponsors in the newsletters and marketing materials</div>
                    <div class="benefits-10 pt-4"><img src="/assets/images/str.png" alt="" width="3%"> Company displays, banners & marketing materials within the venue</div>
                    <div class="benefits-11 pt-4"><img src="/assets/images/str.png" alt="" width="3%"> Marketing & media coverage (pre & post-event) through announcements, newsletters, social media & local print media</div>
                </div>

            </div>

        </div>

        <div class="forma" id="forEvent">
            <h3 class="text-center pb-5">Do you have any questions? Please contact us</h3>
            <form class="form3" id="form3" name="form3">
                <div class="form-heading">
                    <h3 class="p-3 text-white">SEND US A QUICK MESSAGE</h3>
                </div>


                <div class="mb-3 form-input">
                    <input type="text" class="form-field form-control "  name="fio" id="fio" placeholder="Full name">
                </div>
                <div class="mb-3 form-input">
                    <input type="text" class="form-field form-control "  name="email" id="email" placeholder="E-mail">
                </div>
                <div class="mb-3 form-input">
                    <input type="text" class="form-field form-control" name="phone" id="phone" placeholder="Phone">
                </div>
                <div class="mb-3 form-input">
                    <textarea type="text" class=" form-field form-control" id="message" placeholder="Message" name="message"></textarea>
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
                    <img class="success" src="assets/images/success-icon.png" width="80">
                </div>
                <div class="success-content">
                    <h2>Your message has been sent<br>
                        Our manager will contact you soon</h2>
                </div>
            </div>
        </div>

    </section>
@endsection
