	<style>#newsan li a:hover{color:#ff502e !important;}
	#newsan li{margin-top: 5px; border-top: 1px solid #ddd; padding-top: 5px;}
	#newsan li span{font-size:12px; color:#cc3333;}
	#newsan li:first-child{border-top:none;padding-top: 0;margin-top:0;}
	</style>
	<div id="newsann">
	<h2 class="content-heading"><a href="http://theins.ru/category/news/" style="font-size: 16px;font-weight: bold;">Новости</a></h2>
	<ul id="newsan">
	<?php 	query_posts(array ( 'cat' => '334', 'posts_per_page' => '7' )); 
		 if (have_posts()) : while (have_posts()) : the_post(); ?>	

		 <li><span><?php the_time('G:i'); ?></span><a href="<?php the_permalink(); ?>" style="font-size:16px;color:#000;"> <?php the_title(); ?></a></li>

	<?php	endwhile;
		endif; wp_reset_query(); ?>
		</ul>
	</div>