@extends('layouts.master')

@section('meta_title', 'Home | Cynosure Designs')
@section('meta_description', 'Home | Cynosure Designs')

@section('canonical', "https://cynosuredesigns.co.uk/")

@section('bodyClass', 'pg_casestudy_detail')


@section('script_css')

@append

@section('content')

<section class="default_header full_h_sec">
            <div class="full_h_inner">
                <div class="container">
                    <div class="row">

                        <div class="col-md-6 align-self-center text-center">
                            <div class="w-300px text-center">
                                <img src="{{ asset('/img/projects/stubbee/logo.png')}}" class="pb-4" width="300" alt="">
                                <br>
                                <a href="https://stubbee.co/"  target="_blank"><i class="far fa-share-square color_red">&nbsp;&nbsp;</i> Visit the Website </a>
                            </div>



                        </div>
                        <div class="col-md-6">
                            <img src="{{ asset('/img/casestudies/stubbee.png')}}" class="desktop_img w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="casestudy_insights_sec stubbee_bg default_bg">
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
                            <a href="{{ route('contact') }}"><b>Lets plan your project!</b></a>
                        </div>
                    </div>
                    <div class="col-md-12 text-center">
                        <a href="{{ route('casestudies') }}" class="theme_arrow_link_left"><i class="fas fa-arrow-left color_red">&nbsp;</i> CASE STUDIES</a>
                    </div>

                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <h2 class="color_red">Summary</h2>
                        <p>VIEU is the face detection software along with synchronization service that is sustainable in digital transformation in current era, empowering every person of every organization with encrypted and secured data.
                            <br><br> Facial Recognition Camera with Heat Detection is a useful tool to help you do this; accurately screen people for raised body temperatures using thermal imaging so you can take further preventative action. Help to reassure
                            people on your premises with this Facial recognition camera with thermal scanner. <br><br>VIEU is a straightforward facial-recognition app that allows you to track attendance and monitor sign-ins with a new level of ease. It’s
                            customisable based on your workspace or event
                        </p>
                        <a href="javascript:;" class="theme_btn dark_btn">Download Case Study</a>


                    </div>
                    <div class="col-md-4 offset-md-1 py-5">
                        <div class="casestudy_stats_box">
                            <h2 class="color_red">10000 <span class="fw_300">+</span></h2>
                            <p>Trusted Users</p>
                        </div>
                        <div class="casestudy_stats_box">
                            <h2 class="color_red">100 <span class="fw_300">%</span></h2>
                            <p>Positive Rating</p>
                        </div>
                        <div class="casestudy_stats_box">
                            <h2 class="color_red">10 <span class="fw_300">X</span></h2>
                            <p>Return on platform</p>
                        </div>


                        <!-- <h3 class="color_red">Services</h3>
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
                        <img src="{{ asset('/img/projects/stubbee/2.jpg')}}" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="color_red">Challenge</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet maxime vero esse, quod assumenda quibusdam veniam enim in quisquam nemo. Molestiae nobis architecto nisi atque ipsa, quia quidem adipisci blanditiis Amet maxime vero
                            esse, quod assumenda quibusda. </p>


                    </div>
                    <div class="col-md-6">

                        <h3 class="color_red">Strategy</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet maxime vero esse, quod assumenda quibusdam veniam enim in quisquam nemo. Molestiae nobis adipisicing elit. Amet maxime vero esse, quod assumenda quibusdam veniam enim
                            in quisquam nemo. Molestiae nobis architecto nisi atque ipsa, quia quidem adipisci blanditiis Amet maxime vero esse, quod assumenda quibusda. </p>
                        <br>
                    </div>

                    <div class="col-md-6">

                        <h3 class="color_red">Solution</h3>
                        <p>Lorem ipsum dolor sit amet consectetur quisquam nemo. Molestiae nobis architecto nisi atque ipsa, quia quidem adipisci blanditiis Amet maxime vero esse, quod assumenda quibusda. </p>
                        <p>Amet maxime vero esse, quod assumenda quibusdam veniam enim in quisquam nemo. Molestiae nobis architecto nisi atque ipsa, quia quidem adipisci blanditiis Amet maxime vero esse, quod assumenda quibusda. </p>

                    </div>
                    <div class="col-md-6">

                        <h3 class="color_red">Result</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet maxime vero esse, quod assumenda quibusdam veniam enim in quisquam nemo. Molestiae nobis architecto nisi atque ipsa, quia quidem adipisci blanditiis Amet maxime vero
                            esse, quod assumenda quibusda. </p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet maxime vero esse, quod assumenda quibusdam veniam enim in quisquam nemo. Molestiae nobis architecto nisi atque ipsa, quia quidem adipisci blanditiis Amet maxime vero
                            esse, quod assumenda quibusda. </p>

                    </div>
                </div>
            </div>
        </section>


@endsection