
@extends('layouts.base')

@section('title')
    Apply
@endsection

@section('content')
    <div class="apply">
        <div class="mt-1 pad-bot-1 container">
            <div class="apply-con flex-3 flex-col-mob-rev">

                <form action="{{ route('apply') }}" class="apply-form" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <div class="donate-head">
                            <h2>Personal Information</h2>
                        </div>
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
                        
                        <div class="flex-3 padd-1 apply-sect">
                            <div class="apply-fa">
                                <i class="fa-solid fa-user ap-fa blue"></i>
                            </div>
                            <div class="apply-data">
                                <div class="apply-input">
                                    <label for="">First Name</label>
                                    <input type="text" name="first_name" value="{{ old('first_name') }}" required> 
                                </div>
                                
                                <div class="apply-input">
                                    <label for="">Last Name</label>
                                    <input type="text" name="last_name" value="{{ old('last_name') }}" required>
                                </div>
                                <div class="apply-input">
                                    <label for="">Email Address</label>
                                    <input type="email" name="email" value="{{ old('email') }}" required>
                                </div>
                                <div class="apply-input">
                                    <label for="">Phone Number</label>
                                    <input type="text" name="phone" value="{{ old('phone') }}" required>
                                </div>
                                <div class="apply-input">
                                    <label for="">Residential Address</label>
                                    <input type="text" name="address" value="{{ old('address') }}" required>
                                </div>
                                <div class="apply-input">
                                    <label for="">Gender</label>
                                    <select name="gender" id="" required>
                                        <option value="">Choose Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>

                                <div class="apply-input">
                                    <label for="">Cover Letter</label>
                                    <textarea id="" cols="30" rows="10" name="cover_letter" required>{{ old('cover_letter') }}</textarea>
                                </div>
                                <div class="apply-input">
                                    <label for="">Upload S.S.C.E Certificate</label>
                                    <input type="file" class="bod-none" name="ssce" required accept="image/*">
                                </div>
                                <div class="apply-input">
                                    <label for="">Upload Jamb Result</label>
                                    <input type="file" class="bod-none" name="certificate" required accept="image/*">
                                </div>
                                <div>
                                    <div class="bod-top"></div>
                                    <button class="btn btn-blue btn-block">Submit Application</button>
                                </div>

                            </div>
                        </div>
                    </div>

                    {{-- <div class="mt-1">
                        <div class="donate-head">
                            <h2>Academic Information</h2>
                        </div>
                        <div class="flex-3 padd-1 apply-sect">
                            <div class="apply-fa">
                                <i class="fas fa-graduation-cap blue ap-fa"></i>
                            </div>
                            <div class="apply-data">
                                <div class="apply-input">
                                    <label for="">Name Of Higher Institution</label>
                                    <input type="text" name="school" value="{{ old('school') }}" required>
                                </div>
                                <div class="apply-input">
                                    <label for="">Course of Study</label>
                                    <input type="text" name="course" value="{{ old('course') }}" required>
                                </div>
                                <div class="apply-input">
                                    <label for="">Year of Graduation</label>
                                    <input type="text" name="year" value="{{ old('year') }}" required>
                                </div>
                                <div class="apply-input">
                                    <label for="">Class of Degree</label>
                                    <select name="degree" id="" required>
                                        <option value="">Choose Class of Degree</option>
                                        <option value="First Class">First Class Degree</option>
                                        <option value="Second Class - Upper">Second Class: Upper Division</option>
                                        <option value="Second Class - Lower">Second Class: Lower Division</option>
                                        <option value="Third Class">Third Class</option>
                                    </select>
                                </div>
                                <div class="apply-input">
                                    <label for="">Cover Letter</label>
                                    <textarea id="" cols="30" rows="10" name="cover_letter" required>{{ old('cover_letter') }}</textarea>
                                </div>
                                <div class="apply-input">
                                    <label for="">Upload S.S.C.E Certificate</label>
                                    <input type="file" class="bod-none" name="ssce" required accept="image/*">
                                </div>
                                <div class="apply-input">
                                    <label for="">Upload Higher Institution Certificate</label>
                                    <input type="file" class="bod-none" name="certificate" required accept="image/*">
                                </div>
                                <div>
                                    <div class="bod-top"></div>
                                    <button class="btn btn-blue btn-block">Submit Application</button>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </form>

                <div class="apply-info">
                    <div class="donate-head">
                        <h2>Apply To Our Program</h2>
                    </div>
                    <div class="apply-info-body">
                        <p>PS: EEAFA hopes to offer mentorship programs to guide participants in securing scholarships and study opportunities abroad after completing their first degree in Nigeria.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

