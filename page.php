<?php

/**
 * Any page.
 */

get_header();

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
    <div class="title">link generator</div>
    <div class="descr">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel nostrum dolore veritatis modi quas voluptates vitae aspernatur doloribus eveniet exercitationem, ullam repudiandae, labore non culpa quisquam quibusdam magni, nemo aliquam.</div>
    <input type="text">
    <button>Download Big Blue Button Video</button>
</div>

<?php
get_footer();
?>

<script>
    bbb();
</script>
</body>

</html>