<?php 


/* CSS STYLE FROM CUSTOMIZER */

function ecopix_style_from_customizer(){

    $ecopix_content_spacing             = get_theme_mod('content_spacing');
    $ecopix_footer_background           = get_theme_mod('footer_background','#343B50');
    $ecopix_footer_text_color           = get_theme_mod('footer_text_color','#fff');
    $ecopix_footer_heading_color        = get_theme_mod('footer_heading_color',"#fff");
    $ecopix_copyright_separator_color   = get_theme_mod('footer_copyright_separator','#a3a3a3');
    $ecopix_sidebar_vertical_space      = get_theme_mod('sidebar_widget_vertical_spacing','0');
    $ecopix_mobile_sidebar_position     = get_theme_mod('mobile_sidebar_position','bottom');
    $ecopix_base_text_color             = get_theme_mod('base_text_color','#7a6d6d');
    $ecopix_link_text_color             = get_theme_mod('link_color','#7a6d6d');
    $ecopix_link_hover_color            = get_theme_mod('link_hover_color','#484545');
    $ecopix_all_headings_color          = get_theme_mod('all_heading_color','#0c1465');
    $ecopix_heading1_color              = get_theme_mod('heading1_color','#0c1465');
    $ecopix_heading2_color              = get_theme_mod('heading2_color','#0c1465');
    $ecopix_heading3_color              = get_theme_mod('heading3_color','#0c1465');
    $ecopix_heading4_color              = get_theme_mod('heading4_color','#0c1465');
    $ecopix_heading5_color              = get_theme_mod('heading5_color','#0c1465');
    $ecopix_heading6_color              = get_theme_mod('heading6_color','#0c1465');
    $ecopix_header_menu_typography      = get_theme_mod('header_typography_setting');
    $ecopix_base_font_typography        = get_theme_mod('base_font_typography');
    $ecopix_h1_font_typography          = get_theme_mod('heading1_font_typography');
    $ecopix_h2_font_typography          = get_theme_mod('heading2_font_typography');
    $ecopix_h3_font_typography          = get_theme_mod('heading3_font_typography');
    $ecopix_menu_item_spacing           = get_theme_mod('menu_link_space','15');
    $ecopix_active_menu_item_color      = get_theme_mod('active_menu_item_color','#0C1465');
    $ecopix_menu_item_hover             = get_theme_mod('hover_menu_item_color','#0C1465');
    
    
    ?>
 
    <style>
      body main {
        padding: <?php echo $ecopix_content_spacing;?>px 0;
      }
      body span{
        color: <?php echo $ecopix_base_text_color;?>;      
        font-family: <?php echo $ecopix_base_font_typography['font-family'];?>;
        font-weight: <?php echo $ecopix_base_font_typography['variant'];?>;
        font-size: <?php echo $ecopix_base_font_typography['font-size'];?>;
        text-transform: <?php echo $ecopix_base_font_typography['text-transform'];?>;
        letter-spacing: <?php echo $ecopix_base_font_typography['letter-spacing'];?>px;
        text-decoration: <?php echo $ecopix_base_font_typography['text-decoration'];?>;
        line-height: <?php echo $ecopix_base_font_typography['line-height'];?>;
      }
      *{
        color: <?php echo $ecopix_base_text_color;?>;      
        font-family: <?php echo $ecopix_base_font_typography['font-family'];?>;
        font-weight: <?php echo $ecopix_base_font_typography['variant'];?>;
        font-size: <?php echo $ecopix_base_font_typography['font-size'];?>;
        text-transform: <?php echo $ecopix_base_font_typography['text-transform'];?>;
        letter-spacing: <?php echo $ecopix_base_font_typography['letter-spacing'];?>px;
        text-decoration: <?php echo $ecopix_base_font_typography['text-decoration'];?>;
        line-height: <?php echo $ecopix_base_font_typography['line-height'];?>;
      }

      h1{
        color: <?php echo $ecopix_heading1_color;?>;
      }

      h1 span{
        color: <?php echo $ecopix_heading1_color;?>;
      }

      h2{
        color: <?php echo $ecopix_heading2_color;?>;
      }

      h3{
        color: <?php echo $ecopix_heading3_color;?>;
      }

      h4{
        color: <?php echo $ecopix_heading4_color;?>;
      }

      h5{
        color: <?php echo $ecopix_heading5_color;?>;
      }

      h6{
        color: <?php echo $ecopix_heading6_color;?>;
      }

      h1,h2,h3,h4,h5,h6{
        color: <?php echo $ecopix_all_headings_color;?>;
      }
      .entry-header-title{
        color: <?php echo $ecopix_all_headings_color;?>;
      }

      a:hover,
      a:focus,
      a:visited{
        color: <?php echo $ecopix_link_hover_color;?>;
      }

      a{
        color: <?php echo $ecopix_link_text_color;?>;
      }
      .site-footer{
        background-color: <?php echo $ecopix_footer_background;?>;
        color: <?php echo $ecopix_footer_text_color;?>;
      }
      .site-footer a,p,span{
        color: <?php echo $ecopix_footer_text_color;?>;
        text-decoration:none;
      }
      .site-footer .wp-block-heading, .widget-title{
        color: <?php echo $ecopix_footer_heading_color;?>;
      }
      .site-footer .site-info{
          border-top: 1px solid <?php echo $ecopix_copyright_separator_color;?>;
      }
      .widget-area .widget_block {
        padding-bottom: <?php echo $ecopix_sidebar_vertical_space;?>px;
      }

      #header-navigation li a{
        font-family: <?php echo $ecopix_header_menu_typography['font-family'];?>;
        font-weight: <?php echo $ecopix_header_menu_typography['variant'];?>;
        font-size: <?php echo $ecopix_header_menu_typography['font-size'];?>;
        text-transform: <?php echo $ecopix_header_menu_typography['text-transform'];?>;
        color: <?php echo $ecopix_header_menu_typography['color'];?>;
        margin-left: <?php echo $ecopix_menu_item_spacing;?>px !important;
        transition: .4s;
      }

      #header-navigation li a:hover{
        color: <?php echo $ecopix_menu_item_hover;?>
      }

      #header-navigation .current_nav-item a{
        color: <?php echo $ecopix_active_menu_item_color;?>;
      }

      /* RESPONSIVE CSS */

      @media only screen and (max-width: 600px) {
        <?php
        if($ecopix_mobile_sidebar_position == "top"):?>
            .loop-area{
              order: 2 !important;
            }
        <?php endif;?>   
      }
    </style>

    <?php
}

