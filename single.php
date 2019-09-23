<?php include_once 'partials/single-header.php'?>
	<?php
		if ( have_posts() )
		{
			while ( have_posts() )
			{
				the_post();
				?>
				<!-- main page content -->
				<div class="main-content">
					<div class="container">
						<div class="columns is-centered has-overlap">
							<div class="column is-10">
								<!-- start of post -->
								<div class="box box-single-post">
									<!-- box content -->
									<div class="box-content">
										<div class="box-content-text">
											<p>
												<?php the_content(); wp_link_pages(); ?>
											</p>
										</div>
										<div class="has-text-right">
											<a class="button is-small" href="<?php home_url(); ?>">Back Home</a>
										</div>
									</div>
									<!-- end box content -->
								</div>
							</div>
							<!-- end of post -->
						</div>
					</div>
				</div>
				<!-- end of main page content -->
				<!-- pagination -->
				<div class="columns is-centered">
					<nav class="pagination">
						<div class="pagination-fields">
							<div class="button" href=""><?php previous_post_link('&larr; %link'); ?></div>
							<div class="button"><?php next_post_link('%link &rarr;'); ?></div>
						</div>
					</nav>
				</div>
				<!-- end of pagination -->
				<?php
			}
		}
	?>
<?php include 'partials/footer.php'; ?>
