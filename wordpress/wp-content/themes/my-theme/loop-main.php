<?php
if ( have_posts() ) :
	while ( have_posts() ) :
		the_post();
		?>
		<article id="post-<?php the_ID(); ?>" <?php post_class( 'news' ); ?>>
			<div class="text">
				<div class="entryInfo">
					<div class="categories">
						<?php the_category(); ?>
					</div>
					<time datetime="<?php the_time( 'Y-m-d' ); ?>"><?php the_time( 'Y年m月d日' ); ?></time>
				</div>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<p>
					<?php the_excerpt(); ?>
				</p>
				<p>[<a href="<?php the_permalink(); ?>">続きを読む</a>]</p>
			</div>
			<figure>
				<a href="<?php the_permalink(); ?>">
					<?php
					if ( has_post_thumbnail() ) :
						the_post_thumbnail( 'thumbnail' );
					else :
						?>
					<img src="<?php echo get_template_directory_uri(); ?>/images/common/noimage_180x180.png" height="180" width="180" alt="">
					<?php endif; ?>
				</a>
			</figure>
		</article><!-- /.news -->
		<?php
	endwhile;
	else :
		?>
		<?php if ( is_search() ) : ?>
		<p>検索結果はありませんでした</p>
	<?php else : ?>
		<p>記事はありません</p>
	<?php endif; ?>
<?php endif; ?>
