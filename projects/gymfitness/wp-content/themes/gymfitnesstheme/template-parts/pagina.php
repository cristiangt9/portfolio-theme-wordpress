<?php

    while(have_posts()): the_post();
?>
    <h1 class="text-center texto-primary"> <?php the_title(); ?></h1>
<?php
        if(has_post_thumbnail()) {
            the_post_thumbnail('full', ['class' => 'imagen-destacada']);
        }
        the_content();
    endwhile;
?>
