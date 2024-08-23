<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> --}}
    @yield('swiper')
    <link rel="stylesheet" href="{{ asset ('css/styles.css')}}">
    {{-- fontawesome kit --}}
    <script src="https://kit.fontawesome.com/23bcbedea7.js" crossorigin="anonymous"></script>
    <title>EEAFA || @yield('title')</title>
</head>
<body>

    <header class="header flex container">
        <a href=" {{ route('home') }} " class="logo">EEAFA</a>
        <nav class="nav-con flex-2" id="nav-con">
            <div class="nav-link {{$active == 'home' ? 'active' : ''}}"><a href="{{ route('home') }}">Home</a></div>
            <div class="nav-link {{$active == 'about' ? 'active' : ''}}"><a href="{{ route('about') }}">About Us</a></div>
            <div class="nav-link {{$active == 'gallery' ? 'active' : ''}}"><a href="{{ route('gallery') }}">Gallery / Events</a></div>
            <div class="nav-link {{$active == 'blog' ? 'active' : ''}}"><a href="{{ route('blog') }}">Blog</a></div>
            <div class="nav-link"><a href="#" id="contact-btn">Contact Us</a></div>
        </nav>
        <div class="other-links flex-0">
            <div><a href="{{ route('apply') }}" class="btn btn-blue">Apply</a></div>
            <div><a href="#" class="btn btn-yellow" id="donate-btn">Donate</a></div>
            @auth
                <div><a href="{{ route('adminApplications') }}" class="desktop btn btn-blue btn-dec">Admin</a></div>
                @if($admin == false) 
                    <div><a href="{{ route('adminApplications') }}" class="mobile btn btn-blue btn-dec">Admin</a></div>
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
                        <div class="don-item">
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
                        </div>
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
                <h3>EEAFA</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nihil id iure doloremque reiciendis? Beatae.</p>
                <a href="#" class="btn btn-blue">Partner with us</a>
            </div>
            <div class="bod-bot-mob">
                <h3>Quick Links</h3>
                <div class="footer-links">
                    <a href="#" class="f-link">Home</a>
                    <a href="#" class="f-link">About Us</a>
                    <a href="#" class="f-link">Gallery / Events</a>
                    <a href="#" class="f-link">Articles & Blog</a>
                    <a href="#" class="f-link"></a>
                </div>
            </div>
            <div class="flex-5 bod-bot-mob">
                <h3>Apply Now</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nihil id iure doloremque reiciendis? Beatae.</p>
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
    <script src="{{ asset('js/script.js') }}"></script>
    
</body>
</html>