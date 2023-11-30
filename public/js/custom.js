$(document).ready(function () {
    $('#createCustomerForm').validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
                email: true,
            },
            mobile: {
                required: true,
            },
            branch_id: {
                required: true,
            },
            country: {
                required: true,
            },
            city: {
                required: true,
            },
            address: {
                required: true,
            },
        },
        messages: {
            // Customize error messages if needed
        },
        errorElement: 'span',
        errorClass: 'invalid-feedback',
        highlight: function (element, errorClass, validClass) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length || element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
    });
});
