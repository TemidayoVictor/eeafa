@extends('layouts.base')

@section('title')
    Admin - Manage Blog
@endsection

@section('admin')
    @if ($type == 'create')

        <h1 class="head">Add New Blog</h1>
        <a href="{{ route('admblogAll') }}" class="btn btn-blue mb-1 btn-block">View all Blogs</a>
        <div class="box borr">
            <form action="{{route('admblog')}}" class="blog-form" enctype="multipart/form-data" method="post">
                @csrf
                @foreach ($errors->all() as $message)
                    <div class="status stat-2 error">
                        <p>{{ $message }}</p>
                    </div>    
                @endforeach

                @if (session('status'))
                    <div class="status stat-2 success">
                        <p>{{ session('status') }}</p>
                    </div>                                                                
                @endif

                <div class="blog-input">
                    <label for="">Blog Image</label>
                    <input type="file" name="image" required accept="image/*">
                </div>

                <div class="blog-input">
                    <label for="">Blog Title</label>
                    <input type="text" class="input" name="title" required>
                </div>

                <div class="blog-input">
                    <label for="">Blog Body</label>
                    <textarea name="body" id="" cols="30" rows="10" required></textarea>
                </div>

                <button class="btn btn-blue btn-block">Create Blog</button>

            </form>
        </div>
        
    @else
        <h1 class="head">Edit {{$blog->title}} </h1>
        <a href="{{ route('admblogAll') }}" class="btn btn-blue mb-1 btn-block">View all Blogs</a>
        <div class="box borr">
            <form action="{{route('admblogEdit', ['id' => $blog->id])}}" class="blog-form" enctype="multipart/form-data" method="post">
                @csrf
                @foreach ($errors->all() as $message)
                    <div class="status stat-2 error">
                        <p>{{ $message }}</p>
                    </div>    
                @endforeach

                @if (session('status'))
                    <div class="status stat-2 success">
                        <p>{{ session('status') }}</p>
                    </div>                                                                
                @endif

                <div class="blog-input">
                    <label for="">Change Blog Image</label>
                    <input type="file" name="image" accept="image/*">
                    <img src=" {{$blog->image}} " alt="" class="w-50">
                </div>

                <div class="blog-input">
                    <label for="">Edit Blog Title</label>
                    <input type="text" class="input" name="title" value="{{$blog->title}}" required>
                </div>

                <div class="blog-input">
                    <label for="">Edit Blog Body</label>
                    <textarea name="body" id="" cols="30" rows="10" required>
                        {{ $blog->body }}
                    </textarea>
                </div>

                <button class="btn btn-blue btn-block">Edit Blog</button>

            </form>
        </div>
    
    @endif
@endsection

