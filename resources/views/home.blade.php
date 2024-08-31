
@extends('layouts.base')

@section('swiper')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection

@section('title')
    Home
@endsection

@section('content')

    <div class="">
        <div class="hero-section mySwiper">
            <div class="swiper-wrapper">
                
                <div class="hero-slide swiper-slide container" style="background-image: url('{{ asset('images/home3.png') }}')">
                    <div class="overlay"></div>
                    <div class="content">
                        <h1>Empower Through Education</h1>
                        <p>
                            We believe education transforms lives. Our scholarships give underprivileged students the chance to pursue their dreams and achieve academic excellence.
                        </p>
                    </div>
                </div>
    
                <div class="hero-slide swiper-slide container" style="background-image: url('{{ asset('images/home6.png') }}')">
                    <div class="overlay"></div>
                    <div class="content">
                        <h1>Your Future Starts Here</h1>
                        <p>  
                            Facing financial challenges? Apply now for a full scholarship in nursing and start your journey to a brighter future.
                        </p>
                    </div>
                </div>
    
                <div class="hero-slide swiper-slide container" style="background-image: url('{{ asset('images/nurse1c.png') }}')">
                    <div class="overlay"></div>
                    <div class="content">
                        <h1>Join Our Mission</h1>
                        <p> 
                             Your support—whether by donating, volunteering, or spreading the word—is vital. Join a community that believes in the power of giving and education.
                        </p>
                    </div>
                </div>
    
            </div>
            
                {{-- <div class="swiper-button-next"></div> --}}
                {{-- <div class="swiper-button-prev"></div> --}}
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>

    <div class="section home-about container">
        <h1 class="heading">Equal Education Access For All</h1>
        <div class="flex mt-2 flex-col-mob">
            
            <div class="left">
                <img src="{{ asset('images/homeimg3.jpg') }}" alt="">
            </div>

            <div class="right">
                <p>
                    Equal Education Access for All (EEAFA) is a <span class="col-blue">non-profit organization</span> committed to creating educational opportunities for <span class="col-yellow">underprivileged individuals</span>. We focus on providing full scholarships to academically gifted students who aspire to pursue <span class="col-blue">a career in nursing</span>. Our mission is to empower individuals from <span class="col-yellow">disadvantaged backgrounds</span> to achieve their academic and professional goals, free from financial barriers. 
                </p>
                <div>
                    <a href="#" class="btn btn-blue mt-1">More About Us</a>
                </div>
            </div>
        </div>
    </div>

    <div class="section bcc-blue container">
        <div class="flex dyk flex-col-mob-rev">

            <div class="left">
                <div class="top">
                    <h1>Did You Know?</h1>
                    <p>
                        Many talented individuals from underprivileged backgrounds aspire to become nurses but are held back by financial constraints. Scholarships provide these students with the opportunity to pursue their dreams and make a difference in healthcare.
                    </p>
                    <div>
                        <a href="#" class="btn btn-yellow mt-1">Partner With Us</a>
                    </div>
                </div>
            </div>

            <div class="right">
                <img src="{{ asset('images/nurse2.jpg') }}" alt="">
            </div>
        </div>
    </div>

    <div class="section container articles">
        
        <div class="top">
            <h1 class="blue">Articles & Blog</h1>
        </div>

        <div class="home-article-con">
            @forelse ($articles as $article )
                <div class="home-article">
                    <div class="home-article-img">
                        <img src="{{ $article->image }}" alt="">
                    </div>
                    <div class="home-article-body">
                        <h2> {{ \Illuminate\Support\Str::limit($article->title, 20, '...') }} </h2>
                        <p>
                            {{ \Illuminate\Support\Str::limit(strip_tags($article->body), 120, '...') }}
                        </p>
                        <a href="{{ route('blogView', ['id' => $article->id]) }}" class="btn btn-blue block">Read</a>
                    </div>
                </div>
            @empty
                <div class="empty left">
                    <span class="empty-p">Our Articles will be available soon 😎😎</span>
                </div>
            @endforelse

        </div>

    </div>
    
@endsection

@section('swiperscript')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            loop:true,
            autoplay: {
            delay: 2500,
            disableOnInteraction: false,
            },
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            },
            navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
            },
        });
    </script>
@endsection

