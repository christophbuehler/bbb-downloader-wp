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
        <div class="descr">Provide a Big Blue Button Link by copying it from the BBB address bar of the recorded meeting. It should be in the shape of:</div>
        <span class="cite">https://XXX/presentation/XXX/video/webcams.webm</span>
        <div class="descr">Note: If the video is opened in a new tab / window, just save it with your browsers default save functionality.</div>
        <input type="text" placeholder="Enter Big Blue Button Link...">
        <a href="#" target="_blank" download="webcams.webm" class="btn" disabled>Download Big Blue Button Video</a>
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