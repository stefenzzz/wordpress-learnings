<?php get_header();?>

    <?php if(have_posts()):?>
    
     <?php while(have_posts()): the_post();?>
        <article class="post page">

        <div class="flex text-center"> 

        <div class="title-content">
            <?php the_title()?>
        </div>
        <div class="content-column">
            <?php the_content()?>
        </div>
       
        </div>

        </article>
        <?php endwhile;?>
    <?php endif;?>
    
<?php get_footer();?>