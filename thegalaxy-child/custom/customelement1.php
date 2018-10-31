<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
	echo '<div class="sidebar">';
					
	echo '<div class="business_information_wrapper">';
	
	if( get_field('hours_title', 'options')):
	
		echo '<h3>';
			
		the_field('hours_title', 'options');
			        
		echo '</h3>';
		
	endif;
	
	echo '<ul class="business_hours">';
	
	if( get_field('monday_hours', 'options')):
	
		echo '<li><span>Monday:</span><span>';
			        
		the_field('monday_hours', 'options');
		
		echo '</li>';
	
	endif;
	
	if( get_field('tuesday_hours', 'options')):
		
		echo '<li><span>Tuesday:</span><span>';
			        
		the_field('tuesday_hours', 'options');
		
		echo '</li>';
	
	endif;
	
	if( get_field('wednesday_hours', 'options')):
		
		echo '<li><span>Wednesday:</span><span>';
			        
		the_field('wednesday_hours', 'options');
		
		echo '</li>';
	
	endif;
	
	if( get_field('thursday_hours', 'options')):
		
		echo '<li><span>Thursday:</span><span>';
			        
		the_field('thursday_hours', 'options');
		
		echo '</li>';
	
	endif;
	
	if( get_field('friday_hours', 'options')):
		
		echo '<li><span>Friday:</span><span>';
		
		the_field('friday_hours', 'options');
		
		echo '</li>';
	
	endif;
	
	if( get_field('saturday_hours', 'options')):
		
		echo '<li><span>Saturday:</span><span>';
			        
		the_field('saturday_hours', 'options');
		
		echo '</li>';
	
	endif;
	
	if( get_field('sunday_hours', 'options')):
		
		echo '<li><span>Sunday:</span><span>';
			        
		the_field('sunday_hours', 'options');
		        
		echo '</li>';
	
	endif;
	
	if( get_field('hours_note', 'options')):
	
		echo '<p>';
			
		the_field('hours_note', 'options');
			
		echo '</p>';
		
	endif;
	
	echo '</ul>';
	
	if( get_field('hours_title_2', 'options')):
	
		echo '<h3>';
			
		the_field('hours_title_2', 'options');
			        
		echo '</h3>';
		
	endif;
	
	echo '<ul class="business_hours">';
	
	if( get_field('monday_hours_2', 'options')):
	
		echo '<li><span>Monday:</span><span>';
			        
		the_field('monday_hours_2', 'options');
		
		echo '</li>';
	
	endif;
	
	if( get_field('tuesday_hours_2', 'options')):
		
		echo '<li><span>Tuesday:</span><span>';
			        
		the_field('tuesday_hours_2', 'options');
		
		echo '</li>';
	
	endif;
	
	if( get_field('wednesday_hours_2', 'options')):
		
		echo '<li><span>Wednesday:</span><span>';
			        
		the_field('wednesday_hours_2', 'options');
		
		echo '</li>';
	
	endif;
	
	if( get_field('thursday_hours_2', 'options')):
		
		echo '<li><span>Thursday:</span><span>';
			        
		the_field('thursday_hours_2', 'options');
		
		echo '</li>';
	
	endif;
	
	if( get_field('friday_hours_2', 'options')):
		
		echo '<li><span>Friday:</span><span>';
		
		the_field('friday_hours_2', 'options');
		
		echo '</li>';
	
	endif;
	
	if( get_field('saturday_hours_2', 'options')):
		
		echo '<li><span>Saturday:</span><span>';
			        
		the_field('saturday_hours_2', 'options');
		
		echo '</li>';
	
	endif;
	
	if( get_field('sunday_hours_2', 'options')):
		
		echo '<li><span>Sunday:</span><span>';
			        
		the_field('sunday_hours_2', 'options');
		        
		echo '</li>';
	
	endif;
	
	if( get_field('hours_note_2', 'options')):
	
		echo '<p>';
			
		the_field('hours_note_2', 'options');
			
		echo '</p>';
		
	endif;
	
	echo '</ul>';
	
	echo '<div class="contact_info">';
	
	if( get_field('business_address','options') ):
		
		get_template_part( 'misc/businessaddress' );
	
	endif;
	
	echo '</div>';
	
	echo '<nav class="contact_info">';
	
	if( get_field('phone_number','options') ):
		
		get_template_part( 'misc/phonenumber' );
	
	endif;
	
	if( get_field('fax_number','options') ):
		
		get_template_part( 'misc/faxnumber' );
	
	endif;
	
	if( get_field('email_address','options') ):
		
		get_template_part( 'misc/emailaddress' );
	
	endif;
		
	echo '</nav>';
	
	echo '</div>';			
	
	echo '</div>';

?>
