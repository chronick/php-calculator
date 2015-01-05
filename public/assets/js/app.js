(function ($) {

    var reset = function () {

        $('#expr').val('0');
    };

    var handleResponse = function (response) {

        if (response.success) {
            $('#expr').val(response.result);
        } else {
            alert(response.error);
        }
    };

    var trimZero = function (str) {

        if (!str) {
            return '';
        }

        if (str.charAt(0) === '0') {
            return str.substring(1);
        }

        return str;
    };

    $('#submit').click(function () {

        var $input = $('#expr');
        if ($input.val() === '') {
            reset();
        }

        $.post('/expressions', {expr: $input.val()})
            .then(handleResponse);
    });

    $('.btn-calc').click(function () {

        var $input = $('#expr'),
            isOperand = $(this).hasClass('btn-op'),
            currentText = isOperand ? $input.val().toString() : trimZero($input.val().toString()),
            op = $(this).data('operation').toString();

        $input.val(currentText.concat(op));
    });

    $('#clear').click(reset);

    reset();

})(jQuery);
