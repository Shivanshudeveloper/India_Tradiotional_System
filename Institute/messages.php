<?php 
    if (isset($_GET['submit'])) {
        echo '
            <div id="success-alert" class="alert">Application Successfully Submited</div>

            <script>
            $(".alert").fadeTo(2000, 500).slideUp(500, function(){
                $(".alert").slideUp(200);
            });
            </script>
        ';
    }

?>
