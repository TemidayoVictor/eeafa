
@extends('layouts.base')

@section('title')
    Blog & Articles
@endsection

@section('content')
    <div class="gallery pad-bot-1">
        <div class="container mt-1">
            <div class="flex-3 flex-col-mob">
                <div class="gallery-left view flex-3 flex-col-mob">
                    <div class="blog-view-img">
                        <img src="{{ $data->image }}" alt="">
                    </div>
                    <div class="blog-view-con">
                        <h1 class="head"> {{ $data->title }} </h1>
                        <p>
                            {!! (str_replace( '<p>&nbsp;</p>', '', $data->body)) !!}
                        </p>
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

