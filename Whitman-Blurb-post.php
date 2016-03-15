<?php
/**
 * Plugin Name: Custom Blurb Post For Whitman
 * Plugin URI: http://whitman.syr.edu/
 * Description: This plugin adds New post type Blurb and page type to the Theme and Makes a Responsive Email Page that is suitable for Newsletter .
 * Version: 2.5.0
 * Author: Rahul Kumar Gaddam
 * Author URI: http://whitman.syr.edu/
 * License: GPL2
  * Date  Modified : 06.22.2015
  * Added WP Editor
  * Date  Modified : 06.23.2015
  * Removed the bug for External Link Label 
  * Date  Modified : 06.25.2015
  * Modified css for links in custom post 
  * Date  Modified : 06.29.2015
  * Modified css for text and  Removed tags for Private posts
  * Date  Modified : 07.02.2015
  * Updated the code for Cropping the image 
  * Date  Modified : 07.06.2015
  * Updated the Documentation
  * Date  Modified : 07.08.2015
  * Removed Previous Modifications for Cropping and gave a single image url 
  * Date  Modified : 07.15.2015
  * Made Images Clickable and added label to the priority 
   * Date  Modified : 09.25.2015
  *changed Css on Hash value 
 */ 
  

class PageTemplater {

    /**
         * A Unique Identifier
         */
     protected $plugin_slug;

        /**
         * A reference to an instance of this class.
         */
        private static $instance;

        /**
         * The array of templates that this plugin tracks.
         */
        protected $templates;


        /**
         * Returns an instance of this class. 
         */
        public static function get_instance() {

                if( null == self::$instance ) {
                        self::$instance = new PageTemplater();
                } 

                return self::$instance;

        } 

        /**
         * Initializes the plugin by setting filters and administration functions.
         */
        private function __construct() {

                $this->templates = array();


                // Add a filter to the attributes metabox to inject template into the cache.
                add_filter(
          'page_attributes_dropdown_pages_args',
           array( $this, 'register_project_templates' ) 
        );


                // Add a filter to the save post to inject out template into the page cache
                add_filter(
          'wp_insert_post_data', 
          array( $this, 'register_project_templates' ) 
        );


                // Add a filter to the template include to determine if the page has our 
        // template assigned and return it's path
                add_filter(
          'template_include', 
          array( $this, 'view_project_template') 
        );


                // Add your templates to this array.
                $this->templates = array(
                        'page-intro.php'     => 'Email NewsLetter',
                );
        
        } 


        /**
         * Adds our template to the pages cache in order to trick WordPress
         * into thinking the template file exists where it doens't really exist.
         *
         */

        public function register_project_templates( $atts ) {

                // Create the key used for the themes cache
                $cache_key = 'page_templates-' . md5( get_theme_root() . '/' . get_stylesheet() );

                // Retrieve the cache list. 
        // If it doesn't exist, or it's empty prepare an array
                $templates = wp_get_theme()->get_page_templates();
                if ( empty( $templates ) ) {
                        $templates = array();
                } 

                // New cache, therefore remove the old one
                wp_cache_delete( $cache_key , 'themes');

                // Now add our template to the list of templates by merging our templates
                // with the existing templates array from the cache.
                $templates = array_merge( $templates, $this->templates );

                // Add the modified cache to allow WordPress to pick it up for listing
                // available templates
                wp_cache_add( $cache_key, $templates, 'themes', 1800 );

                return $atts;

        } 

        /**
         * Checks if the template is assigned to the page
         */
        public function view_project_template( $template ) {

                global $post;

                if (!isset($this->templates[get_post_meta( 
          $post->ID, '_wp_page_template', true 
        )] ) ) {
          
                        return $template;
            
                } 

                $file = plugin_dir_path(__FILE__). get_post_meta( 
          $post->ID, '_wp_page_template', true 
        );
        
                // Just to be safe, we check if the file exist first
                if( file_exists( $file ) ) {
                        return $file;
                } 
        else { echo $file; }

                return $template;

        } 


} 





