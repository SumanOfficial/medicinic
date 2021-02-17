<?php

/**
 * This is a custom Button widget 
 * It has Title & link area
 * @package medicinic
 */

/**
 * Extending wp_widget class
 */
class medicinic_btn_widget extends WP_Widget
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(
            // widget ID
            'btn_widget',
            // widget name
            'Custom Button',
            // widget description
            ['description' =>
            __(
                "Display Custom link Button",
                "medicinic"
            )]
        );
    }
    /**
     * Adding Frontend of our widget
     * @param $args , $instance
     */
    public function widget($args, $instance)
    {
        $name = apply_filters('widget_title', $instance["name"]);
        $link = apply_filters('widget_description', $instance["link"]);

        // opening widget
        echo $args['before_widget'];

        // if title is present then show
        if (!empty($name)) { ?>
            <a href="<?php echo esc_url($link); ?>" class="btn-yellow"> <?php esc_html_e($name); ?> </a>
        <?php
        }

        // closing widget
        echo $args['after_widget'];
    }

    /**
     *  Adding the Backend of widget
     * @param $instance
     */
    public function form($instance)
    {

        // Button Name
        if (isset($instance['name'])) {
            $name = $instance['name'];
        } else {
            $name = __('Start Now', 'medicinic');
        }

        // Button link
        if (isset($instance['link'])) {
            $link = $instance['link'];
        } else {
            $link = __('https://wordpress.org/', 'medicinic');
        }
        ?>
        <!-- For widget Button Name -->
        <p>
            <label for="<?php echo $this->get_field_id('name'); ?>"><?php _e('Button Name :'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('name'); ?>" name="<?php echo $this->get_field_name('name'); ?>" type="text" value="<?php echo esc_attr($name); ?>" />
        </p>

        <!-- for widget button link -->
        <p>
            <label for="<?php echo $this->get_field_id('link'); ?>"><?php _e('button Link :'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('link'); ?>" name="<?php echo $this->get_field_name('link'); ?>" type="text" value="<?php echo esc_attr($link); ?>" />
        </p>

<?php

    }

    /**
     * Adding the update for refresh everytime after widget update
     * @param $new_instance, $old_instance
     */
    public function update($new_instance, $old_instance)
    {
        $instance = array();

        $instance['name'] = (!empty($new_instance['name'])) ? strip_tags($new_instance['name']) : '';
        $instance['link'] = (!empty($new_instance['link'])) ? strip_tags($new_instance['link']) : '';

        return $instance;
    }
}

/**
 * Register widget
 */
function medicinic_btn_widget_register()
{
    register_widget('medicinic_btn_widget');
}
add_action('widgets_init', 'medicinic_btn_widget_register');
