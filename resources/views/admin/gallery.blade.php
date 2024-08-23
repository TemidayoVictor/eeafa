@extends('layouts.base')

@section('title')
    Admin - Manage Events & Gallery
@endsection

@section('admin')
    @if ($type == 'create')
        <h1 class="head">Add New Event</h1>
        <a href="{{ route('admGalleryAll') }}" class="btn btn-blue mb-1 btn-block">View all Events</a>
        <div class="box borr">
            <form action="{{route('admGallery')}}" class="blog-form" enctype="multipart/form-data" method="post">
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
                    <label for="">Event Title</label>
                    <input type="text" class="input" name="title" required>
                </div>

                <div class="blog-input">
                    <label for="">Event Description</label>
                    <textarea name="body" id="" cols="30" rows="10" required></textarea>
                </div>
                
                <div class="blog-input">
                    <label for="">Add Event Gallery</label>
                    <input type="file" accept="image/*" name="images[]" value="{{ old('images') }}" multiple>
                </div>

                <button class="btn btn-blue btn-block">Create Event</button>

            </form>
        </div>
    @else
        <h1 class="head">Edit {{$data->title}} </h1>
        <a href="{{ route('admGalleryAll') }}" class="btn btn-blue mb-1 btn-block">View all Events</a>
        <div class="box borr">
            <form action="{{route('admBlogEdit', ['id' => $data->id])}}" class="blog-form" enctype="multipart/form-data" method="post">
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
                    <label for="">Event Title</label>
                    <input type="text" class="input" name="title" value="{{ $data->title }}" required>
                </div>

                <div class="blog-input">
                    <label for="">Event Description</label>
                    <textarea name="body" id="" cols="30" rows="10" required>
                        {{ $data->body }}
                    </textarea>
                </div>
                
                <div class="blog-input">
                    <label for="">Add Event Gallery</label>
                    <input type="file" accept="image/*" name="images[]" value="{{ old('images') }}" multiple>
                </div>
                
                <button class="btn btn-blue btn-block">Edit Event</button>

            </form>
            <div class="gall-grid g2">
                @forelse ($data->galleryasset as $asset)
                <div>
                    <img src="{{ $asset->asset }}" alt="">
                    <form action="{{route('admGalleryAssetDelete', ['id' => $asset->id])}}" method="post" class="w-100">
                        @csrf
                        <button class="btn btn-red w-100">Delete</button>
                    </form>
                </div>
                @empty
                    <div class="empty">
                        <span class="empty-p p2">There are no images for this event</span>
                    </div>  
                @endforelse
            </div>
        </div>
        
    @endif
@endsection

