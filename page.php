<?php

/**
 * Any page.
 */

get_header();

?>
<div class="content">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            get_template_part('template-parts/content', get_post_type());

        endwhile;
    else :
        echo 'Here should be a page.';
    endif;
    ?>

    <div class="link-generator">
        <div class="title">Download Big Blue Button Video</div>
        <div class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel nostrum dolore veritatis modi quas voluptates vitae aspernatur doloribus eveniet exercitationem, ullam repudiandae, labore non culpa quisquam quibusdam magni, nemo aliquam.</div>
        <input type="text" placeholder="Enter Big Blue Button Link">
        <a href="#" download class="btn" disabled>Download Big Blue Button Video</a>
        <div class="error"></div>
    </div>
</div>

<?php
get_footer();
?>

<script>
    bbb();
</script>
</body>

</html>