
@extends('layouts.base')

@section('title')
    Login
@endsection

@section('content')
    <div class="">
        <div class="mt-1 pad-bot-1 container">
            <div class="apply-con login flex-col-mob-rev">

                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div>
                        <div class="donate-head">
                            <h2>EEAFA Admin Login</h2>
                        </div>
                        <div class="padd-1 apply-sect">
                            <div class="apply-data">
                                @if (session('status'))
                                    <div class="status success">
                                        <p>{{ session('status') }}</p>
                                    </div>                                    
                                @endif

                                @if (session('loginStatus'))
                                    <div class="status error">
                                        <p>{{ session('loginStatus') }}</p>
                                    </div>                                    
                                @endif

                                <div class="flex-3">
                                    <i class="fa-solid fa-user blue"></i>
                                    <div class="apply-input">
                                        <label for="">Username</label>
                                        <input type="text" name="username" required>
                                    </div>
                                </div>
                                <div class="flex-3">
                                    <i class="fa-solid fa-lock blue"></i>
                                    <div class="apply-input">
                                        <label for="">Password</label>
                                        <input type="password" name="password" required>
                                    </div>
                                </div>
                                <div>
                                    <div class=""></div>
                                    <button class="btn btn-blue btn-block">Login</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection

