<?php
get_header();

while (have_posts()) : the_post() ?>
    <h2><?= the_title(); ?></h2>
    <p><?= the_content(); ?></p>
    <a href="<?= the_permalink(); ?>">Check Post</a>
<?php endwhile;


get_footer();
