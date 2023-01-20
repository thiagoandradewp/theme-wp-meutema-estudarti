<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div>
                        <h2>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <p>
                            <?php the_time("F jS, Y"); ?> by <?php
                                                                the_author_posts_link(); ?>
                        </p>
                        <p>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(
                                    "full",
                                    array("class" => "img-fluid")
                                ); ?>
                            </a>
                        </p>
                        <?php the_content(); ?>
                    </div>
            <?php endwhile;
            endif; ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>


<?php get_footer(); ?>