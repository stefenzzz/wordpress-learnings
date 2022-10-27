<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <?php wp_head()?>
</head>
<body <?php body_class()?>>



<div class="container">

    <div class="hd-search flex">
        <?= get_search_form();?>
    </div>

<header class="site-header">

    <h1><a href="<?= home_url()?>"><?= bloginfo('name')?></a></h1>
    <h5><?= bloginfo('description')?></h5>



    <nav class="site-nav">
        <?php
            $args = [
                'theme_location' =>'primary'
            ];  
            wp_nav_menu($args);
        ?>
    </nav>

</header>
