@extends('layouts.base')

@section('title')
    Admin - Applications View
@endsection

@section('admin')
    <h1 class="head">Applicant's Detail</h1>
    <div class="box borr">
        <div class="adm-app-box">
            {{-- <div class="adm-app-left">
                <h1>1.</h1>
            </div> --}}
            <div class="adm-app-right view flex-5">
                <h1> {{$application->first_name}} {{$application->last_name}} </h1>
                <p>
                    {{$application->cover_letter}}
                </p>
                <div class="flex adm-app-det">
                    <h4>Status:</h4>
                    <p>{{$application->status}}</p>
                </div>
                <div class="flex adm-app-det">
                    <h4>Email:</h4>
                    <p>{{$application->email}}</p>
                </div>
                <div class="flex adm-app-det">
                    <h4>Phone:</h4>
                    <p>{{$application->phone}}</p>
                </div>
                <div class="flex adm-app-det">
                    <h4>Gender:</h4>
                    <p>{{$application->gender}}</p>
                </div>
                <div class="flex-3 adm-app-det">
                    <h4 class="left">Residential Address:</h4>
                    <p class="right">{{$application->address}}</p>
                </div>

                <div class="flex-3 adm-app-det">
                    <h4 class="left">Higher Institution:</h4>
                    <p class="right">{{$application->school}}</p>
                </div>

                <div class="flex-3 adm-app-det">
                    <h4 class="left">Course of Study:</h4>
                    <p class="right">{{$application->course}}.</p>
                </div>

                <div class="flex-3 adm-app-det">
                    <h4 class="left">Year of Graduation:</h4>
                    <p class="right">{{$application->year}}</p>
                </div>

                <div class="flex-3 adm-app-det">
                    <h4 class="left">Class of Degree</h4>
                    <p class="right">{{$application->degree}}</p>
                </div>

                <div class="flex-3 adm-app-det flex-col-mob">
                    <h4 class="left">S.S.C.E</h4>
                    <div class="image">
                        <a href="{{ $application->ssce }}">
                            <img src="{{ $application->ssce }}" alt="">
                        </a>
                    </div>
                </div>

                <div class="flex-3 adm-app-det flex-col-mob">
                    <h4 class="left">Certificate</h4>
                    <div class="image">
                        <a href="{{ $application->certificate }}">
                            <img src="{{ $application->certificate }}" alt="">
                        </a>
                    </div>
                </div>

                <div class="btn-grid">
                    
                    <form action="{{ route('adminApplicationOptions', ['id' => $application->id]) }}" method="post">
                        @csrf
                        <input type="text" name="purpose" value="Approve" hidden>
                        <button class="btn btn-blue w-100 btn-success">Approve</button>
                    </form>

                    <form action="{{ route('adminApplicationOptions', ['id' => $application->id]) }}" method="post">
                        @csrf
                        <input type="text" name="purpose" value="Decline" hidden>
                        <button class="btn btn-blue w-100 btn-dec">Decline</button>
                    </form>

                    <form action="{{ route('adminApplicationOptions', ['id' => $application->id]) }}" method="post">
                        @csrf
                        <input type="text" name="purpose" value="Delete" hidden>
                        <button class="btn btn-red w-100 delete">Delete</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection

