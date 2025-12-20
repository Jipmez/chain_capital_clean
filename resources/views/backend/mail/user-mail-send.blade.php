<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&display=swap" rel="stylesheet">
    <title>{{ $details['title'] }}</title>
    <style>
        @media (max-width: 650px) {
            .container {
                width: 550px;
            }
        }

        @media (max-width: 500px) {
            .container {
                width: 400px;
            }
        }

        @media (max-width: 380px) {
            .container {
                width: 340px;
            }
        }

        @media (max-width: 320px) {
            .container {
                width: 290px;
            }
        }

    </style>
</head>
<body style="margin: 0; padding: 0; font-size: 18px; font-family: 'Jost', sans-serif; font-weight: 400; background: #2f45f0">
<div class="container" style="width: 650px; margin: 0 auto; padding-top:2px; padding-bottom: 5px;">
    <div class="header" style="padding: 30px 30px; background: #020C12;" align="center">
        <a href="{{ $details['site_link'] }}" style="text-decoration: none; transition: 0.3s;">
            <img style="width: 150px;" src="{{ $details['site_logo'] }}" alt="">
        </a>
    </div>
    <div class="main-content">

        <div class="contents" style="color: #000; background: #f2fcff; padding: 35px;">
            <h2 class="title"
                style="font-size: 32px; font-weight: 700; color: #000; margin-bottom: 15px;">{{ $details['title'] }}</h2>
            <div class="greetings" style="margin-bottom: 10px; margin-top: 10px;font-size: 24px;color:#000;font-weight: 700;">
                {{ $details['salutation'] }}
            </div>
            <p style="margin-bottom: 35px; line-height: 40px; font-size: 18px;">{!! $details['message_body'] !!}</p>
           <table role="presentation" cellpadding="0" cellspacing="0" border="0" align="center" style="margin: 20px auto;">
                <tr>
                    <td align="center" bgcolor="#2C5364"
                        style="
                            border-radius: 4px;
                            padding: 15px 24px;
                            white-space: nowrap;
                        ">
                        <a href="{{ $details['button_link'] }}"
                        style="
                            font-size: 16px;
                            font-weight: 600;
                            color: #ffffff;
                            text-decoration: none;
                            display: inline-block;
                            text-transform: uppercase;
                        ">
                            {{ $details['button_level'] }}
                        </a>
                    </td>
                </tr>
           </table>
            @if($details['footer_status'])
                <div class="content-footer" style="margin-top: 35px;"><b><p style="font-size: 24px !important; line-height: 25px !important;">{!! $details['footer_body'] !!}</p>
               </b> </div>
            @endif
        </div>
        @if($details['bottom_status'])
            <div class="newslatter-bottom" style="padding: 35px; background: #fff; margin-top: 15px;">
                <h3 class="title"
                    style="font-size: 18px; margin-bottom: 15px; font-weight: 500;">{{ $details['bottom_title'] }}</h3>
                <p class="text" style="font-size: 18px; line-height: 24px;">{!! $details['bottom_body'] !!}</p>
                <a href="{{ $details['site_link'] }}" class="link"
                   style="font-size: 18px; font-weight: 500; color: #e73667; display: inline-block; margin-top: 15px; text-decoration: none;">Learn
                    More</a>
            </div>
        @endif
    </div>
</div>
</body>
</html>
