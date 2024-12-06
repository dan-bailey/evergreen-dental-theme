    </div>
    </main>
    <footer>
        <?php
        $a = get_field( 'contact_availability', 'options' );
        $b = get_field( 'social_links', 'options' );
        ?>
        <div class="container mx-auto text-center my-12">
            <a href="https://pay.balancecollect.com/m/evergreendentalmn" class="pay-button mx-auto">Make a Payment</a>
        </div>
        <div class="container mx-auto flex flex-col md:flex-row justify-end self-end md:justify-between items-center space-y-6 md:space-y-0 p-4 bg-offwhite">
            <img class="h-12 mt-0" src="<?php bloginfo('template_url'); ?>/assets/img/american-dental-association-logo.svg" alt="American Dental Association" />
            <img class="h-12 mt-0" src="<?php bloginfo('template_url'); ?>/assets/img/top_dentist_hof.svg" alt="Twin Cities Top Dentist Hall of Fame" />
            <img class="h-12 mt-0" src="<?php bloginfo('template_url'); ?>/assets/img/agf-logo.svg" alt="Academy of General Dentistry" />
        </div>
        <div class="bg-forest">
            <div class="container mx-auto flex flex-col md:flex-row justify-center md:justify-between items-center space-y-6 p-4 bg-forest">
                <div>
                    <p class="text-offwhite text-left md:text-center">Evergreen Dental<br>
                    <?php echo $a['street_address'] ?><br>
                    <?php echo $a['city'] ?>, <?php echo $a['state'] ?> <?php echo $a['zip_code'] ?><br><br>
                    TEL: <a href="tel:<?php echo $a['phone_number'] ?>"><?php echo $a['phone_number'] ?></a><br>
                    FAX: <?php echo $a['fax_number'] ?><br>
                    <a href="mailto:<?php echo $a['primary_email'] ?>"><?php echo $a['primary_email'] ?></a></p>
                </div>
                <div class="flex flex-col justify-center items-center space-y-4 p-4">
                    <div class="flex flex-row justify-between items-center space-x-6 p-4">
                        <a href="<?php echo $b['instagram_link'] ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/instagram.svg" alt="Instagram" class="h-8 w-8"></a>
                        <a href="<?php echo $b['facebook_link'] ?>" target="_blank"></a><img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.svg" alt="Facebook" class="h-8 w-8"></a>
                    </div>
                    <div class="text-offwhite">
                        <a class="footer-link-button" href="https://www.patientconnect365.com/Dentists/Minnesota/EdenPrairie/55344/Evergreen_Dental#" target="_blank">Patient Reviews</a>
                    </div>
                </div>
            </div>
            <div class="container mx-auto text-sm text-offwhite py-8 text-center">&copy; Copyright 2024, by Evergreen Dental, LLC.</div>
        </div>
        
        
    </footer>

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "LocalBusiness",
          "name": "Evergreen Dental",
          "image": "ImageURL",
          "@id": "",
          "url": "http://url",
          "telephone": "phone",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Street",
            "addressLocality": "City",
            "addressRegion": "MN",
            "postalCode": "ZIP",
            "addressCountry": "US"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": lat,
            "longitude": long
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
            "opens": "09:00",
            "closes": "17:00"
          } 
        }
    </script>
</body>
</html>