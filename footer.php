<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Chile_California_Council
 */

?>

<footer class="footer" style="background: url('<?php echo get_template_directory_uri(); ?>/images/fondo-footer.webp') no-repeat; background-size: cover;">

    <div class="max-width">
        <figure class="logo-footer">
            <img src="<?php echo get_template_directory_uri(); ?>/images/logo-white-chile-california-footer.png" alt="Logo Chile California">
        </figure>
        <div class="body-footer">
            <nav class="menu-footer-nav">
                <ul class="menu-footer">
                    <li class="menu-footer-title text-white"><h3>Menú</h3></li>
                    <li><a href="#" class="link-footer text-white">Link 1</a></li>
                    <li><a href="#" class="link-footer text-white">Link 2</a></li>
                    <li><a href="#" class="link-footer text-white">Link 3</a></li>
                    <li><a href="#" class="link-footer text-white">Link 4</a></li>
                    <li><a href="#" class="link-footer text-white">Link 5</a></li>
                </ul>
            </nav>
            <div class="newsletter-footer">
                <h2 class="text-white">Subscribe</h2>
                <p class="text-white">Join our newsletter to stay up to date on features and releases.</p>
                <form action="">
                    <div>
                        <input type="text" placeholder="Enter your email">
                        <button type="submit" class="btn btn-gradient">Subscribe</button>
                    </div>
                    <span class="error-msg"></span>
                </form>
                <small class="text-white">By subscribing you agree to with our <a href="#">Privacy Policy</a> and provide consent to receive updates from our company.</small>
            </div>
        </div>
        <ul class="socials-footer">
            <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/Facebook.svg" alt=""></a></li>
            <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/Instagram.svg" alt=""></a></li>
            <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/LinkedIn.svg" alt=""></a></li>
            <li><a href="#" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/Twitter.svg" alt=""></a></li>
        </ul>
    </div>
</footer>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.7.1.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
