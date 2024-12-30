    </main>
    <footer>
        <?php
        $a = get_field( 'contact_availability', 'options' );
        $b = get_field( 'social_links', 'options' );
        ?>
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
                        <a href="<?php echo $b['facebook_link'] ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/assets/img/facebook.svg" alt="Facebook" class="h-8 w-8"></a>
                    </div>
                    <div class="text-offwhite">
                        <a class="footer-link-button" href="https://www.patientconnect365.com/Dentists/Minnesota/EdenPrairie/55344/Evergreen_Dental#" target="_blank">Patient Reviews</a>
                    </div>
                    <div>
                        <a href="https://pay.balancecollect.com/m/evergreendentalmn" class="pay-button">Make a Payment</a>
                    </div>
                </div>
            </div>
            <div class="container mx-auto py-6 text-sm text-offwhite text-center">&copy; Copyright 2024, by Evergreen Dental, LLC.<br><a href="/privacy-policy">Privacy Policy</a></div>
        </div>
        
        
    </footer>
<!-- more flowbite -->
<?php wp_footer(); ?>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>    
</body>
</html>