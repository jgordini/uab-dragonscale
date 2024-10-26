<?php
/**
 * Register Block Patterns for UAB FSE Theme
 */

/**
 * Register block patterns for the UAB FSE theme.
 *
 * @return void
 */
function uab_fse_theme_register_block_patterns() {
    register_block_pattern(
        'uab-fse-theme/dragonscale-hero',
        array(
            'title'       => __( 'Dragonscale Hero', 'uab-fse-theme' ),
            'description' => __( 'A full-width hero section with green background and centered content', 'uab-fse-theme' ),
            'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"dragons-lair-green","textColor":"white","layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignfull has-white-color has-dragons-lair-green-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
                <!-- wp:heading {"textAlign":"center","level":1,"fontSize":"3xl"} -->
                <h1 class="wp-block-heading has-text-align-center has-3-xl-font-size">Dragon Scale Pattern</h1>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">A scalable pattern block for UAB websites</p>
                <!-- /wp:paragraph -->
                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"backgroundColor":"uab-gold","textColor":"black"} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-black-color has-uab-gold-background-color has-text-color has-background wp-element-button">Learn More</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->'
        )
    );

    register_block_pattern(
        'uab-fse-theme/dragonscale-columns',
        array(
            'title'       => __( 'Dragonscale Columns', 'uab-fse-theme' ),
            'description' => __( 'A three-column layout with headings, text, and buttons', 'uab-fse-theme' ),
            'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"backgroundColor":"white","layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignfull has-white-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
                <!-- wp:columns {"align":"wide"} -->
                <div class="wp-block-columns alignwide">
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:heading {"textColor":"dragons-lair-green"} -->
                        <h2 class="wp-block-heading has-dragons-lair-green-color has-text-color">Research</h2>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph -->
                        <p>Discover groundbreaking research at UAB.</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"backgroundColor":"uab-green"} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-uab-green-background-color has-background wp-element-button">Explore Research</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:column -->
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:heading {"textColor":"dragons-lair-green"} -->
                        <h2 class="wp-block-heading has-dragons-lair-green-color has-text-color">Education</h2>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph -->
                        <p>Find your path to success through UAB\'s academic programs.</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"backgroundColor":"uab-green"} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-uab-green-background-color has-background wp-element-button">View Programs</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:column -->
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:heading {"textColor":"dragons-lair-green"} -->
                        <h2 class="wp-block-heading has-dragons-lair-green-color has-text-color">Community</h2>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph -->
                        <p>Connect with UAB\'s vibrant community and initiatives.</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"backgroundColor":"uab-green"} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-uab-green-background-color has-background wp-element-button">Get Involved</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->'
        )
    );

    register_block_pattern(
        'uab-fse-theme/dragonscale-footer',
        array(
            'title'       => __( 'Dragonscale Footer', 'uab-fse-theme' ),
            'description' => __( 'A four-column footer with contact information and links', 'uab-fse-theme' ),
            'content'     => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"2rem","bottom":"2rem"}}},"backgroundColor":"dragons-lair-green","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-white-color has-dragons-lair-green-background-color has-text-color has-background" style="padding-top:2rem;padding-bottom:2rem">
    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:heading {"level":3} -->
            <h3 class="wp-block-heading">University Relations</h3>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p>Administration Building 660<br>1720 2ND Avenue South<br>Birmingham, AL 35294-0106</p>
            <!-- /wp:paragraph -->
            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"smoke-gray"} -->
                <div class="wp-block-button"><a class="wp-block-button__link has-smoke-gray-background-color has-background wp-element-button">Contact Us</a></div>
                <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:column -->
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">Resources</h3>
                        <!-- /wp:heading -->
                        <!-- wp:list -->
                        <ul>
                            <li><a href="#">Web Accessibility</a></li>
                            <li><a href="#">Joomla Training</a></li>
                            <li><a href="#">Website Request Form</a></li>
                            <li><a href="#">Web Support</a></li>
                            <li><a href="#">Web Forms</a></li>
                            <li><a href="#">Logo Use &amp; Guidelines</a></li>
                        </ul>
                        <!-- /wp:list -->
                    </div>
                    <!-- /wp:column -->
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">About UAB</h3>
                        <!-- /wp:heading -->
                        <!-- wp:list -->
                        <ul>
                            <li><a href="#">Apply</a></li>
                            <li><a href="#">Degrees</a></li>
                            <li><a href="#">Give</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Events</a></li>
                            <li><a href="#">Careers</a></li>
                            <li><a href="#">Alumni</a></li>
                        </ul>
                        <!-- /wp:list -->
                    </div>
                    <!-- /wp:column -->
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:heading {"level":3} -->
                        <h3 class="wp-block-heading">Privacy at UAB</h3>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph -->
                        <p>We use cookies to improve your site, personalize content, and save more relevant advertising on other platforms.</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"backgroundColor":"smoke-gray"} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-smoke-gray-background-color has-background wp-element-button">Find out more</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->'
        )
    );
}
add_action( 'init', 'uab_fse_theme_register_block_patterns' );
