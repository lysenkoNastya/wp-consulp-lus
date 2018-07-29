<?php
/**
 * Template Name: Home
 *
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>

<section>
    <div id="carouselExampleIndicators" class="carousel slide carousel-block" data-ride="carousel">
         <ol class="carousel-indicators">
             <li data-target="#carouselExampleIndicators" data-slide-to="0" class="carousel-btn active"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="1" class="carousel-btn"></li>
             <li data-target="#carouselExampleIndicators" data-slide-to="2" class="carousel-btn"></li>
         </ol>
         <div class="carousel-inner carousel-industry-section" role="listbox" style="background-image:url('<?php echo get_theme_mod( 'bg_front_page' );?>'); ">
            <div class="carousel-item active d-flex flex-column">
                <div class="carousel-block-info">
                    <span class="why-us-subtitle industry text-left">
                        <?php echo get_theme_mod( 'industry_slider_subtitle' );?>
                    </span>
                    <h3 class="why-us-title industry d-block text-left">
                         <?php echo get_theme_mod( 'industry_slider_title' );?>
                    </h3>
                </div>
                <div class="industry-block">
                    <?php $terms = get_terms( 'industry' );
                    if( $terms && ! is_wp_error($terms) ){ ?>
                        <ul class="industry-menu-list  text-center row">
                        <?php  foreach( $terms as $term ){ ?>
                            <li class="col-6 nav-item industry-menu-list-item d-block portfolio-menu-list-link ">
                                <a class="nav-link industry-menu-list-link" href="<?= get_term_link($term); ?>">
                                    <?= $term->name; ?>
                                    <?= get_field('img', $term->taxonomy . '_' . $term->term_id); ?>
                                </a>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                        <?php
                        }
                    ?>
                </div>
            </div>
            <div class="carousel-item d-flex flex-column">
            </div>
            <div class="carousel-item d-flex flex-column">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="industry-mobiles-block">
        <div class="carousel-block-info">
            <span class="why-us-subtitle industry text-left">
                <?php echo get_theme_mod( 'industry_slider_subtitle' );?>
            </span>
            <h3 class="why-us-title industry d-block text-left">
                 <?php echo get_theme_mod( 'industry_slider_title' );?>
            </h3>
        </div>
        <div class="industry-block">
            <?php $terms = get_terms( 'industry' );
            if( $terms && ! is_wp_error($terms) ){ ?>
                <ul class="industry-menu-list  text-center row">
                <?php  foreach( $terms as $term ){ ?>
                    <li class="col-6 nav-item industry-menu-list-item d-block portfolio-menu-list-link ">
                        <a class="nav-link industry-menu-list-link" href="<?= get_term_link($term); ?>">
                            <?= $term->name; ?>
                            <?= get_field('img', $term->taxonomy . '_' . $term->term_id); ?>
                        </a>
                    </li>
                    <?php
                    }
                    ?>
                </ul>
                <?php
                }
            ?>
        </div>
    </div>
</section>

<section class="about-us">
    <div class="container">
        <div class="row">
            <?php $myfile = get_field('section_about_us');
                if( !empty($myfile) ): ?>
                <div class="why-us col-sm-7 text-right">
                    <span class="why-us-subtitle d-block">
                        <?php echo $myfile['sub_title']; ?>
                    </span>
                    <h3 class="why-us-title d-block">
                        <?php echo $myfile['title']; ?>
                    </h3>
                    <span class="why-us-text d-block">
                         <?php echo $myfile['text']; ?>
                    </span>
                    <a href="#" class="why-us-btn d-inline-block">
                         <?php echo $myfile['btn']; ?>
                    </a>
                </div>
                <a class="col-sm-5" href="#">
                    <img class="about-us-img" src="<?php echo $myfile['image']; ?>" alt="about_us_image">
                </a>
                <a href="#">
                    <img class="about-us-img-years" src="<?php echo $myfile['image_years']; ?>" alt="about_us_image_years">
                </a>
            <?php endif; ?>
        </div>

    </div>
</section>

<section class="our-steps">
    <div class="container">
         <?php $myfile = get_field('section-our-steps');
            if( !empty($myfile) ): ?>

            <span class="our-steps-subtitle d-block">
                <?php echo $myfile['sub_title']; ?>
            </span>
            <h3 class="our-steps-title d-block">
                <?php echo $myfile['title']; ?>
            </h3>
            <ul class="our-steps-list row">
                <li class="our-steps-list-item col-md-4">
                    <a class="our-steps-list-item-link d-inline-block" href="#">
                        <img class="our-steps-item-img" src="<?php echo $myfile['icon_img_item1']; ?>" alt="our_steps_image1">
                    </a>
                    <span class="our-steps-item-number d-block">
                         <?php echo $myfile['number_item1']; ?>
                    </span>
                    <h3 class="our-steps-item-title d-block">
                        <?php echo $myfile['title_item1']; ?>
                    </h3>
                    <span class="our-steps-item-text d-block">
                         <?php echo $myfile['text_item1']; ?>
                    </span>
                </li>
                <li class="our-steps-list-item col-md-4">
                    <a class="our-steps-list-item-link d-inline-block" href="#">
                        <img class="our-steps-item-img" src="<?php echo $myfile['icon_img_item2']; ?>" alt="our_steps_image2">
                    </a>
                    <span class="our-steps-item-number d-block">
                         <?php echo $myfile['number_item2']; ?>
                    </span>
                    <h3 class="our-steps-item-title d-block">
                        <?php echo $myfile['title_item2']; ?>
                    </h3>
                    <span class="our-steps-item-text d-block">
                         <?php echo $myfile['text_item1']; ?>
                    </span>

                </li>
                <?php while ( have_rows('section-our-steps') ) :the_row();  ?>
                    <li class="our-steps-list-item col-md-4">
                        <a class="our-steps-list-item-link d-inline-block business" href="#">
                            <img class="our-steps-item-img" src="<?php echo $myfile['icon_img_item3']; ?>" alt="our_steps_image3">
                        </a>
                        <span class="our-steps-item-number d-block">
                             <?php echo $myfile['number_item3']; ?>
                        </span>
                        <h3 class="our-steps-item-title d-block">
                            <?php echo $myfile['title_item3']; ?>
                        </h3>
                        <span class="our-steps-item-text d-block">
                             <?php echo $myfile['text_item3']; ?>
                        </span>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>

<section class="clients-testimonials ">
    <div class="container">
        <div class="<?php echo esc_attr( $container ); ?>">
            <?php if( get_field('testimonials-sub_title') ): ?>
                <span class="our-steps-subtitle d-block">
                    <?= the_field('testimonials-sub_title') ?>
                </span>
            <?php endif; ?>
            <?php if( get_field('testimonials-title') ): ?>
                <h3 class="why-us-subtitle d-block">
                    <?= the_field('testimonials-title') ?>
                </h3>
            <?php endif; ?>
            <?php
            $query = new WP_Query(array('post_type' => 'testimonials'));
            if ($query->have_posts()) { ?>
                <ul class="slider-quote-list text-center">
                    <?php while ($query->have_posts()) {
                        $query->the_post(); ?>
                        <li class="slider-quote-item blog-quote-post">
                            <?php the_content(); ?>
                        </li>
                    <?php } ?>
                </ul>
                <?php
            } else {
            }
            wp_reset_postdata();
            if ($query->have_posts()) { ?>
                <ul class="slider-image-list text-center">
                    <?php while ($query->have_posts()) {
                        $query->the_post(); ?>

                        <li class="slider-image-item">
                            <div class="d-inline-block"> <?php the_post_thumbnail(); ?> </div>
                            <div class="d-block">
                                <span> <?php the_title(); ?></span>
                                <span><?php echo get_post_meta(get_the_ID(), 'position', true); ?></span>
                            </div>
                        </li>
                    <?php } ?>
                </ul>

            <?php
            } else {
            }
            if ($query->have_posts()) { ?>
            <ul class="testimonials-person-info-block">
                <?php while ($query->have_posts()) {
                $query->the_post(); ?>
                <li class="text-center">
                    <div class=""> <?php the_post_thumbnail(); ?> </div>
                    <div class="">
                        <span> <?php the_title(); ?></span>
                        <span><?php echo get_post_meta(get_the_ID(), 'position', true); ?></span>
                    </div>
                </li>
                <?php } ?>
                 </ul>
                 <?php
             }
             wp_reset_postdata();
             ?>
        </div>
     </div>
</section>

<section class="contact-us">
    <div class="container">
        <?php $myfile = get_field('section-contact-us');
        if( !empty($myfile) ): ?>
            <span class="our-steps-subtitle d-block">
                <?php echo $myfile['sub_title']; ?>
            </span>
            <h3 class="our-steps-title d-block">
                <?php echo $myfile['title']; ?>
            </h3>
            <ul class="contact-us-list row d-flex justify-content-center">
                <li class="contact-us-item col-md-4">
                    <div class="row border-wrap">
                        <a class="contact-us-item-icon d-inline-block col-lg-4 col-md-12 col-4" href="#">
                            <img class="contact-us-item-icon-img" src="<?php echo $myfile['icon_email']; ?>" alt="icon_email">
                        </a>
                        <div class="col-lg-8 col-md-12 col-8">
                            <h3 class="our-steps-title title-contact-us d-block">
                                <?php echo $myfile['title_email']; ?>
                            </h3>
                            <?php if( get_theme_mod('email_text') ): ?>
                                <span>
                                    <?php echo get_theme_mod('email_text'); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                </li>
                <li class="contact-us-item col-md-4">
                    <div class="row border-wrap">
                        <a class="contact-us-item-icon d-inline-block col-lg-4 col-md-12 col-4" href="#">
                            <img class="contact-us-item-icon-img" src="<?php echo $myfile['icon_phone']; ?>" alt="icon_phone">
                        </a>
                        <div class="col-lg-8 col-md-12 col-8">
                            <h3 class="our-steps-title title-contact-us d-block">
                                <?php echo $myfile['title_phone']; ?>
                            </h3>
                            <?php echo get_theme_mod('phone_number'); ?>
                        </div>
                    </div>
                </li>
                <li class="contact-us-item col-md-4">
                    <div class="row border-wrap">
                        <a class="contact-us-item-icon d-inline-block col-lg-4 col-md-12 col-4" href="#">
                            <img class="contact-us-item-icon-img" src="<?php echo $myfile['icon_career']; ?>" alt="icon_career">
                        </a>
                        <div class="col-lg-8 col-md-12 col-8">
                            <h3 class="our-steps-title title-contact-us d-block">
                                <?php echo $myfile['title_career']; ?>
                            </h3>
                            <?php echo get_theme_mod('career_text'); ?>
                        </div>
                    </div>
                </li>
            </ul>
        <?php endif; ?>
    </div>
</section>


<?php get_footer(); ?>
