<div id='sidebar'>
	<div class="sidebar_group">
		<h4><?=_e('Categories');?></h4>
		<ul>
			<?php
		 		$categories=get_categories();
		 		foreach($categories as $category): //var_dump($category);
			?>
					<li><a href="<?=get_category_link($category->term_id)?>"><?=$category->name;?></a></li>
			<?php 
				endforeach;
			?>
		</ul>
	</div>
</div>