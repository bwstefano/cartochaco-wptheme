<?php if(have_posts()) : ?>
	<section class="posts-section">
		<div class="container">
			<ul class="posts-list">
				<?php while(have_posts()) : the_post(); ?>   
					<li id="post-<?php the_ID(); ?>" <?php post_class('four columns'); ?>>
						<article id="post-<?php the_ID(); ?>">

							<section class="post-content">
								<?php
						        // La funcion Post Thumbnail.
						         if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) { the_post_thumbnail(array(300,200), array("class" => "post_thumbnail")); } 
						        //Post Thumbnail Fin
						        ?>
							</section>

							<header class="post-header">
								<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
							</header>

						</article>
					</li>
				<?php endwhile; ?>
			</ul>
			<div class="twelve columns">
				<div class="navigation">
					<?php posts_nav_link(); ?>
				</div>
			</div>
		</div>
	</section>
<?php endif; ?>

<div class="submit-story" style="text-align: center; margin-bottom: 0;">
	<p><?php _e('Send us your stories about the Chaco', 'jeo-blank'); ?></p>
	<p>&nbsp;</p>
	<a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/submit_button.png" alt="SUBMIT"></a>
</div>
