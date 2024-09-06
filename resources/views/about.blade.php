
@extends('layouts.base')

@section('swiper')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@endsection

@section('title')
    About Us
@endsection

@section('content')
    <div class="about">
        <div class="container pad-bot-1">
            <h1 class="head">What Drives Us ❤</h1>
            <div class="flex-3 flex-col-mob">
                <div class="left">
                    <img src="{{ asset('images/about.jpg') }}" alt="">
                </div>
                <div class="right">
                    <p>
                        Although Nigerian government has made efforts to improve its education system, there are still <span class="col-blue">significant challenges that hinder equal access to education across the country</span>. Children from low-income families often <span class="col-yellow">struggle to afford school fees, uniforms, textbooks, and other educational materials.</span>
                    </p>
        
                    <p>
                        This economic barrier exacerbates educational disparities and perpetuates cycles of poverty. Addressing regional disparities, gender inequality, socioeconomic barriers, and the impact of conflict, Nigeria can work towards <span class="col-blue">providing quality education opportunities for every child</span>, thus fostering social and economic development in the country
                    </p>

                    <div class="mobile left">
                        <img src="{{ asset('images/about.jpg') }}" alt="">
                    </div>
        
                    <p> 
                        The importance of education in fostering economic growth cannot be overemphasized. Preparing individuals with key skills, knowledge, and abilities supports societies' growth and progress. Countries can enhance their human capital by providing quality education. <span class="col-yellow">A well-educated workforce is crucial for innovation, productivity, and economic competitiveness</span>
                    </p>
        
                    <p>
                        Individuals who have received education are <span class="col-blue">more likely to find employment that pays well</span>, resulting in higher income levels and an improved quality of life for themselves and their families. Education is <span class="col-yellow">crucial in developing critical thinking, problem-solving, and technical skills</span>. 
                    </p>

                    <div class="mobile left">
                        <img src="{{ asset('images/about.jpg') }}" alt="">
                    </div>
        
                    <p >
                        <span class="col-blue">These skills drive innovation and technological advancements</span>, which fuel economic growth and create new job opportunities. Education provides equal opportunities for all individuals to acquire knowledge and skills, promoting social mobility regardless of socioeconomic status.
                    </p>
        
                    <p>
                        Equal Education Access for All (EEAFA) is a <span class="col-blue">non-profit organization</span> committed to creating educational opportunities for <span class="col-yellow">underprivileged individuals</span>. We focus on providing full scholarships to academically gifted students who aspire to pursue <span class="col-blue">a career in nursing</span>. Our mission is to empower individuals from <span class="col-yellow">disadvantaged backgrounds</span> to achieve their academic and professional goals, free from financial barriers. 
                    </p>

                    <div class="mobile left">
                        <img src="{{ asset('images/about.jpg') }}" alt="">
                    </div>

                    <div>
                        <h2 class="head">Our Vision</h2>
                        <p>To enhance social connections, fairness, and equality for underprivileged individuals by ensuring that higher education is accessible.</p>
                    </div>

                    <div>
                        <h2 class="head">Our Mission</h2>
                        <p>To unite government, corporations, nonprofits, and individuals in advocating for fairness, equality, and social connections by expanding access to higher education for underprivileged individuals.</p>
                    </div>

                </div>
            </div>
        </div>

        <div class="section container bcc-blue leader">
            <div>
                <h1 class="text-und mb-1">Meet Our Visionary Team</h1>
            </div>
            <div class="flex-3 flex-col-mob team">
                <div class="image-width">
                    <img src="{{ asset('images/President.jpeg') }}" alt="">
                </div>
                <div class="content-width flex-5">
                    <div>
                        <h1>Obioma Onah</h1>
                        <h3>President, EEAFA</h3>
                    </div>
                    
                    <div>
                        <p> 
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, rem! Veniam, ab voluptas. Sunt dicta at rerum sapiente consectetur minus? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat repudiandae itaque placeat illo quas labore maiores necessitatibus iusto ratione accusamus! 
                        </p>
                        <p class="mt-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, rem! Veniam, ab voluptas. Sunt dicta at rerum sapiente consectetur minus? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat repudiandae itaque placeat illo quas labore maiores necessitatibus iusto ratione accusamus!
                        </p>
                    </div>
                    
                </div>
            </div>
            
            <div class="flex-3 flex-col-mob-rev team">
                <div class="content-width flex-5">
                    <div>
                        <h1>Name, Surname</h1>
                        <h3>Position, EEAFA</h3>
                    </div>
                    
                    <div>
                        <p> 
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, rem! Veniam, ab voluptas. Sunt dicta at rerum sapiente consectetur minus? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat repudiandae itaque placeat illo quas labore maiores necessitatibus iusto ratione accusamus! 
                        </p>
                        <p class="mt-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, rem! Veniam, ab voluptas. Sunt dicta at rerum sapiente consectetur minus? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat repudiandae itaque placeat illo quas labore maiores necessitatibus iusto ratione accusamus!
                        </p>
                    </div> 
                </div>

                <div class="image-width">
                    <img src="{{ asset('images/President3.jpeg') }}" alt="">
                </div>
            </div>

            <div class="flex-3 flex-col-mob team">
                <div class="image-width">
                    <img src="{{ asset('images/President.jpeg') }}" alt="">
                </div>
                <div class="content-width flex-5">
                    <div>
                        <h1>Name, Surname</h1>
                        <h3>Position, EEAFA</h3>
                    </div>
                    
                    <div>
                        <p> 
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, rem! Veniam, ab voluptas. Sunt dicta at rerum sapiente consectetur minus? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat repudiandae itaque placeat illo quas labore maiores necessitatibus iusto ratione accusamus! 
                        </p>
                        <p class="mt-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, rem! Veniam, ab voluptas. Sunt dicta at rerum sapiente consectetur minus? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat repudiandae itaque placeat illo quas labore maiores necessitatibus iusto ratione accusamus!
                        </p>

                    </div>
                    
                </div>
            </div>
        </div>
        <div class="section container">
            <div>
                <h1 class="head mb-1">Our Values</h1>
            </div>
            <div class="swiper mySwipergrd">
                <div class="swiper-wrapper">
                    <div class="value swiper-slide">
                        <i class="fas fa-users ab-fa"></i>
                        <h3>Equity</h3>
                    </div>
                    <div class="value swiper-slide">
                        <i class="fas fa-universal-access ab-fa"></i>
                        <h3>Inclusion</h3>
                    </div>
                    <div class="value swiper-slide">
                        <i class="fas fa-hand-rock ab-fa"></i>
                        <h3>Strengthens</h3>
                    </div>
                    <div class="value swiper-slide">
                        <i class="fas fa-handshake ab-fa"></i>
                        <h3>Trust</h3>
                    </div>
                    <div class="value swiper-slide">
                        <i class="fas fa-clipboard-check ab-fa"></i>
                        <h3>Accountability</h3>
                    </div>
                    <div class="value swiper-slide">
                        <i class="fas fa-hand-holding-heart ab-fa"></i>
                        <h3>Beneficiary-centered</h3>
                    </div>
                    <div class="value swiper-slide">
                        <i class="fas fa-balance-scale ab-fa"></i>
                        <h3>Honesty</h3>
                    </div>
                    <div class="value swiper-slide">
                        <i class="fas fa-star ab-fa"></i>
                        <h3>Excellence</h3>
                    </div>
                    <div class="value swiper-slide">
                        <i class="fas fa-eye ab-fa"></i>
                        <h3>Transparency</h3>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('swiperscript')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        var swipergrd = new Swiper(".mySwipergrd", {
            centeredSlides: true,
            loop:true,
            autoplay: {
                delay: 1500,
                disableOnInteraction: false,
                },
            grabCursor: true,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                // when window width is >= 640px
                340: {
                slidesPerView: 2,
                spaceBetween: 20
                },
                // when window width is >= 768px
                768: {
                slidesPerView: 3,
                spaceBetween: 30
                },
                // when window width is >= 1024px
                1024: {
                slidesPerView: 4,
                spaceBetween: 40
                }
            },
        });
    </script>
@endsection

