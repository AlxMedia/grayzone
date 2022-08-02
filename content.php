<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('article-card'); ?>>
	<div class="list-card">
		<div class="list-card-wrap">
		
			<div class="list-card-left">
				<div class="list-card-image" style="background-image:url('<?php if ( has_post_thumbnail() ): ?><?php the_post_thumbnail_url('grayzone-medium'); ?><?php else: ?><?php echo esc_url( get_template_directory_uri() ); ?>/img/thumb-medium.png<?php endif; ?>');">
					<a class="list-card-link" href="<?php the_permalink(); ?>"></a>
					<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-play"></i></span>'; ?>
					<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-volume-up"></i></span>'; ?>
					<?php if ( is_sticky() ) echo'<span class="thumb-icon small"><i class="fas fa-star"></i></span>'; ?>
					<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
						<a class="card-comments" href="<?php comments_link(); ?>"><i class="fas fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
					<?php endif; ?>
				</div>
			</div>
			
			<div class="list-card-right">

				<h2 class="list-card-title">
					<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				</h2>
				
				<?php if (get_theme_mod('excerpt-length','20') != '0'): ?>
					<div class="clear"></div>
					<div class="list-card-excerpt">
						<?php the_excerpt(); ?>
					</div>
				<?php endif; ?>
				
				<ul class="list-card-meta group">
					<?php if ( get_theme_mod( 'author-avatar', 'on' ) == 'on' ): ?>
						<li class="list-card-author"><a href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' )); ?>"><?php echo get_avatar(get_the_author_meta('user_email'),'64'); ?></a></li>
					<?php endif; ?>
					<li class="list-card-date"><i class="far fa-calendar"></i><?php the_time( get_option('date_format') ); ?></li>
					<li class="list-card-category"><?php the_category(' '); ?></li>
				</ul>
				
			</div>
			
		</div>
		<a class="more-link" href="<?php the_permalink(); ?>"><i class="fas fa-chevron-right"></i></a>
	</div>
</article>