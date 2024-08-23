@extends('layouts.base')

@section('swiper')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection

@section('title')
    Admin - Manage Events & Gallery
@endsection

@section('admin')
    <h1 class="head">All Events & Gallery</h1>
    @if (session('status'))
        <div class="status stat-2 success">
            <p>{{ session('status') }}</p>
        </div>                                                                
    @endif
    <div class="box borr">
        @forelse ($gallery as $data)
            <div class="adm-app-box flex flex-col-mob">
                <div class="adm-blog-left mySwiper">
                    <div class="swiper-wrapper">
                        @forelse ( $data->galleryasset as $image )
                            <img src="{{ $image->asset }}" class="swiper-slide" alt="">  
                        @empty
                            <img src="{{ asset('images/nurses4.webp') }}" alt="">
                        @endforelse
                    </div>
                </div>
                                
                <div class="adm-blog-right flex-5">
                    <h2> {{$data->title}} </h2>
                    <p>
                        {{ \Illuminate\Support\Str::limit($data->body, 150, '...') }}
                    </p>
                    <div class="flex">
                        <div>
                            <a href="{{route('admBlogEdit', ['id' => $data->id])}}" class="btn btn-blue">Edit Event</a>
                        </div>
                        <form action="{{route('admGalleryDelete', ['id' => $data->id])}}" method="post">
                            @csrf
                            <button class="btn btn-red">Delete</button>
                        </form>
                    </div>
                </div>
            </div> 
        @empty
            <div class="empty">
                <span class="empty-p">You have created no Blogs yet</span>
            </div>            
        @endforelse
        
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

