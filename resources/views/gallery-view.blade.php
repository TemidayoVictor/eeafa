
@extends('layouts.base')

@section('title')
    Gallery & Events
@endsection

@section('content')
    <div class="gallery pad-bot-1">
        <div class="container mt-1">
            <div class="flex-3 flex-col-mob">
                <div class="gallery-left view">
                    <div>
                        <h1 class="head"> {{$data->title}} </h1>
                        <p>
                            {!! (str_replace( '<p>&nbsp;</p>', '', $data->body)) !!}
                        </p>
                    </div>
                    <div>
                        <h1 class="head">Gallery</h1>
                        <div class="gall-grid">
                            @forelse ($data->galleryasset as $image)
                                <div>
                                    <img src="{{ $image->asset }}" alt="">
                                </div>    
                            @empty
                                <div class="empty left">
                                    <span class="empty-p">Stay Tuned for Images for this event 😎😎</span>
                                </div>
                            @endforelse
                            

                        </div>
                    </div>
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
                            <p>{{ \Illuminate\Support\Str::limit(strip_tags($article->body), 90, '...') }}</p>
                            <a href="{{ route('blogView', ['id' => $article->id]) }}" class="btn btn-blue block">Read</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