add_action( 'plugins_loaded', array( 'PageTemplater', 'get_instance' ) );














  
  //--------------------------Added code for new custom post type from : add_action- Rahul (rgaddam@syr.edu) : placed after configuration--------------
add_action( 'add_meta_boxes', 'cd_meta_box_add' );
function cd_meta_box_add()
{
    add_meta_box( 'my-meta-box-id', 'Blurb Settings', 'cd_meta_box_cb', 'post', 'normal', 'high' );
}

 
  

function cd_meta_box_cb( $post )
{
  
    $values = get_post_custom( $post->ID );
    $text = isset( $values['my_meta_box_edition'] ) ? $values['my_meta_box_edition'][0] : '';
    $intro= isset( $values['my_meta_box_text_area'] ) ? $values['my_meta_box_text_area'][0] : '';
  $slink= isset( $values['my_meta_box_survey'] ) ? $values['my_meta_box_survey'][0] : '';
 $slinkname= isset( $values['my_meta_box_survey_name'] ) ? $values['my_meta_box_survey_name'][0] : '';
   $check = isset( $values['my_meta_box_checkvalue'] ) ? $values['my_meta_box_checkvalue'][0] : '';
$rfix = isset( $values['my_meta_box_rfix'] ) ? $values['my_meta_box_rfix'][0] : '';

 $pid  = isset( $values['my_meta_box_pindex'] ) ? $values['my_meta_box_pindex'][0] : '';
 
  //nonce field for saving the meta data for better security - Rahul(rgaddam@syr.edu) 
  wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );
 ?>
   
   


   
   
   
   
   
   
   
   
   
   
   
   
   
    <script language="javascript">
    document.onreadystatechange = function(){
     if(document.readyState === 'complete'){
         var x= 'Custom';
    var y= 'Default';
    var z= 'No';
            
 if( x=="<?php echo $check;?>")
                            document.getElementById("meta_box_options").style.visibility="visible";
                            else
                            document.getElementById("meta_box_options").style.visibility="hidden";
                           
  
                            if( x=="<?php echo $check;?>"|| y=="<?php echo $check;?>" )
                            document.getElementById("meta_box_options1").style.visibility="visible";
                            else
                            document.getElementById("meta_box_options1").style.visibility="hidden";
     }
}
  
   
                            
  


                 function hola() {
                            if( document.getElementById("my_meta_box_radio2").checked  )
                            document.getElementById("meta_box_options").style.visibility="visible";
                            else
                            document.getElementById("meta_box_options").style.visibility="hidden";
                           
  
                            if( document.getElementById("my_meta_box_radio1").checked || document.getElementById("my_meta_box_radio2").checked )
                            document.getElementById("meta_box_options1").style.visibility="visible";
                            else
                            document.getElementById("meta_box_options1").style.visibility="hidden";
  
                            }
                            
                            
                           
                            
                        
                              
    </script>
          
     <div class="bunyad-meta cf">
     
     
       
       
  <input type="radio" name="my_meta_box_radio"  id="my_meta_box_radio1" value="Default"  onchange="hola()" <?php checked( $check, 'Default' ); ?>  > Use Deafult Blurb &nbsp;  &nbsp;  &nbsp; 
  <input type="radio" name="my_meta_box_radio"  id="my_meta_box_radio2" value="Custom" onchange="hola()"  <?php checked( $check, 'Custom' ); ?> > Use Custom Blurb &nbsp;  &nbsp;  &nbsp; 
  <input type="radio" name="my_meta_box_radio"  id="my_meta_box_radio3" value="No" onchange="hola()" <?php checked( $check, 'No' ); ?>  > Dont Use Blurb<br><br>
    <div id="meta_box_options1" style="visibility:hidden;" >
        <span class="label">Email Edition:</span>
 <span class="field">
    <input type="text" name="my_meta_box_edition" id="my_meta_box_edition" value="<?php echo $text; ?>"  ><br\><br\>
      </span>
      
      <br><br>
      
      
    
      
      
      
        <span class="label">Position-Index:</span>
 <span class="field">
    <input type="number" name="my_meta_box_pindex" id="my_meta_box_pindex" style="width: 60px;"  min="0" value="<?php echo $pid; ?>"  ><p><b>&#128161; Hint: Post with position index 5 will appear above the post with position index 4 . </p></b><br\><br\>
      </span>
      
   
      
    <span class="label">Blurb Image URL:</span>
 <span class="field">
  <input type="text" name="my_meta_box_rfix" id="my_meta_box_rfix" style="width: 470px;"  value="<?php echo $rfix; ?>"  > </b> <p><b>&#8613; Ideal Image has  width: 185px height: 240px </p></b><br><br>
      </span>
      
    
    </div>

    
    <div id="meta_box_options" style="visibility:hidden;" >
    <span class="label">Custom Blurb:</span>
 <span class="field">
