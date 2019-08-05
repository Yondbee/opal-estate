<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>

<div class="opalestate-search-properties hola">
	<div class="inner">
		<div class="container">
            <?php echo do_shortcode("[LocationsSearch]");  ?>
			<div id="searchForm" class="search-properies-form">
				<?php OpalEstate_Search::render_horizontal_form(); ?> 
			</div>
		</div>	
	</div>
</div>	