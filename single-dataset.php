<?php get_header(); ?>

<?php if(have_posts()) : the_post(); ?>

	<article class="single-post">
		<section id="stage" class="row">
			<div class="container">
				<div class="twelve columns">
					<header class="post-header">
						<!-- <h2><a href="<?php //echo get_post_type_archive_link('dataset'); ?>"><?//php _e('Datasets', 'jeo'); ?></a></h2> -->
						<h1 class="title"><?php the_title(); ?></h1>
					</header>
				</div>
			</div>
		</section>

		<section id="content">
			<div class="container row">
				<div class="post-content">
					<div class="eight columns">
						<div class="post-description">
							<?php the_content(); ?>
							<?php
							$preview = get_field('preview_url');
							if($preview) :
								?>
								<div class="preview-container">
									<h3><?php _e('Preview data', 'jeo'); ?></h3>
									<iframe class="data-preview" src="<?php echo $preview; ?>" width="620" height="500"></iframe>
								</div>
								<?php
							endif;
							?>
						</div>
					</div>
					<div class="four columns">
						<?php
						$data = get_field('full_download');
						if($data) :
							?>
							<div class="row">
								<a href="<?php echo $data; ?>" class="button download"><?php _e('Download this data', 'jeo'); ?></a>
							</div>
							<?php
						endif;
                        $source_url = get_field('source_url');
                        if($source_url) :
                            ?>
                            <div class="row">
                                <a href="<?php echo $source_url; ?>" class="button download" rel="external" target="_blank"><?php _e('Download from source', 'jeo'); ?></a>
                            </div>
                            <?php
                        endif;
						?>
						<?php
						$license = get_the_terms($post->ID, 'license');
						if($license) :
							$license = array_shift($license);
							?>
							<div class="row">
								<h3><?php _e('License', 'jeo'); ?></h3>
								<p class="license-name"><a target="_blank" href="<?php echo get_field('url', 'license_' . $license->term_id); ?>"><?php echo $license->name; ?></a></p>
								<p><a class="small" href="<?php echo get_term_link($license); ?>"><?php _e('More data on this license', 'jeo'); ?></a></p>
							</div>
							<?php
						endif;
						?>
						<?php
						$source = get_the_terms($post->ID, 'source');
						if($source) :
							$source = array_shift($source);
							?>
							<div class="row">
								<h3><?php _e('Source', 'jeo'); ?></h3>
								<p class="source-name"><a target="_blank" href="<?php echo get_field('url', 'source_' . $source->term_id); ?>"><?php echo $source->name; ?></a></p>
								<p><a class="small" href="<?php echo get_term_link($source); ?>"><?php _e('More data from this source', 'jeo'); ?></a></p>
							</div>
							<?php
						endif;
						?>
					</div>
				</div>

			</div>
		</section>
	</article>
<?php endif; ?>

<?php get_template_part('section', 'main-widget'); ?>

<?php get_footer(); ?>
