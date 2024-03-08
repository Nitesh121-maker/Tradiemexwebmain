    <script src="//code.tidio.co/sdzqyzkqyjktbhjlcr0v8xbgipvxwtc9.js"></script>

    <!-- Jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NBN2JCV"
        height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.querySelector('contact-form');
    
            form.addEventListener('submit', function(event) {
                const messageInput = document.querySelector('textarea[name="msg"]');
                const message = messageInput.value;
    
                if (containsURL(message)) {
                    alert('Please avoid including URLs in the message field.');
                    event.preventDefault();
                }
            });
    
            function containsURL(message) {
                const urlPattern = /(http(s)?:\/\/)?(www\.)?[\w-]+\.[a-z]{2,}(\.[a-z]{2,})?(\S*)?/gi;
                return urlPattern.test(message);
            }
        });
    </script>

    <!-- Google recaptcha verfication Code form js -->
    <script>
        grecaptcha.ready(() => {
            grecaptcha.execute('6Ld1Ax8pAAAAAJWU_TaW2gMhMvAOeRl885SXqVPT', { action: 'contact' }).then(token => {
                document.querySelector('#recaptchaResponse').value = token;
            });
        });
    </script>

    <!-- Fontawesome Icon JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/fontawesome.min.js" integrity="sha512-64O4TSvYybbO2u06YzKDmZfLj/Tcr9+oorWhxzE3yDnmBRf7wvDgQweCzUf5pm2xYTgHMMyk5tW8kWU92JENng==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="frontend/js/slider2.js" defer></script>
    <script src="frontend/js/main.js"></script>

    {{-- Schema Tags --}}
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "TradeImeX info solution Pvt Ltd",
            
                    "url": "https://www.tradeimex.in/",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "9319646667",
                "contactType": "customer service",
                "areaServed": "IN",
                "availableLanguage": "en"
            },
            "sameAs": [
                "https://www.facebook.com/tradeimex/",
                "https://twitter.com/TradeImeX/",
                "https://www.youtube.com/channel/UCTHU41uHt6xOub4XDy2Egxw",
                "https://www.linkedin.com/company/tradeimex/",
                "https://in.pinterest.com/tradeimex/",
                "https://www.tradeimex.in/"
            ]
        }
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "name": "Tradeimex",
            "url": "https://www.tradeimex.in/",
            "potentialAction": {
                "@type": "SearchAction",
            "target": "https://www.tradeimex.in/{search_term_string}https://www.tradeimex.in/",
                "query-input": "required name=search_term_string"
            }
        }
        {
            "@context": "https://schema.org",
            "@type": "LocalBusiness",
            "name": "TradeImex - Import Export Data Provider, Data Analytic & Shipment Services",
            "image": "https://www.tradeimex.in/",
            "@id": "",
            "url": "https://www.tradeimex.in/",
            "telephone": "9319646667",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "372, 3rd Floor, 110034, Block RU, Pitam Pura, New Delhi, Delhi 110034",
                "addressLocality": "New Delhi",
                "postalCode": "110034",
                "addressCountry": "IN"
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday"
                ],
                "opens": "10:00",
                "closes": "18:30"
            }
        }
    </script>