<?php wp_editor( $intro, 'my_meta_box_text_area', $settings = array('textarea_name' => my_meta_box_text_area) ); ?>
  </span>
  
   <span class="label">External Link Label (if any)</span>
 <span class="field">
  <input type="text" name="my_meta_box_survey_name" id="my_meta_box_survey_name" style="width: 200px;"  value="<?php echo $slinkname; ?>"  >
  </span>
  <br/> <br/>
  <span class="label">External link (if any)</span>
 <span class="field">
  <input type="text" name="my_meta_box_survey" id="my_meta_box_survey" style="width: 470px;"  value="<?php echo $slink; ?>"  >
  </span>
  
  
    </div>
    </div>
    
 
      <?php 
      
      
  
}
 add_action( 'save_post', 'cd_meta_box_save' ); 

function cd_meta_box_save( )
{
  global $post;
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     
    // if our nonce isn't there, or we can't verify it, bail
    if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
     
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post',$post_id ) ) return;
  
  
   if( isset( $_POST['my_meta_box_edition'] ) )
        update_post_meta( $post->ID, 'my_meta_box_edition', esc_attr( $_POST['my_meta_box_edition'] ) );
         
    if( isset( $_POST['my_meta_box_text_area'] ) )
        update_post_meta( $post->ID, 'my_meta_box_text_area', ( $_POST['my_meta_box_text_area'] ) );
         
  
    if( isset( $_POST['my_meta_box_radio'] ) )
    update_post_meta($post->ID, 'my_meta_box_checkvalue', esc_attr( $_POST['my_meta_box_radio'] ) );
  
     if( isset( $_POST['my_meta_box_survey_name'] ) )
    update_post_meta($post->ID, 'my_meta_box_survey_name', esc_attr( $_POST['my_meta_box_survey_name'] ) );
  

   if( isset( $_POST['my_meta_box_survey'] ) )
    update_post_meta($post->ID, 'my_meta_box_survey', esc_attr( $_POST['my_meta_box_survey'] ) );

   if( isset( $_POST['my_meta_box_rfix'] ) )
    update_post_meta($post->ID, 'my_meta_box_rfix', esc_attr( $_POST['my_meta_box_rfix'] ) );
    
    


   if( isset( $_POST['my_meta_box_pindex'] ) )
    update_post_meta($post->ID, 'my_meta_box_pindex', esc_attr( $_POST['my_meta_box_pindex'] ) );
  
   


  
}
//------------------------------------------------- END OF RAHUL CODE FOR META BOX ---------------------------------------------------------------------------------------------
//-------------------------------------------------code fot metabox to a Newsletter page starts here---------------------------------------------------------------------------------
add_action('admin_init','my_meta_init');
function my_meta_init()
{
$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;


$template_file = get_post_meta($post_id,'_wp_page_template',TRUE);
  // check for a template type
  if ($template_file == 'page-intro.php') {
    add_meta_box("news-letter-id", "NewsLetter Settings", "Blurb_page", "page", "normal", "low");
    remove_post_type_support( 'page', 'editor' );
  }

 
}

