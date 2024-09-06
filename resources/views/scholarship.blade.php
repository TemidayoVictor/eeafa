
@extends('layouts.base')

@section('title')
    Scholarship
@endsection

@section('content')
    <div class="about">
        <div class="container pad-bot-1">
            <div class="flex-3 flex-col-mob">
                <div class="left">
                    <img src="{{ asset('images/eeafalogo.jpg') }}" alt="">
                </div>
                <div class="right">
                    <div>
                        <h1 class="head-2">Our Scholarship Program</h1>
                        <p>
                            <b>At Equal Education Access for All(EEAFA)</b>, we are a dedicated charity organization committed to ensuring everyone has an equal opportunity to pursue their educational aspirations. We aim to provide scholarships to underprivileged individuals, enabling them to attend nursing school at federal universities. 
                        </p>
            
                        <p>
                            We believe that education is the key to unlocking a brighter future, and we strive to eliminate barriers that prevent individuals from achieving their dreams, regardless of their background.
                        </p>
                    </div>
                    
                    <div>
                        <h1 class="head-2">2024/2025 EEAFA Scholarship Announcement</h1>
                        <p>
                            EEAFA is excited to announce our inaugural Cohort Scholarship, specifically designed for applicants from the Nsukka local government area of Enugu State. This scholarship program aims to enhance educational opportunities for individuals whose families face financial challenges and wish to study nursing.
                        </p>
                    </div>

                    <div>
                        <h1 class="head-2">Key Details:</h1>
                        <ul>
                            <li>
                                <p>
                                    This scholarship is available only to citizens of the Nsukka local government area interested in studying nursing
                                </p>
                            </li>
                            <li>
                                <p>
                                    This first cohort will consist of ten students.
                                </p>
                            </li>
                            <li>
                                <p>
                                    There will be an entrance exam
                                </p>
                            </li>
                            <li>
                                <p>
                                    Individuals must have passed JAMB and applied to study nursing at a Federal University before applying for the scholarship
                                </p>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h1 class="head-2">Eligibility Criteria:</h1>
                        
                        <p>
                            To qualify for the EEAFA Scholarship, applicants must meet the following requirements:
                        </p>

                        <ul>
                            <li>
                                <p>
                                    Demonstrate intellectual capability by successfully passing the entrance exam.
                                </p>
                            </li>
    
                            <li>
                                <p>
                                    Passed the JAMB examination and applied for admission to a federal university to study nursing.
                                </p>
                            </li>
    
                            <li>
                                <p>
                                    Be a recognized indigene of Nsukka local government.
                                </p>
                            </li>
    
                            <li>
                                <p>
                                    Currently reside within the Nsukka local government area.
                                </p>
                            </li>
    
                            <li>
                                <p>
                                    Come from a family that is unable to afford a college education.
                                </p>
                            </li>
    
                            <li>
                                <p>
                                    Be a first-generation university student.
                                </p>
                            </li>
                        </ul>

                    </div>

                    <div>
                        <h1 class="head-2">Application Process:</h1>
                        
                        <ol>
                            <li>
                                <p>
                                    Secure admission to a nursing program at any federal university.
                                </p>
                            </li>
    
                            <li>
                                <p>
                                    Successfully complete and pass the program entrance exam.
                                </p>
                            </li>
    
                            <li>
                                <p>
                                    Submit a scholarship application form.
                                </p>
                            </li>
    
                            <li>
                                <p>
                                    Provide a one-page essay detailing why you should be selected for this scholarship (including your parent's name, village, and town).
                                </p>
                            </li>
    
                            <li>
                                <p>
                                    Submit two reference letters.
                                </p>
                            </li>   
                        </ol>

                    </div>

                    <div>
                        <h1 class="head-2">Important Dates:</h1>
                        
                        <ul>
                            <li>
                                <p>
                                    Program entrance exams are scheduled for January 9, 10, or 11, 2025. To be considered for the 2025 Cohort scholarship, you must successfully complete the entrance exam on one of the specified dates. More info will be provided on our website.
                                </p>
                            </li>
    
                            <li>
                                <p>
                                    Applications begin of the 25th of April, and ends on the 31st of May.
                                </p>
                            </li>
    
                            <li>
                                <p>
                                    We will send acceptance letters to the selected candidates by September 1, 2024.
                                </p>
                            </li>   
                        </ul>
                    </div>

                    <div>
                        <h1 class="head-2">Scholarship Coverage:</h1>
                        <p>
                            The EEAFA Scholarship will cover tuition fees, accommodation, textbooks, and a contribution towards living expenses, ensuring that students can focus on their studies without financial burdens.
                        </p> 
                        <p>
                            Let's work together to build a brighter future.
                        </p>

                        <p>
                            Click the link below to apply to our program
                        </p>

                        @if ($applicationActive)
                            <div><a href="#" class="btn btn-blue" id="apply-btn">Apply To Our Program</a></div>
                        @else
                            <div><a href="#" class="btn btn-blue" id="inactive-btn">Apply To Our Program</a></div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@section('swiperscript')
    <script>
        let inactive = document.getElementById('inactive');
        let inactiveClose = document.getElementById('inactive-close');
        let inactiveBtn = document.getElementById('inactive-btn');

        inactiveBtn.onclick = () => {
            inactive.classList.add('active-flex');
        }

        inactiveClose.onclick = () => {
            inactive.classList.remove('active-flex');
        }
    </script>
@endsection


