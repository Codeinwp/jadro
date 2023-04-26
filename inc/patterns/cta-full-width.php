<?php

/**
 * Title: Call to Action Full Width
 * Slug: cta-full-width
 * Keywords: CTA Full Width
 */

return array(
  'title'      => __( 'Call to Action Full Width', 'jadro' ),
  'categories' => array( 'jadro' ),
  'content'    => '<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"8rem","bottom":"8rem"},"margin":{"top":"0px","bottom":"0px"}}},"backgroundColor":"light-gray","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-light-gray-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-top:8rem;padding-bottom:8rem"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","fontSize":"max-60"} -->
<h2 class="wp-block-heading has-text-align-center has-max-60-font-size">Add Call to Action Heading Here</h2>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column -->

<!-- wp:column {"width":"720px"} -->
<div class="wp-block-column" style="flex-basis:720px"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button">Contact Now →</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->'
);
