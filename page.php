<?php include_once 'partials/page-header.php';

while ( have_posts() ) {
	the_post();
}
?>
<br>
<!-- Featured -->
<div class="container">
	<div class="columns">
		<div class="column">
			<div class="card">
				<div class="card-content">
					<p class="card-header-title">
						About the Pack:
					</p>
					<p class="content">
						<?php the_content(); wp_link_pages(); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php include_once 'partials/footer.php'?>
