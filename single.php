<?php
get_header();
?>
<div class="continer">
    <h2><?php the_title(); ?></h2>
    <p>
        <?php
        the_content();
        ?>
    </p>
</div>

<?php
get_footer();
?>