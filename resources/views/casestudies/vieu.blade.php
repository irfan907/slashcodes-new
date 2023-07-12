@extends('layouts.master')

@section('meta_title', 'Vieu Casestudy | Cynosure Designs')
@section('meta_description', 'Discover how Vieu partnered with Cynosure Designs to help develop processes and implement platforms to provide a best-in-class product experience.')

@section('canonical', "https://cynosuredesigns.co.uk/casestudies/vieu")

@section('bodyClass', 'pg_casestudy_detail')


@section('script_css')
<meta itemprop="image" content="{{ asset('/img/projects/vieu/header.png')}}">
<meta property="og:image" content="{{ asset('/img/projects/vieu/header.png')}}" />
<meta name="twitter:image" content="{{ asset('/img/projects/vieu/header.png')}}" />
@append

@section('content')

<section class="vieu_header full_h_sec">
            <div class="full_h_inner">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 align-self-center text-center">
                            <div class="w-300px text-center">
                                <img src="{{ asset('/img/projects/vieu/logo.png')}}" class="pb-4" width="300" alt="">
                                <br>
                                <a href="https://vieu.co.uk/"><i class="far fa-share-square color_darkblue">&nbsp;&nbsp;</i> Visit the Website </a>
                            </div>



                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('/img/projects/vieu/header.png')}}" class="w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="casestudy_insights_sec vieu_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 casestudies_features">
                        <div class="casestudies_feature_item">
                            <h3>Expertise</h3>
                            <p>UX Research, Development</p>
                        </div>
                        <div class="casestudies_feature_item">
                            <h3>Platforms</h3>
                            <p>Web Based Application</p>
                        </div>
                        <div class="casestudies_feature_item">
                            <h3>Deliverables</h3>
                            <p>Saas based complete solution</p>
                        </div>
                        <div class="casestudies_feature_item">
                            <h3>Interested?</h3>
                            <p>Say Hello!</p>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <a href="{{ route('casestudies') }}" class="theme_arrow_link_left"><i class="fas fa-arrow-left color_darkblue">&nbsp;</i> CASE STUDIES</a>
                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h1 class="color_darkblue">Vieu Summary</h1>
                        <p>
                        VIEU software case study provides outstanding information to the companies, looking to learn more about the selection of best-fit automated software system for their enterprises. The software evolution has performed on systems developed within a company using multiple traditional management techniques.
                        </p>
                        <p>VIEU is a face recognition software launched for the purpose of recognizing entrants faces, tracking attendance records, note down the body temperature, maintaining payrolls and much more. It is not only feasible for the organizations
                            but also for the schools, colleges or any other institute.</p>
                        <p>VIEU is a cloud-based software available in the form of a web application. The contact-less facial recognition device uses a chip that identifies the face of registered member. The user is granted access to enter the building if
                            the information is matched in the system otherwise a notification is sent to authorized person via email or sms and access is denied in that case. The software keeps all data safe and secure, that can easily be accessible on
                            any device at any time and prevents from security threats.</p>
                        <p>In the pandemic situation this program made an ease for the firms by providing its high end features. In Covid-19 VIEU maintained and also came up with new attributes by coping up with the safety measures such as social distancing,
                            wearing face masks, records body temperature of entrants.</p>
                        <p>In this digital era VIEU has introduced itself with its exclusive and tremendous features around the globe. In the short tenure it has made its spot in such a rivalry situation and became a top notch.</p>

                        <a href="{{ asset('/casestudy/vieu.pdf')}}" target="_blank" class="theme_btn dark_btn">Download Case Study</a>


                    </div>
                    <div class="col-md-4 offset-md-1 align-self-center  py-5">
                        <div class="casestudy_stats_box">
                            <h2 class="color_darkblue">10000 <span class="fw_300">+</span></h2>
                            <p>Trusted Users</p>
                        </div>
                        <div class="casestudy_stats_box">
                            <h2 class="color_darkblue">100 <span class="fw_300">%</span></h2>
                            <p>Positive Rating</p>
                        </div>
                        <div class="casestudy_stats_box">
                            <h2 class="color_darkblue">10 <span class="fw_300">X</span></h2>
                            <p>Return on platform</p>
                        </div>


                        <!-- <h3 class="color_darkblue">Services</h3>
                        <ul class="no_list_style space_between_list_items">
                            <li><a class="mouse_go" href="javascript:;">Branding</a></li>
                            <li><a class="mouse_go" href="javascript:;">UI/UX Designs</a></li>
                            <li><a class="mouse_go" href="javascript:;">Printing & Packaging</a></li>
                            <li><a class="mouse_go" href="javascript:;">Web & CMS Development</a></li>
                            <li><a class="mouse_go" href="javascript:;">Software Development</a></li>
                        </ul> -->
                    </div>
                </div>

            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="responsive_iframe">
                            <iframe src="https://www.youtube.com/embed/5Ad30zes2eQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 pb-5">
                        <h3 class="color_darkblue">Challenges</h3>
                        <p>Manually marking attendance is time consuming for employees. They may often forget to punch in and punch out in office premises. The Uncertainty about the accurate time and proxy are the real problems.</p>
                        <p>Enterprises face security threats when an unofficial person enters the building without verification. </p>
                        <p>Manual payroll management system requires personnel and excessive time for calculations to provide error-free data by manually checking attendance records that takes a lot of time. </p>
                        <p>The recruitment of workforce to perform their job responsibilities for employee scheduling, time and attendance, security, legal compliance and more. </p>
                        <p>The epidemic, Covid-19 devastated the systems of businesses and escorted new trends like social distancing, temperature checks, sanitizing and wearing face masks for the health purpose. </p>



                    </div>
                    <div class="col-md-8 pb-5">

                        <h3 class="color_darkblue">Strategy</h3>
                        <p>Strategizing leads to ideal businesses and out of the box productivity. The face recognition software revamps the security system entirely. Just plug in and ready to use device scans the face and compares the data gathered with
                            samples collected in software database for granting or refusal of access. Meanwhile it also tracks the time and attendance of authorized member without any effort. By maintaining the SOP’S in such widespread, this contact-less
                            device works flawlessly. The thermal scanner in device detects the high body temperature and alerts the staff members to take precautionary steps for safety. The program saves hours of hours in payroll calculations, depending
                            on the attendance and time. The whole procedure takes place in just few seconds.</p>
                        <br>
                    </div>

                    <div class="col-md-8 pb-5">

                        <h3 class="color_darkblue">Solutions</h3>
                        <p>VIEU is the one solution to multiple problems. The main root cause of such challenges is to replace the manual system with automated software. Now no further need for biometrics or to touch anything. </p>
                        <p>VIEU is a face recognition software device that enables its camera to detect the entrant’s face for verification. The intruder or unauthorized person will no longer be able to gain access. </p>
                        <p>This Hassle free operating system automatically tracks down the time and attendance of employees without being physical. Moreover it leads to the analysis of data required for the calculations of monthly payrolls that cuts down
                            the manpower.</p>
                        <p>In Covid-19, the leading factors in VIEU that magnifies its existence from other technologies is that it is the cautious and fast method to grant or deny access by checking the body temperature and the face mask. </p>


                    </div>
                    <div class="col-md-8 pb-5">

                        <h3 class="color_darkblue">Results</h3>
                        <p>Conclusively, VIEU technology penetrated into the market all over the world and became client’s first choice in every aspect. This evolving software streamlined the company’s practices by automating the processes including verification,
                            attendance, payrolls and more. The advanced features of this device reduced workforce by leaving the results impactful. Now-a-days the face recognition software is in high demand among many schools, universities, hotels and
                            even events like concerts, seminars and so on and so forth. Increased security, trouble free program, less time consuming, labour cost savings, no human error, improved surveillance efforts and easy integration are among the
                            top class factors that delighted our trusted clients around the globe.</p>
                        <p><b>Therefore, today VIEU is called the VISUAL POWER!</b></p>


                    </div>
                </div>
            </div>
        </section>


@endsection