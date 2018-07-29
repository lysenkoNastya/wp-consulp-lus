<?php
/**
 *
 * Displays all of the <head> section and everything up till <div id="content">
    *
    * @package understrap
    */
get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>


<div class="wrapper blog-section" id="single-wrapper">
    <section class="blog-section" style="background-image:url('<?php echo get_theme_mod( 'back_image' );?>'); ">
        <div class="container-fluid">
            <header class="blog-section-header">
                <div class="container">
                    <h2 class="general-title blog-section-header-title "><?php the_title(""); ?></h2>
                </div>
            </header>
        </div>
    </section>

    </div>
<?php get_footer(); ?>