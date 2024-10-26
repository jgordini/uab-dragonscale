<?php
/**
 * Register Block Patterns for UAB FSE Theme
 */

function uab_fse_theme_register_block_patterns() {
    register_block_pattern(
        'uab-fse-theme/hero-banner',
        array(
            'title'       => __( 'Hero Banner', 'uab-fse-theme' ),
            'description' => __( 'A hero banner with title and call to action', 'uab-fse-theme' ),
            'content'     => '<!-- wp:group {"align":"full","backgroundColor":"dragons-lair-green","textColor":"white","layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignfull has-white-color has-dragons-lair-green-background-color has-text-color has-background">
                <!-- wp:heading {"textAlign":"center","level":1,"fontSize":"3xl"} -->
                <h1 class="has-text-align-center has-3-xl-font-size">Welcome to UAB</h1>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"align":"center"} -->
                <p class="has-text-align-center">Discover the possibilities at The University of Alabama at Birmingham</p>
                <!-- /wp:paragraph -->
                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"backgroundColor":"uab-gold","textColor":"black"} -->
                    <div class="wp-block-button"><a class="wp-block-button__link has-black-color has-uab-gold-background-color has-text-color has-background">Learn More</a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->'
        )
    );

    register_block_pattern(
        'uab-fse-theme/featured-content',
        array(
            'title'       => __( 'Featured Content', 'uab-fse-theme' ),
            'description' => __( 'A section for featuring content with image and text', 'uab-fse-theme' ),
            'content'     => '<!-- wp:group {"backgroundColor":"white","layout":{"type":"constrained"}} -->
            <div class="wp-block-group has-white-background-color has-background">
                <!-- wp:columns {"align":"wide"} -->
                <div class="wp-block-columns alignwide">
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:image -->
                        <figure class="wp-block-image"><img alt="Placeholder"/></figure>
                        <!-- /wp:image -->
                    </div>
                    <!-- /wp:column -->
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:heading {"textColor":"dragons-lair-green"} -->
                        <h2 class="has-dragons-lair-green-color has-text-color">Featured Content</h2>
                        <!-- /wp:heading -->
                        <!-- wp:paragraph -->
                        <p>Add your content here.</p>
                        <!-- /wp:paragraph -->
                        <!-- wp:buttons -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"backgroundColor":"uab-green"} -->
                            <div class="wp-block-button"><a class="wp-block-button__link has-uab-green-background-color has-background">Learn More</a></div>
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
