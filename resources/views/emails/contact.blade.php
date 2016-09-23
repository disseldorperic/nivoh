<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>Contact - Nivoh</title>
    <style type="text/css">
        html {
            height: 100%;
            background: #f9f9f9
        }

        body {
            margin: 0;
            padding: 0;
            min-width: 100% !important;
            height: 100% !important;
            background: #f9f9f9
        }

        .content {
            width: 600px;
            max-width: 560px;
            font-family: Arial;
            font-size: 12px;
            line-height: 1.8em;
            color: #333333;
        }

        a {
            color: #153f1c !important;
            text-decoration: none !important;
        }

        a:hover {
            color: #153f1c;
            text-decoration: underline !important;
        }

        @media only screen and (min-device-width: 601px) {
            .content {
                width: 560px !important;
            }
        }

        b {
            font-size: 14px;
            margin-top: 4px;
        }
    </style>
</head>
<body bgcolor="#ffffff" height="100%" padding="0" margin="0">
    <table width="100%" bgcolor="#ffffff" border="0" cellpadding="0" cellspacing="0" height="96%" style="height:96%">
        <tr valign="top">
            <td>
                <!--[if (gte mso 9)|(IE)]>
                <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td>
                <![endif]-->
                <table class="content" align="center" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td>
                            <table cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td height="30">&nbsp;</td>
                                </tr>
                                <tr>
                                    <td valign="top" align="left" style="padding:0 20px;">
                                        <table cellspacing="0" cellpadding="0" border="0">
                                            <tr>
                                                <td>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="width:100%; text-align:left; min-height: 20px; padding: 30px; margin-bottom: 20px; background-color: #f5f5f5; border: 1px solid #e3e3e3; border-radius: 4px; -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05); box-shadow: inset 0 1px 1px rgba(0,0,0,.05); color:#414141; font-size:14px;">
                                                    <p>Beste {{ $request->naam }}, <br /><br />
                                                        Bedankt voor het invullen van ons contactformulier.
                                                        Wij zullen zo snel mogelijk contact met u opnemen.
                                                        <br /><br />
                                                        Hieronder vindt u de gegevens van uw aanvraag:<br /><br />

                                                        @if ($request->organisatie)
                                                            <b>Organisatie:</b> {{ $request->organisatie }}<br />
                                                        @endif
                                                        @if ($request->naam)
                                                            <b>Naam:</b> {{ $request->naam }}<br />
                                                        @endif
                                                        <b>E-mail:</b> {{ $request->email }}<br />

                                                        <br /><b>Bericht:</b><br> {{ $request->bericht }}

                                                        <br /><br />
                                                        Met vriendelijke groet,<br /><br/>
                                                        Stichting Nivoh</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="middle" align="center" height="100">
                                        <img class="footerlogo" src="http://www.nivoh.nl/images/select/logo.png" alt="Nivoh" width="180">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
                <!--[if (gte mso 9)|(IE)]>
                </td>
                </tr>
                </table>
                <![endif]-->
            </td>
        </tr>
    </table>
</body>
</html>





