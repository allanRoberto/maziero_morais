jQuery(document).ready(function ($) {
  $('.entry-title a').each(function(){
    var me = $(this);
    me.html( me.text().replace(/(^\w+)/,'<strong>$1</strong>') );
  });

  $('.link-persona').click(function(e){
     id_galeria = $(this).attr('href');
     $('.gallery-estrutura').addClass('hide-gallery');
     $(id_galeria).addClass('show-gallery');
     $(id_galeria).removeClass('hide-gallery');
  });
});