<?php get_header();?>
<!-- 
Template Name: Special Layout
 -->
    <?php if(have_posts()):?>
    
     <?php while(have_posts()): the_post();?>

        <article class="post page">

        <h2><?= the_title()?></h2>
        <!-- infobox -->
        <div class="infbox">
        <h4>Disclaimer Title for special template</h4>

        </div>

        <p><?=the_content()?></p>

        </article>

        <?php endwhile;?>

    <?php endif;?>
    
<?php get_footer();?>