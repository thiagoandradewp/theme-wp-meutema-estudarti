<!DOCTYPE html>
<html lang=<?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php wp_title(); ?> </title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="container">
            <h1>
                <a href="<?php bloginfo('url'); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <p><?php bloginfo('description'); ?></p>
        </div>
    </header>
