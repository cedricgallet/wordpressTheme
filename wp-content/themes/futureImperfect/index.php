<!-- Header -->
<?php get_header(); ?>

	
	<!-- Main -->
	<div id="main">

		<!-- Post -->

		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

		<article class="post">
			<header>
				<div class="title">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p><?php the_excerpt(); ?></p>
				</div>
				<div class="meta">
					<time class="published" datetime="2015-11-01"><?php the_time( get_option( 'date_format' ) ); ?></time>
					<a href="#" class="author"><span class="name"><?php the_author(); ?></span><?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?></a>
				</div>
			</header>
			<a href="<?php the_permalink(); ?>" class="image featured"><?php the_post_thumbnail(); ?></a>
			<p><?php the_excerpt(); ?> </p>
			<footer>
				<ul class="actions">
					<li><a href="<?php the_permalink(); ?>" class="button large">Continue Reading</a></li>
				</ul>
				<ul class="stats">
					<li><a href="#"><?php the_category(); ?></a></li>
					<li><a href="#" class="icon solid fa-heart"><?php comments_number( '0', '1', '%' ); ?></a></li>
					<li><a href="#" class="icon solid fa-comment"><?php comments_number( '0', '1', '%' ); ?></a></li>
				</ul>
			</footer>
		</article>

		<?php endwhile; endif; ?>

		
		


		<!-- Pagination -->
	
		<div class="site__navigation">
			<div class="site__navigation__prev">
				<?php previous_posts_link(); ?>
			</div>
			<div class="site__navigation__next">
				<?php next_posts_link(); ?> 
			</div>
		</div>


	</div>

	<!-- Sidebar -->
	<section id="sidebar">

		<!-- Intro -->
		<section id="intro">
			<a href="#" class="logo"><?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?></a>
			<header>
				<h2><?php the_title(); ?></h2>
				<p><?php the_excerpt(); ?> <a href="http://html5up.net">HTML5 UP</a></p>
			</header>
		</section>

		<!-- Mini Posts -->
		<section>
			<div class="mini-posts">

			<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>


				<!-- Mini Post -->
				<article class="mini-post">
					<header>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<time class="published" datetime="2015-10-20"><?php the_time( get_option( 'date_format' ) ); ?></time>
						<a href="#" class="author"><?php echo get_avatar( get_the_author_meta( 'ID' ), 40 ); ?></a>
					</header>
					<a href="<?php the_permalink(); ?>" class="image"><?php the_post_thumbnail(); ?></a>
				</article>

			<?php endwhile; endif; ?>
			
			</div>
		</section>

		<!-- Posts List -->
		<section>

		<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>


			<ul class="posts">
				<li>
					<article>
						<header>
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<time class="published" datetime="2015-10-20"><?php the_time( get_option( 'date_format' ) ); ?></time>
						</header>
						<a href="<?php the_permalink(); ?>" class="image"><?php the_post_thumbnail(); ?></a>
					</article>
				</li>

		<?php endwhile; endif; ?>

		<!-- About -->
		<section class="blurb">
			<h2><?php the_title(); ?></h2>
			<p><?php the_excerpt(); ?></p>
			<ul class="actions">
				<li><a href="#" class="button">Learn More</a></li>
			</ul>
		</section>

		<!-- Footer -->
		<section id="footer">
			<ul class="icons">
				<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon solid fa-rss"><span class="label">RSS</span></a></li>
				<li><a href="#" class="icon solid fa-envelope"><span class="label">Email</span></a></li>
			</ul>
			<p class="copyright">&copy; Untitled. Design: <a href="http://html5up.net">HTML5 UP</a>. Images: <a
					href="http://unsplash.com">Unsplash</a>.</p>
		</section>

	</section>

</div>

<?php get_footer(); ?>