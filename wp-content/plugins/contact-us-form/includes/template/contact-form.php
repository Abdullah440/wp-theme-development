<div class="custom-contactform-parent">
            <h4 class="text-center">Send us an email</h4>
            <form id="custom-contactform__form">
                    <?php wp_nonce_field('wp_rest'); ?>
                <div class="form-group ">
                    <input type="text" placeholder="Name" name="name" id="" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Email" name="email" id="" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Phone" name="phone" id="" class="form-control">
                </div>
                <div class="form-group">
                    <textarea placeholder="Type Message" name="message" id="" class="form-control"></textarea>
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
                var form = $(this).serialize();

                $.ajax({
                    method:'POST',
                    url:"<?php echo get_rest_url(null, 'contact-us-form/v1/send-email')?>",
                    data: form,
                    success: function(response) {
                    console.log(response);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })
            });
    })
</script>