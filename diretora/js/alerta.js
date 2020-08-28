$('form').on('submit', function( event ) {
    var $form = $( this );

    event.preventDefault();
    $('.js-alert').addClass('hidden');
    $('.js-btn').button('loading');

    $.ajax({
        url: '/painel.php',
        type: 'POST',
        data: $form.serialize(),
        success: function(response){
            $('.js-alert').removeClass('hidden');
            $('.js-btn').button('reset');
        }
    });
});