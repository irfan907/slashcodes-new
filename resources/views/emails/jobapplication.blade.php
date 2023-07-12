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
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:500;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60" align="left">
                                                    Thank you, <br>
                                                    Your application has been received. We will review your application and get back to you.
                                                    <br>
                                                    <b>Regards!</b>
                                                    <br>
                                                    Cynosure Designs

                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20" style="border-bottom: solid 1px #dadada;"></td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60" align="center">
                                                    <h3 style="margin-bottom: 0px;">Application Details</h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Name</b> : {{$data['name']}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Email</b> : {{$data['email']}}
                                                </td>
                                            </tr>
                                      

                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Contact Number</b> : {{$data['phone']}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                     


                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Job Title</b> : {{$data['job_title']}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Current Company</b> : {{$data['current_company']}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Current Salary</b> : {{$data['current_salary']}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Expected Salary</b> : {{$data['expected_salary']}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Linkedin URL</b> : {{$data['linkedin']}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>How do you here about us</b> : {{$data['hear_about_us']}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                                                                                                 
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Cover</b> : {{$data['cover']}}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td height="20"></td>
                                            </tr>
                                            <tr>
                                                <td style="color:#ffffff;font-family: 'Montserrat',Arial, sans-serif;font-size: 16px;font-weight:normal;letter-spacing:1px;line-height:30px;"
                                                    data-bgcolor="Title" data-color="Title" data-size="Title"
                                                    data-min="12" data-max="60">
                                                    <b>Resume</b> : <a href="{{$data['resume']}}" target="_blank">Click Here</a>
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

                                                    <a href="https://www.facebook.com/lifeatcynosuredesigns/" > <img src="{{ asset('/img/icons/facebook.png') }}" width="30" alt=""></a>                                                    
                                                    <a href="https://www.instagram.com/cynosuredesignsuk/" > <img src="{{ asset('/img/icons/instagram.png') }}" width="30" alt=""></a>
                                                    <a href="https://www.linkedin.com/company/cynosure-designs" > <img src="{{ asset('/img/icons/linkedin.png') }}" width="30" alt=""></a>                                                    
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
