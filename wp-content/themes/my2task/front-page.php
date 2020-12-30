<?php
/**
 * Template Name: Home Page
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *  @package My2Task
 */

// echo "Hii...";.

$blog_post = new WP_Query( array( 'post_type' => 'post', 'post_status' => 'publish', 'post_per_page' => 4 ) );
get_header();
?>

<!-- Banner Starts Here -->
 <div class="main-banner header-text">
	<div class="container-fluid">
		<div class="owl-banner owl-carousel">
		<?php
		if ( $blog_post->have_posts() ) :
			?>
			<?php
			while ( $blog_post->have_posts() ) :
				$blog_post->the_post();
				?>
			<div class="item">
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail( get_the_ID(), 'full' );
				}
				?>
				<div class="item-content">
					<div class="main-content">
					<div class="meta-category">
						<span><?php the_category(); ?></span>
					</div>
					<a href="post-details.html"><h4><?php the_title(); ?></h4></a>
					<ul class="post-info">
						<li><a href="#"><?php the_author(); ?></a></li>
						<li><a href="#"><?php the_date(); ?></a></li>
						<li><a href="#"><?php comments_number(); ?></a></li>
					</ul>
				</div>
				</div>
			</div>
				<?php
				endwhile;
			?>
				<?php
				else :
					?>
					<p>No Blog Posts</p>
					<?php
					endif;
					wp_reset_postdata();
				?>
		</div>
	</div>
</div>
<!-- Banner Ends Here -->
<section class="call-to-action">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="main-content">
					<div class="row">
						<div class="col-lg-8">
							<span>Stand Blog HTML5 Template</span>
							<h4>Creative HTML Template For Bloggers!</h4>
						</div>
						<div class="col-lg-4">
							<div class="main-button">
								<a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="blog-posts">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="all-blog-posts">
					<div class="row">
					<?php
					if ( $blog_post->have_posts() ) {
						while ( $blog_post->have_posts() ) {
							$blog_post->the_post();
							// the_content();.
							?>
						<div class="col-lg-12">
							<div class="blog-post">
								<div class="blog-thumb">
									<img src="<?php the_post_thumbnail_url(); ?>" alt="">
								</div>
								<div class="down-content">
								<a href="<?php the_permalink(); ?>"><h4><?php the_category(); ?></h4></a>
									<a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
									<ul class="post-info">
										<li><a href="#"><?php the_author(); ?></a></li>
										<li><a href="#"><?php the_date(); ?></a></li>
										<li><a href="#"><?php comments_number(); ?></a></li>
									</ul>
									<p> <?php the_content(); ?></p>
									<div class="post-options">
										<div class="row">
											<div class="col-6">
												<ul class="post-tags">
													<li><i class="fa fa-tags"></i></li>
													<li><a href="#"><?php the_tags();?></a>,</li>
													<li><a href="#">Nature</a></li>
												</ul>
											</div>
											<div class="col-6">
												<ul class="post-share">
													<li><i class="fa fa-share-alt"></i></li>
													<li><a href="#">Facebook</a>,</li>
													<li><a href="#"> Twitter</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						 </div>
							<?php
						}
					}
					?>

						<div class="col-lg-12">
							<div class="main-button">
								<a href="http://my2task.local/blog/">View All Posts</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="sidebar">
					<div class="row">
						<div class="col-lg-12">
							<div class="sidebar-item search">
								<form id="search_form" name="gs" method="GET" action="#">
									<input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
								</form>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="sidebar-item recent-posts">
								<div class="sidebar-heading">
									<h2>Recent Posts</h2>
								</div>
								<div class="content">
									<ul>
										<?php
										if ( have_posts() ) {
											while ( have_posts() ) {
												the_post();
												// the_content();.
												?>
												<li>
													<a href="<?php the_permalink();?>">
													<h5><?php the_title(); ?></h5>
													<span><?php echo the_date(); ?></span>
													</a>
												</li>
												<?php
											}
										}
										?>
											
									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="sidebar-item categories">
								<div class="sidebar-heading">
									<h2>Categories</h2>
								</div>
							<div class="content">
								<?php $categories = get_categories(); ?>
								<ul>
								<?php
								foreach ( $categories as $category ) {
									?>
									<li><a href="#"><?php echo $category->name; ?></a></li>
									<?php
								}
								?>
							</ul>
							</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="sidebar-item tags">
								<div class="sidebar-heading">
									<h2>Tag Clouds</h2>
								</div>
								<div class="content">
									<?php $tags = get_tags(); ?>
									<ul>
									<?php
									foreach ( $tags as $tags ) {
										?>
										<li><a href="#"><?php echo $tags->name; ?></a></li>
										<?php
									}
									?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_footer();
