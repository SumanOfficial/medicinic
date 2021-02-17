<?php

/**
 * This is a custom text widgte 
 * It has Title , sub title & desctiption area
 * @package medicinic
 */

/**
 * Extending wp_widget class
 */
class medicinic_heading_widget extends WP_Widget
{
    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(
            // widget ID
            'ch_widget',
            // widget name
            'Custom Heading',
            // widget description
            ['description' =>
            __(
                "Display Custom heading, sub-heading & descripton to your site",
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
        $title = apply_filters('widget_title', $instance["title"]);
        $sub_title = apply_filters('widget_sub_title', $instance["sub_title"]);
        $desc = apply_filters('widget_description', $instance["desc"]);

        // opening widget
        echo $args['before_widget'];

        // if title is present then show
        if (!empty($title)) {
            echo $args['before_title'] . $title . $args['after_title'];
        }
        // if the subtitle is present then show
        if (!empty($sub_title)) {
            echo $args['before_sub_title'] . $sub_title . $args['after_sub_title'];
        }
        // if the desc (description) is present then show
        if (!empty($desc)) {
            echo $args['before_desc'] . $desc . $args['after_desc'];
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

        // Heading Title
        if (isset($instance['title'])) {
            $title = $instance['title'];
        } else {
            $title = __('WellCome to our website', 'medicinic');
        }

        // Heading Sub-Title
        if (isset($instance['sub_title'])) {
            $sub_title = $instance['sub_title'];
        } else {
            $sub_title = __('Subtitle', 'medicinic');
        }

        // Heading Description
        if (isset($instance['desc'])) {
            $desc = $instance['desc'];
        } else {
            $desc = __('Lorem ipsum dolor sit amet, consectetur adipisicing elit.', 'medicinic');
        }
?>
        <!-- For widget title -->
        <p>
            <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Heading Title :'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>

        <!-- for widget subtitle -->
        <p>
            <label for="<?php echo $this->get_field_id('sub_title'); ?>"><?php _e('Heading Sub-Title :'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('sub_title'); ?>" name="<?php echo $this->get_field_name('sub_title'); ?>" type="text" value="<?php echo esc_attr($sub_title); ?>" />
        </p>

        <!-- for widget description -->
        <p>
            <label for="<?php echo $this->get_field_id('description'); ?>"><?php _e('Heading Description :'); ?></label>
            <textarea class="widefat" name="<?php echo $this->get_field_name('desc'); ?>" id="<?php echo $this->get_field_id('desc'); ?>"><?php echo esc_attr($desc); ?></textarea>
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

        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['sub_title'] = (!empty($new_instance['sub_title'])) ? strip_tags($new_instance['sub_title']) : '';
        $instance['desc'] = (!empty($new_instance['desc'])) ? strip_tags($new_instance['desc']) : '';

        return $instance;
    }
}

/**
 * Register widget
 */
function medicinic_heading_widget_register()
{
    register_widget('medicinic_heading_widget');
}
add_action('widgets_init', 'medicinic_heading_widget_register');
