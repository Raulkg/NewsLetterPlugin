<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">



<?php
/*
Template Name: Email Newsletter

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
  * Removed Previous Modifications for Cropping and gave a single imaeg url 
  * Date  Modified : 07.15.2015
  * Made Images Clickable and added label to the priority 
*/






 ?>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<style type="text/css">
body{width: 100%; background-color: white; margin:0; padding:0; -webkit-font-smoothing: antialiased;mso-margin-top-alt:0px; mso-margin-bottom-alt:0px; mso-padding-alt: 0px 0px 0px 0px;}
       
        p,h1,h2,h3,h4{font-size: 13px;margin-top:0;margin-bottom:0;padding-top:0;padding-bottom:0;font-family: Verdana, Geneva, sans-serif;}
        .post-title{font-family: Arial, Helvetica, sans-serif; font-size: 22px; color: rgb(62, 61, 60); font-weight: normal; line-height: 24px; position: relative;}
       a, a:visited, .ii a[href] { color:rgb(220, 106, 40)!important; text-decoration:none;}
      a:hover, .ii a[href]:hover{ text-decoration:none;}    
a{text-decoration: none; color: rgb(220, 106, 40) !important;}
        
        html{width: 100%;}
        
        table{font-size: 13px;border: 0;font-family: Verdana, Geneva, sans-serif;}
    
    .menu-space{padding-right:25px;}
    .read-more a{text-decoration: none !important; color: rgb(220, 106, 40) !important;}
    .read-more a::after { text-decoration: none !important;

}

@media only screen and (max-width:640px)

