<?php get_header();?>

    <?php if(have_posts()):?>
    
     <?php while(have_posts()): the_post();?>

           
       <?php if(has_children() || $post->post_parent >0 ):?>

        <nav class="flex flex-left children-links">

                <span class="parent-link"><a href="<?= get_the_permalink(get_top_ancestor_id($post))?>"> <?= get_the_title(get_top_ancestor_id($post))?></a></span>

                <ul class="flex">

                    <?php
                        
                    $args = [
                        'child_of' => get_top_ancestor_id($post),
                        'title_li' => ''
                    ];
                    wp_list_pages($args);
                    ?>

                </ul>
        </nav>    


        <?php endif;?>
            <article class="post page">
            
            <h2> <?= the_title()?> </h2>

            <p><?=the_content()?></p>

                        <?php if(is_page('Contact us')):?>

                            <p>is_page('Contact us') is working</p>

                        <?php endif;?>
    

            </article>

        <?php endwhile;?>

    <?php endif;?>

    
    
<?php get_footer();?>
