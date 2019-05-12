<div class="wrapper">
	<section class="recentCategories">
		<h1 class="type-C">ベッド一覧</h1>
		<ul class="categories">
			<?php
			$args = array(
				'title_li'   => '',
				'show_count' => true,
				'taxonomy'   => 'bed',
			);
			wp_list_categories( $args );
			?>
		</ul>
	</section>
</div>
