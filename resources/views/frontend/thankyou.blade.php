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
            .thankyou-wrapper{
              width:100%;
              height:auto;
              margin:auto;
              background:#ffffff; 
              padding:10px 0px 50px;
            }
            .thankyou-wrapper h1{
              font:100px Arial, Helvetica, sans-serif;
              text-align:center;
              color:#333333;
              padding:0px 10px 10px;
            }
            .thankyou-wrapper p{
              font:26px Arial, Helvetica, sans-serif;
              text-align:center;
              color:#333333;
              padding:5px 10px 10px;
            }
            .thankyou-wrapper a{
              font:26px Arial, Helvetica, sans-serif;
              text-align:center;
              color:#ffffff;
              display:block;
              text-decoration:none;
              width:250px;
              background:#E47425;
              margin:10px auto 0px;
              padding:15px 20px 15px;
              border-bottom:5px solid #F96700;
            }
            .thankyou-wrapper a:hover{
              font:26px Arial, Helvetica, sans-serif;
              text-align:center;
              color:#ffffff;
              display:block;
              text-decoration:none;
              width:250px;
              background:#F96700;
              margin:10px auto 0px;
              padding:15px 20px 15px;
              border-bottom:5px solid #F96700;
            }
        </style>
    </head>
    <body>
        @include('frontend.header')
        
        <section class="login-main-wrapper">
            <div class="main-container">
                <div class="login-process">
                    <div class="login-main-container">
                        <div class="thankyou-wrapper">
                            <h1><img src="http://montco.happeningmag.com/wp-content/uploads/2014/11/thankyou.png" alt="thanks" /></h1>
                              <p>for contacting us, we will get in touch with you soon... </p>
                              <a href="index.html">Back to home</a>
                              <div class="clr"></div>
                          </div>
                          <div class="clr"></div>
                        </div>
                    </div>
                <div class="clr"></div>
            </div>
        </section>

        @include('frontend.footer')
        @include('frontend.script')
    </body>
</html>