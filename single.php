<?php get_header(); ?>

<div class="content">
	
	<?php while ( have_posts() ): the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>	
			
			<div class="featured-item-wrap group">
			
				<?php if ( has_post_format( array( 'audio', 'gallery', 'video' ) ) ): ?>
					
					<div class="entry-media">
						<?php if( get_post_format() ) { get_template_part('inc/post-formats'); } ?>
					</div>
					
					<div class="featured-item featured-item-post-format">
						<div class="featured-content">
							<h1 class="featured-title"><?php the_title(); ?></h1>
							<div class="featured-divider"></div>
							<ul class="featured-meta group">
								<?php if ( get_theme_mod( 'author-avatar', 'on' ) == 'on' ): ?>
									<li class="featured-author"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar(get_the_author_meta('user_email'),'64'); ?></a></li>
								<?php endif; ?>
								<li class="featured-date"><i class="far fa-calendar"></i><?php the_time( get_option('date_format') ); ?></li>
								<li class="featured-category"><?php the_category(' '); ?></li>
							</ul>
						</div>
					</div>

				<?php else: ?>
				
					<div class="featured-item" style="background-image:url('<?php the_post_thumbnail_url('grayzone-large'); ?>');">
						<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
							<a class="card-comments" href="<?php comments_link(); ?>"><i class="fas fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
						<?php endif; ?>
						<div class="featured-content">
							<h1 class="featured-title"><?php the_title(); ?></h1>
							<div class="featured-divider"></div>
							<ul class="featured-meta group">
								<?php if ( get_theme_mod( 'author-avatar', 'on' ) == 'on' ): ?>
									<li class="featured-author"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar(get_the_author_meta('user_email'),'64'); ?></a></li>
								<?php endif; ?>
								<li class="featured-date"><i class="far fa-calendar"></i><?php the_time( get_option('date_format') ); ?></li>
								<li class="featured-category"><?php the_category(' '); ?></li>
							</ul>
						</div>
					</div>
				
				<?php endif; ?>
				
				<?php do_action( 'alx_ext_sharrre' ); ?>
				
			</div>

			<div class="entry-content">
				<div class="entry themeform">	
					<?php the_content(); ?>
					<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','grayzone'),'after'=>'</div>')); ?>
					<div class="clear"></div>				
				</div><!--/.entry-->
			</div>
			
			<div class="entry-footer group">
	
				<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','grayzone').'</span> ','','</p>'); ?>
				
				<div class="clear"></div>
				
				<?php if ( ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
					<div class="author-bio">
						<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
						<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
						<p class="bio-desc"><?php the_author_meta('description'); ?></p>
						<div class="clear"></div>
					</div>
				<?php endif; ?>
				
				<?php do_action( 'alx_ext_sharrre_footer' ); ?>
				
				<?php if ( get_theme_mod( 'post-nav', 'sidebar' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>
				
				<?php if ( get_theme_mod( 'related-posts', 'categories' ) != 'disable' ) { get_template_part('inc/related-posts'); } ?>

				<?php if ( comments_open() || get_comments_number() ) :	comments_template( '/comments.php', true ); endif; ?>
				
			</div>

		</article><!--/.post-->

	<?php endwhile; ?>
	
</div><!--/.content-->

<?php get_sidebar(); ?>

<?php get_footer(); ?>