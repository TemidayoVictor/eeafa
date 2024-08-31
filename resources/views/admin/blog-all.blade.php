@extends('layouts.base')

@section('title')
    Admin - Manage Blogs & Articles
@endsection

@section('admin')
    <h1 class="head">All Blogs & Articles</h1>
    
    @if (session('status'))
        <div class="status stat-2 success">
            <p>{{ session('status') }}</p>
        </div>                                                                
    @endif

    <div class="box borr">
        @forelse ($blogs as $blog)
            <div class="adm-app-box flex flex-col-mob">
                <div class="adm-blog-left">
                    <img src="{{ $blog->image }}" alt="">
                </div>

                <div class="adm-blog-right flex-5">
                    <h2>{{ $blog->title }}</h2>
                    <p>
                        {{ \Illuminate\Support\Str::limit(strip_tags($blog->body), 150, '...') }}
                    </p>
                    <div class="flex">
                        <div>
                            <a href=" {{route('admblogEdit', ['id' => $blog->id])}} " class="btn btn-blue">Edit Blog</a>
                        </div>
                        <form action="{{route('admBlogDelete', ['id' => $blog->id])}}" method="post">
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

