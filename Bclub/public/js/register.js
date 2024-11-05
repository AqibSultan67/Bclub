
    $(document).ready(function() {
        $("#id_password").strength({showMeter: true, toggleMask: false});

        $('#thisForm').bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                username: {
                    message: 'Username is invalid',
                    validators: {
                        notEmpty: {
                            message: 'Username is required'
                        },
                        stringLength: {
                            max: 32,
                            message: 'Username must be less than 32 characters long'
                        },
                        regexp: {
                            regexp: /^[A-Za-z0-9]+$/,
                            message: 'Username can only contains alphanumeric characters'
                        },

                    }
                },
                password: {
                    message: 'Password is required',
                    validators: {
                        notEmpty: {
                            message: 'Password is required'
                        },
                        stringLength: {
                            min: 8,
                            max: 64,
                            message: 'Password must be at least 8 characters'
                        }
                    }
                },
                jabber: {
                    message: 'Jabber is invalid',
                    validators: {
                        stringLength: {
                            max: 32,
                            message: 'Jabber must be less than 32 characters long'
                        },
                        emailAddress: {
                            message: 'Jabber is invalid'
                        },

                    }
                }
            }
        });
        $('.captcha').click(function(){
            $form = $('.form-signin');
            $.getJSON("/captcha/refresh/", {}, function(json) {
                $form.find('input[name="captcha_0"]').val(json.key);
                $form.find('img.captcha').attr('src', json.image_url);
            });

            return false;
        });
    });
