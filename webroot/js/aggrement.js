(function($){
   $('.aggrement-text-more').on('click', function(ev){
       ev.preventDefault();
       $(this).closest('.aggrement-text').toggleClass('aggrement-text-show-full');
   })
}) (jQuery)
