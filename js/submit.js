$('.review-form').on('submit', function (e) {
    var dataString = $(this).serialize();
     
    $.ajax({
        type: 'POST',
        url: 'reviewform.php',
        data: dataString,
        success: function () {
            $('submit').css('background-color', 'rgb(0, 155, 0)');
            $('submit:hover').css('color', 'white');
            $('submit').attr('value', 'Отзыв отправлен.');
        }
    });

    e.preventDefault();
});