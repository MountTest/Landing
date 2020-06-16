<section class="bg-header " style="height: 110%">
{{--    <div class="container">--}}
{{--        <div class="position-relative" style="left:-10%; width:120%;">--}}
            <header>
                <div class="row">
                    <div class="col-12 col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light px-sm-0 ">
                            <a class="navbar-brand px-lg-5 " href="#" >
                                <img class="" src="{{asset('img/logo.svg')}}" alt="logo">
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                    <li class="nav-item active mx-5">
                                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item mx-5">
                                        <a class="nav-link" href="#about-us">About Us</a>
                                    </li>
                                    <li class="nav-item mx-5">
                                        <a class="nav-link" href="#how-it-works">How it works</a>
                                    </li>
                                    <li class="nav-item mx-5">
                                        <a class="nav-link" href="#categories">Categories</a>
                                    </li>
                                    <li class="nav-item mx-5">
                                        <a class="nav-link" href="#testimony">Testimony</a>
                                    </li>
                                </ul>
                                <a href="" class="text-decoration-none text-uppercase text-dark px-5 py-2 mx-3 button-sign-up " data-aos="bounce-top">Sing Up
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
{{--        </div>--}}
    <div class="container-fluid pl-5">
        <div class="row size-for-bg-header" style="">
            <div class="col-12 col-lg-6">
                <p class="text-header" data-aos="focus-in-expand-fwd" data-aos-offset="100">Are you looking for woodden <br> furniture for your place?</p>
                <h1 class="header-title " data-aos="focus-in-expand-fwd">This is the <br> Right Place</h1>
                <div class="py-5 roll-in-top">
                    <a href="#" class="text-decoration-none  text-white px-5 py-2 explore-furniture  " data-aos="fade-up"
                       data-aos-anchor-placement="top-bottom"
                       style="background: #DAA520;border-radius: 4px;">Explore Furniture
                    </a>
                </div>
            </div>
        </div>
    </div>
{{--    </div>--}}
</section>
@push('scripts')
    <script type="text/javascript">
        window.addEventListener("scroll",function () {
            let header = document.querySelector("header");
            header.classList.toggle("sticky",window.scrollY > 0);
        })
    </script>
    <script>
        $(document).ready(function () {
            $('a[href^="#"]').click(function () {
                let target = $(this).attr('href');
                $('html,body').animate({
                    scrollTop: $(target).offset().top
                },400);
            });
        });
    </script>
@endpush

{{--<div class="wrapper">--}}
{{--    <header>--}}

{{--        <nav>--}}

{{--            <div class="menu-icon">--}}
{{--                <i class="fa fa-bars fa-2x"></i>--}}
{{--            </div>--}}

{{--            <div class="logo">--}}
{{--                LOGO--}}
{{--            </div>--}}

{{--            <div class="menu">--}}
{{--                <ul>--}}
{{--                    <li><a href="#">Home</a></li>--}}
{{--                    <li><a href="#">About</a></li>--}}
{{--                    <li><a href="#">Blog</a></li>--}}
{{--                    <li><a href="#">Contact</a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </nav>--}}

{{--    </header>--}}


{{--</div>--}}
@push('scripts')
<script type="text/javascript">

    // Menu-toggle button

    $(document).ready(function() {
        $(".menu-icon").on("click", function() {
            $("nav ul").toggleClass("showing");
        });
    });

    // Scrolling Effect

    $(window).on("scroll", function() {
        if($(window).scrollTop()) {
            $('nav').addClass('black');
        }

        else {
            $('nav').removeClass('black');
        }
    })


</script>
@endpush
