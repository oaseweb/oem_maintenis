<?php
/*
Plugin Name: Maintenance by Oemar
Plugin URI: http://fb.com/oemunix
Description: Maintenance Just Hide Wrapper, Container Element with CSS and Add JS Alert. (SEO Friendly Mungkin) :p
Version: 1.0
Author: Ujang Sumarna
Author URI: http://fb.com/oemunix
*/
function oem_maintenis() {
?>
<?php if (!current_user_can( 'edit_themes' ) || !is_user_logged_in() ) { ?>
<script>alert("Thanks for Visiting. Web Under Construction.");</script>
<style>#page-container, #wrapper, .wrapper, .container, #container{display:none!important;}</style>
<style>   body { text-align: center; padding: 150px; }   h1 { font-size: 50px; }   body { font: 20px Helvetica, sans-serif; color: #333; }   article { display: block; text-align: left; width: 650px; margin: 0 auto; }   a { color: #dc8100; text-decoration: none; }   a:hover { color: #333; text-decoration: none; } </style>  <article>     <h1>We&rsquo;ll be back soon!</h1>     <div>         <p>Sorry for the inconvenience but we&rsquo;re performing some maintenance at the moment. If you need to you can always <a href="mailto:<?php $admin_email = get_option( 'admin_email' ); ?>">Email Us</a>, otherwise we&rsquo;ll be back online shortly!</p>         <p>&mdash; <?php bloginfo('title'); ?></p>     </div> </article>
<?php } ?>
<?php
}
add_action('wp_head', 'oem_maintenis');
?>
