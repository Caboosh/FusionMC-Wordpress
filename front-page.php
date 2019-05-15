<?php include_once "partials/header.php"?>

    <!-- Hero Content: Will be in the middle of the Hero Section -->
    <div class="hero-body">
        <div class="container">
            <h1 class="title" style="font-size: 3rem">
                Fusion Modpacks
            </h1>
            <h2 class="subtitle" style="font-size: 1.4rem">
                Welcome to adventures filled with magic, tech and old school tree punching!
            </h2>
        </div>
    </div>
</section>
<br><br><br>
<div class="container">
    <h1 class="title has-text-centered">
        A Bit About Us...
    </h1>
</div>
<br><br><br>
<!-- Featured -->
<div class="container">
    <div class="columns">
        <div class="column">
            <div class="card">
                <br>
                <div class="card-image has-text-centered">
                    <i  style="font-size: 6rem;" class="fas fa-user"></i>
                </div>
                <div class="card-content">
                    <p style="font-size: 2rem;" class="card-header-title is-centered">
                        Who we are
                    </p>
                    <p class="content">
                        <?php the_field('who_we_are')?>
                    </p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <br>
                <div class="card-image has-text-centered">
                    <i  style="font-size: 6rem;" class="fas fa-book-open"></i>
                </div>
                <div class="card-content">
                    <p style="font-size: 2rem;" class="card-header-title is-centered">
                        FusionMC
                    </p>
                    <p class="content">
	                    <?php the_field('main_modpack')?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="columns">
        <div class="column">
            <div class="card">
                <br>
                <div class="card-image has-text-centered">
                    <i  style="font-size: 6rem;" class="fas fa-book-open"></i>
                </div>
                <div class="card-content">
                    <p style="font-size: 2rem;" class="card-header-title is-centered">
                        FusionMC Lite
                    </p>
                    <p class="content">
	                    <?php the_field('lite_modpack')?>
                    </p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card">
                <br>
                <div class="card-image has-text-centered">
                    <i  style="font-size: 6rem;" class="fas fa-book-open"></i>
                </div>
                <div class="card-content">
                    <p style="font-size: 2rem;" class="card-header-title is-centered">
                        FusionMC Mini
                    </p>
                    <p class="content">
	                    <?php the_field('mini_modpack')?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br>

<!-- Tweet -->
<div class="hero is-medium is-transparent has-bg-img">
    <div class="hero-body">
        <div class="container">
            <section style="font-size: 2.4rem" class="title has-text-white">
               &ldquo;Welcome to fusion...&rdquo;
            </section>
        </div>
    </div>
</div>
<?php include_once "partials/footer.php"?>
