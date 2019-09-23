<?php include_once "partials/blog-header.php"?>
<!-- Hero Content: Will be in the middle of the Hero Section -->
<div class="hero-body">
    <div class="container">
        <h1 class="title" style="font-size: 3rem">
            The Blog
        </h1>
        <h2 class="subtitle" style="font-size: 1.4rem">
            Occasional Chit Chat about Minecraft and other things ends up here!
        </h2>
    </div>
</div>
</section>
<br><br><br>
<div class="container">
    <h1 class="title has-text-centered">
       Recent Blog Posts...
    </h1>
</div>
<br><br><br>
<!-- main page content -->
<div class="main-content">
    <div class="container">
        <div class="columns is-multiline">
            <div class="column is-8">
                <?php
                    if ( have_posts() )
                    {
                        while ( have_posts() ) {
                            the_post();
                            ?>
                            <!-- start of post -->
                            <div class="box">
                                <!-- box header -->
                                <div class="box-header">
                                    <h4 class="title is-4">
                                        <?= get_the_title(); ?>
                                    </h4>
                                    <small>Posted by <a><?= get_the_author(); ?></a> at <?= get_the_time(); ?>, <?= get_the_date(); ?></small>
                                </div>
                                <!-- end of box header -->
                                <!-- box content -->
                                <div class="box-content">
                                    <div class="columns">
                                        <div class="column is-4 is-250px">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="column">
                                            <div class="box-content-text">
                                                <p>
                                                    <?= get_the_excerpt(); ?>
                                                </p>
                                            </div>
                                            <div class="has-text-right">
                                                <a class="button is-small" href="<?= get_the_permalink(); ?>">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end box content -->
                            </div>
                            <!-- end of post -->
                        <?php
                        }
                    }
                ?>

                <!-- pagination -->
                <nav class="pagination">
                    <div class="pagination-fields">
                        <a class="button" href="<?php previous_post_link('&larr; Previous Page'); ?>">Previous Page</a>
                        <a class="button" href="<?php next_post_link('&rarr; Next page'); ?>">Next page</a>
                    </div>
                </nav>
                <!-- end of pagination -->
            </div>
            <!-- sidebar content -->
            <div class="column is-4 is-narrow">
                <!-- sidebar subscriptions -->
                <div class="card-wrapper">
                    <?php get_sidebar('cf_sidebar-default') ?>
                </div>
                <!-- end of sidebar subscriptions -->
                </div>
                <!-- end of sidebar content -->
            </div>
        </div>
    </div>
</div>
<!-- end of main page content -->
<br><br><br>


<?php include_once "partials/footer.php"?>
