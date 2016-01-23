<?php
/*

	Plugin Name: 	PageLines Section Expand
	Description: 	A ridiculously clean and simple way to create nice, single expandable sections in builder. Please Note: Use Our Shortcodes version to place inside loop section.

	Author: 	    World Webscapes
	Author URI: 	http://www.worldwebscapes.com
	Demo:  			http://www.worldwebscapes.com

	Version: 			5.0.2
	
	PageLines: 		PL_expand
	Filter: 			component

	Category:     framework, sections, featured, third party

	Tags:       	expands, items
	

*/

if( ! class_exists( 'PL_Section' ) )
	return;

class PL_expand extends PL_Section {
	 /** 
 * Include extra scripts and styles here
 * Use the pl_script and pl_style functions (which enqueues the files)
 
 */
function section_styles(){

  /** Include the sample script */
  pl_script( $this->id, $this->base_url . '/scripts.js' );
  pl_style( 'style-css', 	$this->base_url.'/style.css');
 
  
}
	


	function section_opts(){

		$options = array();


		$options[] = array(
			'key'				=> 'item_array',
	        'type'			=> 'multi',
			'default'  => 'Yo.',
            'label'    => __( 'Text / Quote', 'pl-section-expand' ), 
			'title'			=> __('Expand Items Setup', 'pl-section-expand'), 
			'post_type'	=> __('Box', 'pl-section-expand'), 
			
			'opts'			=> array(
			
			    pl_std_opt('title'),
				pl_std_opt('text'),
				
				pl_std_opt('text_alignment'),
			
				pl_std_opt('section_alignment'),
				
				
				pl_std_opt('button'),
				array(
					'type' 		=> 'multi',
					'toggle'	=> 'open', 
					'title'		=> 'Header Background Options',
					'opts'	=> array(
							pl_std_opt('scheme'),
							pl_std_opt('background_color'),
							pl_std_opt('background_image'),
						)
				)
				
				
				
			)
	    );

		return $options;
	}


	function section_template(){ ?>

		<div class="pl-expand-container" data-bind="multi: item_array">	
			
				<div class="pl-content-area">
					<div data-bind="plclassname: section_alignment">
						
						<div  data-bind="plclassname: [text_alignment(), scheme()]">
 
  
   <div class="pl-expand-container ">
	<a href="#" class="pl-expand-toggle pl-bg-cover " data-bind="plbg: background_image, style: {'background-color': background_color}"><h2 data-bind="pltext: title"></h2></a>
	<div class="pl-expand-content">
		<p data-bind="pltext: text"></p>
          <div><p><a class="pl-btn" href="#" data-bind="plbtn: 'button'" ></a></p></div>
	</div>
  
					</div>
				</div>
			</div>
            </div>
	
   
</div>

    
<?php 
	}



	



}
