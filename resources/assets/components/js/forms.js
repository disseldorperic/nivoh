$(".ajax-request").submit(function (e) {
    var $form = $(this);

    $form.find('button[type="submit"]').prop('disabled', true);
    $form.find(".has-error").removeClass('has-error');

    $.ajax({
        type: 'POST',
        url: $form.attr('action'),
        data: $form.serialize(),
        success: function (data) {
            if (data.result) {
                $form.trigger('reset').find(".alert-danger").hide(200).end().find(".alert-success").html(data.response).show(200);
            } else {
                $form.trigger('reset').find(".alert-success").hide(200).end().find(".alert-danger").html(data.response).show(200);
            }

            $form.find('button[type="submit"]').prop('disabled', false);

        },
        error: function (data) {
            $form.find(".alert-danger:visible").hide(200);
            var errors = data.responseJSON;
            var showError = false;

            $.each(errors, function (key, value) {
                $form.find("[name='" + key + "']").parent('.input-group').addClass('has-error');
                if ($.isArray(value)) value = value[value.length - 1];
                if (value != 'verplicht') showError = value;
            });

            if (showError) $form.find(".alert-danger").html(showError).show(200);
            $form.find('button[type="submit"]').prop('disabled', false);
        },
        async: true
    });

    e.preventDefault();
});