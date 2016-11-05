<?php

get_header();

$categories = get_the_category();
 foreach( $categories as $category ) {
 	$category_name = $category->name;
 	$category_id = $category->term_id;
}

?>
<div class="et_pb_section et_pb_fullwidth_section  et_pb_section_0 et_section_regular et_pb_section_first">
	<section class="et_pb_fullwidth_header et_pb_module et_pb_bg_layout_dark et_pb_text_align_right  et_pb_fullwidth_header_0" style="padding-top: 164px; background-image: url(http://maziero.art.com.br/wp-content/uploads/2016/10/TOPO-PAGINAS_01.jpg);">
		<div class="et_pb_fullwidth_header_container right">
			<div class="header-content-container center">
				<div class="header-content">
					<h1><?php echo $category_name; ?></h1>
				</div>
			</div>
		</div>
	</section>
</div>
<div class="et_pb_section et_section_regular">
	<div class="et_pb_row et_pb_row_1-4_3-4">
		<div class="et_pb_column et_pb_column_1_4">
			<?php get_sidebar(); ?>
		</div>
		<div class="et_pb_column et_pb_column_3_4">
			<?php echo do_shortcode('[et_pb_blog admin_label="Blog" fullwidth="on" posts_number="10″ meta_date="M j, Y" show_thumbnail="on" show_content="off" show_more="on" show_author="off" show_date="on" show_categories="on" show_comments="on" show_pagination="on" offset_number="0″ use_overlay="off" background_layout="light" use_dropshadow="off" use_border_color="off" border_color="#ffffff" border_width="1px" border_style="solid" disabled="off" include_categories="'.$category_id.'"] [/et_pb_blog]');?>
		</div>
	</div>
</div>




<?php get_footer(); ?>