<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="google-site-verification" content="kevV-HFG1JijHyuKnnkIeN6dY_Hb-ueXuqoUv-pPWUU" />
        <meta name="ahrefs-site-verification" content="167ef56daf7b5a6af88ecea027be9df8f7a528cfe6be55f3f794a32094b792f2">
        <meta name="keywords" content="Import Export Data, Export Import Data Provider, Business Intelligence Report, Import Export Trade Data, Best Market Research, Importers Exporters Data, Buyers List, List of Suppliers, Trade Data, Best Import Export Data" />
        <meta name="robots" content="index, follow" id="robots" />
        <meta name="description" content="TradeImeX is a leading Import Export Trade Data Provider. We Cover 70+ Countries Import Export Trade Data online. Discover the Growth Trend." />
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
        <title>Contact Us - TradeImeX</title>
        <link rel="icon" type="image/x-icon" href="frontend/image/img/Favicon Logo.png">

        @include('frontend.link')

        <!-- Google Tag Manager -->
        <script>
            (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-PVH9BTS');
        </script>
        <!-- End Google Tag Manager -->
    </head>
    <body>
       @include('frontend.header')

        <!-- Overview & contact form -->
        <div class="container-fluid padding-tb bg-bluish">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="text-content">
                            <h1>
                                Speak with an expert
                            </h1>
                        </div>
                        <div class="card-content" style="padding-top: 6%;">
                            <div class="head">
                                <h3>Our team can help you:</h3>
                            </div>
                            <div class="card-content-list">
                                <li class="list text-white">Demo products of interest.</li>
                                <li class="list text-white">Design a solution to accept and optimize payments, add new revenue streams and automate financial workflows.</li>
                                <li class="list text-white">Access custom pricing including cost+ pricing, volume discounts, and more.</li>
                                <li class="list text-white">Get started on Stripe faster with dedicated implementation and support services.</li>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Form -->
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="contact-form">
                            @if(session('success'))
                                <div class="alert alert-success"id="success-alert">
                                    {{ session('success') }}
                                </div>
                        
                            @endif
                            <form action="{{ route('contact.send') }}" method="POST" id="contact-form" class="form-control" method="post" style="border: 0px;">
                                @csrf

                                <div class="form-floating mb-3 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <input autocomplete="off" required type="text" class="form-control" name="name" id="floatingInput" placeholder="Name">
                                    <label for="floatingInput">Name</label>
                                </div>
                                <div class="form-floating mb-3 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <input autocomplete="off" required type="email" class="form-control" name="email" id="floatingInput" placeholder="Email">
                                    <label for="floatingInput">Email</label>
                                </div>
                                <div class="input-group mb-3">
                                    <select name="country_region" required class="form-select" id="inputGroupSelect02">
                                        <option value="" Selected>Select Country Region</option>
                                        <option value="United States">United States</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Åland Islands">Åland Islands</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antarctica">Antarctica</option>
                                        <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia-Herzegovina">Bosnia-Herzegovina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="British Virgin Islands">British Virgin Islands</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Channel Islands">Channel Islands</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Islands">Cocos Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Croatia">Croatia</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Curaçao">Curaçao</option>
                                        <option value="Cyprus">Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guernsey">Guernsey</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Ivory Coast">Ivory Coast</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jersey">Jersey</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Laos">Laos</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libya">Libya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                        <option value="Moldova">Moldova</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montenegro">Montenegro</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="North Korea">North Korea</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Palestinian Authority">Palestinian Authority</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Republic of the Congo">Republic of the Congo</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russia</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Barthélemy">Saint Barthélemy</option>
                                        <option value="Saint Helena">Saint Helena</option>
                                        <option value="Saint Kitts &amp; Nevis">Saint Kitts &amp; Nevis</option>
                                        <option value="Saint Lucia">Saint Lucia</option>
                                        <option value="Saint Martin">Saint Martin</option>
                                        <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                        <option value="Saint Vincent &amp; Grenadines">Saint Vincent &amp; Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Serbia">Serbia</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra Leone">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                                        <option value="South Korea">South Korea</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syria</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Timor-Leste">Timor-Leste</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks &amp; Caicos Islands">Turks &amp; Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Vatican City">Vatican City</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Vietnam</option>
                                        <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                        <option value="Wallis and Futuna">Wallis and Futuna</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select>
                                </div>
                                <div class="form-floating mb-3 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <input autocomplete="off" required maxlength="10" type="tel" class="form-control" name="number" id="floatingInput" placeholder="Mobile Number">
                                    <label for="floatingInput">Mobile Number</label>
                                </div>

                                <div class="form-floating mb-3 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <input autocomplete="off" required type="text" class="form-control" name="company" id="floatingInput" placeholder="Company Name">
                                    <label for="floatingInput">Company Name</label>
                                </div>
                                <div class="form-floating mb-3 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <select required class="form-select" name="role" id="floatingSelect" aria-label="Floating label select example">
                                        <option>IMPORT</option>
                                        <option>EXPORT</option>
                                        <option>BOTH</option>
                                    </select>
                                    <label for="floatingSelect">Choose...</label>
                                </div>
                                <div class="form-floating mb-3 col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <textarea required class="form-control" name="message" placeholder="Leave A Message To Us" id="txt" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Message</label>
                                </div>
                                <div class="btn col-md-12">
                                    <button type="Submit" class="btn btn-primary">
                                        Submit 
                                    </button>   
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Maps -->
        <div class="responsive-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d437.41469798752604!2d77.13661697124729!3d28.7100535255674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d071148ef8341%3A0xe55ab5577ff48f81!2sTradeImex%20-%20Import%20Export%20Data%20Provider%2C%20Data%20Analytic%20%26%20Shipment%20Services!5e0!3m2!1sen!2sin!4v1702627978347!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0"  loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen></iframe>
        </div>

        <!-- Get In Touch -->
        <div class="container-fluid bg-bluish padding-tb">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
                        <div class="text-content">
                            <h1>Get In Touch</h1>
                            <p>
                                Thanks for visiting tradeimex.in! It will be our pleasure to hear from you. 
                                If you have any queries with respect to any element of the website or want 
                                to know more about us, then feel free to contact us through our helpline numbers, 
                                chatbot or via email. Our specialists will get in touch with you shortly. 
                                We are committed to resolve every query that you have regarding our services. 
                                Thankyou!
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6" style="padding-top: 3%;">
                        <div class="row">
                            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6" style="padding-bottom: 2%;">
                                <div class="core-content">
                                    <div class="image" style="display: flex;">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 576 512" style="fill:#0b5ed7;">
                                        <path d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152V422.8c0 9.8-6 18.6-15.1 22.3L416 503V200.4zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6V451.8L32.9 502.7C17.1 509 0 497.4 0 480.4V209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77V504.3L192 449.4V255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152a40 40 0 1 0 0-80 40 40 0 1 0 0 80z"/>
                                    </svg>
                                    </div>
                                    <h2>Address:</h2>
                                    <p class="fw-600" style="padding: 0px 0px 0px 0px;">
                                        372, 3rd floor, RU BLOCK, <br> Pitampura 110034, New Delhi
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6" style="padding-bottom: 2%;">
                                <div class="core-content">
                                    <div class="image" style="display: flex;">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 384 512" style="fill:#0b5ed7;">
                                            <path d="M80 0C44.7 0 16 28.7 16 64V448c0 35.3 28.7 64 64 64H304c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H80zm80 432h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H160c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
                                        </svg>
                                    </div>
                                    <h2>Phone:</h2>
                                    <p class="fw-600" style="padding: 0px 0px 0px 0px;">
                                        <a class="text-hover" href="tel:+91-9319646667">+91-9319646667</a><br>
                                        <a class="text-hover" href="tel:+91-7042034462">+91-7042034462</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6" style="padding-bottom: 2%;">
                                <div class="core-content">
                                    <div class="image" style="display: flex;">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512" style="fill:#0b5ed7;">
                                            <path d="M256 64C150 64 64 150 64 256s86 192 192 192c17.7 0 32 14.3 32 32s-14.3 32-32 32C114.6 512 0 397.4 0 256S114.6 0 256 0S512 114.6 512 256v32c0 53-43 96-96 96c-29.3 0-55.6-13.2-73.2-33.9C320 371.1 289.5 384 256 384c-70.7 0-128-57.3-128-128s57.3-128 128-128c27.9 0 53.7 8.9 74.7 24.1c5.7-5 13.1-8.1 21.3-8.1c17.7 0 32 14.3 32 32v80 32c0 17.7 14.3 32 32 32s32-14.3 32-32V256c0-106-86-192-192-192zm64 192a64 64 0 1 0 -128 0 64 64 0 1 0 128 0z"/>
                                        </svg>
                                    </div>
                                    <h2>Email</h2>
                                    <p class="fw-600" style="padding: 0px 0px 0px 0px;">
                                        <a class="text-hover" href="mailto:info@tradeimex.in">
                                            info@tradeimex.in 
                                        </a>
                                        <br>
                                        <a class="text-hover" href="mailto:sales@tradeimex.in">
                                            sales@tradeimex.in
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-6 col-md-6 col-lg-6" style="padding-bottom: 2%;">
                                <div class="core-content">
                                    <div class="image" style="display: flex;">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512" style="fill:#0b5ed7;">
                                            <path d="M181.3 32.4c17.4 2.9 29.2 19.4 26.3 36.8L197.8 128h95.1l11.5-69.3c2.9-17.4 19.4-29.2 36.8-26.3s29.2 19.4 26.3 36.8L357.8 128H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H347.1L325.8 320H384c17.7 0 32 14.3 32 32s-14.3 32-32 32H315.1l-11.5 69.3c-2.9 17.4-19.4 29.2-36.8 26.3s-29.2-19.4-26.3-36.8l9.8-58.7H155.1l-11.5 69.3c-2.9 17.4-19.4 29.2-36.8 26.3s-29.2-19.4-26.3-36.8L90.2 384H32c-17.7 0-32-14.3-32-32s14.3-32 32-32h68.9l21.3-128H64c-17.7 0-32-14.3-32-32s14.3-32 32-32h68.9l11.5-69.3c2.9-17.4 19.4-29.2 36.8-26.3zM187.1 192L165.8 320h95.1l21.3-128H187.1z"/>
                                        </svg>
                                    </div>
                                    <h2>Social Icons</h2>
                                    <div class="icon-container">
                                        <a href="https://twitter.com/tradeimex" style="color: #55ACEE;" id="fp" >
                                            <i  class="fab fa-2x fa-twitter"></i>
                                        </a>
                                        <a href="https://www.facebook.com/tradeimex" style="color: #3B5998;" id="fp">
                                            <i  class="fab fa-2x fa-facebook"></i>
                                        </a>    
                                        <a href="https://www.linkedin.com/company/tradeimex/?viewAsMember=true" style="color: #0077B5;" id="fp">
                                            <i  class="fab fa-2x fa-linkedin"></i>
                                        </a>
                                        <br>
                                        <a href="https://www.youtube.com/channel/UCTHU41uHt6xOub4XDy2Egxw" style="color: red;" id="fp">  
                                            <i  class="fab fa-2x fa-youtube"></i>
                                        </a>
                                        <a href="https://www.instagram.com/tradeimexinfo?igshid=OGQ5ZDc2ODk2ZA==" style="color: #bc2a8d;" id="fp">  
                                            <i  class="fab fa-2x fa-instagram"></i>
                                        </a>
                                        <a href="https://pin.it/63T7r73" style="color: red;" id="fp">  
                                            <i  class="fab fa-2x fa-pinterest"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Last Partner tab -->
        @include('frontend.tab_inc')
        @include('frontend.footer')
        @include('frontend.script')
    </body>
</html>