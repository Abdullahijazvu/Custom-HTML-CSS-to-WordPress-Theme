<?php
/*
* This template is used display footer
*/
?>
<footer class="site-footer">
    <div class="footer-widgets">
        <div class="container text-center text-white">
            <?php dynamic_sidebar('footer-1') ?>
        </div>
    </div>
</footer>
</div><!--#Closing of main container -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
jQuery(document).ready(function($) {
    $('#commentform').submit(function(event) {
        event.preventDefault(); // prevent default form submission
        var error = false;
        $(this).find(':input[required]:visible').each(function() {
            if (!$(this).val()) {
                error = true;
                $(this).addClass('error');
            } else {
                $(this).removeClass('error');
            }
            if ($(this).attr('type') === 'email') {
                var emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
                if (!emailRegex.test($(this).val())) {
                    error = true;
                    $(this).addClass('error');
                } else {
                    $(this).removeClass('error');
                }
            }
        });
        if (error) {
            alert('Please fill in all required fields with valid data.');
        } else {
            $(this).unbind('submit').submit(); // submit the form
        }
    });
});
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var form = document.getElementById('commentform');
        form.addEventListener('submit', function(event) {
            var cookies = document.getElementById('cookies');
            if (!cookies.checked) {
                event.preventDefault();
                var errorCookies = document.getElementById('error-cookies');
                errorCookies.style.display = 'inline';
            }
        });
    });
</script>

</body>
<?php wp_footer() ?>
</html>
