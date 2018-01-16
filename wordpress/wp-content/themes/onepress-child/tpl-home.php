<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 13/01/18
 * Time: 23:59
 */

/*
 * Template Name: Page d'accueil
 */
?>
<?php get_header(); ?>

<?php
$args = array(
        'post_type' => 'post',

    );
$posts = new WP_Query($args);
?>
<div class="container">
    <div class="pix">
        <img src="">
    </div>
    <h1 class="page-header">Qui suis-je <span style="color:#03c4eb">?</span></h1>
    <div class="row">
        <?php while ($posts->have_posts()) : $posts->the_post(); ?>
            <?php echo get_the_category(the_ID()); ?>
            <div class="col-sm-6 home_case">
                <h3><?php echo the_title(); ?></h3>
                <p><?php echo the_content() ?></p>
            </div>


        <?php endwhile; ?>
    </div>
</div>


<?php get_footer(); ?>
