<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wesponsive
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-170077596-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-170077596-1');
    </script>

    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
    <!-- Start of Async Drift Code -->
    <script>
        "use strict";

        !function() {
            var t = window.driftt = window.drift = window.driftt || [];
            if (!t.init) {
                if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
                t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
                    t.factory = function(e) {
                        return function() {
                            var n = Array.prototype.slice.call(arguments);
                            return n.unshift(e), t.push(n), t;
                        };
                    }, t.methods.forEach(function(e) {
                    t[e] = t.factory(e);
                }), t.load = function(t) {
                    var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
                    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                    var i = document.getElementsByTagName("script")[0];
                    i.parentNode.insertBefore(o, i);
                };
            }
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('rigmt3vivpbg');
    </script>
    <!-- End of Async Drift Code -->

</head>

<body <?php body_class(); ?>>
<header id="masthead" class="site-header">
    <div class="header-wrapper">
        <div class="site-logo">
            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/wesponsive-logo.png" alt="logo">
            </a>
        </div>
        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu(array(
                'menu_id' => 'primary-menu',
            ));
            ?>
        </nav>
    </div>

</header>
<div id="contact-us-popup">
    <form id="contact-us-form">
        <div class="form-row-group">
            <div class="form-field">
                <label class="input-label" for="firstName">
                    First Name <span>*</span>
                </label>
                <input class="input" type="text" id="firstName" name="firstName" required>
            </div>
            <div class="form-field">
                <label class="input-label" for="lastName">
                    Last Name <span>*</span>
                </label>
                <input class="input" type="text" id="lastName" name="lastName" required>
            </div>
        </div>
        <div class="form-row-group">
            <div class="form-field">
                <label class="input-label" for="phone">
                    Phone Number
                </label>
                <input class="input" type="tel" id="phone" name="phone">
            </div>
            <div class="form-field">
                <label class="input-label" for="email">
                    Email Address <span>*</span>
                </label>
                <input class="input" type="email" id="email" name="email" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-field">
                <label for="message">Message</label>
                <textarea name="message" id="message"></textarea>
            </div>
        </div>
        <div class="row-submit">
            <div class="form-submit">
                Send
            </div>
        </div>

    </form>
</div>
