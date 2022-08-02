<?php $format = get_post_format(); ?>

<div class="featured-item-wrap group">
	<div class="featured-item" style="background-image:url('<?php the_post_thumbnail_url('grayzone-large'); ?>');">
		<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
			<a class="card-comments" href="<?php comments_link(); ?>"><i class="fas fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
		<?php endif; ?>
		<div class="featured-content">
			<h3 class="featured-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
			<div class="featured-divider"></div>
			<ul class="featured-meta group">
				<?php if ( get_theme_mod( 'author-avatar', 'on' ) == 'on' ): ?>
					<li class="featured-author"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar(get_the_author_meta('user_email'),'64'); ?></a></li>
				<?php endif; ?>
				<li class="featured-date"><i class="far fa-calendar"></i><?php the_time( get_option('date_format') ); ?></li>
				<li class="featured-category"><?php the_category(' '); ?></li>
			</ul>
		</div>
		<a class="more-link" href="<?php the_permalink(); ?>"><i class="fas fa-chevron-right"></i></a>
	</div>
</div>