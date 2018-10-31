<?php
						
	$beerwine = get_field('beer_&_wine_on_tap','option');
						
	if( $beerwine ):
	
		//shuffle($beerwine);
		
		echo '<div class="beerwine_wrapper">';
									
		foreach( $beerwine as $item ):
			
			echo '<div class="beerwine_item">';
			
			echo '<div>';
			
			echo '<span class="beerwine_brewery">' . $item['beerwine_brewery'] . '</span>';
			
			echo '<span class="beerwine_title">' . $item['beerwine_title'] . '</span>';
			
			echo '</div><div>';
			
			echo '<span class="beerwine_type">' . $item['beerwine_type'] . '</span>';
			
			echo '<span class="beerwine_abv">' . 'ABV ' . $item['beerwine_abv'] . '</span>';
			
			echo '</div>';
			
			echo '</div>';
																		
		endforeach;
		
		echo '</div>';
									
	endif;
											
?>