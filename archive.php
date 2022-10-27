<?php get_header();?>

    <h2>
        <?php
        
        if(is_category()){
            single_cat_title();
        }elseif(is_tag()){
            single_tag_title();
        }elseif(is_author()){
            echo 'Author Archives: '. get_the_author();
        }elseif(is_day()){
            echo 'Daily Archives: '. get_the_date();
        }elseif(is_month()){
            echo 'Monthly Archives: '. get_the_date('F Y');
        }elseif(is_year()){
            echo 'Yearly Archies: '. get_the_date('Y');
        }else{
            echo 'Archive';
        }

        ?>
    </h2>



    <?php if(have_posts()):?>
    

        

    <?php while(have_posts()): the_post();?>
        
        <?php get_template_part('content')?>
        
    <?php endwhile;?>
        
    <?php endif;?>
    
<?php get_footer();?>


