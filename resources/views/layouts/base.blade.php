<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('images/Asset 9.png') }}" type="image/png" sizes="160x160">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> --}}
    @yield('swiper')
    <link rel="stylesheet" href="{{ asset ('css/styles.css')}}">
    {{-- fontawesome kit --}}
    <script src="https://kit.fontawesome.com/23bcbedea7.js" crossorigin="anonymous"></script>
    <title>EEAFA || @yield('title')</title>
</head>
<body>

    <header class="header flex container">
        <a href=" {{ route('home') }} " class="logo flex-0">
            <img src="{{ asset('images/Asset 9.png') }}" alt="">
            <p>EEAFA</p>
        </a>
        <nav class="nav-con flex-2" id="nav-con">
            <div class="nav-link {{$active == 'home' ? 'active' : ''}}"><a href="{{ route('home') }}">Home</a></div>
            <div class="nav-link {{$active == 'about' ? 'active' : ''}}"><a href="{{ route('about') }}">About Us</a></div>
            <div class="nav-link {{$active == 'scholarship' ? 'active' : ''}}"><a href="{{route('scholarship')}}">Scholarship</a></div>
            <div class="nav-link {{$active == 'gallery' ? 'active' : ''}}"><a href="{{ route('gallery') }}">Gallery / Events</a></div>
            <div class="nav-link {{$active == 'blog' ? 'active' : ''}}"><a href="{{ route('blog') }}">Blog</a></div>
            <div class="nav-link"><a href="#" id="contact-btn">Contact Us</a></div>
        </nav>
        <div class="other-links flex-0">
            {{-- <div><a href="#" class="btn btn-blue" id="apply-btn">Apply</a></div> --}}
            {{-- <div><a href=" {{route('scholarship')}} " class="btn btn-blue">Apply</a></div> --}}
            <div><a href="#" class="btn btn-yellow" id="donate-btn">Donate</a></div>
            @auth
                <div><a href="{{ route('adminApplications') }}" class="desktop btn btn-blue btn-dec">Admin</a></div>
                @if($admin == false) 
                    <div class="mobile"><a href="{{ route('adminApplications') }}" class="btn btn-blue btn-dec">Admin</a></div>
                @endif
            @endauth
        </div>

        <div class="mobile" id="menu-btn">
            <i class="fa-solid fa-bars"></i>    
        </div>
        @auth
            @if ($admin == true)
                <div class="mobile" id="adm-menu-btn">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
            @endif
        @endauth
        
    </header>

    <main class="main">
        @if (session('mailStatus'))
            <div class="container">
                <div class="status stat-2 success">
                    <p> {{session('mailStatus')}} </p>
                </div>
            </div>                                                                    
        @endif

        @if (session('applyStatus'))
            <div class="container">
                <div class="status stat-2 error">
                    <p> We are sorry to inform you that you do not currently meet the criteria required to be a part of our program. But stay tuned for latest information from us.</p>
                </div>
            </div>
        @endif
        
        @if ($admin == false)
            @yield('content')    
        @else
            <div class="pad-bot-1">
                <div class="container mt-1">
                    <div class="flex-3">
                        <div class="sidebar" id="sidebar">
                            <div class="donate-head mb-01">
                                <h2>Admin Menu</h2>
                            </div>
                            <div class="sidebar-link-con">
                                <a href="{{ route('adminApplications') }}" class="sidebar-link {{$active == 'applications' ? 'active' : ''}}">Manage Applications</a>
                                <a href="{{ route('mailingList') }}" class="sidebar-link {{$active == 'mailingList' ? 'active' : ''}}">Manage Mailing List</a>
                                <a href="{{ route('admblog') }}" class="sidebar-link {{$active == 'admblog' ? 'active' : ''}}">Manage Blog & Articles</a>
                                <a href="{{ route('admGallery') }}" class="sidebar-link {{$active == 'admGallery' ? 'active' : ''}}">Manage Gallery & Events</a>
                                <form action="{{ route('logout') }}"  method="post">
                                    @csrf
                                    <button type="submit" class="sidebar-link">Logout</button>
                                </form>
                            </div>
                        
                        </div>
                        <div class="admin-content">
                            @yield('admin')
                        </div>
                    </div>
                </div>
            </div>
        @endif
        
    </main>

    <div class="donate" id="donate">
        <div class="don-cover">
            <div class="donate-con">
                <div class="donate-head">
                    <h2>Partner With Us</h2>
                </div>
                <div class="don-p">
                    <p>Your support makes a difference! Every donation helps us provide educational opportunities to those in need. Join us in empowering the next generation</p>
                </div>
                <div class="donate-body">
                    <div>
                        {{-- <div class="don-item">
                            <div class="don-title">
                                <h3>Bank</h3>
                            </div>
                            <div class="don-detail">
                                <p>First Bank Plc</p>
                            </div>
                        </div>
                        <div class="don-item">
                            <div class="don-title">
                                <h3>Account Number</h3>
                            </div>
                            <div class="don-detail">
                                <p>0123456789</p>
                            </div>
                        </div>
                        <div class="don-item">
                            <div class="don-title">
                                <h3>Account Name</h3>
                            </div>
                            <div class="don-detail">
                                <p>Equal Education Access For All</p>
                            </div>
                        </div> --}}
                    </div>
                    <p>You can support us in any of the pathways categorized as follows:</p>
                    <div>
                        <ul>
                            <li><p><strong>Bronze:</strong>  $1,000-$4,999 </p></li>
                            <li><p><strong>Silver:</strong> $5,000-$9,999 </p></li>
                            <li><p><strong>Gold:</strong> $10,000 -$14,999</p></li>
                            <li><p><strong>Platinum:</strong> $15,000-$19,999</p></li>
                            <li><p><strong>Diamond:</strong> >20,000</p></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="don-close" id="donate-close">
            <p>Close</p>
        </div>
    </div>

    <div class="donate" id="contact">
        <div class="don-cover">
            <div class="donate-con">
                <div class="donate-head">
                    <h2>We'd Love to hear from you</h2>
                </div>
                <div class="don-p">
                    <p>Have questions or want to learn more? We're here to help! Reach out to us, and we'll get back to you as soon as possible.</p>
                </div>
                <div class="donate-body">
                    <div>
                        <div class="don-item">
                            <div class="don-title">
                                <h3>Email</h3>
                            </div>
                            <div class="don-detail">
                                <p>support@eeafa.com</p>
                            </div>
                        </div>
                        <div class="don-item">
                            <div class="don-title">
                                <h3>Phone Number</h3>
                            </div>
                            <div class="don-detail">
                                <p>0123456789</p>
                            </div>
                        </div>
                        <div class="don-item">
                            <div class="don-title">
                                <h3>Business Address</h3>
                            </div>
                            <div class="don-detail">
                                <p>12th Floor, Wilmintong Delaware, U.S.A</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="don-close" id="contact-close">
            <p>Close</p>
        </div>
    </div>

    <div class="donate" id="apply">
        <div class="don-cover">
            <div class="donate-con">
                <div class="donate-head">
                    <h2>Apply To Our Program</h2>
                </div>
                <div class="don-p">
                    <h3>Eligibility Criteria</h3>
                </div>
                <div class="donate-body">
                    <div id="instructions">
                        <ul>
                            <li><p>Demonstrate intellectual capability by successfully passing the entrance exam.</p></li>
                            <li><p>Passed the JAMB examination and applied for admission to a federal university to study nursing.</p></li>
                            <li><p>Be a recognized indigene of Nsukka local government</p></li>
                            <li><p>Currently reside within the Nsukka local government area</p></li>
                            <li><p>Come from a family that is unable to afford a college education.</p></li>
                            <li><p>Be a first-generation university student</p></li>
                        </ul>
                        <p class="mt-1">If you meet the above criteria, please click the link below</p>
                        <a href="#" class="btn btn-blue block" id="continueBtn" >Continue</a>
                    </div>

                    <div id="criteria" class="d-none">
                        <form action="{{route('criteria')}}" method="post">
                            @csrf
                            <div>
                                <label for="" class="mt-1"><p>Have you completed JAMB?</p></label>
                                <div class="flex">
                                    <div class="flex">
                                        <label for=""><p>YES</p></label>
                                        <input type="radio" name="jamb" value="yes" class="ml-1" required>
                                    </div>
                                    <div class="flex">
                                        <label for=""><p>NO</p></label>
                                        <input type="radio" name="jamb" value="no" class="ml-1" required>
                                    </div>
                                </div>

                                <label for="" class="mt-1"><p>Are you an indigene of NSUKKA</p></label>
                                <div class="flex">
                                    <div class="flex">
                                        <label for=""><p>YES</p></label>
                                        <input type="radio" name="indigene" value="yes" class="ml-1" required>
                                    </div>
                                    <div class="flex">
                                        <label for=""><p>NO</p></label>
                                        <input type="radio" name="indigene" value="no" class="ml-1" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-blue block w-100 mt-1">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <div class="don-close" id="apply-close">
            <p>Close</p>
        </div>
    </div>

    <div class="donate" id="inactive">
        <div class="don-cover">
            <div class="donate-con">
                <div class="donate-head">
                    <h2>Apply To Our Program</h2>
                </div>
                <div class="don-p">
                    <h3>Please Check Back Later</h3>
                </div>
                <div class="donate-body">
                    <div class="don-detail">
                        <p class="text-center">
                            Our Application runs from the 25th of April to the 31st of May. Please check back again within that time frame. Thank you and best of luck.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="don-close" id="inactive-close">
            <p>Close</p>
        </div>
    </div>

    <div class="section bcc-blue container mailing">
        <div class="container-2">
            <div class="flex-4 flex-col">
                <h1>Join Our Mailing List</h1>
                <p>
                    Join our mailing list to receive updates on scholarship opportunities and learn how you can help us empower aspiring nurses from underprivileged backgrounds.
                </p>
            </div>
             <form action="{{route('mailing')}}" class="form" method="post">
                @csrf
                <div class="flex">
                    <input type="text" name="first_name" id="" placeholder="First Name" class="form-input" required>
                    <input type="text" name="last_name" id="" placeholder="Last Name" class="form-input" required>
                </div>
                <div class="flex">
                    <input type="email" name="email" id="" placeholder="Email Address" class="form-input email" required>
                    <input type="submit" name="submit" value="Subscribe" class="btn-yellow btn-form cus-pointer">
                </div>
                
             </form>
        </div>
    </div>

    <div class="section bcc-black container">
        <div class="footer">
            <div class="flex-5 bod-bot-mob">
                <div class="flex-0">
                    {{-- <img src="{{ asset('images/Asset 10.png') }}" alt="" class="logo"> --}}
                    <h3>EEAFA</h3>
                </div>
                <p>EEAFA aims to mentor participants in securing scholarships and study opportunities abroad after their first degree in Nigeria</p>
                <a href="#" class="btn btn-blue">Partner with us</a>
            </div>
            <div class="bod-bot-mob">
                <h3>Quick Links</h3>
                <div class="footer-links">
                    <a href="{{ route('home') }}" class="f-link">Home</a>
                    <a href="{{ route('about') }}" class="f-link">About Us</a>
                    <a href="{{ route('gallery') }}" class="f-link">Gallery / Events</a>
                    <a href="{{ route('blog') }}" class="f-link">Articles & Blog</a>
                    {{-- <a href="#" class="f-link"></a> --}}
                </div>
            </div>
            <div class="flex-5 bod-bot-mob">
                <h3>Apply Now</h3>
                <p>Seize the opportunity to transform your future. Apply now for a scholarship and take the first step towards achieving your dreams</p>
                <a href="#" class="btn btn-yellow">Apply Now</a>
            </div>
            <div class="flex-5">
                <h3>Social Links</h3>
                <p>Connect with us on our various social media platforms and stay informed on all our activities</p>
                <div class="soc-lin">
                    <a class="fa-brands fa-facebook"></a>
                    <a class="fa-brands fa-instagram"></a>
                    <a class="fa-brands fa-x-twitter"></a>
                    <a class="fa-brands fa-linkedin"></a>
                </div>
            </div>
        </div>

        <div>
            <div class="footer-bottom">
                <p>© 2024 Equal Education Access For All.</p>
            </div>
        </div>
    </div>

    @yield('swiperscript')
    {{-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> --}}
    <script src="https://cdn.tiny.cloud/1/t87rwwndacrt9grg1jwlnfaxaabxw3cxj77od5l8m4dhkcox/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    {{-- <script>
        tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script> --}}
    <script src="{{ asset('js/script2.js') }}"></script>
    
</body>
</html>