<!DOCTYPE HTML>
<html>
<head>
	<title>FUSIONMC | SSP and SMP Modpacks!</title>
	<?php wp_head() ?>
</head>
<body <?php body_class("homepage") ?> >
<section class="hero is-dark is-large"
		 style="
			 background-image: url('<?php the_post_thumbnail_url('full');?>');
			 background-position: center center;
			 background-size: cover;
			 ">
	<!--Hero HEad: Sticks to the Top -->
	<div class="hero-head">
		<div>
			<nav class="navbar is-transparent is-translucent-dark" role="navigation" aria-label="main navigation">
				<div class="container">
					<div class="navbar-brand">
						<a class="navbar-item" href="/">
							FusionMC
						</a>

						<button class="button navbar-burger" data-target="primary-menu">
							<span></span>
							<span></span>
							<span></span>
						</button>
					</div>
					<div class="navbar-end">
						<a href="/blog" class="navbar-item">
							Blog
						</a>
						<a href="https://fusionforums.moddedsmp.net" class="navbar-item">
							Forums
						</a>
						<div class="navbar-item has-text-white has-dropdown is-hoverable">
							<a class="navbar-link">
								Modpacks & News
							</a>

							<ul class="navbar-dropdown">
								<a href="/modpack-news" style="font-size: 1rem" class="navbar-item has-text-dark">
									Modpack News
								</a>
								<hr class="navbar-divider">
								<li class="navbar-item has-text-dark">
									<?php
										wp_nav_menu(array('theme_location' => 'modpacks',));
									?>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>
	<!-- Hero Content: Will be in the middle of the Hero Section -->
	<div class="hero-body">
		<div class="container">
			<h1 class="title has-text-centered" style="font-size: 4.5rem">
				<?= get_the_title(); ?>
			</h1>
			<h2 class="subtitle has-text-centered" style="font-size: 1.7rem">
				<small>Posted at <?= get_the_time(); ?>, <?= get_the_date(); ?></small>
			</h2>
		</div>
	</div>
</section>