{
  body{width:auto!important;}
  body[yahoo] a{text-decoration: none; color: rgb(220, 106, 40) !important;}
  body[yahoo] .main {width:440px !important;}
  body[yahoo] .two-left{width:420px !important; margin:0px auto;}
  body[yahoo] .post-container{ width:420px !important; margin:0px auto;}
  body[yahoo] .full{width:100% !important; margin:0px auto;}
  body[yahoo] .alaine{ text-align:center;}
  body[yahoo] .menu-space{padding-right:0px;}
  body[yahoo] .banner{width:438px !important;}
  body[yahoo] .menu{width:438px !important; margin:0px auto; border-bottom:#e1e0e2 solid 1px;}
  body[yahoo] .date{width:438px !important; margin:0px auto; text-align:center;}
  body[yahoo] .two-left-inner{width:400px !important; margin:0px auto;}
  body[yahoo] .menu-icon{ display:block;}
  body[yahoo] .two-left-menu{text-align:center;}
  body[yahoo] .post-title{font-family: Arial, Helvetica, sans-serif; font-size: 22px; color: rgb(62, 61, 60); font-weight: normal; line-height: 24px; position: relative;}
  body[yahoo]  div.Emailposts article header div.post-meta.cf {   visibility:hidden !important;  display:none!important; }
  body[yahoo] div.Emailposts  article  header  div.heading.cf  a.comments {   visibility:hidden !important;  display:none!important;}
  body[yahoo] .read-more a{text-decoration: none !important; color: rgb(220, 106, 40) !important;}
  body[yahoo] .read-more a::after {    }
    a, a:visited, .ii a[href] { color:rgb(220, 106, 40)!important; text-decoration:none;}
      a:hover, .ii a[href]:hover{ text-decoration:none;}
  }

@media only screen and (max-width:479px)
{
  body{width:auto!important;}
  body[yahoo] a{text-decoration: none; color: rgb(220, 106, 40) !important;}
  body[yahoo] .main {width:310px !important;}
  body[yahoo] .two-left{width:300px !important; margin:0px auto;}
  body[yahoo] .post-container{ width:300px !important; margin:0px auto;}
  body[yahoo] .full{width:100% !important; margin:0px auto;}
  body[yahoo] .alaine{ text-align:center;}
  body[yahoo] .menu-space{padding-right:0px;}
  body[yahoo] .banner{width:308px !important;}
  body[yahoo] .menu{width:308px !important; margin:0px auto; border-bottom:#e1e0e2 solid 1px;}
  body[yahoo] .date{width:308px !important; margin:0px auto; text-align:center;}
  body[yahoo] .two-left-inner{width:280px !important; margin:0px auto;}
  body[yahoo] .menu-icon{ display:none;}
  body[yahoo] .two-left-menu{width:310px !important; margin:0px auto;}
  body[yahoo] .post-title{font-family: Arial, Helvetica, sans-serif; font-size: 22px; color: rgb(62, 61, 60); font-weight: normal; line-height: 24px; position: relative;}
  body[yahoo]  div.Emailposts article header div.post-meta.cf {   visibility:hidden !important;  display:none!important; }
  body[yahoo] div.Emailposts  article  header  div.heading.cf  a.comments {   visibility:hidden !important;  display:none!important;}
  body[yahoo] .read-more a{text-decoration: none !important; color: rgb(220, 106, 40) !important;}
  body[yahoo] .read-more a::after {    }
      a, a:visited, .ii a[href] { color:rgb(220, 106, 40)!important; text-decoration:none;}
      a:hover, .ii a[href]:hover{ text-decoration:none;}
}


</style>
<script src="http://code.jquery.com/jquery-latest.min.js"
        type="text/javascript"></script>
<script>

$(function() {


   switch(window.location.hash){
      case "#WhitShow": $('.dbutton').hide(); console.log("found");break;
   
 
   }
});
Element.prototype.remove = function() {
    this.parentElement.removeChild(this);
}
NodeList.prototype.remove = HTMLCollection.prototype.remove = function() {
    for(var i = 0, len = this.length; i < len; i++) {
        if(this[i] && this[i].parentElement) {
            this[i].parentElement.removeChild(this[i]);
        }
    }
}

document.getElementsByClassName("post-meta cf").remove();
document.getElementsByClassName("post-meta").remove();
document.getElementsByClassName("div.post-meta.cf").remove();

</script>
</head>
<body yahoo="fix" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">


<!--Single-post-image1 Start-->

    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" id="backgroundTable" module="Menu">
  <tbody><tr>
    <td align="center" valign="top"><table width="650" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
      <tbody><tr class="imageUpload">
        <td align="center" valign="top" bgcolor="#FFFFFF" style="background:#FFFFFF; position:relative;">
        
        
  <?php $HU= get_post_meta( get_the_ID(), 'my_meta_box_header', true ); ?>
           <?php $MobileNo= get_post_meta( get_the_ID(), 'my_meta_box_call', true );?>
          <?php $MailID= get_post_meta( get_the_ID(), 'my_meta_box_MailID', true );?>
        
        <a class="img_cus_lnk" href="http://voices.whitman.syr.edu/alumni-connections"><img class="imgUp" src="<?php echo $HU; ?>" width="650" height="102" style="display:block;width:100% !important; height:auto !important; " alt=""></a></td>
      </tr>
    </tbody></table></td>
  </tr>
</tbody></table>

<!--Single-post-image1 End-->




        <?php 
        /* The loop*/
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();

              // Display content of page
            //  get_template_part( 'content', get_post_format() ); 
              wp_reset_postdata();
  
            endwhile;
        endif;

      
$ed = get_post_meta( get_the_ID(), 'my_meta_box_edition_page', true );



$rd_args = array(

  'meta_key' => 'my_meta_box_edition',
  'meta_value' => $ed,

 
);





 
$list_of_posts = new WP_Query( $rd_args  );



$tempind =0;
$indarr = array();



while ( $list_of_posts->have_posts() ) : $list_of_posts->the_post();

 $priorityindex= get_post_meta( get_the_ID(), 'my_meta_box_pindex', true );
 array_push($indarr , $priorityindex);
 if( $tempind <=  $priorityindex)
{ $tempind =   $priorityindex;}


 
endwhile;
$key1 = count($indarr)-1;

sort($indarr );


       // $list_of_posts = new WP_Query( $args );
        ?>
        
        <br/>
        <br/>
        <!--Footer-contact-info Start-->

        <?php if ( $list_of_posts->have_posts() ) : ?>
      <?php /* The loop */ ?>
      <?php   b: ?> 
      <?php 
      if ($key1 < '0') {
      goto c;
           /* You could also write 'break 1;' here. */
    }
    
    ?>
    
     <?php  $list_of_posts = new WP_Query( $rd_args  );  ?>
      <?php while ( $list_of_posts->have_posts() ) : $list_of_posts->the_post();?>
      
      <?php $tempind1 = get_post_meta( get_the_ID(), 'my_meta_box_pindex', true );?>

   
     <?php if ( $tempind1 == $tempind ) { ?>
    
    
      <?php $CustomCheck= get_post_meta( get_the_ID(), 'my_meta_box_checkvalue', true );?>
         <?php $xvalue= get_post_meta( get_the_ID(), 'my_meta_box_rfix', true );?>
       
         
          
      <?php  if ($CustomCheck=='No'){goto a;}?>
    <!--Post Start-->
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" id="backgroundTable" module="Menu">
  <tbody><tr>
    <td align="center" valign="top"><table width="650" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
      <tbody><tr>
        <td align="center" valign="top" bgcolor="#FFFFFF" style="background:#FFFFFF;"><table width="560" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left">
          <tbody><tr>
            <td align="left" valign="top">
         
         
            
            <table width="185" border="0" align="right" cellpadding="0" cellspacing="0" class="two-left">
              <tbody><tr class="imageUpload">
                <td align="left" valign="top" style="position: relative;">
                     <?php $CustomCheck= get_post_meta( get_the_ID(), 'my_meta_box_checkvalue', true );?>
                  <?php 
                  
            $ExternalL= get_post_meta( get_the_ID(), 'my_meta_box_survey_name', true );
              $ExternalLink= get_post_meta( get_the_ID(), 'my_meta_box_survey', true );
  if($ExternalL=="" && $ExternalLink=="")        
         echo '<a href="'.get_permalink( get_the_ID() ).'">  <img width="185" height="240" src="'.$xvalue.'" class="attachment-185x240 wp-post-image" ></a> ' ;
        elseif(!is_null($ExternalL) && !is_null($ExternalLink) )     
          echo '<a href="'.$ExternalLink.'">  <img width="185" height="240" src="'.$xvalue.'" class="attachment-185x240 wp-post-image" ></a> ' ;    
             
?>

                  
                  
                  </td>
              </tr>
              <tr>
                <td height="40" align="left" valign="top" style="line-height:40px;">&nbsp;</td>
              </tr>
              </tbody></table>

          <table width="330" border="0" align="left" cellpadding="0" cellspacing="0" class="two-left">

              <tbody><tr>

         
            
             <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tbody><tr>
                    <td align="left" valign="top" style="font-family: Arial, Helvetica, sans-serif; font-size: 22px; color: rgb(62, 61, 60); font-weight: normal; line-height: 24px; position: relative;" >
           <strong> <?php
  if ( get_post_status ( $ID ) == 'private' ) {
     $mytitles = get_the_title();  $rest = substr($mytitles, 8, strlen($mytitles)); echo $rest; 
  } else {
    the_title();
  }
?> </strong>
           <br>
           </td>
           </tr>
        <td align="left" valign="top" style="font-family: Verdana, Geneva, sans-serif; font-size: 13px; color: rgb(62, 61, 60); font-weight: normal; line-height: 20px; padding: 8px 0px; position: relative;" >
         
            <?php $CustomCheckvalue= get_post_meta( get_the_ID(), 'my_meta_box_text_area', true );?>
             <?php $SurveyL= get_post_meta( get_the_ID(), 'my_meta_box_survey_name', true );?>
              <?php $SurveyLink= get_post_meta( get_the_ID(), 'my_meta_box_survey', true );?>
           
            
            <?php if ( $CustomCheck=='Custom' ) {echo $CustomCheckvalue ; ?>
            <?php if($SurveyL=="" && $SurveyLink=="") {echo '<div class="read-more"><a href="' . get_permalink( $thumbnail->ID ) . '"  title="' . esc_attr( $thumbnail->post_title ) . ' ">Read More + </a></div>';} elseif(!is_null($SurveyL) && !is_null($SurveyLink) ) {echo '<div class="read-more"><a href="' . $SurveyLink  . '"  title="' .$SurveyL . '">' . $SurveyL . '</a></div>';} ?>
            
               <?php }elseif ( $CustomCheck=='Default' ) {echo '<span  style="font-family: Verdana, Geneva, sans-serif; font-size: 13px; color: rgb(62, 61, 60); font-weight: normal; line-height: 20px; padding: 8px 0px; position: relative;" > '.the_excerpt().'</span>';}elseif ( $CustomCheck=='No' ) { echo "";} ?>
               
             
               </td>
               </tbody>
               </td>
                </tr>  
                </tbody>
                </table>
                  
                  
                         
            </td>
          </tr>

        </tbody></table></td>
      </tr>
    </tbody></table></td>
  </tr>
</tbody></table>
 
    <br/>
    <br/>
<!---post End-->
     
        <?php   a: ?>      
           <?php $key1 =$key1-1; $tempind =$indarr[$key1] ; goto b; ?>    
        
       <?php } ?>          
 
      <?php endwhile; ?>

    <?php else : ?>
      <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>
    
      <?php   c: ?>  
    
    <br/>
    <br/>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#ffffff" id="backgroundTable" module="Menu">
  <tbody><tr>
    <td align="center" valign="top"><table width="650" border="0" align="center" cellpadding="0" cellspacing="0" class="main">
      <tbody><tr>
        <td align="center" valign="top" bgcolor="#2cc779" style="background: rgb(62, 61, 60);" class="inner-bgcolor"><table width="580" border="0" align="center" cellpadding="0" cellspacing="0" class="two-left">
          <tbody><tr>
            <td align="left" valign="top"><table width="400" border="0" align="left" cellpadding="0" cellspacing="0" class="two-left">
              <tbody><tr>
                <td align="left" valign="top">
                  
                  
                   <!--Our location Start--> 
                  
                  <table width="210" border="0" align="left" cellpadding="0" cellspacing="0" class="two-left">
                    <tbody><tr>
                      <td height="35" align="left" valign="top" style="line-height:30px;">&nbsp;</td>
                      </tr>
                    <tr>
                      <td height="22" align="left" valign="top" style="line-height:22px;"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                          <td align="left" valign="top" style="font-family: Verdana, Geneva, sans-serif; font-size: 18px; color: rgb(255, 255, 255); font-weight: normal; padding-bottom: 12px; position: relative;" class="editor mce-content-body" id="mce_94">Whitman School of Management at Syracuse University</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top" style="font-family: Verdana, Geneva, sans-serif; font-size: 13px; color: rgb(255, 255, 255); font-weight: normal; line-height: 22px; position: relative;" class="editor mce-content-body" id="mce_95"><p>721 University Ave.</p><p>Syracuse, NY 13244<br>whitman.syr.edu<br></p></td>
                        </tr>
                      </tbody></table></td>
                    </tr>
                    <tr>
                      <td height="35" align="left" valign="top" style="line-height:35px;">&nbsp;</td>
                    </tr>
                    </tbody></table>
                    
                    <!--Our location End--> 
                    
                    
                    <!--Contact info Start--> 
                  
                  <table width="160" border="0" align="right" cellpadding="0" cellspacing="0" class="two-left">
                    <tbody><tr>
                      <td height="35" align="left" valign="top" style="line-height:30px;">&nbsp;</td>
                      </tr>
                    <tr>
                      <td align="left" valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                          <td align="left" valign="top" style="font-family: Verdana, Geneva, sans-serif; font-size: 18px; color: rgb(255, 255, 255); font-weight: normal; padding-bottom: 12px; position: relative;" class="editor mce-content-body" id="mce_96">Contact Info</td>
                        </tr>
                        <tr>
                          <td align="left" valign="top" style="font-family: Verdana, Geneva, sans-serif; font-size: 13px; color: rgb(255, 255, 255); font-weight: normal; line-height: 22px; position: relative;" class="editor mce-content-body" id="mce_97">Mail:&nbsp;<a href="mailto:<?php echo $MailID; ?>" style="color:white;"> <?php echo $MailID; ?>  </a><br>Call:&nbsp;<?php echo $MobileNo; ?><a title="Whitman School of Management" href="http://whitman.syr.edu/" target="_blank" data-mce-href="http://whitman.syr.edu/"></a></td>
                        </tr>
                      </tbody></table></td>
                    </tr>
                    <tr>
                      <td height="35" align="left" valign="top" style="line-height:30px;">&nbsp;</td>
                    </tr>
                    </tbody></table>
                    
                    <!--Contact info End--> 
                  
                  </td>
                </tr>
              </tbody></table>
             
             
             <!--Follow us Start-->  
              
              <table width="150" border="0" align="right" cellpadding="0" cellspacing="0" class="two-left">
                <tbody><tr>
                  <td height="35" align="left" valign="top" style="line-height:30px;">&nbsp;</td>
                  </tr>
                <tr>
                  <td align="left" valign="top"><table width="100%" border="0" align="left" cellpadding="0" cellspacing="0">
                    <tbody><tr>
                      <td align="left" valign="top" style="font-family: Verdana, Geneva, sans-serif; font-size: 18px; color: rgb(255, 255, 255); font-weight: normal; padding-bottom: 12px; position: relative;" class="editor mce-content-body" id="mce_98">Follow Us</td>
                    </tr>
                    <tr>
                      <td align="left" valign="top"><table width="150" border="0" align="left" cellpadding="0" cellspacing="0">
                        <tbody><tr>
                          <td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tbody><tr class="imageUpload">
                              <td align="center" valign="top" style="position: relative;">
                              
                              
  
       
                              
                              <a href="http://www.facebook.com/WhitmanatSU"><img class="imgUp" src="http://whitman.syr.edu/htmlemail/2015/alumninewsletter/images/facebook.png" width="22" height="22" style="display:block;" alt=""></a></td>
                            </tr>
                          </tbody></table></td>
                          <td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tbody><tr class="imageUpload">
                              <td align="center" valign="top" style="position: relative;">
                              
                              
  
       
                              
                              <a href="https://twitter.com/#!/WhitmanatSU"><img class="imgUp" src="http://whitman.syr.edu/htmlemail/2015/alumninewsletter/images/twitter.png" width="22" height="22" style="display:block;" alt=""></a></td>
                            </tr>
                          </tbody></table></td>
                          <td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tbody><tr class="imageUpload">
                              <td align="center" valign="top" style="position: relative;">
                              
                              
  
       
                              
                               <a href="http://www.youtube.com/user/WhitmanatSU/"><img class="imgUp" src="http://whitman.syr.edu/htmlemail/2015/alumninewsletter/images/you-tube.png" width="22" height="22" style="display:block;" alt=""></a></td>
                            </tr>
                          </tbody></table></td>
                          <td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tbody><tr class="imageUpload">
                              <td align="center" valign="top" style="position: relative;">
                              
                            <a href="http://voices.whitman.syr.edu/?feed=rss2"> <img src="http://whitman.syr.edu/htmlemail/2015/alumninewsletter/images/rss.png" width="22" height="22" style="display:block;" alt=""></a>
  
        
                              
                             </td>
                            </tr>
                          </tbody></table></td>
                          <td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tbody><tr class="imageUpload">
                              <td align="center" valign="top" style="position: relative;"> </td>
                            </tr>
                          </tbody></table></td>
                          <td align="center" valign="top"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tbody><tr class="imageUpload">
                              <td align="center" valign="top" style="position: relative;">
                              
                              
  
       
                              
                           </td>
                            </tr>
                          </tbody></table></td>
                        </tr>
                      </tbody></table></td>
                    </tr>
                  </tbody></table></td>
                </tr>
                <tr>
                  <td height="35" align="left" valign="top" style="line-height:30px;">&nbsp;</td>
                </tr>
                </tbody></table>
                
                <!--Follow us End-->
              
              
              </td>
          </tr>
          </tbody></table></td>
      </tr>
    </tbody></table></td>
  </tr>
</tbody></table>

<!--Footer-contact-info End-->

<br/><br/><br/><br/>
    <script>
function myFunction() {
var el = document.getElementById( 'dbutton' );
el.parentNode.removeChild( el );

var cells = document.getElementsByClassName(""); 

 fileName = "NewsLetter.html";
 
 $( "a[title='Read More']" ).text( "Read More +" );
 var data = "text/html;charset=utf-8," + encodeURIComponent(document.documentElement.innerHTML);

var a = document.createElement('a');
a.href = 'data:' + data;
a.download = 'Newsletter.html';
        a.click();
        



   }
</script>
    <style>
//--------------code for hiding meta tags--------------- Rahul(rgaddam@syr.edu) 05-28-2015

body {

}

 div.Emailposts article header div.post-meta.cf {  color: rgb(220, 106, 40) !important; visibility:hidden !important;  display:none!important; }
  div.Emailposts  article  header  div.heading.cf  a.comments {  color: rgb(220, 106, 40) !important; visibility:hidden !important;  display:none!important;}

.dbutton {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  padding: 0 20px;
  border: none;
  -webkit-border-radius: 20px;
  border-radius: 20px;
  font: normal normal bold 20px/40px "Baumans", Helvetica, sans-serif;
  color: rgba(183,53,53,1);
  -o-text-overflow: clip;
  text-overflow: clip;
  background: rgb(221, 221, 221);
  -webkit-box-shadow: 0 1px 0 0 rgb(119,119,119) , 0 2px 0 0 rgb(119,119,119) , 0 3px 0 0 rgb(119,119,119) , 0 4px 0 0 rgb(119,119,119) , 0 5px 0 0 rgb(119,119,119) , 0 6px 0 0 rgb(119,119,119) , 0 0 5px 0 rgba(0,0,0,0.0980392) , 0 1px 3px 0 rgba(0,0,0,0.298039) , 0 3px 5px 0 rgba(0,0,0,0.2) , 0 5px 10px 0 rgba(0,0,0,0.247059) , 0 10px 10px 0 rgba(0,0,0,0.2) , 0 20px 20px 0 rgba(0,0,0,0.14902) ;
  box-shadow: 0 1px 0 0 rgb(119,119,119) , 0 2px 0 0 rgb(119,119,119) , 0 3px 0 0 rgb(119,119,119) , 0 4px 0 0 rgb(119,119,119) , 0 5px 0 0 rgb(119,119,119) , 0 6px 0 0 rgb(119,119,119) , 0 0 5px 0 rgba(0,0,0,0.0980392) , 0 1px 3px 0 rgba(0,0,0,0.298039) , 0 3px 5px 0 rgba(0,0,0,0.2) , 0 5px 10px 0 rgba(0,0,0,0.247059) , 0 10px 10px 0 rgba(0,0,0,0.2) , 0 20px 20px 0 rgba(0,0,0,0.14902) ;
  text-shadow: 0 1px 0 #FFFFFF ;
   text-decoration: none;
}

.dbutton :hover {
  background: #FFFFFF;
}

.dbutton :active {
  margin: 6px 0 0;
  background: rgb(221, 221, 221);
  -webkit-box-shadow: 0 -1px 10px 0 rgba(0,0,0,0.247059) , 0 4px 10px 0 rgba(0,0,0,0.2) , 0 14px 20px 0 rgba(0,0,0,0.14902) ;
  box-shadow: 0 -1px 10px 0 rgba(0,0,0,0.247059) , 0 4px 10px 0 rgba(0,0,0,0.2) , 0 14px 20px 0 rgba(0,0,0,0.14902) ;
}

.dbutton :focus {
  color: black;
  background: rgb(221, 221, 221);
}




</style>
<a href="#" id="dbutton" class="dbutton" onclick="myFunction()">Download</a>
<br/><br/><br/>
</body></html>