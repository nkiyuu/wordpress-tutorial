<?php get_header(); ?>
	<div class="breadcrumbs">
		<span typeof="v:Breadcrumb"><a rel="v:url" property="v:title" title="" href="http://example.com" class="home">HOME</a></span> &gt; 
		<span typeof="v:Breadcrumb"><span property="v:title">検索結果</span></span>
	</div><!-- /.breadcrumbs -->

	<div class="contentsWrap">
		<div class="mainContents">
			<h1 class="type-A">「<?php the_search_query(); ?>」の検索結果</h1>
			<section class="newsBlock block">
				<?php get_template_part( 'loop', 'main' ); ?>
			</section><!-- /.newsBlock -->
		</div><!-- /.mainContents -->

		<aside class="subContents">
			<?php get_sidebar(); ?>
		</aside><!-- /.subContents -->
	</div><!-- /.contentsWrap -->
<?php get_footer(); ?>
