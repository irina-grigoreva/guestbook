$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#postForm').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 2
                },
                title: {
                    required: true,
                    minlength: 4
                },
                number: {
                    required: true,
                    minlength: 5
                },
                email: {
                    required: true,
                    email: true
                },
                message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                name: {
                    required: "У тебя же есть имя, не так ли?",
                    minlength: "Ваше имя должно состоять как минимум из 2 символов."
                },
                number: {
                    required: "come on, you have a number, don't you?",
                    minlength: "your Number must consist of at least 5 characters"
                },
                email: {
                    required: "Заполни email"
                },
                message: {
                    required: "Вам нужно что-то написать, чтобы отправить эту форму.",
                    minlength: "Это все? Правда?"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"/post/handle",
                    success: function (data, statusText, xhr, $form) { 
                        console.log('OK:', data);    

                        if ( data.errors.length == 0 ) {
                            $('#postForm').hide();
                            $('#success').text('Запись добавлена!');
                            setTimeout(() => {
                                window.location.href = '/';
                            }, 1500);
                        } else {
                            $('#error').text('Ошибка! Проверьте данные и попробуйте еще раз...');
                        }
                    },
                    error: function() {
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $('#error').fadeIn()
                            $('.modal').modal('hide');
		                	$('#error').modal('show');
                        })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})