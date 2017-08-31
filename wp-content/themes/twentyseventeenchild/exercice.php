<?php
/*

Template Name : Exercice
*/
get_header();
$image = get_field('image_principale');
?>
<main>
    <section>
        <img class="imgFloat" src="" alt="Mon image placeholder">
        <p><?get_field('texte_editable'); ?></p>

    </section>
</main>

get_footer();