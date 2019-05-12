<?php get_header(); ?>

<div class="contentsWrap">
	<div class="mainContents">
		<section class="planBlock block">
			<h1 class="type-A"><?php single_term_title( '' ); ?>の宿泊プラン</h1>
			<div clall="plans">
				<?php get_template_part( 'loop', 'plan' ); ?>
			</div>
		</section>
	</div>

	<aside class="subContents">
		<?php get_sidebar( 'beds' ); ?>
	</aside>
</div>

<?php get_footer(); ?>
