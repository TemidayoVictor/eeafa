@extends('layouts.base')

@section('title')
    Admin - Mailing List
@endsection

@section('admin')
    <h1 class="head">Mailing List</h1>
    <button class="btn btn-blue mb-1 btn-block">Copy all email addresses</button>
    <div class="box borr">
        
        @forelse ($subscribers as $key => $subscriber)
            <div class="adm-app-box flex-3">
                <div class="adm-app-left">
                    <h1> {{$key + 1}} </h1>
                </div>
                <div class="adm-app-right flex-5">
                    <h1> {{$subscriber->first_name}}  {{$subscriber->last_name}} </h1>
                    <div class="flex">
                        <h3>Email:</h3>
                        <p> {{$subscriber->email}} </p>
                    </div>
                </div>
            </div>
        @empty
            <div class="empty">
                <span class="empty-p">You have no Subscribers in your mailing list yet</span>
            </div>    
        @endforelse

    </div>
@endsection

