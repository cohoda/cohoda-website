<!-- Blog Sidebar Widgets Column -->
<div class="col-md-3 col-md-offset-1">

	<!-- Blog Search Well -->

	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div class="well">
			<h4>Search</h4>
			<div class="input-group">
				<input type="text" class="form-control" name="s" value="<?php echo get_search_query(); ?>">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		</div>
	</form>

	<div class="well">
		<div class="row">
			<div class="col-lg-12">
				<div class="category_list">
					<?php wp_list_categories( array(
						'orderby'    => 'name',
						'show_count' => true,
						'hide_empty' => true,
						'title_li' => '<h4>' . __( 'Categories', 'textdomain' ) . '</h4>'
						) ); ?> 
					</ul>
				</div>
			</div>
		</div>
	</div>