<?php
/*
Template Name: Home
*/
__('Home', 'sensive');
?>
<?php
$hero_content =  get_the_content() . "<h1>" . get_the_title() . "</h1>";
get_header(null, ['content' => $hero_content]) ?>

<?php
get_template_part('template-parts/content', 'tours');
get_template_part('template-parts/content', 'posts', ['count' => 5, 'type' => 'post', 'taxes' => true]);
?>

</main>

<?php get_footer(null, ['has_slider' => true]) ?>