<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 4/22/2019
 * Time: 9:59 PM
 */
?>
<script>
    function spam() {
        let token = "your-token-here";
        let xhttp = new XMLHttpRequest();
        xhttp.open("POST", "api.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("token=" + token);
    }

    window.setInterval(function () {
        spam();
    }, 3000);  // Change Interval here to test. For eg: 5000 for 5 sec
</script>