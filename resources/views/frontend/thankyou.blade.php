<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="google-site-verification" content="kevV-HFG1JijHyuKnnkIeN6dY_Hb-ueXuqoUv-pPWUU" />
        <meta name="ahrefs-site-verification" content="167ef56daf7b5a6af88ecea027be9df8f7a528cfe6be55f3f794a32094b792f2">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
        <title>
            Thank You!!
        </title>
        <link rel="icon" type="image/x-icon" href="frontend/image/img/Favicon Logo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        @include('frontend.link')
        <style>
            .thank-you-section {
                display: flex;
                justify-content: center;
                align-items: center;
                height: auto;             
                background: rgb(0,80,110);
                background: linear-gradient(90deg, rgba(0,80,110,1) 12%, rgba(0,80,110,1) 56%, rgba(0,126,137,1) 90%);
            }
            .thank-you-container {
                text-align: center;
                padding: 50px;
                border-radius: 10px;
                /* box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); */
            }
            .thank-you-heading {
                font-size: 38px;
                color: #fff;
            }
        </style>
    </head>
    <body>
        @include('frontend.header')
        
        <section class="thank-you-section">
            <div class="thank-you-container">
                <h1 class="thank-you-heading">
                    Thank you for Reaching Out
                    We Will Get Back To You Soon!!
                </h1>
            </div>
        </section>

        @include('frontend.footer')
        @include('frontend.script')
    </body>
</html>