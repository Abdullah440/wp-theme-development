<div class="custom-contactform-parent">
    <h6 id="submit-message-success"></h6>
    <h6 id="submit-message-error"></h6>
            <h5 class="text-center">Send us an email</h5>
            <form id="custom-contactform__form">
                    <?php wp_nonce_field('wp_rest'); ?>
                <div class="form-group ">
                    <input type="text" placeholder="Name" name="name" id="" class="form-control" required >
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Email" name="email" id="" class="form-control" required >
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Phone" name="phone" id="" class="form-control" required>
                </div>
                <div class="form-group">
                    <textarea placeholder="Type Message" name="message" id="" class="form-control" required ></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-block">Submit</button>
                </div>
            </form>
</div>

<script>
    jQuery(document).ready(function($){

            $("#custom-contactform__form").submit(function(event){
                event.preventDefault();
                var form = $(this);
                

                $.ajax({
                    method:'POST',
                    url:"<?php echo get_rest_url(null, 'contact-us-form/v1/send-email')?>",
                    data: form.serialize(),
                    success: function(res) {
                        $('#submit-message-error').hide();
                        $('#submit-message-success').html(res).fadeIn();
                        $('#submit-message-success').show();
                        $('#custom-contactform__form').trigger('reset');
                    },
                    error: function(xhr, status, error) {
                        $('#submit-message-success').hide();
                        $('#submit-message-error').html("Message was not sent").fadeIn();
                        $('#submit-message-error').show();
                    }
                })
            });
    })
</script>