
<?php get_header(); ?>
<div class="col-sm-8 blog-main">
 <?php
 // if ( have_posts() ) {
 // while ( have_posts() ) : the_post();
 // ?>
 <!-- <div class="blog-post">
 <h2 class="blog-post-title"><?php the_title(); ?></h2>
 <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
 <?php the_content()?> -->
<?php
    $the_query = new WP_Query( array(
        'post_type' => 'post',
        'posts_per_page' => of_get_option('post_select')
    ));
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();?>
            <h2 class="blog-post-title"><?php echo  get_the_title(); ?> </h2>
            <p class="blog-post-meta"><?php the_date(); ?> by <?php the_author(); ?></p>
            <?php the_content()?>
            <?php
        }
    }

?>
 <!-- </div> -->
 <?php
 // endwhile;
 // }
 ?>

 <nav>
 <ul class="pager">
 <li><?php next_posts_link('Previous'); ?></li>
 <li><?php previous_posts_link('Next'); ?></li>
 </ul>
 </nav>

</div><!-- /.blog-main -->

<?php
    if(of_get_option('sidebar_radio') == 'one'){
        get_sidebar();
    }
?>
<?php get_footer(); ?>
