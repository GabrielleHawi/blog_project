<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gabby_Project</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
       

        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gabby_Project</title>
  
    <link rel="stylesheet" type="text/css" href="{{ asset('fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/tooplate-vertex.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans&display=swap" rel="stylesheet">


</head>
<body>
    <!-- Page Loader -->
    <div id="loader-wrapper">
        <div id="loader"></div>

        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>

    </div>

    <!-- Site logo -->
    <h1 class="tm-brand">
        <i class="fas fa-mountain fa-2x tm-brand-icon"></i>
        <span class="tm-brand-text">Top</span>        
    </h1>

    <!-- Nav -->
    <nav class="tm-nav">
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <ul id="tm-main-nav">
            <li class="nav-item">                                
                <a href="#intro" class="nav-link current">
                    Latest activity
                </a>
            </li>
            <li class="nav-item">
                <a href="#services" class="nav-link">
                    profile
                </a>
            </li>
            <li class="nav-item">
                <a href="#about" class="nav-link">
                    About
                </a>
            </li>
        </ul>
    </nav>
  
</div>

    <!-- Content -->
    <main> 
        
        <div>
        
        </div>
        <div id="intro" class="tm-section">
         
            <!-- Intro left -->
            <div class="tm-section-col tm-content">
                            @if(Session::has('message'))
                            <span style="background-color: lightgreen;">
                                {{Session::get('message') }}
                            </span>@endif

                            <br>
                            <br>
                            {{--blog function starts--}}
                            @if(\App\Models\Posts::count('id') > 0)
                            
                            @foreach(\App\Models\Posts::get() as $post)
                            <div class="tm-media">
                            
                                <img src="img/download.png" alt="Intro image">
                                <div class="tm-media-body">
                                    <h2><a href="#" class="tm-text-primary">{{ $post->title }}</a></h2>
                                    <p class="tm-mb-20 tm-text-small">
                                        {{ $post->textarea }}
                                    </p>
                                    <span class="tm-text-secondary tm-media-span tm-text-small">
                                       {{ $post->created_at}}
                                    </span>
                                    <div class="tm-text-left">
                                        <form method="POST" action="{{ route('delete', $post->id) }}">
                                            {{ csrf_field() }}
                                            <button type="submit" class="tm-btn">Delete</button>
                                        </form>
                                    </div>
                                    <hr class="tm-hr tm-mr">
                                </div>
                            </div>
                            @endforeach
                            @else
                            <h4 class="tm-text-primary"> No posts yet please add!!</h4>
                            @endif
                            {{--blog function ends--}} 
                            
                           
                <div class="tm-text-right">
                    <a href="#services" class="tm-btn tm-btn-next">Next page</a>
                </div>  
                
                <section class="basic-textarea">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Blog</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        {{-- <p>Please type your blog<code> textarea</code>.</p> --}}
                                        <form id="contact-form" action="{{ route('post_blog') }}" method="POST" class="tm-contact-form tm-mb-200">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <input type="text" name="title" class="form-control rounded-0" placeholder="Title" required />
                                            </div>
                                            <div class="form-group">
                                                <textarea rows="6" name="textarea" class="form-control rounded-0" placeholder="Text area" required=></textarea>
                                            </div>
                                            <div class="form-group tm-text-right">
                                                <button type="submit" class="tm-btn">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                 
                
            </div>
            
            <!-- Intro right -->
            <div class="tm-section-col tm-parallax" data-parallax="scroll" data-image-src="img/vertex-bg-01.jpg"></div>
        </div> <!-- #intro -->

        <div id="services" class="tm-section">
            <!-- Services left -->
            <div class="tm-section-col tm-content">
                
                <h2 class="tm-text-primary">Profile </h2>
              <hr class="tm-hr tm-ml tm-sm-mt-30">

                <div class="tm-text-right">
                    <p><a href="{{ route('activity') }}">
                        <button class="follow-button" >+ Follow</button>
                        </a>
                    </p>
                </div>                
                
                <div class="tm-row">
                    <div class="tm-col">
                        <div class="tm-text-center tm-my-50">
                            <i class="fas fa-street-view fa-3x"></i>
                            <p>
                                Posts   <b>&nbsp; &nbsp;{{ \App\Models\Posts::count('id') }}</b> 
                               </p>
                        </div>                        
                      
                    </div>
                    
                    <div class="tm-col">
                        <div class="tm-text-center tm-my-50">
                            <i class="fas fa-bullseye fa-3x"></i>
                            <p>
                                Followers   <b> &nbsp; &nbsp; {{ \App\Models\followers::count('count') }}</b>
                            </p>
                        </div>                        
                        
                    </div>
                </div>                
            </div>
            
            <!-- Services right -->
            <div class="tm-section-col tm-parallax" data-parallax="scroll" data-image-src="img/vertex-bg-02.jpg"></div>
        </div> <!-- #services -->


        <div id="about" class="tm-section">
            <!-- About left -->
            <div class="tm-section-col tm-content tm-content-small">
                <h2 class="tm-text-primary">About me</h2>
                <p>
                    I'm Maria Antoinett, a Gen Z obsessed with figuring out this whole adulting thing (spoiler alert: it's wild).
                     This blog is my space to navigate the world of health, wellness, and living your best life.                </p>
                <p>
                    Real talk about health: Forget fad diets and unrealistic expectations. We're talking about sustainable habits, mental health hacks, and finding what works for YOU.
                    Budget-friendly living: Adulting is expensive, but it doesn't have to break the bank. I'll share tips on healthy eating on a budget, DIY self-care, and finding joy in the simple things.
                    Sustainability for the win: Let's be honest, the planet needs our help. I'll share eco-friendly lifestyle hacks and tips for living a more conscious life.
                                    </p>
                <hr class="tm-hr tm-mb-50">                
                <p class="tm-mb-50">
                    A sprinkle of fun: Because life's too short to be serious all the time. Expect healthy recipes that actually taste good,workout routines that don't feel like torture, and a whole lot of laughter along the way.
                    Basically, we're here to ditch the pressure and build a life that feels good, mind, body, and soul. Join the fam and let's get healthy (and maybe a little messy) together!
                                    </p>
                {{-- <div class="tm-text-right tm-mb-130">
                    <a href="#contact" class="tm-btn tm-btn-next">Contact Us</a>
                </div>                 --}}
            </div>
            
            <!-- About right -->
            <div class="tm-section-col tm-parallax" data-parallax="scroll" data-image-src="img/vertex-bg-03.jpg"></div>
        </div> <!-- #about -->

    </main>

    <script src="{{ 'js/plugins.js'}}"></script>
    <script>
        $(window).on("load", function() {
            $('body').addClass('loaded');
        });

        $(function(){
            
            /*************** Navigation *****************/

            const tmMainNav = $("#tm-main-nav");

            tmMainNav.singlePageNav({
                filter: ':not(.external)'
            });

            $('.navbar-toggler').click(function(e) {
                e.stopPropagation();
                tmMainNav.toggleClass('show');
            });

            $("html").click(function(e) {
                $("#tm-main-nav").removeClass("show");
            });

            /****************** Smooth Scrolling *****************/

            $(".tm-btn-next").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;

                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){
                        // window.location.hash = hash;
                    });
                }
            });

            $('.tm-brand-icon').on('click', function(event) {
                $('html, body').animate({
                        scrollTop: $('#intro').offset().top
                    }, 800);
            });

            /****************** Gallery ******************/

            const galleryItems = document.querySelector(".tm-gallery").children;
            const itemsPerPage = 10;
            const totalPages = Math.ceil(galleryItems.length / itemsPerPage);
            const pageAttribute = 'data-page';

            function setPagination(currentPage) {
                for(let i = 1; i <= totalPages; i++) {
                    var $pager = '';
                    
                    if(currentPage == i) {
                        $pager = $('<a href="javascript:void(0);" class="active tm-paging-link" '+pageAttribute+'="'+i+'"></a>');
                    } else {
                        $pager = $('<a href="javascript:void(0);" class="tm-paging-link" '+pageAttribute+'="'+i+'"></a>');
                    }

                    $pager.html(i);

                    $pager.click(function(){ 
                        $('.tm-paging-link').removeClass("active");
                        $(this).addClass('active');
                        var page = $(this).eq(0).attr(pageAttribute);
                        showItems(page);
                    });

                    $pager.appendTo($('.tm-paging'));
                }
            }

            function showItems(currentPage) {
                for(let i = 0; i < galleryItems.length; i++) {
                    galleryItems[i].classList.remove("show");
                    galleryItems[i].classList.add("hide");

                    if(i >= (currentPage * itemsPerPage) - itemsPerPage && i < currentPage * itemsPerPage) {
                        galleryItems[i].classList.remove("hide");
                        galleryItems[i].classList.add("show");
                    }
                }
            }

            setPagination(1);
            showItems(1);

            /****************** Magnific Popup ***********/

            $('.tm-gallery').magnificPopup({
                delegate: 'a',
                type: 'image',
                gallery: {
                    enabled: true
                }
            });
        });
    </script>
</body>
</html>
        </div>
    </body>
</html>
