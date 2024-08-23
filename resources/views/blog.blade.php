
@extends('layouts.base')

@section('title')
    Blog
@endsection

@section('content')
    <div class="blog pad-bot-1">
        <div class="container mt-1">
            <h1 class="head">Articles & Blog</h1>
            <div class="blog-con">
                @forelse ($articles as $article)
                    <div class="blog-box flex-3">
                        <div class="left">
                            <img src="{{ $article->image }}" alt="">
                        </div>
                        <div class="blog-body right"> 
                            <h3> {{ \Illuminate\Support\Str::limit($article->title, 31, '...') }} </h3>
                            <p>
                                {{ \Illuminate\Support\Str::limit($article->body, 90, '...') }}
                            </p>
                            <a href="{{ route('blogView', ['id' => $article->id]) }}" class="btn-und">Read Article</a>
                        </div>
                    </div>
                @empty
                    <div class="empty left">
                        <span class="empty-p">Stay Tuned for Our Articles 😎😎</span>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection

