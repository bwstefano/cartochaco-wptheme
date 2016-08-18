<ul class="list-maps bblanco">
	<?php while(have_posts()) : the_post(); ?>
		<li id="post-<?php the_ID(); ?>" <?php post_class('post-item six columns'); ?>>
			<article class="clearfix">
				<div class="left">
					<?php if(has_post_thumbnail()) {
						echo '<a href="' . get_permalink() .'" title="' . get_the_title() . '">' . get_the_post_thumbnail($post->ID, 'map-thumb') . '</a>';
					} else {
						echo '<a href="' . get_permalink() .'" title="' . get_the_title() . '"><img src="' . jeo_get_mapbox_image($post->ID) . '" class="wp-post-image" /></a>';
					} ?>
				</div>
				<div class="right">
					<header class="post-header">
						<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					</header>
					<section>
						<?php the_excerpt(); ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="button"><?php _e('View this map', 'jeo-blank'); ?></a>
					</section>
				</div>
			</article>
		</li>
	<?php endwhile; ?>
</ul>
<div class="twelve columns">
	<?php if(function_exists('wp_paginate')) wp_paginate(); ?>
</div>
