<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>British Chamber Of Commerce In Kazakhstan</title>
	<link rel="icon" type="image/x-icon" href="/assets/images/logo_fav.png">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css">
    <link rel="stylesheet" href="/assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

    @include('elements.header')
	
	    <div class="msg-popup" id="msg">
        <form class="form2" id="form2" name="form2">
            <div class="form-heading">
                <img class="close" src="assets/images/close-icon.png" width="25" onclick="closePopUp()">
                <h1>SEND US A QUICK MESSAGE</h1>
            </div>
            <div class="mb-3 form-input">
                <input type="text" class="form-field form-control "  name="fio" placeholder="Full name">
            </div>
            <div class="mb-3 form-input">
                <input type="text" class="form-field form-control "  name="email" placeholder="E-mail">
            </div>
            <div class="mb-3 form-input">
                <input type="text" class="form-field form-control" name="phone" placeholder="Phone">
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
	
    @yield('content')
    @include('elements.footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/assets/js/main.js"></script>
<script src="plugins/jquery-maskedinput/jquery.maskedinput.js"></script>
<script src="/assets/js/swiper-bundle.min.js"></script>
<script src="/assets/js/script.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/72acc62cd5.js" crossorigin="anonymous"></script>
@stack('script')
<script>
    //members
    $(document).ready(function () {
        $(".customer-logos").slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            arrows: false,
            dots: false,
            pauseOnHover: false,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                },
                {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });
    });

    //news
    const next=document.querySelector('#next')
    const prev=document.querySelector('#prev')

    function handleScrollNext (direction) {
        const cards = document.querySelector('.card-content')
        cards.scrollLeft=cards.scrollLeft += window.innerWidth / 2 > 600 ? window.innerWidth /2 : window.innerWidth -100
    }

    function handleScrollPrev (direction) {
        const cards = document.querySelector('.card-content')
        cards.scrollLeft=cards.scrollLeft -= window.innerWidth / 2 > 600 ? window.innerWidth /2 : window.innerWidth -100
    }

    next.addEventListener('click', handleScrollNext)
    prev.addEventListener('click', handleScrollPrev)


    //events
    var swiper = new Swiper(".slide-content", {
        slidesPerView: 3,
        spaceBetween: 25,
        loop: true,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints:{
            0: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
        },
    });
</script>
</body>
</html>
