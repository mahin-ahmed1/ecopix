
  jQuery(document).ready(function($) {
    $('.menu-item-has-children').children('a').append("<a class='submenu-indicator' href='#'>+</a>");

    $(".submenu-indicator").click(function(){
      $(this).closest('li').find('.sub-menu').first().toggleClass('active-submenu');

    });

    $('.toggle-menu').click(function(){
      $('.menu-area .navbar').slideToggle(400);
      return false;
    
     })
  });