add_action('wp_head','ecopix_style_from_customizer');



/* BLOG PAGE LAYOUT WITH & WITHOUT SIDEBAR */

function ecopix_blog_sidebar_layout($class){

  if(get_theme_mod('sidebar_switch','on')){
    $class="col-lg-9";
  }else{
    $class=" ";
  }

  return $class;
}
add_filter('ecopix_col_manage','ecopix_blog_sidebar_layout');


/* SINGLE PAGE LAYOUT WITH & WITHOUT SIDEBAR */

function ecopix_single_page_layout($class){

  if(get_theme_mod('sidebar_switch','on')){
    $class="text-left";
  }else{
    $class="text-center";
  }

  return $class;

}

add_filter('ecopix_single_text_align','ecopix_single_page_layout');

function ecopix_single_page_entrymeta_layout($class){
  
  if(get_theme_mod('sidebar_switch','on')){
    $class=" ";
  }else{
    $class="m-auto";
  }

  return $class;
}

add_filter('ecopix_single_entrymeta_align','ecopix_single_page_entrymeta_layout');


/* HEADER MENU ALIGNMENT */

function ecopix_top_menu_alignment($class){

  $alignment = get_theme_mod('header_menu_alignment');

  if($alignment == "left"){
    $class ="text-start";
  }elseif($alignment == "center"){
    $class = "text-center";
  }else{
    $class = "text-end";
  }

  return $class;
}

add_filter('ecopix_topmenu_align','ecopix_top_menu_alignment');


/* ENTRY CONTENT LAYOUT */

function ecopix_entry_content_layout($class){
  $ecopix_entry_content_layout = get_theme_mod('entry_content_layout','container');

  if($ecopix_entry_content_layout == "container"){
    return $ecopix_entry_content_layout;
  }else{
    $ecopix_entry_content_layout = "container-fluid";
  }
  return $ecopix_entry_content_layout;
}
add_filter('ecopix_entry_content_layout','ecopix_entry_content_layout');


function ecopix_sidebar_position($class){

  $ecopix_sidebar_position = get_theme_mod('sidebar_position','right');

  if($ecopix_sidebar_position == 'left'){
    $class = "flex-row-reverse";
  }
  return $class;
}
add_filter('ecopix_sidebar_position','ecopix_sidebar_position');


