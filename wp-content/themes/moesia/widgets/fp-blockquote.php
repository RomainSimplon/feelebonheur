<?php

class Moesia_Blockquote extends WP_Widget {

// constructor
    function __construct() {
		$widget_ops = array('classname' => 'moesia_blockquote_widget', 'description' => __( 'Add a short message to your visitors and an image', 'moesia') );
        parent::__construct(false, $name = __('Moesia FP: Blockquote', 'moesia'), $widget_ops);
		$this->alt_option_name = 'moesia_blockquote_widget';
    }
	
	// widget form creation
	function form($instance) {

	// Check values
		$title      = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$image_uri  = isset( $instance['image_uri'] ) ? esc_url_raw( $instance['image_uri'] ) : '';
		$blockquote = isset( $instance['blockquote'] ) ? esc_textarea( $instance['blockquote'] ) : '';	
		$cite       = isset( $instance['cite'] ) ? esc_html( $instance['cite'] ) : '';	
	?>

	<p>
	<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'moesia'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
	</p>
	
	<p>
	<label for="<?php echo $this->get_field_id('blockquote'); ?>"><?php _e('Enter your blockquote. No tags necessary.', 'moesia'); ?></label>
	<textarea class="widefat" id="<?php echo $this->get_field_id('blockquote'); ?>" name="<?php echo $this->get_field_name('blockquote'); ?>"><?php echo $blockquote; ?></textarea>
	</p>

	<p>
	<label for="<?php echo $this->get_field_id('cite'); ?>"><?php _e('Quote author', 'moesia'); ?></label>
	<input class="widefat" id="<?php echo $this->get_field_id('cite'); ?>" name="<?php echo $this->get_field_name('cite'); ?>" type="text" value="<?php echo $cite; ?>" />
	</p>

    <?php
        if ( $image_uri != '' ) :
           echo '<p><img class="custom_media_image" src="' . $image_uri . '" style="max-width:100px;" /></p>';
        endif;
    ?>
 	<p><label for="<?php echo $this->get_field_id('image_uri'); ?>"><?php _e('Upload an image to show up next to your quote.', 'moesia'); ?></label></p>   
    <p><input type="button" class="button button-primary custom_media_button" id="custom_media_button" name="<?php echo $this->get_field_name('image_uri'); ?>" value="Upload Image" style="margin-top:5px;" /></p>
	<p><input class="widefat custom_media_url" id="<?php echo $this->get_field_id( 'image_uri' ); ?>" name="<?php echo $this->get_field_name( 'image_uri' ); ?>" type="text" value="<?php echo $image_uri; ?>" size="3" /></p>	

	
	<?php
	}

	// update widget
	function update($new_instance, $old_instance) {
		$instance = $old_instance;
		$instance['title'] = strip_tags($new_instance['title']);
		$instance['blockquote'] = strip_tags($new_instance['blockquote']);
	    $instance['image_uri'] = esc_url_raw( $new_instance['image_uri'] );	
		$instance['cite'] = strip_tags($new_instance['cite']);	    		
	  
		return $instance;
	}
	
	// display widget
	function widget($args, $instance) {
		echo $args['before_widget'];


		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		extract($args);

		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : '';
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		$image_uri = isset( $instance['image_uri'] ) ? esc_url($instance['image_uri']) : '';	
		$blockquote = isset( $instance['blockquote'] ) ? esc_textarea($instance['blockquote']) : '';
		$cite = isset( $instance['cite'] ) ? esc_html($instance['cite']) : '';

?>
		<section id="blockquote" class="blockquote-area">
			<div class="container">			
				<?php if ( $title ) echo $before_title . '<span class="wow bounce">' . $title . '</span>' . $after_title; ?>
				<?php if ($image_uri !='') : ?>
					<div class="bq-img col-md-6 col-sm-6 col-xs-6 wow fadeInUp">
						<img src="<?php echo esc_url($image_uri); ?>" />
					</div>
					<div class="bq-text col-md-6 col-sm-6 col-xs-6">
				<?php else : ?>
					<div class="bq-text col-md-12">
				<?php endif; ?>
					<blockquote class="wow fadeInUp"><?php echo $blockquote; ?></blockquote>
					<cite class="wow fadeInUp"><?php echo esc_html($cite); ?></cite>
				</div>	
			</div>		
		</section>		
	<?php

		echo $args['after_widget'];
	}
}