function Blurb_page( $post )
{
  $age = array();
  
  $values = get_post_custom( $post->ID );
 $EmailEdition= isset( $values['my_meta_box_edition_page'] ) ? $values['my_meta_box_edition_page'][0] : '';
  $HeaderURL= isset( $values['my_meta_box_header'] ) ? $values['my_meta_box_header'][0] : '';
  $MID= isset( $values['my_meta_box_MailID'] ) ? $values['my_meta_box_MailID'][0] : '';
$CallID= isset( $values['my_meta_box_call'] ) ? $values['my_meta_box_call'][0] : '';
 
   ?>
   <div class="bunyad-meta cf">
   
    <span class="label">Email Edition:</span>  
 <span class="field">
   <?php $page_query = new WP_Query('post_type=post'); ?>
<?php while ($page_query->have_posts()) : $page_query->the_post(); ?>
<?php 
$meta_desc = get_post_meta(get_the_ID(), 'my_meta_box_edition', true);
 ?>
<?php array_push($age,$meta_desc); ?>
<?php endwhile; ?>
 <select name="my_meta_box_edition_page" id="my_meta_box_edition_page" >
<?php
$result = array_unique($age);
foreach($result as $x ) {
  echo "<option value='";
    echo  $x ;
        echo  "'" ;
       if ($EmailEdition==$x) echo "selected";
            echo  ">" ;
         echo  $x ;
    echo "</option>";
}
?>
</select>
     </span>
  <br>  <br>  
  
   <span class="label">Header image URL:</span>
 <span class="field">
    <input type="text" name="my_meta_box_header" id="my_meta_box_header" style="width: 600px;" value="<?php echo $HeaderURL; ?>"  ><br><br>
    </span>
  
   <span class="label" Style ="font-size:15px;">Footer Settings: </span>
 <span class="field">
  <br><br>
     </span>
  
  
  
      <span class="label">Mail ID </span>
 <span class="field">
    <input type="email" name="my_meta_box_MailID" id="my_meta_box_MailID" style="width: 250px;" value="<?php echo $MID; ?>"  ><br><br>
     </span>
     
   <span class="label">Call</span>
 <span class="field">
    <input type="text" min="0" name="my_meta_box_call" id="my_meta_box_call" style="width: 150px;" value="<?php echo $CallID; ?>"  ><br><br>
     </span>
    
    
   </div>
  <?php
      }
add_action( 'save_post', 'cd_meta_box_NLsave' ); 
function cd_meta_box_NLsave( )
{
  global $post;
    // Bail if we're doing an auto save
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
     

     
    // if our current user can't edit this post, bail
    if( !current_user_can( 'edit_post',$post_id ) ) return;
  
  
   if( isset( $_POST['my_meta_box_edition_page'] ) )
        update_post_meta( $post->ID, 'my_meta_box_edition_page', esc_attr( $_POST['my_meta_box_edition_page'] ) );
         
    if( isset( $_POST['my_meta_box_header'] ) )
        update_post_meta( $post->ID, 'my_meta_box_header', esc_attr( $_POST['my_meta_box_header'] ) ); 
        
        
         if( isset( $_POST['my_meta_box_MailID'] ) )
        update_post_meta( $post->ID, 'my_meta_box_MailID', esc_attr( $_POST['my_meta_box_MailID'] ) ); 
        
        
         if( isset( $_POST['my_meta_box_call'] ) )
        update_post_meta( $post->ID, 'my_meta_box_call', esc_attr( $_POST['my_meta_box_call'] ) ); 
        
        
        
        
        
        
        

}





//-------------------------------------------------END OF RAHUL CODE FOR META BOX NEWSLETTER TO A  TEMPLATE -------------------------------------------------------------------------------
