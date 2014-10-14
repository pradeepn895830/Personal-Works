(function($){
    $(document).ready(function(){
       $('form#comment-form').find('label').addClass('element-invisible');
       $('form#comment-form').find('.form-textarea-wrapper').removeClass('resizable resizable-textarea');
    });
})(jQuery);
