
@extends('layouts.base')

@section('swiper')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection

@section('title')
    Gallery & Events
@endsection

@section('content')
    <div class="gallery pad-bot-1">
        <div class="container mt-1">
            <h1 class="head">Gallery & Events</h1>
            <div class="flex-3 flex-col-mob">
                <div class="gallery-left">
                    @forelse ($gallery as $data)
                        <div class="gallery-box flex-3">
                            <div class="gallery-box-left mySwiper">
                                <div class="swiper-wrapper">
                                    @forelse ( $data->galleryasset as $image )
                                        <img src="{{ $image->asset }}" class="swiper-slide" alt="">  
                                    @empty
                                        <img src="{{ asset('images/nurses6.webp') }}" alt="">
                                    @endforelse
                                </div>
                            </div>
                            <div class="gallery-box-right">
                                <h3> {{$data->title}} </h3>
                                <p>
                                    {{ \Illuminate\Support\Str::limit($data->body, 150, '...') }}
                                </p>
                                <div class="flex-0 gal-btn">
                                    <a href="{{ route('galleryView', ['id' => $data->id]) }}" class="btn-und">view event</a>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="empty left">
                            <span class="empty-p">Stay Tuned for our Events & Gallery 😎😎</span>
                        </div>
                    @endforelse
                </div>

                <div class="gallery-right">
                    <div class="donate-head mb-01">
                        <h2>Blog & Articles</h2>
                    </div>
                    <div class="home-article">
                        <div class="home-article-img">
                            <img src="{{ $article->image }}" alt="">
                        </div>
                        <div class="home-article-body">
                            <h2> {{$article->title}} </h2>
                            <p>{{ \Illuminate\Support\Str::limit($article->body, 90, '...') }}</p>
                            <a href="{{ route('blogView', ['id' => $article->id]) }}" class="btn btn-blue block">Read</a>
                        </div>
                    </div>
                </div>
            </div>
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

