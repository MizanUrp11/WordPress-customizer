; (function ($) {
    wp.customize('cust_service_setting', function (value) {
        value.bind(function (newValue) {
            $('#id_heading').html(newValue);
        })
    });
    wp.customize('cust_icon_color', function (value) {
        value.bind(function (newValue) {
            $('.service i').css('color', newValue);
            // $('.service i').html(newValue);
        })
    });
})(jQuery);