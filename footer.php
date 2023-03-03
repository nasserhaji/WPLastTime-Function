<div id="last-update">
    <?php
    $args = array(
        'numberposts' => 1,
        'post_status' => 'publish',
    );
    $recent_post = wp_get_recent_posts( $args );
    $last_update = $recent_post[0]['post_modified'];
    $date_format = 'F j, Y, g:i a'; // Customize the date format here
    $formatted_date = date_i18n( $date_format, strtotime( $last_update ) );
    echo 'Last update: ' . $formatted_date;
    ?>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <!-- کدهای بروزرسانی -->
            </div>
            <div class="col-md-6">
                <span id="last-modified-date"></span>
                <script>document.addEventListener("DOMContentLoaded", function() { document.getElementById("last-modified-date").innerHTML = last_modified_date_params.label + " " + last_modified_date_params.last_modified_date; });</script>
            </div>
        </div>
    </div>
</footer>

