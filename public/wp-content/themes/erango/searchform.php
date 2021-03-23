<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="">
		Search:
	</label>
    <input type="text" id="" class="search-field" placeholder="" value="<?php echo get_search_query(); ?>" name="s" />
	<input type="submit" class="search-submit" value="Search" />
</form>