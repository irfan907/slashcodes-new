@extends('layouts.master')
@section('meta_title', 'Synopsis CRM Casestudy | Cynosure Designs') 
@section('meta_description', 'Discover how Synopsis CRM partnered with Cynosure Designs to help develop CRM and implement platforms to provide a best-in-class
solution to colleges & university') 
@section('canonical', "https://cynosuredesigns.co.uk/casestudies/synopsis-crm") 
@section('bodyClass', 'pg_casestudy_detail') 
@section('script_css')
<meta itemprop="image" content="{{ asset('/img/casestudies/crm/banner.png')}}">
<meta property="og:image" content="{{ asset('/img/casestudies/crm/banner.png')}}" />
<meta name="twitter:image" content="{{ asset('/img/casestudies/crm/banner.png')}}" />
<style>
    .crm_feature_box h5 {
        color: #082f54;
        font-weight: 500;
        margin-bottom:15px;
    }
    
    .crm_feature_box {
        background: white;
        padding: 20px;
        margin: 20px 0;
        border-radius: 30px;
    }
    .carousel-control-next, .carousel-control-prev{
        filter: invert(1);
    }
    
</style>

@append @section('content')

<section class="vieu_header full_h_sec">
    <div class="full_h_inner">
        <div class="container">
            <div class="row">

                <div class="col-md-6 align-self-center text-center">
                    <div class="w-300px text-center">
                        <img src="{{ asset('/img/casestudies/crm/logo.png')}}" class="pb-4" width="300" alt="">
                        <br>

                    </div>



                </div>
                <div class="col-md-6">
                    <img src="{{ asset('/img/casestudies/crm/banner.png')}}" class="w-100" alt="">
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
                    <p>CRM Development</p>
                </div>
                <div class="casestudies_feature_item">
                    <h3>Platforms</h3>
                    <p>Desktop Based Application</p>
                </div>
                <div class="casestudies_feature_item">
                    <h3>Deliverables</h3>
                    <p>VLE or Learning Platform</p>
                </div>
                <div class="casestudies_feature_item">
                    <h3>Interested?</h3>
                    <a href="{{ route('contact') }}"><b>Lets plan your project!</b></a>
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
            <div class="col-12 text-center pb-5">
                <h1 class="color_darkblue">Synopsis CRM</h1>
                <h3 class="color_darkblue"> Covering a wide range of multiple options with extra security features</h3>
            </div>
            <div class="col-md-7">


                <h2 class="color_darkblue">Summary</h2>
                <p>CRM is the philosophy behind running a successful organisation. Synopsis CRM is an integrated information system that is used to plan, schedule and control the activities in an organisation. CRM embraces all aspects of dealing with current
                    and prospective students and staff. The primary goal of CRM is to improve long-term growth and profitability through a better understanding of customer behaviour. CRM aims to provide more effective feedback and improved integration.</p>
                <p>The CRM allows students to access an online VLE module, where students can track their applications, once a student is registered they can access their personal details and amend the address, view course details, such as timetable, view
                    attendance, results and view subject notes uploaded by the teacher and retrieve any messages. The teacher can also access the online module to mark attendance, upload subject notes for the students to access and record results.</p>

            </div>
            <div class="col-md-4 offset-md-1 align-self-center  py-5">
                <div class="casestudy_stats_box">
                    <h2 class="color_darkblue">400 <span class="fw_300">+</span></h2>
                    <p>College & Universities </p>
                </div>
                <div class="casestudy_stats_box">
                    <h2 class="color_darkblue">200 <span class="fw_300">%</span></h2>
                    <p>Positive Rating</p>
                </div>
                <div class="casestudy_stats_box">
                    <h2 class="color_darkblue">15 <span class="fw_300">X</span></h2>
                    <p>Return on platform</p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-8 py-4">
                <img src="{{ asset('/img/casestudies/crm/device.png')}}" class="w-100" alt="CRM Development in london">
            </div>
            <div class="col-md-12 py-5">
                <h2 class="color_darkblue">Student VLE</h2>
                <p>A VLE, or learning platform, is an online system that allows teachers to share educational materials with their pupils via the web. For a student to be able to access a "Virtual" room as either a duplicate or extension of their physical
                    classroom is a clear advantage for learners and teachers alike. Every educational establishment ought to integrate a VLE into their lessons and allow it to become second nature to learners and educators outside of the classroom. Below
                    are some of the features students and teachers will benefit from:</p>
                <ul>
                    <li>
                        <p><b>Communication</b> - Opens up an infinite number of channels in the format of forums, discussion threads, - instant feedback either as a group or individually</p>
                    </li>
                    <li>
                        <p><b>Producing work</b> - Students do not physically have to find their teacher to hand in work due to secure virtual "hand-in" folders that have time windows</p>
                    </li>
                    <li>
                        <p><b>Resource hub</b> - Teachers have infinite online storage space for ppts, docs, worksheets, Videos etc. that can either be secure or shared with students</p>
                    </li>
                    <li>
                        <p><b>Videos</b> - Both teacher and student produced podcasts and videos have a shared platform; again, either secure or shared</p>
                    </li>
                </ul>

                
            </div>
            <div class="col-md-12 text-center">
            <a href="{{ route('contact') }}" class="theme_btn inverse_btn">Lets discuss your project!</a>
            </div>
        </div>

    </div>
</section>

<section class="vieu_bg">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center pb-5">
                <h2 class="color_darkblue">Features</h2>
            </div>


        </div>
        <div class="row row-eq-height wow fadeInUp animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">

            <div class="col-md-4">
                <div class="crm_feature_box">
                    <h5>Dashboard</h5>
                    <p>
                        Range of informational widgets and customisable dashboard according to user requirements.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="crm_feature_box">
                    <h5>Financials</h5>
                    <p>
                        Financials such as fees and other expenses maintenance is simplified for all range of users.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="crm_feature_box">
                    <h5>Reports</h5>
                    <p>
                        Variety of reports required for all levels of users in a simplified and customised way.
                    </p>
                </div>
            </div>


            <div class="col-md-4">
                <div class="crm_feature_box">
                    <h5>Attendance</h5>
                    <p>
                        Attendance is most important aspect for any institution and fully mature attendance management module at disposal.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="crm_feature_box">
                    <h5>Courses</h5>
                    <p>
                        Core product features to input and maintain course information and hierarchical information related to courses.
                    </p>
                </div>
            </div>



            <div class="col-md-4">
                <div class="crm_feature_box">
                    <h5>Library</h5>
                    <p>
                        Books can be added so the student can access them through the online module or request from the librarian.
                    </p>
                </div>
            </div>


            <div class="col-md-4">
                <div class="crm_feature_box">
                    <h5>Diary</h5>
                    <p>
                        Organise your work load by using the diary to manage your events. The diary can be further customised and printed. Print your own perpetual calendar for any day, week or month. The diary can be viewed by day, week or month view.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="crm_feature_box">
                    <h5>Messages</h5>
                    <p>
                        Whether the message is from an Employee, Student or an Agent, all users' communication will be recorded in CRM. This is an intranet system in which all staff and students have the ability to communicate.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="crm_feature_box">
                    <h5>Students</h5>
                    <p>
                        Manage student data, personal and academic records, system will highlight any students with low attendance/ visa/ passport expiry. All sections can be updated and a record will be maintained of who edited the student profile and when it was edited.
                    </p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="crm_feature_box">
                    <h5>Notice Board</h5>
                    <p>
                        Centralised management of all information sent by privileged users to all recipients and external communication also identified as key aspect during design.
                    </p>
                </div>
            </div>


            <div class="col-md-4">
                <div class="crm_feature_box">
                    <h5>Transport</h5>
                    <p>
                        Student picks and drop, outstanding fee, Vehicle mandatory expiry details including seating information and Drivers personal and license information.
                    </p>
                </div>
            </div>




            <div class="col-md-4">
                <div class="crm_feature_box">
                    <h5>Student VLE</h5>
                    <p>
                        A VLE, or learning platform, is an online system that allows teachers to share educational materials with their pupils via the web.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="">
    <div class="container">
        <div class="row">

            <div class="col-12 text-center pb-5">
                <h2 class="color_darkblue">Software Glimps</h2>
            </div>


        </div>
        <div class="row row-eq-height">

            <div class="col-md-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img class="w-100" src="{{ asset('/img/casestudies/crm/1.png')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="w-100" src="{{ asset('/img/casestudies/crm/2.png')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="w-100" src="{{ asset('/img/casestudies/crm/3.png')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                <img class="w-100" src="{{ asset('/img/casestudies/crm/4.png')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                <img class="w-100" src="{{ asset('/img/casestudies/crm/5.png')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                <img class="w-100" src="{{ asset('/img/casestudies/crm/6.png')}}" alt="Third slide">
                </div>
                <div class="carousel-item">
                <img class="w-100" src="{{ asset('/img/casestudies/crm/7.png')}}" alt="Third slide">
                </div>
            </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
            </div>
        </div>
    </div>
</section>

@endsection