<?php
/*
	Template Name: Front Page
	Design Theme's Front Page to Display the Home Page if Selected
	
*/
get_header(); ?>


<section class="bannerSection">

    <div class="row">
        <div class="col-12">
            <div class="arblgc">
                <h1><?php echo esc_html(get_theme_mod('header_heading', 'Cuba Restaurant Steakhouse'));?>
                </h1> <p class="subpcl">
					<?php echo esc_html(get_theme_mod('header_sub_heading', 'We are making the original steaks based on traditional recipes. We use only fresh meat from the best suppliers. Our staff are professionals, and we make everything to left our clients satisfied.'))?></p>
                <div class="banner-btn">
                    <a href="<?php echo esc_url(get_theme_mod('header_btn_one_link', '#'))?>" class="btn red-bg-btn"><?php echo esc_html(get_theme_mod('header_btn_one', 'Watch Menu'))?></a>
                    <a href="<?php echo esc_url(get_theme_mod('header_btn_two_link', '#'))?>" class="btn white-bg-btn"><?php echo esc_html(get_theme_mod('header_btn_one', 'Book A Table'))?></a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Page Content -->
<div class="section   serves">
    <div class="container">
        <div class="row">

            <?php
            cubarestaurant_serves();
            ?>


        </div>
        <!-- /.row -->
    </div>
</div>


<?php get_footer(); ?>
