<?php get_header(); ?>
	<?php
		
		$sidebar = get_option(THEME_SHORT_NAME.'_search_archive_sidebar','no-sidebar');
		$sidebar_class = '';
		if( $sidebar == "left-sidebar" || $sidebar == "right-sidebar"){
			$sidebar_class = "sidebar-included " . $sidebar;
		}else if( $sidebar == "both-sidebar" ){
			$sidebar_class = "both-sidebar-included";
		}

	?>
	<div class="content-wrapper <?php echo $sidebar_class; ?>">
		<div class="page-wrapper archive-wrapper">

			<?php
				$left_sidebar = "Search/Archive Left Sidebar";
				$right_sidebar = "Search/Archive Right Sidebar";		
				$num_excerpt = get_option(THEME_SHORT_NAME.'_search_archive_num_excerpt', 200);
				
				// 1: full-width 2: one-sidebar 3: both-sidebar
				if( $sidebar == "left-sidebar" || $sidebar == "right-sidebar" ){
					$image_size = "630x200";
				}else if( $sidebar == "both-sidebar" ){
					$image_size = "450x150";
				}else{
					$image_size = "930x300";
				}	

				echo "<div class='gdl-page-float-left'>";
				
				echo "<div class='gdl-page-item'>";
				
				while( have_posts() ){
	
					the_post();
					
					if( $post->post_type == 'testimonial' || $post->post_type == 'price_table'){ continue; }

					echo '<div class="blog-item sixteen columns gdl-divider mt0">'; 
					
					echo '<h2 class="blog-thumbnail-title post-title-color gdl-title"><a href="' . get_permalink() . '">' . get_the_title() . '</a></h2>';
					echo '<div class="blog-thumbnail-info post-info-color gdl-divider">';
					echo '<div class="blog-thumbnail-date">' . get_the_time('F d, Y') . '</div>';
					echo '<div class="blog-thumbnail-author"> by ' . get_the_author_link() . '</div>';	
					the_tags('<div class="blog-thumbnail-tag"></div>');
					
					echo '<div class="blog-thumbnail-comment">';
					comments_popup_link('0 Comment','1 Comment','% Comments','','Comments are off');
					echo '</div>';
					echo '<div class="clear"></div>';
					echo '</div>';
					
					$thumbnail_types = get_post_meta( $post->ID, 'post-option-thumbnail-types', true);
					
					if( $thumbnail_types == "Image" ){
					
						$thumbnail_id = get_post_thumbnail_id( $post->ID );
						$thumbnail = wp_get_attachment_image_src( $thumbnail_id , $image_size );
						$alt_text = get_post_meta($thumbnail_id , '_wp_attachment_image_alt', true);
						if( !empty($thumbnail) ){
							echo '<div class="blog-thumbnail-image">';
							echo '<a href="' . get_permalink() . '"><img src="' . $thumbnail[0] .'" alt="'. $alt_text .'"/></a></div>';
						}
					
					}else if( $thumbnail_types == "Video" ){
						
						$video_link = get_post_meta( $post->ID, 'post-option-thumbnail-video', true); 
						echo '<div class="blog-thumbnail-video">';
						echo get_video($video_link, gdl_get_width($image_size), gdl_get_height($image_size));
						echo '</div>';
					
					}else if ( $thumbnail_types == "Slider" ){

						$slider_xml = get_post_meta( $post->ID, 'post-option-thumbnail-xml', true); 
						$slider_xml_dom = new DOMDocument();
						$slider_xml_dom->loadXML($slider_xml);
						
						echo '<div class="blog-thumbnail-slider">';
						echo print_flex_slider($slider_xml_dom->documentElement, $image_size);
						echo '</div>';			
					
					}
					
					echo '<div class="blog-thumbnail-context">';
					
					echo '<div class="blog-thumbnail-content">' . substr( get_the_excerpt(), 0, $num_excerpt ) . '</div>';		

					$continue_reading = get_option(THEME_SHORT_NAME.'_translator_continue_reading', 'Continue Reading →');
					echo '<a class="blog-continue-reading" href="' . get_permalink() . '"><em>' . $continue_reading . '</em></a>';
					
					echo '</div>';
					
					echo '</div>';					
					
				}
				
				echo '<div class="clear"></div>';
		
				pagination();
				
				echo "</div>"; // gdl-page-item
				
				get_sidebar('left');		
				
				echo "</div>"; // gdl-page-float-left				
				
				get_sidebar('right');	
			?>
			<br class="clear">
		</div>
	</div> <!-- content-wrapper -->

<?php get_footer(); ?>
