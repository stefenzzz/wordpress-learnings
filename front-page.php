<?php get_header();?>

    <!-- site content -->
    <div class="flex flex-start">

        <div class="main-column">

            <?php if(have_posts()):?>
                
                <?php while(have_posts()): the_post();?>

                <?php get_template_part('content',get_post_format())?>
            
                <?php endwhile;?>
                
            <?php endif;?>

            <div class="home-column flex">
                    <!-- opinion post lopp begin here -->
                    <div class="first-column">
                        <?php $onepiecePosts =  new WP_Query('cat=7&posts_per_page=2'); ?>

                        <?php if($onepiecePosts->have_posts()):?>
                            
                            <?php while($onepiecePosts->have_posts()): $onepiecePosts->the_post();?>
                        <div>
                            <h2> <a href="<?php the_permalink()?>"> <?php the_title()?></a></h2>
                        
                            <?php the_excerpt()?>
                        </div>
                            <?php endwhile;?>
                            
                        <?php endif;?>
                        
                        <?php wp_reset_postdata()?>
                    </div>   

                    <div class="second-column">
                        <!-- opinion post lopp begin here -->
                        <?php $graphicsPost =  new WP_Query('cat=11&posts_per_page=2'); ?>

                        <?php if($graphicsPost->have_posts()):?>
                            
                            <?php while($graphicsPost->have_posts()): $graphicsPost->the_post();?>
                            <div>
                                <h2> <a href="<?php the_permalink()?>"> <?php the_title()?></a></h2>
                        
                                <?php the_excerpt()?>
                            </div>
                        
                            <?php endwhile;?>
                            
                        <?php endif;?>

                        <?php wp_reset_postdata()?>
                    </div> 

                    
            </div>


        </div>
        

        

    </div>
    <!-- /site content -->
<?php get_footer();?>


