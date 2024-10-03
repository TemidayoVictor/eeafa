@extends('layouts.base')

@section('title')
    Admin - Applications
@endsection

@section('admin')
    <h1 class="head">List of Applications</h1>
    
    @if (session('status'))
        <div class="status stat-2 success">
            <p>{{ session('status') }}</p>
        </div>                                                                
    @endif
    
    <div class="box borr">
        @forelse ($applications as $key => $application)
            <div class="adm-app-box flex-3">
                <div class="adm-app-left">
                    <h1>{{$key + 1}}.</h1>
                </div>
                <div class="adm-app-right flex-5">
                    <h1> {{$application->first_name}} {{$application->last_name}} </h1>
                    <p>
                        {{ \Illuminate\Support\Str::limit(strip_tags($application->cover_letter), 200, '...') }}
                    </p>
                    <div class="flex">
                        <div>
                            <span><b>Status:</b></span>
                            <span> {{$application->status}} </span>
                        </div>
                        <div>
                            <a href="{{ route('adminApplicationView', ['id' => $application->id]) }}" class="btn btn-blue">view application</a>
                        </div>
                    </div>
                </div>
            </div>    
        @empty
            <div class="empty">
                <span class="empty-p">You have no Applications yet</span>
            </div>
        @endforelse

    </div>
@endsection

