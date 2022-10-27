<article class="post">
        
        <h2>
            <a href="<?= the_permalink()?>"><?= the_title()?></a>
        </h2>

        <p class="post-info">
            <?php the_time('F jS,Y g:i a')?> | by  

             <a href="<?= get_author_posts_url(get_the_author_meta('ID')) ?>"><?= get_the_author_meta('nickname')?></a> 
        Posted in     
        <?php
        
        $categories = get_the_category();

        $separator = ', ';
        $output = '';

        if($categories){
            foreach($categories as $category){
                $output .= '<a href="'.get_category_link($category->term_id).'">'.$category->cat_name.'</a>'.$separator;
            }
            echo trim($output,$separator);
        }

       ?>
        </p>
             <div class="<?php if(has_post_thumbnail()){ echo 'flex';}?> my10-py10">
                <a class="thumbnail-anchor" href="<?php the_permalink()?>"><?php the_post_thumbnail('small-thumbnail')?></a>
        <?php if(is_search() || is_archive()):?>

            <p><?=get_the_excerpt()?>
                    <a href="<?= the_permalink()?>">Read more</a>
            </p>
   
        <?php else:?>

                <?php if($post->post_excerpt):?>

                    <p><?=get_the_excerpt()?>
                    <a href="<?= the_permalink()?>">Read more</a>
                    </p>

                <?php else:?>

                <div><?php the_content()?></div>

                <?php endif;?>
             </div>
        <?php endif;?>

</article>
