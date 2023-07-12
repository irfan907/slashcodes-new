@extends('layouts.master')

@section('meta_title', 'Privacy Policy | Cynosure Designs')
@section('meta_description', 'View Privacy Policy | Cynosure Designs')

@section('canonical', "https://cynosuredesigns.co.uk/privacy")

@section('bodyClass', '')


@section('script_css')
<meta itemprop="image" content="{{ asset('/img/cynosuredesigns.jpg') }}">
<meta property="og:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />
<meta name="twitter:image" content="{{ asset('/img/cynosuredesigns.jpg') }}" />
@append

@section('content')


<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center pb-5">
                <h1>Privacy Policy</h1>
            </div>
            <div class="col-md-12">
                <p>
                    Cynosure Designs considers protection of your privacy to be of utmost importance and we are committed to providing you with a personalised service that meets your requirements in a way that safeguards your privacy.<br><br>
                    Data Protection<br>
                    We are committed to protecting visitors whilst visiting Cynosure Designs’s website and it is possible to use this website without disclosing any personal data. The site does not facilitate communication between visitors or allows the posting of any information that can be accessed by others. When visiting this site, Cynosure Designs collects information regarding visitors to our website – we track which pages are accessed and when they are accessed.<br><br>
                    We also use information provided by each visitor’s internet service provider which enables us to track usage behaviour and compile data that will allow the continual improvement of this website. Visitors are not identifiable at any stage of this process.<br><br>
                    This website uses email forms to enable visitors to request information on the products and services we offer. We only request information that enables us to serve our customers and do not request data that is not relevant. We make visitors' contact information mandatory [eg. name and email and/or telephone number] and this allows us to respond to visitor’s requests.<br><br>
                    Any other information provided such as company name, number of employees for example, is used solely to assist in visitor’s enquiries. Any information provided is used to process the request[s] visitors have made and is never shared with any third parties.<br><br>
                    Visitors should be assured that we control all data strictly in accordance with the Data Protection Act 1998. And as such, we hold data accurately, securely and only for as long as necessary, and those who submit data have a legal right to a copy of all the information held by Cynosure Designs [please note that an administration fee may be applicable for this service up to a maximum as set by law]. You also have a right to correct any errors that may be present in that information.<br><br>
                </p>
       
            </div>

        </div>
    </div>
</section>

@endsection