<?php
function sa_theme_options_page() {
    global $sa_options, $sa_categories, $sa_layouts;
 
    if ( ! isset( $_REQUEST['updated'] ) )
    $_REQUEST['updated'] = false; // This checks whether the form has just been submitted. ?>
 
    <div>
 
    <?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options' ) . "</h2>";
    // This shows the page's name and an icon if one has been provided ?>
 
    <?php if ( false !== $_REQUEST['updated'] ) : ?>
    <div><p><strong><?php _e( 'Options saved' ); ?></strong></p></div>
    <?php endif; // If the form has just been submitted, this shows the notification ?>
 
    <form method="post" action="options.php">
 
    <?php $settings = get_option( 'sa_options', $sa_options ); ?>
 
    <?php settings_fields( 'sa_theme_options' );
    /* This function outputs some hidden fields required by the form,
    including a nonce, a unique number used to ensure the form has been submitted from the admin page
    and not somewhere else, very important for security */ ?>
 
    <table><!-- Grab a hot cup of coffee, yes we're using tables! -->
 
    <tr valign="top"><th scope="row"><label for="footer_copyright">Footer Copyright Notice</label></th>
    <td>
    <input id="footer_copyright" name="sa_options[footer_copyright]" type="text" value="<?php  esc_attr_e($settings['footer_copyright']); ?>" />
    </td>
    </tr>
 
    <tr valign="top"><th scope="row"><label for="intro_text">Intro Text</label></th>
    <td>
    <textarea id="intro_text" name="sa_options[intro_text]" rows="5" cols="30"><?php echo stripslashes($settings['intro_text']); ?></textarea>
    </td>
    </tr>
 
    <tr valign="top"><th scope="row"><label for="featured_cat">Featured Category</label></th>
    <td>
    <select id="featured_cat" name="sa_options[featured_cat]">
    <?php
    foreach ( $categories as $category ) :
        $label = $category['label'];
        $selected = '';
        if ( $category['value'] == $settings['featured_cat'] )
            $selected = 'selected="selected"';
        echo '<option style="padding-right: 10px;" value="' . esc_attr( $category['value'] ) . '" ' . $selected . '>' . $label . '</option>';
    endforeach;
    ?>
    </select>
    </td>
    </tr>
 
    <tr valign="top"><th scope="row">Layout View</th>
    <td>
    <?php foreach( $layouts as $layout ) : ?>
    <input type="radio" id="<?php echo $layout['value']; ?>" name="sa_options[layout_view]" value="<?php esc_attr_e( $layout['value'] ); ?>" <?php checked( $settings['layout_view'], $layout['value'] ); ?> />
    <label for="<?php echo $layout['value']; ?>"><?php echo $layout['label']; ?></label><br />
    <?php endforeach; ?>
    </td>
    </tr>
 
    <tr valign="top"><th scope="row">Author Credits</th>
    <td>
    <input type="checkbox" id="author_credits" name="sa_options[author_credits]" value="1" <?php checked( true, $settings['author_credits'] ); ?> />
    <label for="author_credits">Show Author Credits</label>
    </td>
    </tr>
 
    </table>
 
    <p><input type="submit" value="Save Options" /></p>
 
    </form>
 
    </div>
 
    <?php
}