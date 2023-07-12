@extends('layouts.master')

@section('meta_title', 'Leave Application Form | Web Design, Development & Digital Marketing Agency In UK')
@section('meta_description', 'Call us at +44 (0)207 476 6464 or visit our office: Suite F25, Expressway Studios 1 Dock Road London, E16 1AH.')



@section('canonical', "https://cynosuredesigns.co.uk/leave-application-form")

@section('bodyClass', 'contact_pg')


@section('script_css')
<meta itemprop="image" content="{{ asset('/img/cynosuredesigns.jpg') }}">
<meta property="og:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />
<meta name="twitter:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
            "@type": "ListItem",
            "position": 1,
            "name": "Home",
            "item": "https://cynosuredesigns.co.uk/"
        }, {
            "@type": "ListItem",
            "position": 2,
            "name": "Leave Application Form",
            "item": "https://cynosuredesigns.co.uk/leave-application-form"
        }]
    }
</script>

<style>
    .contact_form {
        background: #fff;
        text-align: left;
    }

    .contact_form label {
        display: block !important;
    }

    .contact_form .form-control {
        border: 1px solid #ced4da;
    }

    .contact_form .col-md-6,
    .contact_form .col-md-4,
    .contact_form .col-md-12 {
        padding-left: 5px;
        padding-right: 5px;
    }
</style>

{!! NoCaptcha::renderJs() !!}
@append

@section('content')

<section class="inner_page_header  full_h_sec services_main_banner fit_content">
    <img src="{{asset('/img/header-bg.jpg')}}" class="desktop_banner_img" alt="Contact Cynosure Designs">
    <img src="{{asset('/img/header-bg-mbl.jpg')}}" class="mobile_banner_img object_left" alt="Web Design, Development & Digital Marketing Agency In UK">
    <div class="full_h_inner">
        <div class="container">
            <div class="row">


                <div class="col-md-12">

                    <div class="contact_form">
                        <form method="POST" action="{{ route('leave-form') }}" enctype="multipart/form-data" id="contactForm">
                            @csrf
                            @honeypot



                            <div class="row">

                                <div class="col-md-12">
                                    <h2 class="pb-3">Leave Application Form</h2>
                                </div>

                                <div class="col-md-4">
                                    <label for="emp_name">Employee Name</label>
                                    <input id="emp_name" name="emp_name" type="text" class="form-control" value="{{ old('emp_name') != '' ? old('emp_name'): '' }}" required="">
                                    @error('emp_name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="emp_email">Employee Email</label>
                                    <input id="emp_email" name="emp_email" type="email" class="form-control" value="{{ old('emp_email') != '' ? old('emp_email'): '' }}" required="">
                                    @error('emp_email')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="emp_phone">Contact No.</label>
                                    <input id="emp_phone" name="emp_phone" type="tel" class="form-control" value="{{ old('emp_phone') != '' ? old('emp_phone'): '' }}" required="">
                                    @error('emp_phone')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="reason">Reason</label>
                                    <select name="reason" id="reason" class="form-control">
                                        <option value="">Select Reason</option>                                        
                                        <option value="Casual Leave">Casual Leave</option>
                                        <option value="Sick Leave">Sick Leave</option>
                                        <option value="Annual Leave">Annual Leave</option>
                                    </select>
                                    @error('reason')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="date_from">Date From</label>
                                    <input id="date_from" name="date_from" type="date" class="form-control" value="{{ old('date_from') != '' ? old('date_from'): '' }}" required="">
                                    @error('date_from')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="date_to">Date To</label>
                                    <input id="date_to" name="date_to" type="date" class="form-control" value="{{ old('date_to') != '' ? old('date_to'): '' }}" required="">
                                    @error('date_to')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                </div>

                                <div class="col-md-12">
                                    <label for="">Comments</label>
                                    <textarea is="comments" name="comments" class="form-control" rows="4">{{ old('comments') != '' ? old('comments'): '' }}</textarea>

                                </div>
                                <div class="form-group{{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">

                                    <div class="col-md-12">
                                        {!! app('captcha')->display() !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="theme_btn dark_btn">Submit now</button>
                        </form>

                        <!-- <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                                <script>
                                hbspt.forms.create({
                                    region: "na1",
                                    portalId: "20790765",
                                    formId: "cef2c976-7742-4426-a50b-1e1202da6128"
                                });
                                </script> -->
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



@endsection