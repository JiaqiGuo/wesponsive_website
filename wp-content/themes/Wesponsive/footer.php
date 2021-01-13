<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wesponsive
 */
?>


<footer id="colophon" class="site-footer">
    <div class="contact-wrapper">
        <div class="contact-item">
            <a href="tel:4168288060">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/socials/phone.svg">
                <span>4168288060</span>
            </a>
        </div>
        <div class="contact-item">
            <a href="mailto:info@wesponsive.com">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/socials/email.svg">
                <span>info@wesponsive.com</span>
            </a>
        </div>
        <div class="contact-item">
            <a href="https://www.google.com/maps/place/Toronto,+ON/data=!4m2!3m1!1s0x89d4cb90d7c63ba5:0x323555502ab4c477?sa=X&ved=2ahUKEwiisqzmqo_qAhXVlnIEHbOwDJUQ8gEwhQF6BAh0EAY"
               target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/socials/location.svg">
                <span>Toronto, ON, Canada</span>
            </a>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
