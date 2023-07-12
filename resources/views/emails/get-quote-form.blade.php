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
                                                    <h3 style="margin-bottom: 0px;">Quote Details</h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Name</b> : {{ $quote->name }}
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Email</b> : {{ $quote->email }}
                                                </td>
                                            </tr>
                                      

                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Contact Number</b> : {{ $quote->phone }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Company</b> : {{ $quote->company }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Budget</b> : {{ $quote->budget }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Comments</b> : {{ $quote->comments }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Where you heard about us?</b> : {{ $quote->source }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Page Source</b> : <a href="{{ $quote->page_source }}">{{ $quote->page_source }}</a>
                                                </td>
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
