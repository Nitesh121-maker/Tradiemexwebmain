<!Doctype html>
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="google-site-verification" content="kevV-HFG1JijHyuKnnkIeN6dY_Hb-ueXuqoUv-pPWUU"/>
        <meta name="ahrefs-site-verification" content="167ef56daf7b5a6af88ecea027be9df8f7a528cfe6be55f3f794a32094b792f2">
        <meta name="keywords" content="Import Export Data,Export Import Data, Import Export Data Provider, Export Import Data Provider, Business Intelligence Report, Import Export Trade Data, Best Market Research, Importers Exporters Data, Buyers List, List of Suppliers, Trade Data, Best Import Export Data" />
        <meta name="robots" content="index, follow" id="robots" />
        <meta name="description" content="Discover the power of global trade data with TradeImeX - the leading import-export data provider for 80+ countries. Uncover market insights, make informed business decisions, and expand your reach worldwide with our comprehensive market research and data services. Join the industry experts and unlock new opportunities today!"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
       
        <link rel="icon" type="image/x-icon" href="frontend/img/Favicon Logo.png">

       
        @include('frontend.link')
        {{-- <script src='https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js'></script> --}}
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
        {{-- <script src="frontend/globe/main.js"></script>
        <script src="frontend/globe/src/main.js"></script> --}}
        {{-- <style>
            #glob {
                max-width: 100%; /* Limit the maximum width to the screen width */
                /* overflow: hidden;  */
            }

            .app-wrapper {
                position: relative;
                width: 100%;
                padding-bottom: 75%; /* Set a fixed aspect ratio (adjust as needed) */
                /* overflow: hidden; */
            }

            canvas {
                position: absolute;
                position: absolute;
                top: -10vh;
                left: -50vh;
                width: 100%;
                height: 100%;
            }

            .container-globe {
                height: 200px; /* Adjust the height as needed */
                position: relative;
            }

            .canvas-1 {
                width: 50%;
                height: 50%;
            }
        </style> --}}

            <link rel="icon" href="Cimg/favicon.png">
                
            <link rel="stylesheet" type="text/css" href={{ asset('index.css') }}>

            <script async src="https://unpkg.com/es-module-shims@1.6.3/dist/es-module-shims.js"></script>
            <script type="importmap">
              {
                "imports": {
                  "three": "https://unpkg.com/three@0.151.0/build/three.module.js",
                  "three/addons/": "https://unpkg.com/three@0.151.0/examples/jsm/"
                }
              }
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js" integrity="sha512-cOH8ndwGgPo+K7pTvMrqYbmI8u8k6Sho3js0gOqVWTmQMlLIi6TbqGWRTpf1ga8ci9H3iPsvDLr4X7xwhC/+DQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
    </head>
    <body>
        @include('frontend.header')
        <!-- Overview section -->
        <div class="container-fluid padding-tb bg-bluish">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <div class="text-content">
                            <span>Overview</span>
                            <div class="text-uppercase">
                                <h1 class="gradient-h2">
                                    ACCESS GLOBAL TRADE DATA OF MORE THAN 80 COUNTRIES
                                </h1>
                            </div>
                            <p class="text-black" style="color:#fff">
                                TradeImeX is a leading global trade data provider, offering comprehensive import-export data
                                and trade data information for more than 80 countries and across 6 continents. Our platform
                                provides valuable insights and information along with market research to businesses of all sizes,
                                helping them make informed decisions and stay ahead in the competitive international market.
                                With TradeImeX, you&#39;ll have access to accurate and up-to-date data that is crucial for successful
                                global trade operations. TradeImeX gives you the most recent, accurate, and updated trade
                                data. We provide you with our three flagship products to access the trade data: the Bill of
                                Lading, Statistical, and Customs databases according to the adaptations required by your
                                trade customizations.  Whether you are looking to expand your market, identify potential
                                partners, or stay updated with the latest trade trends, TradeImeX is here to help you navigate
                                the world of international trade with ease and confidence.
                            </p>
                            <div class="btn-holder">
                                <a href="why-choose-us" class="ybtn ybtn-header-color">WHY CHOOSE US ?</a>
                                <a href="contact-us" class="ybtn ybtn-white ybtn-shadow ">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="container-globe">
                            <canvas class="canvas-1"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Why is TradeImeX Unique With Key Points -->
        <div class="container-fluid bg-dark-custom padding-tb">
            <div class="container">
                <div class="text-content">
                    <h2 class="text-center text-white">
                        Why is TradeImeX Unique?
                    </h2>
                </div>
            </div>
            <!-- Key Points -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 kp-width">
                        <div class="card-content cdh-16 bg-none">
                            <div class="icon">
                                <img src="frontend/image/img/reliable-data.png" width="20%" style="padding: 0px 0px 0px 10px;">
                            </div>
                            <div class="head">
                                <h3 class="text-white">100% RELIABLE DATA</h3>
                            </div>
                            <p class="text-white" style="font-size: 14px;">
                                We promise to offer a 100% trustworthy database. We have acquired
                                detailed and accurate shipping information from databases of more than 80 nations
                                and across 6 continents. With TradeImeX you get completely reliable data for your
                                business so that you can stay ahead.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 kp-width">
                        <div class="card-content cdh-16 bg-none">
                            <div class="icon">
                                <img src="frontend/image/img/updated-database.png" width="20%" style="padding: 0px 0px 0px 10px;">
                            </div>
                            <div class="head">
                                <h3 class="text-white">A NEW AND UPDATED DATABASE</h3>
                            </div>
                            <p class="text-white">
                                Our trade data constantly remains up to date. We provide the most recent and
                                updated global trade data for your convenience to make informed trade decisions.
                                Stay ahead in the market with our latest import-export data and make profitable
                                business decisions.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 kp-width">
                        <div class="card-content cdh-17 bg-none">
                            <div class="icon">
                                <img src="frontend/image/img/reliability.png" width="20%" style="padding: 0px 0px 0px 10px;">
                            </div>
                            <div class="head">
                                <h3 class="text-white">TOP BRANDS TRUST US</h3>
                            </div>
                            <p class="text-white">
                                Working with some of the most esteemed clients and brands in the business is an
                                honor for us. Our goal is to provide our clients with accurate, timely, and dependable
                                information that enhances their business. We have gained the trust and loyalty of
                                some of the top brands in the international market.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 kp-width">
                        <div class="card-content cdh-16 bg-none">
                            <div class="icon">
                                <img src="frontend/image/img/devaluation.png" width="20%" style="padding: 0px 0px 0px 10px;">
                            </div>
                            <div class="head">
                                <h3 class="text-white">AFFORDABLE PACKAGES</h3>
                            </div>
                            <p class="text-white">
                                We offer services at extremely affordable rates. TradeImeX offers comprehensive
                                packages with a range of features and benefits that can streamline your import and
                                export business in the world of global trade.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Of Content With Key Points -->

        <!-- Search Live Import Export -->
        <!-- <div class="container-fluid padding-tb bg-img">
            <div class="text-content text-center bg-color">
                <h2 style="font-size: 38px;">
                    Search Import Export Live Data
                </h2>
            </div>
            <div class="container">
                <div class="row bg-green" style="border-radius: 1rem;">
                    <div class="searchbox col-sm-2 col-md-2  col-lg-2">
                        <select class="form-control"  style="border: 0px transparent !important;">
                            <option class="form-control" value="">Select Country</option>
                            Asia
                            <option class="form-control" value="">Bangladesh</option>
                            <option class="form-control" value="">China</option>
                            <option class="form-control" value="">Egypt</option>
                            <option class="form-control" value="">Indonesia</option>
                            <option class="form-control" value="">Iran</option>
                            <option class="form-control" value="">Iraq</option>
                            <option class="form-control" value="">Japan</option>
                            <option class="form-control" value="">Kazakhstan</option>
                            <option class="form-control" value="">Kuwait</option>
                            <option class="form-control" value="">Malaysia</option>
                            <option class="form-control" value="">Pakistan</option>
                            <option class="form-control" value="">Philippines</option>
                            <option class="form-control" value="">Qatar</option>
                            <option class="form-control" value="">Saudi Arabia</option>
                            <option class="form-control" value="">Singapore</option>
                            <option class="form-control" value="">South Korea</option>
                            <option class="form-control" value="">Sri Lanka</option>
                            <option class="form-control" value="">Taiwan</option>
                            <option class="form-control" value="">Thailand</option>
                            <option class="form-control" value="">Turkey</option>
                            <option class="form-control" value="">UAE</option>
                            <option class="form-control" value="">Ukraine</option>
                            <option class="form-control" value="">Uzbekistan</option>
                            <option class="form-control" value="">Vietnam</option>
                            Africa
                            <option class="form-control" value="">Botswana</option>
                            <option class="form-control" value="">Cameroon</option>
                            <option class="form-control" value="">Central Africa</option>
                            <option class="form-control" value="">Chad</option>
                            <option class="form-control" value="">DR Congo</option>
                            <option class="form-control" value="">Ethiopia</option>
                            <option class="form-control" value="">Ghana</option>
                            <option class="form-control" value="">Ivory Coast</option>
                            <option class="form-control" value="">Kenya</option>
                            <option class="form-control" value="">Lesotho</option>
                            <option class="form-control" value="">Liberia</option>
                            <option class="form-control" value="">Malawi</option>
                            <option class="form-control" value="">Namibia</option>
                            <option class="form-control" value="">Niger</option>
                            <option class="form-control" value="">Nigeria</option>
                            <option class="form-control" value="">Sao Tome</option>
                            <option class="form-control" value="">Senegal</option>
                            <option class="form-control" value="">Sierra Leone</option>
                            <option class="form-control" value="">South Africa</option>
                            <option class="form-control" value="">Tanzamia</option>
                            <option class="form-control" value="">Togo</option>
                            <option class="form-control" value="">Uganda</option>
                            <option class="form-control" value="">Zambia</option>
                            <option class="form-control" value="">Zimbabwe</option>
                             America
                            <option class="form-control" value="">Canada</option>
                            <option class="form-control" value="">Costa Rica</option>
                            <option class="form-control" value="">El Salvador</option>
                            <option class="form-control" value="">Guatemala</option>
                            <option class="form-control" value="">Honduras</option>
                            <option class="form-control" value="">Mexico</option>
                            <option class="form-control" value="">Panama</option>
                            <option class="form-control" value="">US</option>
                            <option class="form-control" value="">Argentina</option>
                            <option class="form-control" value="">Bolivia</option>
                            <option class="form-control" value="">Brazil</option>
                            <option class="form-control" value="">Chile</option>
                            <option class="form-control" value="">Colombia</option>
                            <option class="form-control" value="">Ecuador</option>
                            <option class="form-control" value="">Guyana</option>
                            <option class="form-control" value="">Paraguay</option>
                            <option class="form-control" value="">Peru</option>
                            <option class="form-control" value="">Uruguay</option>
                            <option class="form-control" value="">Venezuela</option>
                            Europe
                            <option class="form-control" value="">Austria</option>
                            <option class="form-control" value="">Belgium</option>
                            <option class="form-control" value="">Bulgaria</option>
                            <option class="form-control" value="">Croatia</option>
                            <option class="form-control" value="">Cyprus</option>
                            <option class="form-control" value="">Czech</option>
                            <option class="form-control" value="">Denmark</option>
                            <option class="form-control" value="">Estonia</option>
                            <option class="form-control" value="">Finland</option>
                            <option class="form-control" value="">France</option>
                            <option class="form-control" value="">Germany</option>
                            <option class="form-control" value="">Greece</option>
                            <option class="form-control" value="">Hungary</option>
                            <option class="form-control" value="">Ireland</option>
                            <option class="form-control" value="">Italy</option>
                            <option class="form-control" value="">Kazakhstan</option>
                            <option class="form-control" value="">Kosovo</option>
                            <option class="form-control" value="">Latvia</option>
                            <option class="form-control" value="">Lithuania</option>
                            <option class="form-control" value="">Luxembourg</option>
                            <option class="form-control" value="">Malta</option>
                            <option class="form-control" value="">Moldova</option>
                            <option class="form-control" value="">Netherlands</option>
                            <option class="form-control" value="">Poland</option>
                            <option class="form-control" value="">Portugal</option>
                            <option class="form-control" value="">Russia</option>
                            <option class="form-control" value="">Romania</option>
                            <option class="form-control" value="">Slovenia</option>
                            <option class="form-control" value="">Spain</option>
                            <option class="form-control" value="">Sweden</option>
                            <option class="form-control" value="">Uk</option>
                            <option class="form-control" value="">Ukraine</option>
                            <option class="form-control" value="">Uzbekistan</option>
                            Oceania
                            <option class="form-control" value="">Australia</option>
                            <option class="form-control" value="">Fiji</option>
                            <option class="form-control" value="">New Zealand</option>
                        </select>
                    </div>
                    <div class="searchbox col-sm-2 col-md-2 col-lg-2">
                        <select class="form-control" style="border: 0px transparent !important;">
                            <option class="form-control" value="">Import</option>
                            <option class="form-control" value="">Export</option>
                        </select>
                    </div>
                    <div class="searchbox col-sm-3 col-md-3 col-lg-3">
                        <input type="text" placeholder="Description" class="form-control">
                    </div>
                    <div class="searchbox col-sm-2 col-md-2 col-lg-2">
                        <input type="text" placeholder="HS Code" class="form-control">
                    </div>
                    <div class="searchbox col-sm-3 col-md-3 col-lg-3">
                        <a class="ybtn ybtn-header-color" style="width: 100%;text-align: center;padding: 18px 0px 18px 0px;">
                            Search
                        </a>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Data -->
        <div class="container-fluid bg-white padding-tb">
            <!-- Import Export Overview -->
            <div class="container">
                <div class="text-content">
                    <span>Data</span>
                    <h2 style="text-align: start;">
                        Import-Export Data
                    </h2>
                    <p style="text-align: start;" class="lh-8">
                        TradeImeX is a gateway to a world of import-export data, providing businesses with valuable
                        insights into international trade trends, market demands, and potential business opportunities.
                        Operating as a leading global trade intelligence platform, TradeImeX offers a vast array of
                        comprehensive and accurate data sets, empowering businesses to make informed decisions
                        and stay ahead of the competition. TradeImeX stands out from other platforms due to its vast
                        database, which covers millions of companies and products across over 80 countries. With data
                        collected from various sources such as shipping manifests, customs records, and trade reports,
                        TradeImeX offers unparalleled accuracy and comprehensiveness.
                    </p>
                </div>

                <!-- Key Points -->
                <div class="row">
                    <div class="text-content">
                        <h3>Discover new possibilities in global trade with our Export-Import Data</h3>
                        <p>
                            Find out how TradeImeX enables you to seize these possibilities 
                            and make the most of them on the global market with our 
                            exclusive export-import data.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="card-content cdh-20">
                            <div class="icon">
                                <img src="frontend/image/img/exclusive-trade-data.png" width="20%" style="padding: 0px 0px 0px 10px;">
                            </div>
                            <div class="head">
                                <h3>Exclusive trade data</h3>
                            </div>
                            <p>
                                TradeImeX provides exclusive and easy-to-access global trade data. With our exclusive trade
                                data, businesses can evaluate the flow of goods across borders, monitor imports and exports,
                                and gain valuable insights into market patterns and shifts.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="card-content cdh-20">
                            <div class="icon">
                                <img src="frontend/image/img/intelligence-trade-data.png" width="20%" style="padding: 0px 0px 0px 10px;">
                            </div>
                            <div class="head">
                                <h3>Trade Intelligence Data Platform</h3>
                            </div>
                            <p>
                                TradeImeX provides enterprises across many industries and regions with unparalleled access to
                                global trade data. TradeImeX is revolutionizing trade intelligence by providing businesses with
                                the data insights they need to succeed in the global marketplace.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="card-content cdh-20">
                            <div class="icon">
                                <img src="frontend/image/img/Growth-I.png" width="20%" style="padding: 0px 0px 0px 10px;">
                            </div>
                            <div class="head">
                                <h3>Growth of the international network</h3>
                            </div>
                            <p>
                                You can network with a variety of companies, firms, trade partners, manufacturers, and traders
                                by utilizing our unique and personalized global trade data sets. This will help you grow your
                                business to previously unimaginable heights.
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3">
                        <div class="card-content cdh-20">
                            <div class="icon">
                                <img src="frontend/image/img/data-source.png" width="20%" style="padding: 0px 0px 0px 10px;">
                            </div>
                            <div class="head">
                                <h3>Data Sourcing and privacy</h3>
                            </div>
                            <p>
                                TradeImeX Sources Data from Various Customs Agencies and shipping manifests. We
                                collaborate with customs agencies across the globe to obtain accurate and reliable import
                                and export data. This includes information on the quantity, value, origin, and destination of
                                goods. By sourcing data directly from customs agencies, TradeImeX ensures that businesses
                                have access to the most authentic, accurate, and real-time trade data information available.
                                We ensure to provide you with the most accurate data possible in the world of global trade.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of import export data -->

        <!-- Product Tab -->
        <div class="container-fluid bg-dark-custom padding-tb">
            <div class="container">
                <div class="product-tab bg-dark-custom">
                    <button class="product-tablink active-1" onclick="openLink(event, 'custom')">
                        <i class="fa-solid fa-file-pen fa-lg"></i> &nbsp;Custom Data
                    </button>
                    <button class="product-tablink" onclick="openLink(event, 'stat')">
                        <i class="fa-solid fa-magnifying-glass-chart fa-lg"></i> &nbsp;Statistical Data
                    </button>
                    <button class="product-tablink" onclick="openLink(event, 'bl')">
                        <i class="fa-solid fa-chart-simple fa-lg"></i> &nbsp;B/L Data
                    </button>
                </div>
                <!-- Custom -->
                <div id="custom" class="product-tabcontent bg-dark-custom" style="display:flex">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="text-content">
                                <h2 class="text-white">CUSTOMS DATA</h2>
                                <p class="text-white">
                                    The customs data provided by TradeImeX has the most up-to-date and recent import-export
                                    data available with all the important trade information such as importer&#39;s name, exporter&#39;s
                                    name, details of import and export shipments, customs charges, HS code, product description,
                                    and more. Information on import and export shipment details, customs charges, and tariff
                                    plans imposed on items being imported or exported can also be obtained from this data. In
                                    addition, a marketer gains knowledge of the specific countries that import and export goods,
                                    the complete product descriptions that include CIF charges and FOB value, and the
                                    approximate duty amount that should be applied to each product. The buyer, the supplier,
                                    and the imported and exported items are the most crucial details provided by customs data.
                                    This data also includes facts about import and export shipments, customs duties, tariff
                                    schemes, HS codes, and the quantity of products. TradeImeX revolutionizes the realm of
                                    customs data by offering a comprehensive and user-friendly platform.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="data-img">
                                <img src="frontend/image/img/Customs_Data.png" style="width: 100% !important" alt="customs-data | TradeImeX">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12">
                            <p class="text-white">
                                TradeImeX provides an exclusive customs database covering over 80 countries, including the
                                US, Mexico, Vietnam, Turkey, and many more. Finding exporters and importers worldwide
                                who could be potential buyers or sellers of a specific product, analyzing competitors&#39; trade
                                activity and keeping an eye on their creative strategies, getting a comprehensive
                                understanding of the market regarding profit margins and level of competition, and gaining
                                strategies and recommendations for entering new markets through self-observation and
                                learning from others are all made possible by customs data.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Stat -->
                <div id="stat" class="product-tabcontent bg-dark-custom">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="text-content font">
                                <h2 class="text-white">STATISTICAL DATA</h2>
                                <p class="text-white">
                                    Statistical data enables you to analyze the size of any country&#39;s market and then provides
                                    insights into its imports and exports over a given period. Statistics encompass a lot of very
                                    important information, such as the quantity of a product, the name of the country, the
                                    aggregated value of the product price over a specific period, etc. TradeImeX transforms how
                                    businesses obtain and use statistical data. Thanks to its user-friendly design, users can easily sift
                                    through large amounts of data and get insightful information that is customized to meet their
                                    own needs. Moreover, TradeImeX provides strong search filters and tools for data visualization,
                                    which facilitate the efficient interpretation and presentation of statistical data. The number of
                                    commodities that must be imported or exported, the names of the nations of origin and
                                    destination (without port names), HS codes, HS code descriptions, and other details are all
                                    included in statistical data.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="data-img">
                                <img src="frontend/image/img/Statistical Data.png" style="width: 100% !important" alt="statistical-data | TradeImeX">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- BL -->
                <div id="bl" class="product-tabcontent bg-dark-custom">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="text-content">
                                <h2 class="text-white">B/L DATA</h2>
                                <p class="text-white">
                                    While this report lacks pricing information, BL Data, also known as Bill of Lading data, is focused
                                    on providing information on shipping papers and primarily has insights regarding shipment.
                                    Date, shipper name, shipper address, sea shipments/sea frights, commodity name, and many
                                    other relevant details are among the main significant elements mentioned in this data. By
                                    examining B/L Data, traders and marketers can learn all aspects of any product, except price. A
                                    receipt for the products being shipped and the document&#39;s title are produced using B/L data. A
                                    bill of lading serves as formal documentation between a supplier and a buyer. This paperwork
                                    acts as approval for financial shipments and customs clearances. The date of consignment, the
                                </p>
                                <p class="text-white">
                                    shipper&#39;s name, and address, the PKG unit, the commodity name, and a detailed description of
                                    each product are among the details found in the B/L data reports. B/L data is important to
                                    keep around as it serves as a receipt for goods that have been shipped. Aside from this, B/L
                                    Data is regarded as one of the forms of documentation between the two parties involved in a
                                    transactional trade.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="data-img">
                                <img src="frontend/image/img/Bill of Ladding Database.png" style="width: 100% !important" alt="bl-data | TradeImeX">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <!-- country covered -->
        <div class="container-fluid bg-bluish padding-tb">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="text-content">
                            <span>Countries Covered</span>
                            <h2 class="text-start">OBTAIN IMPORT/EXPORT DATA FOR MORE THAN 80 COUNTRIES</h2>
                            <p class="lh-8">
                                If you are looking for Import Export Data and Global Trade Data to grow your business through
                                international trade, you have come to the right place. TradeImeX is your one-stop solution for
                                all of your import-export data needs. We have acquired detailed and important shipping
                                information from databases of more than 80 nations, including Vietnam, the US, the
                                Philippines, and Turkey, and across 6 continents which include Asia, Europe, North America,
                                South America, Africa, and Oceania. Get the import and export data by country and start your
                                trading career by contacting us right away to touch new heights in global trade!
                            </p>
                        </div>
                    </div>
                    <div class="col-xs-12 text-center">
                        <div class="text-content">
                            <h3 class="text-start">IMPORT-EXPORT DATA PROVIDER FOR GLOBAL TRADE INTELLIGENCE DATA</h3>
                            <p class="lh-8">
                                TradeImeX provides firms from all sectors and locations with access to international trade data, exceeding your expectations.
                            </p>
                            <li class="list">IDENTIFY WORLDWIDE IMPORTERS AND EXPORTERS</li>
                            <li class="list">GET THE TRADED PRICE OF IMPORT-EXPORT COMMODITIES</li>
                            <li class="list">PERSONALIZED MARKET TRENDS</li>
                            <li class="list">REVIEW MARKET TENDENCIES</li>
                            <li class="list">GET CUSTOMIZED REPORTS FOR VARIOUS BRANDS AND PRODUCTS ACROSS THE GLOBE</li>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Countries List -->
        <div class="container-fluid bg-dark-custom padding-tb">
            <div class="container">
                <div class="tab">
                    <button class="tablinks active-1" onmouseover="openCity(event, 'Asia')">Asia</button>
                    <button class="tablinks" onmouseover="openCity(event, 'Africa')">Africa</button>
                    <button class="tablinks" onmouseover="openCity(event, 'America')">America</button>
                    <button class="tablinks" onmouseover="openCity(event, 'Europe')">Europe</button>
                    <button class="tablinks" onmouseover="openCity(event, 'Oceania')">Oceania</button>
                </div>

                <!-- Asia AS-24 -->
                <div id="Asia" class="tabcontent" style="display: block !important;">
                    <div class="container" style="padding-left: 10%;">
                        <div class="text-content">
                            <h4 class="text-center text-white" style="font-size: 18px;">Asia</h4>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/bangladesh.png">
                                <br>
                                @foreach($countrydata as $country)
                                {{-- {{ $countryData->country }} --}}
                                @if ($country->country=='Bangladesh' && $country->Datatype =='import')
                                <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                    <h4>{{ $country->country }}</h4>
                                </a>
                                @endif

                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/china_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach($countrydata as $country)
                                    @if ($country->country=='China' && $country->Datatype =='import')
                                    <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                        <h4>{{ $country->country }}</h4>
                                    </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/egypt_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach($countrydata as $country)
                                    @if ($country->country=='Egypt' && $country->Datatype =='import')
                                    <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                        <h4>{{ $country->country }}</h4>
                                    </a>
                                    @endif

                                @endforeach
                            </div>
                            
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/indonesia_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach($countrydata as $country)
                                    @if ($country->country=='Indonesia' && $country->Datatype =='import')
                                    <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                        <h4>{{ $country->country }}</h4>
                                    </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/iran_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach($countrydata as $country)
                                    @if ($country->country=='Iran' && $country->Datatype =='import')
                                    <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                        <h4>{{ $country->country }}</h4>
                                    </a>
                                    @endif
                                @endforeach
                            </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="frontend/image/flags/iraq_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    @foreach ($countrydata as $country)
                                        @if ($country->country=='Iraq' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="frontend/image/flags/japan_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    @foreach ($countrydata as $country)
                                        @if ($country->country=='Japan' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                        @endif
                                    @endforeach
                                </div>
                         
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="frontend/image/flags/kazakhstan_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    @foreach ($countrydata as $country)
                                        @if ($country->country=='Kazakhstan' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                        @endif
                                    @endforeach
                                </div>
                                <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                    <img src="frontend/image/flags/kuwait_rectangular_icon_with_shadow_64.png">
                                    <br>
                                    @foreach ($countrydata as $country)
                                        @if ($country->country=='Kuwait' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                        @endif
                                    @endforeach
                                </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/malaysia_rectangular_icon_with_shadow_64.png">
                                <br>

                                @foreach ($countrydata as $country)
                                   @if($country->country=="Malaysia" && $country->Datatype =='import')
                                    <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                        <h4>{{ $country->country }}</h4>
                                    </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/pakistan_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                @if ($country->country=='Pakistan' && $country->Datatype =='import')
                                    <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                        <h4>{{ $country->country }}</h4>
                                    </a>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/philippines_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                @if ($country->country=='Philippines' && $country->Datatype =='import')
                                    <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                        <h4>{{ $country->country }}</h4>
                                    </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/qatar_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                @if ($country->country=='Qatar' && $country->Datatype =='import')
                                    <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                        <h4>{{ $country->country }}</h4>
                                    </a>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/saudi_arabia_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                @if ($country->country=='Saudi Arabia' && $country->Datatype =='import')
                                    <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                        <h4>{{ $country->country }}</h4>
                                    </a>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/singapore_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                @if ($country->country=='Singapore' && $country->Datatype =='import')
                                    <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                        <h4>{{ $country->country }}</h4>
                                    </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/korea_south_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                @if ($country->country=='South Korea' && $country->Datatype =='import')
                                    <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                        <h4>{{ $country->country }}</h4>
                                    </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/sri_lanka_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                @if ($country->country=='Sri Lanka' && $country->Datatype =='import')
                                    <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                        <h4>{{ $country->country }}</h4>
                                    </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/republic_of_china_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                @if ($country->country=='Taiwan' && $country->Datatype =='import')
                                    <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                        <h4>{{ $country->country }}</h4>
                                    </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/thailand_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                @if ($country->country=='Thailand' && $country->Datatype =='import')
                                    <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                        <h4>{{ $country->country }}</h4>
                                    </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/turkey_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach($countrydata as $country)
                                    @if ($country->country=='Turkey' && $country->Datatype =='import')
                                    <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                        <h4>{{ $country->country }}</h4>
                                    </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/united_arab_emirates_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='UAE' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags//ukraine_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Ukraine' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/uzbekistan_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Uzbekistan' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/vietnam_rectangular_icon_with_shadow_64 (1).png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Vietnam' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Africa AF-24 -->
                <div id="Africa" class="tabcontent">
                    <div class="container" style="padding-left: 10%;">
                        <div class="text-content">
                            <h4 class="text-center text-white" style="font-size: 18px;">Africa</h4>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/botswana_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Botswana' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/cameroon_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Cameroon' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/central_african_republic_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Central Africa' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/chad_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Chad' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/democratic_republic_of_the_congo_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='DR Congo' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/ethiopia_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Ethiopia' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/ghana_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Ghana' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/cote_d_Ivoire_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Ivory Coast' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/kenya_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Kenya' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/lesotho_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Lesotho' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/liberia_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Liberia' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/malawi_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Malawi' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/namibia_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Namibia' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/niger_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Niger' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/nigeria_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Nigeria' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/sao_tome_and_principe_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Sao Tome' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/senegal_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Senegal' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/sierra_leone_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Sierra Leone' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/south_africa_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='South Africa' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/tanzania_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Tanzania' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/togo_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Togo' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/uganda_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Uganda' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/zambia_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Zambia' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/zimbabwe_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Zimbabwe' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

                <!-- America NA-8 && SA-11 -->
                <div id="America" class="tabcontent">
                    <!-- North America NA-8  -->
                    <div class="container" style="padding-left: 10%;">
                        <div class="text-content">
                            <h4 class="text-center text-white" style="font-size: 18px;">North - America</h4>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/canada_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Canada' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/costa_rica_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Costa Rica' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/el_salvador_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='EL Salvador' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/guatemala_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Guatemala' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/honduras_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Honduras' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/mexico_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Mexico' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/panama_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Panama' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/united_states_of_america_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='US' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <!-- South America SA-11 -->
                    <div class="container" style="padding-left: 10%;">
                        <div class="text-content">
                            <h4 class="text-center text-white" style="font-size: 18px;">South - America</h4>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/argentina_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Argentina' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/bolivia_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Bolivia' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/brazil_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Brazil' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/chile_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Chile' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/colombia_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Colombia' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/ecuador_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Ecuador' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/guyana_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Guyana' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/paraguay_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Paraguay' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/peru_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Peru' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/uruguay_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Uruguay' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/venezuela_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Venezuela' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Europe EU-34-->
                <div id="Europe" class="tabcontent">
                    <div class="container" style="padding-left: 10%;">
                        <div class="text-content">
                            <h4 class="text-center text-white" style="font-size: 18px;">Europe</h4>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/austria_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Austria' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/belgium_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Belgium' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/bulgaria_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Bulgaria' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/croatia_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Croatia' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/cyprus_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Cyprus' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/czech_republic_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Czech' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/denmark_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Denmark' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/estonia_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Estonia' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/finland_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Finland' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/france_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='France' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/germany_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Germany' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/greece_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Greece' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/hungary_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Hungary' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/ireland_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Ireland' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/italy_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Italy' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/kazakhstan_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Kazakhstan' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/kosovo_rectangular_icon_with_shadow_64 (1).png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Kosovo' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/latvia_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Latvia' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/lithuania_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Lithuania' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/luxembourg_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='LuxemBourg' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/malta_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Malta' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/moldova_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Moldova' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/netherlands_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Netherlands' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/poland_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Poland' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/portugal_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Portugal' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/russia_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Russia' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/romania_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Romania' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/slovakia_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Slovakia' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/slovenia_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Slovenia' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/spain_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Spain' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/sweden_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Sweden' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/united_kingdom_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='UK' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/ukraine_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Ukraine' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/uzbekistan_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Uzbekistan' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Oceania OC-3 -->
                <div id="Oceania" class="tabcontent">
                    <div class="text-content">
                        <h4 class="text-center text-white" style="font-size: 16px;">Oceania</h4>
                    </div>
                    <div class="container" style="padding-left: 10%;">
                        <div class="row">
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/australia_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Australia' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/fiji_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='Fiji' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover custom">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                            <div class="col-sm-4 col-md-3 col-lg-3 Flag">
                                <img src="frontend/image/flags/new_zealand_rectangular_icon_with_shadow_64.png">
                                <br>
                                @foreach ($countrydata as $country)
                                    @if ($country->country=='New Zealand' && $country->Datatype =='import')
                                        <a href="{{ route('countryalldata', [ strtolower($country->country), $country->Datatype]) }}" class="text-hover stat">
                                            <h4>{{ $country->country }}</h4>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="text-content flex" style="justify-content: center;margin-top: 2rem;">
                <div class="flex text-center" style="align-items: baseline;padding: 2px 15px 2px 4px;">
                    <i class="fa-solid fa-square" style="color: #00ca6f;"></i>
                    <p class="text-black text-white">&nbsp;&nbsp;Customs Data</p>
                </div>
                <div class="flex text-center" style="align-items: baseline;padding: 2px 15px 2px 4px;">
                    <i class="fa-solid fa-square" style="color: #fff;"></i>
                    <p class="text-black text-white">&nbsp;&nbsp;Statistical/BL Data</p>
                </div>
            </div>
        </div>
        <!-- End Of Countries List -->

        <!-- Client floating list -->
        <div class="container-fluid bg-bluish" style="padding-top: 8%;padding-bottom: 0.5%;">
            <div class="container" id="clientsserved">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <div class="text-content">
                            <h2>PROUD AND SATISFIED CLIENTS</h2>
                            <p>
                                Our primary source of inspiration and eagerness to do better comes from our clients and
                                customers. If one of our clients succeeds as a result of our help, we will be overjoyed. With the
                                highest sincerity and tenacity, it is a proud record that we have served more than 10,000 clients
                                to date. Several businesses have reached new heights and increased their revenues unendingly
                                with the aid of our databases. Numerous international corporations, like Mahindra, Deloitte,
                                Nikon, Tata, Samsung, Aditya Birla, and many others, rely on our services and databases. It is
                                now your opportunity to grow your company by obtaining our exclusive global trade database.
                                So, hurry and unlock the world of global trade today with TradeImeX!
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6">
                        <!-- For Desktop, laptop, tablet & big screen -->
                        <div id="anim" class="PartnersHeroGraphic" data-js-controller="PartnersHeroGraphic">
                            <div class="PartnersHeroGraphicLogo" data-js-controller="PartnersHeroGraphicLogo" data-shade="lightblue" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(417.635px, -45px, 0px); transition: all 0.8s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                    <img id="logoss" src="frontend/image/clients/BASF.png" width="70" height="70">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo" data-js-controller="PartnersHeroGraphicLogo" data-shade="lightblue" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(253.083px, -3px, 0px); transition: all 0.8s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                    <img src="frontend/image/client_transparent/Deloitte.png" width="70" height="70">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo PartnersHeroGraphicLogo--sage" data-js-controller="PartnersHeroGraphicLogo" data-shade="green" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(125.282px, 81px, 0px); transition: all 0.8s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                    <img src="frontend/image/clients/dow.png" width="70" height="30">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo" data-js-controller="PartnersHeroGraphicLogo" data-shade="mauve" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(12.4008px, 187px, 0px); transition: all 0.8s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                    <img src="frontend/image/clients/EY.png" width="50" height="40">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo" data-js-controller="PartnersHeroGraphicLogo" data-shade="blue" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(-39.4071px, 335px, 0px); transition: all 0.8s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                <img src="frontend/image/client_transparent/Hyundai.png" width="120" height="70">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo" data-js-controller="PartnersHeroGraphicLogo" data-shade="green" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(-68.5952px, 525px, 0px); transition: all 0.8s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                <img src="frontend/image/clients/IDC.png" width="60" height="50">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo" data-js-controller="PartnersHeroGraphicLogo" data-shade="lightblue" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(550px, -120px, 0px); transition: all 0s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                    <img src="frontend/image/clients/imerys.png" width="70" height="50">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo" data-js-controller="PartnersHeroGraphicLogo" data-shade="mauve" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(12.4008px, 187px, 0px); transition: all 0.8s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                    <img src="frontend/image/clients/itochu.png" width="70" height="30">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo " data-js-controller="PartnersHeroGraphicLogo" data-shade="purple" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(550px, -120px, 0px); transition: all 0s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                    <img src="frontend/image/clients/kpmg-logo-1.png" width="70" height="50">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo Tradeimex+9:0 pos:0" data-js-controller="PartnersHeroGraphicLogo" data-shade="blue" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(497.635px, 72px, 0px); transition: all 0.8s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                    <img src="frontend/image/clients/LG.png" width="70" height="70">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo " data-js-controller="PartnersHeroGraphicLogo" data-shade="black" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(550px, -120px, 0px); transition: all 0s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                    <img src="frontend/image/clients/Mahindra.png" width="50" height="30">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo Tradeimex+10:1 pos:1" data-js-controller="PartnersHeroGraphicLogo" data-shade="darkpurple" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(333.083px, 114px, 0px); transition: all 0.8s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                    <img src="frontend/image/clients/Marubeni.png" width="70" height="70">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo Tradeimex+11:2 pos:2" data-js-controller="PartnersHeroGraphicLogo" data-shade="red" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(205.282px, 198px, 0px); transition: all 0.8s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                    <img src="frontend/image/clients/Mitsubishi.png" width="60" height="60">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo vivian+12:3 pos:3" data-js-controller="PartnersHeroGraphicLogo" data-shade="blue" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(92.4008px, 304px, 0px); transition: all 0.8s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                    <img src="frontend/image/clients/Nikon.png" width="70" height="70">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo Tradeimex+13:4 pos:4" data-js-controller="PartnersHeroGraphicLogo" data-shade="white" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(40.5929px, 452px, 0px); transition: all 0.8s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                    <img src="frontend/image/clients/Realme.png" width="60" height="40">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo Tradeimex+15:6 pos:6" data-js-controller="PartnersHeroGraphicLogo" data-shade="lightblue" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(51px, 652px, 0px); transition: all 0s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                    <img src="frontend/image/clients/samsung.png" width="80" height="80">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo Tradeimex+14:5 pos:5" data-js-controller="PartnersHeroGraphicLogo" data-shade="white" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(11.4048px, 642px, 0px); transition: all 0.8s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                <img src="frontend/image/clients/shimadzu.png" width="70" height="70">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo " data-js-controller="PartnersHeroGraphicLogo" data-shade="lightblue" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(553.083px, 124px, 0px); transition: all 0s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                    <img src="frontend/image/clients/Superdry.png" width="70" height="30">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo " data-js-controller="PartnersHeroGraphicLogo" data-shade="lightblue" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(425.282px, 218px, 0px); transition: all 0.8s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                    <img src="frontend/image/clients/Tata.png" width="120" height="90">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo " data-js-controller="PartnersHeroGraphicLogo" data-shade="blue" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(272.401px, 324px, 0px); transition: all 0.8s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                    <img src="frontend/image/clients/Thermax.png" width="60" height="40">
                                </div>
                            </div>

                            <div class="PartnersHeroGraphicLogo " data-js-controller="PartnersHeroGraphicLogo" data-shade="darkblue" style="--partnersHeroGraphicLogoBackground:#E2E2E2; transform: translate3d(191.405px, 662px, 0px); transition: all 0.8s ease 0s;">
                                <div class="PartnersHeroGraphicLogo__wrapper" data-js-target="PartnersHeroGraphicLogo.wrapper" style="opacity: 1;">
                                    <img src="frontend/image/clients/TVS.png" width="70" height="60">
                                </div>
                            </div>
                        </div>

                        <!-- For Mobile -->
                        <div id="client_mobile" class="container-fluid padding-tb" style="display: none;">
                            <div class="container">
                                <div class="row">
                                    <div class="client-mb col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                        <div class="client-img zoom">
                                            <img src="frontend/image/client_transparent/Realme.png">
                                        </div>
                                    </div>
                                    <div class="client-mb col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                        <div class="client-img zoom">
                                            <img src="frontend/image/client_transparent/Nikon.png">
                                        </div>
                                    </div>
                                    <div class="client-mb col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                        <div class="client-img zoom">
                                            <img src="frontend/image/client_transparent/Samsung.png">
                                        </div>
                                    </div>
                                    <div class="client-mb col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                        <div class="client-img zoom">
                                            <img src="frontend/image/client_transparent/LG.png">
                                        </div>
                                    </div>
                                    <div class="client-mb col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                        <div class="client-img zoom">
                                            <img src="frontend/image/client_transparent/Hyundai.png">
                                        </div>
                                    </div>
                                    <div class="client-mb col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                        <div class="client-img zoom">
                                            <img src="frontend/image/client_transparent/Mahindra.png">
                                        </div>
                                    </div>
                                    <div class="client-mb col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                        <div class="client-img zoom">
                                            <img src="frontend/image/client_transparent/Tata.png">
                                        </div>
                                    </div>
                                    <div class="client-mb col-xs-12 col-sm-6 col-md-6 col-lg-3">
                                        <div class="client-img zoom">
                                            <img src="frontend/image/client_transparent/TVS.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Blog slider -->
        <div class="container-fluid bg-dark-custom pdt-2 pdb-2 slanted-bottom">
            <div class="container">
                <div class="text-content">
                    <!-- <span style="color: #e6f328;">Our Blogs</span> -->
                    <h2 class="text-white">Our Blogs</h2>
                    <p class="text-white">
                        Our team of seasoned professionals, writers, and experts contribute to our blogs, offering
                        valuable perspectives and analysis on a wide range of trade-related topics and beyond. From
                        trade agreements and tariffs to market entry strategies and global economic trends,
                    </p>
                    <p class="text-white">
                        We cover it all in our blogs. Our well-researched blogs give you the knowledge and perceptivity
                        necessary to navigate the complex world of transnational trade with confidence. You can
                        maximize the benefits of TradeImeX blogs by regularly checking for new articles, engaging
                        with our community, and sharing valuable insights with your network.
                    </p>
                </div>
            </div>
        </div>

        <!-- Blog Cards -->
        <div class="container pdt-2">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog_card">
                        <div class="blog_card_image">
                            <img src="/frontend/image/img/blog_1.jpg" alt="">
                        </div>
                        <div class="blog_card_content">
                            <h3>
                                India’s Ambitious Interim
                                Union Budget 2024-25
                            </h3>
                            <p>
                                Discover everything you need to know about the highly anticipated Interim Union 
                                Budget 2024-25 presented by Finance Minister Nirma...
                            </p>
                            <a class="text-hover" href="https://tradeimex.in/blogs/us-mexico-trade-relations">
                                <h6>Read More</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog_card">
                        <div class="blog_card_image">
                            <img src="/frontend/image/img/blog_2.jpg" alt="">
                        </div>
                        <div class="blog_card_content">
                            <h3>Corn exports and imports in 2023</h3>
                            <p>
                                The total amount of corn produced globally in 2023 was 1.17 billion metric tons 
                                with the USA leading the corn exports, while China...
                            </p>
                            <a class="text-hover" href="https://tradeimex.in/blogs/medical-equipment-export">
                                <h6>Read More</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog_card">
                        <div class="blog_card_image">
                            <img src="/frontend/image/img/blog_3.jpg" alt="">
                        </div>
                        <div class="blog_card_content">
                            <h3>
                                Rice Import-Export Trade Statistics of 2023
                            </h3>
                            <p>
                                Discover the latest trends and projections for Rice trade statistics 
                                in 2023. get the global trade data statistics of rice, Acqui...
                            </p>
                            <a class="text-hover" href="https://tradeimex.in/blogs/top-electronic-exports-of-the-philippines">
                                <h6>Read More</h6>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="blog_card">
                        <div class="blog_card_image">
                            <img src="/frontend/image/img/blog_1.jpg" alt="">
                        </div>
                        <div class="blog_card_content">
                            <h3>
                                India’s Ambitious Interim
                                Union Budget 2024-25
                            </h3>
                            <p>
                                Discover everything you need to know about the highly anticipated Interim Union 
                                Budget 2024-25 presented by Finance Minister Nirma...
                            </p>
                            <a class="text-hover" href="https://tradeimex.in/blogs/us-mexico-trade-relations">
                                <h6>Read More</h6>
                            </a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>

        <!-- Last Contact Us -->
   
        @include('frontend.tab_inc')
        <!-- Alert For Link Detection -->
        <div id="snackbar">
            <svg class="bi flex-shrink-0 me-2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512">
                    <style>svg{fill:#842029}</style>
                    <path d="M256 32c14.2 0 27.3 7.5 34.5 19.8l216 368c7.3 12.4 7.3 27.7 .2 40.1S486.3 480 472 480H40c-14.3 0-27.6-7.7-34.7-20.1s-7-27.8 .2-40.1l216-368C228.7 39.5 241.8 32 256 32zm0 128c-13.3 0-24 10.7-24 24V296c0 13.3 10.7 24 24 24s24-10.7 24-24V184c0-13.3-10.7-24-24-24zm32 224a32 32 0 1 0 -64 0 32 32 0 1 0 64 0z"/>
                </svg>
            <b>Link Detected!</b> Form cannot be submitted.
        </div>
        @include('frontend.footer')

        @include('frontend.script')
       

        <!-- Flag JS -->
        <script>
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active-1", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active-1";
            }
        </script>
        <!-- End Of Flag JS -->

        <!-- Products Tab -->
        <script>
            function openLink(evt, animName) {
                var i, x, tablinks;
                x = document.getElementsByClassName("product-tabcontent");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("product-tablink");
                for (i = 0; i < x.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active-1", "");
                }
                document.getElementById(animName).style.display = "flex";
                evt.currentTarget.className += " active-1"
            }
        </script>

        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src=https://www.googletagmanager.com/ns.html?id=GTM-PVH9BTS height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script>
            function onSubmit(token) {
                document.getElementById("demo-form").submit();
            }
        </script>
        <script src="{{asset("globe.js")}}" type="module"></script> 
    </body>
</html>