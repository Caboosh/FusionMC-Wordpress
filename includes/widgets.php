<?php

	function cf_widgets () {
		register_sidebar(
			array(
				'name'          => __( 'The Default Sidebar', 'sidebar' ),
				'id'            => 'cf_sidebar-default',
				'description'   => __( 'The Default Sidebar for the FusionMC Theme', 'sidebar' ),
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'The Server Status Sidebar', 'server-sidebar' ),
				'id'            => 'cf_sidebar-server',
				'description'   => __( 'The Server Status Sidebar for the FusionMC Theme', 'server-sidebar' ),
			)
		);
	}

	class CF_1_12_2_Server_Status extends WP_Widget
	{
		/**
		 * Sets up the widgets name etc
		 */
		public function __construct() {
			$widget_ops 		= array(
				'description' 	=> 'Displays The Status of the Flagship Server, Uptime, Who\'s Online, Spaces Free etc. 
			It also shows the server IP!'
			);
			parent::__construct( 'cf_1_12_2_server_status', 'FusionMC 1.12.2 Server Status', $widget_ops );
		}

		/**
		 * Outputs the options form on admin
		 *
		 * @param array $instance The widget options
		 */
		public function form( $instance ) {
			// outputs the options form on admin
			$default 		=	array('title'=>'FusionMC Server Status');
			$instance		=	wp_parse_args( (array) $instance, $default);
			?>
			<p>
				<label for="<?php echo $this->get_field_id('title');?>">Title: </label>
				<input type="text" class="widefat"
						id="<?php echo $this->get_field_id('title');?>"
						name="<?php echo $this->get_field_name('title');?>"
						value="<?php echo esc_attr($instance['title'])?>">
			</p>
			<?php
		}

		/**
		 * Processing widget options on save
		 *
		 * @param array $new_instance The new options
		 * @param array $old_instance The previous options
		 *
		 * @return array
		 */
		public function update( $new_instance, $old_instance ) {
			// processes widget options to be saved
		}

		/**
		 * Outputs the content of the widget
		 *
		 * @param array $args
		 * @param array $instance
		 */
		public function widget( $args, $instance ) {
			// outputs the content of the widget
		}
	}