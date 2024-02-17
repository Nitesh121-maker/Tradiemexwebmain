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
        <link rel="icon" type="image/x-icon" href="assets/img/Favicon Logo.png">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        @include('frontend.link')
        <style>
            .thank-you-section {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                background-image: url('thank-you-bg.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-position: center;
                background-color: #f6f9fc;
            }

            .thank-you-container {
                text-align: center;
                padding: 50px;
                background-color: #f6f9fc;
                border-radius: 10px;
                /* box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); */
            }

            .thank-you-heading {
                font-size: 48px;
                margin-bottom: 30px;
                color: #585858;
            }

            .thank-you-message {
                font-size: 24px;
                margin-bottom: 50px;
                color: #585858;
            }

            .back-to-home-button {
                display: inline-block;
                padding: 15px 30px;
                border-radius: 10px;
                background-color: #585858;
                color: #ffffff;
                text-decoration: none;
                transition: background-color 0.3s ease;
            }

            .back-to-home-button:hover {
                background-color: #3b3b3b;
            }
        </style>
    </head>
    <body>
        @include('frontend.header')
        
        <section class="thank-you-section">
            <div class="thank-you-container">
                <h1 class="thank-you-heading">Thank you for your purchase!</h1>
                <p class="thank-you-message">Your order is being processed and will be shipped to you shortly. Thank you for choosing us!</p>
                <a href="index.html" class="back-to-home-button">Back to Home</a>
            </div>
        </section>

        @include('frontend.footer')
        @include('frontend.script')
    </body>
</html>