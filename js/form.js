$(function(){
    $('#contact_form').submit(function(event) {
        event.preventDefault();
        var formValid= true;
        $('#contact_form input').each(function(){
            var formGroup= $(this).parents('.form-group');
            if (this.checkValidity()) {
                formGroup.addClass('has-success').removeClass('has-error');
            }
            else{
                formGroup.addClass('has-error').removeClass('has-success');
                formValid=false;
            }
        });
        if (formValid) {
            var name = $("#name").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var comment = $("#comment").val();
            var formData = new FormData();
            formData.append('name',name);
            formData.append('email',email);
            formData.append('phone',phone);
            formData.append('comment',comment);

            $.ajax({
                type: "POST",
                url: "php/form.php",
                data: formData,
                contentType: false,
                processData: false,
                cache: false,
                success: function(data){
                    $('#error').text('Request sent');
                    var $data=JSON.parse(data);
                    if ($data.result!="success") {
                        $('#error').text('Fuck you');
                        
                    }
                    // $('#error').html(data);
                }
            });
            // $('#registraion_form')[0].reset();
        }
    });
});