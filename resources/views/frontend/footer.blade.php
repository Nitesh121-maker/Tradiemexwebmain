<a href="#" id="scroll" style="display: inline;"><span></span></a>
<footer class="text-center text-lg-start bg-bluish">
    <!-- Forms & Links -->
    <div class="container text-center">
        <div class="row">
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4" style="margin-top: 2.5rem;">
                <h5 class="text-uppercase mb-4 col-xs-12" style="font-weight: 600;">
                    Contact us
                </h5>
                <form action="{{ route('contact.send') }}" method="POST"id="contact-form" enctype="multipart/form-data">
                    @csrf

                    <div class="input-group mb-3">
                        <input name="name" autocomplete="off" required type="text" class="form-control" placeholder="Name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">@</span>
                        <input name="email" autocomplete="off" required type="text" class="form-control" placeholder="Email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
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
                    <div class="input-group mb-3">
                        <input name="number" autocomplete="off" maxlength="10" required type="text" class="form-control" placeholder="Mobile Number" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>

                    <div class="input-group mb-3">
                        <input name="company" autocomplete="off" required type="text" class="form-control" placeholder="Company Name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                    </div>
                    <div class="input-group mb-3">
                        <select name="role" required class="form-select" id="inputGroupSelect02">
                            <option selected>Choose...</option>
                            <option>IMPORT</option>
                            <option>EXPORT</option>
                            <option>BOTH</option>
                        </select>
                        <label class="input-group-text" for="inputGroupSelect02">Options</label>
                    </div>
                    <div class="input-group">
                        <textarea name="message" required class="form-control" placeholder="Your Message" aria-label="With textarea" id= "txt" ></textarea>
                    </div>
                    <div class="btn col-md-12">
                        <button type="Submit" id="submit" class="btn btn-primary flex">
                            Submit 
                        </button>
                        {{-- <button class="g-recaptcha" 
                            data-sitekey="reCAPTCHA_site_key" 
                            data-callback='onSubmit' 
                            data-action='submit' >Submit</button> --}}
                      
                    </div>
                </form>
            </div>

            <div class="col-sm-6 col-xs-6 col-md-3 col-lg-3 col-xl-2 mx-auto mb-4 mobile-footer" style="margin-top: 2.5rem;text-align: start;">
                <h5 class="text-uppercase fw-bold mb-4" style="margin-bottom: 2rem;font-weight: 600;">
                    Company
                </h5>
                <p>
                    <a href="/about-us" class="td-none text-uppercase text-hover">About Us</a>
                </p>
                <p>
                    <a href="/why-choose-us" class="td-none text-uppercase text-hover">WHY CHOOSE US?</a>
                </p>
                <p>
                    <a href="/products" class="td-none text-uppercase text-hover">PRODUCT & SERVICES</a>
                </p>
                <p>
                    <a href="/careers" class="td-none text-uppercase text-hover">CAREERS</a>
                </p>
                <p>
                    <a href="/partners" class="td-none text-uppercase text-hover">PARTNER</a>
                </p>
                <p>
                    <a href="/our-clients" class="td-none text-uppercase text-hover">CLIENTS</a>
                </p>
                <p>
                    <a href="/faqs" class="td-none text-uppercase text-hover">FAQS</a>
                </p>
                <p>
                    <a href="/contact-us" class="td-none text-uppercase text-hover">Contact us</a>
                </p>
            </div>

            <div class="col-sm-6 col-xs-6 col-md-3 col-lg-3 col-xl-2 mx-auto mb-4 mobile-footer" style="margin-top: 2.5rem;text-align: start;">
                <h5 class="text-uppercase fw-bold mb-4" style="margin-bottom: 2rem;font-weight: 600;">
                    Our data
                </h5>
                <p>
                    <a href="/global-trade-data" class="td-none text-uppercase text-hover">Global Trade Data</a>
                </p>
                <p>
                    @if (!empty($continents))
                        @foreach ($continents  as $continent)

                            @if ($continent->continent == 'Africa')
                            @php
                                $suffix='trade-data'  
                            @endphp                        
                                <a href="{{ route('continent.tradeData', [strtolower($continent->continent)]) }}" class="td-none text-uppercase text-hover">
                                    {{ $continent->continent }} Trade Data
                                </a>
                            @endif
                        @endforeach  
                    @else
                        <a href="/africa-trade-data">Data Fetching error</a>
                    @endif 
                </p>
                <p>
                    @if (!empty($continents))
                        @foreach ($continents  as $continent)
                            @if ($continent->continent == 'Asia')                         
                                <a href="{{ route('continent.tradeData', [strtolower($continent->continent)]) }}" class="td-none text-uppercase text-hover">
                                    {{ $continent->continent }} Trade Data
                                </a>
                            @endif
                        @endforeach  
                    @else
                        <a href="/asia-trade-data">Data Fetching error</a>
                    @endif 
                </p>
                <p>
                    @if (!empty($continents))
                        @foreach ($continents  as $continent)
                            @if ($continent->continent == 'Europe')
                                <a href="{{ route('continent.tradeData', [strtolower($continent->continent)]) }}" class="td-none text-uppercase text-hover">
                                    Europe Trade Data
                                </a>
                            @endif
                        @endforeach  
                    @else
                        <a href="/europe-trade-data">Data Fetching error</a>
                    @endif 
                </p>
                <p>
                    @if (!empty($continents))
                        @foreach ($continents  as $continent)
                            @if ($continent->continent == 'North America')
                            <a href="{{ route('continent.tradeData', [strtolower($continent->continent)]) }}" class="td-none text-uppercase text-hover">
                                north america trade data
                            </a>
                            @endif
                        @endforeach  
                    @else
                        <a href="/africa-trade-data">Data Fetching error</a>
                    @endif 
                   
                </p>
                <p>
                    @if (!empty($continents))
                        @foreach ($continents  as $continent)
                            @if ($continent->continent == 'Oceania')
                            <a href="{{ route('continent.tradeData', [strtolower($continent->continent)]) }}" class="td-none text-uppercase text-hover">
                                oceania trade data
                            </a>
                            @endif
                            
                        @endforeach  
                    @else
                        <a href="/africa-trade-data">Data Fetching error</a>
                    @endif 
                </p>
                <p>
                    @if (!empty($continents))
                        @foreach ($continents  as $continent)
                            @if ($continent->continent == 'South America')
                            <a href="{{ route('continent.tradeData', [strtolower($continent->continent)]) }}" class="td-none text-uppercase text-hover">
                                south america data
                            </a>
                            @endif
                        @endforeach  
                    @else
                        <a href="/africa-trade-data">Data Fetching error</a>
                    @endif 
                
                </p>
                <p>
                    <a href="hs-code.php" class="td-none text-uppercase text-hover">HS CODE</a>
                </p>
            </div>

            <div class="col-sm-6 col-xs-12 col-md-3 col-lg-3 col-xl-2 mx-auto mb-4 mobile-footer" style="margin-top: 2.5rem;text-align: start;">
                <h5 class="text-uppercase fw-bold mb-4" style="margin-bottom: 2rem;font-weight: 600;">Countries</h5>
                <p>
                    <a href="/Turkey-export" class="td-none text-uppercase text-hover">Turkey Export data</a>
                </p>
                <p>
                    <a href="/Turkey-import" class="td-none text-uppercase text-hover">Turkey Import data</a>
                </p>
                <p>
                    <a href="/Philippines-import" class="td-none text-uppercase text-hover">philippines Import data</a>
                </p>
                <p>
                    <a href="/Philippines-export" class="td-none text-uppercase text-hover">philippines Export data</a>
                </p>
                <p>
                    <a href="/Vietnam-import" class="td-none text-uppercase text-hover">vietnam import data</a>
                </p>
                <p>
                    <a href="/Vietnam-export" class="td-none text-uppercase text-hover">vietnam export data</a>
                </p>
                <p>
                    <a href="/US-import" class="td-none text-uppercase text-hover">USA export data</a>
                </p>
                <p>
                    <a href="/US-export" class="td-none text-uppercase text-hover">USA import data</a>
                </p>
                <p>
                    <a href="/Russia-import" class="td-none text-uppercase text-hover">Russia import data</a>
                </p>
                <p>
                    <a href="/Russia-export" class="td-none text-uppercase text-hover">Russia export data</a>
                </p>
            </div>
        </div>
    </div>

    <!-- Alert For Link Detection -->
    <div id="snackbar">
        <svg class="bi flex-shrink-0 me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
            <style>svg{fill:#842029}</style>
            <path d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/>
        </svg>
        <b>Link Detected!</b> Form cannot be submitted.
    </div>

    <!-- Social Media -->
    <div class="container">
        <div class="row flex">
            <div class="text-content text-center">
                <h5 style="font-weight: 600;text-align: center;">SOCIAL MEDIA</h5>
            </div>
            <div class="icon-container" style="text-align: center;">
                <a href="https://twitter.com/tradeimex" style="color: #55ACEE;" id="fp" >
                    <i class="fa-brands fa-twitter fa-2xl"></i>
                </a>
                <a href="https://www.facebook.com/tradeimex" style="color: #3B5998;" id="fp">
                    <i  class="fa-brands fa-facebook fa-2xl"></i>
                </a>    
                <a href="https://www.linkedin.com/company/tradeimex/?viewAsMember=true" style="color: #0077B5;" id="fp">
                    <i  class="fa-brands fa-linkedin fa-2xl"></i>
                </a>
                <a href="https://www.youtube.com/@tradeimex" style="color: red;" id="fp">  
                    <i  class="fa-brands fa-youtube fa-2xl"></i>
                </a>
                <a href="https://www.instagram.com/tradeimexinfo?igshid=OGQ5ZDc2ODk2ZA==" style="color: #bc2a8d;" id="fp">  
                    <i  class="fa-brands fa-instagram fa-2xl"></i>
                </a>
                <a href="https://pin.it/63T7r73" style="color: red;" id="fp">  
                    <i  class="fa-brands fa-pinterest fa-2xl"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Copyright, Terms & Conditions -->
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-xl-6 col-xs-12">
                <div style="text-align: center;padding: 20px 0px 0px 0px;">
                    <p style="font-size:14px;font-weight: 600;">
                        Please Read Our
                        <a class="text-hover" href="/terms-of-use">Terms of use</a>,
                        <a class="text-hover" href="/privacy-policy">Privacy Policy</a> &
                        <a class="text-hover" href="/disclaimer">Disclaimer</a>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-xl-6 col-xs-12">
                <div style="text-align: center;padding: 20px 0px 0px 0px;">
                    <p style="font-size:14px">
                        <b>© 2018-2024 by TradeImeX® India. All Rights are Reserved</b>
                    </p>
                </div> 
            </div>
        </div>  
    </div>
</footer>