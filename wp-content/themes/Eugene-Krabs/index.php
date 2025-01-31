<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Burrito mania</title>
    <?php wp_head(); ?>
</head>


<body>
    <nav>
        <ul>
            <li>Home</li>
            <li>Locations</li>
            <li>Menu</li>
        </ul>
    </nav>

    <h1>Eugene Krabs and Spongebob Themes</h1>
    <p class="topParagraph">This theme allows user to express their love for the hit tv show, especially if their favorite character is Eugene Krabs! It's especially nice, because this theme is free! You also get to become an eager frycook with the Spongebob them! (Disclaimer: does not actually make you a fry cook) Enjoy!</p>

    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
    ?>

            <h4><?php the_title() ?></h4>
            <p><i>By<?php the_author() ?></i> <?php the_date() ?></p>
            <p><?php the_content() ?></p>
    <?php
        endwhile;

    endif;
    ?>
    <?php wp_footer() ?>

</body>

</html>