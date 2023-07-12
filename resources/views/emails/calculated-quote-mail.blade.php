<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>Cynosure Designs</title>
    <!-- Jquery Framework -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <!-- API 2 -->
    <script type="text/javascript" src="http://www.stampready.net/api2/api.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat');
        @import url('https://fonts.googleapis.com/css?family=Open Sans');

    </style>
</head>

<body>
    <table data-module="travel 2" data-thumb="thumbnails/thumbnail2.png" data-bgcolor="Main BG" width="100%"
        style="font-family: 'Montserrat',Arial, sans-serif;" bgcolor="#ffffff" border="0" cellspacing="0"
        cellpadding="0">
        <tbody>
            <tr>
                <td align="center">
                    <table align="center" border="0" cellspacing="0" cellpadding="0">
                        <tbody>
                            <tr>
                                <td width="600" bgcolor="#fff" align="center">
                                    <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0"
                                        style="background-color: #222;">
                                        <tbody>
                                            <tr>
                                                <td height="80" align="center">
                                                    <center>
                                                        <br>
                                                        <img data-crop="false" style="display:block;"
                                                            src="{{ asset('img/logo-inv.png') }}" width="80"
                                                            alt="Cynosure Designs" />
                                                    </center>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table width="100%" align="left" border="0" cellpadding="0" cellspacing="0"
                                        style="padding: 20px; background-color: #222;">
                                        <tbody>
                                            <tr height="30"></tr>
                                            
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60" align="center">
                                                    <h3 style="margin-bottom: 0px; text-align: center;">Quote Details</h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Email</b> : {{ $quote->custom_email }}
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Type Of Website</b> : {{ $quote->type_of_website }}
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Total Pages</b> : {{ $quote->no_of_pages }}
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            @if($quote->per_page_cost)
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Pages Cost</b> : £{{ $quote->per_page_cost }}
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            @endif
                                            @if($quote->want_us_to_provide_content)
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Want Us To Provide Content</b> : {{ $quote->want_us_to_provide_content!=null ? '(Yes) £'.$quote->want_us_to_provide_content:'NO' }}
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            @endif
                                            @if($quote->want_us_to_provide_images)
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Want Us To Provide Images</b> : {{ $quote->want_us_to_provide_images!=null ? '(Yes) £'.$quote->want_us_to_provide_images:'NO' }}
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            @endif
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60" align="center">
                                                    <h3 style="margin-bottom: 0px; text-align: center;">Basic Features</h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            @if($quote->live_chat)
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Live Chat</b> : £{{ $quote->live_chat}}
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            @endif
                                            @if($quote->blog)
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Blog</b> : £{{ $quote->blog}}
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            @endif
                                            @if($quote->gallery)
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Gallery</b> : £{{ $quote->gallery}}
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            @endif
                                            @if($quote->social_media)
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Social Media</b> : £{{ $quote->social_media}}
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            @endif
                                            @if($quote->portfolio)
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Portfolio</b> : £{{ $quote->portfolio}}
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            @endif
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60" align="center">
                                                    <h3 style="margin-bottom: 0px; text-align: center;">Optional Extras</h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            @if($quote->domain_name)
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Domain Name</b> : £{{ $quote->domain_name}}
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            @endif
                                            @if($quote->yearly_hosting)
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Yearly Hosting</b> : £{{ $quote->yearly_hosting}}
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            @endif
                                            @if($quote->speed_optimization)
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Speed Optimization</b> : £{{ $quote->speed_optimization}}
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            @endif
                                            
                                            @if($quote->advanced_seo)
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Advanced Seo</b> : £{{ $quote->advanced_seo}}
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            @endif
                                            @if($quote->extra_details)
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Extra Details</b> : {{ $quote->extra_details}}
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            @endif
                                            @if($quote->start_date)
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Start Date</b> : {{ $quote->start_date}}
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            @endif
                                            <tr>
                                                <td height="20"><hr></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Total</b> : £{{ $quote->total}}
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <table bg-color="#222" style="font-family: 'Montserrat', Arial, sans-serif;color:#fff;" width="100%;"
         align="center" border="0" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td data-bg="header bg" data-bgcolor="header bg" align="center">
                    <table align="center"  border="0" cellpadding="0" cellspacing="0">
                        <tbody>
                            <tr>
                                <td width="600" align="center" bgcolor="#fff">
                                    <table width="100%" border="0" align="left" cellpadding="0" cellspacing="0" style="padding: 20px; background-color: #222;">
                                        <tbody>
                                            <tr>
                                                <td height="10"></td>
                                            </tr>
                                            <tr>
                                                <td align="center"
                                                    data-link-style="text-decoration:none; color:#fff;"
                                                    data-link-color="Content" data-size="Content" data-color="Content"
                                                    style="font-family: 'Open Sans', Arial, sans-serif; font-size:15px; color:#fff; line-height:30px;">

                                                    <singleline>
                                                        Connect with us 
                                                    </singleline>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="10"></td>
                                            </tr>
                                            <tr>
                                                <td align="center"
                                                    data-link-style="text-decoration:none; color:#fff;"
                                                    data-link-color="Content" data-size="Content" data-color="Content"
                                                    style="font-family: 'Open Sans', Arial, sans-serif; font-size:15px; color:#fff; line-height:30px;">

                                                    <a href="https://www.facebook.com/" > <img src="{{ asset('/img/icons/facebook.png') }}" width="30" alt=""></a>
                                                    <a href="https://twitter.com/" > <img src="{{ asset('/img/icons/twitter.png') }}" width="30" alt=""></a>
                                                    <a href="https://www.instagram.com/cynosuredesignsuk/" > <img src="{{ asset('/img/icons/instagram.png') }}" width="30" alt=""></a>
                                                    <a href="https://www.linkedin.com/company/cynosure-designs" > <img src="{{ asset('/img/icons/linkedin.png') }}" width="30" alt=""></a>
                                                    <a href="https://youtube.com/" > <img src="{{ asset('/img/icons/youtube.png') }}" width="30" alt=""></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="10"></td>
                                            </tr>
                                            <tr>
                                                <td align="center"
                                                    data-link-style="text-decoration:none; color:#fff;"
                                                    data-link-color="Content" data-size="Content" data-color="Content"
                                                    style="font-family: 'Open Sans', Arial, sans-serif; font-size:15px; color:#fff; line-height:30px;">
                                                    <singleline>
                                                        © 2022 Reserved by <a href="https://cynosuredesigns.co.uk/"
                                                            style="font-family: 'Open Sans', Arial, sans-serif; font-size:15px; color:#fff; text-decoration: none;"
                                                            data-color="copy right color">Cynosure Designs</a>
                                                    </singleline>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="10"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

</body>

</html>
