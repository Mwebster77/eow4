<?php
    header("Content-Type: application/json; charset=UTF-8");
    $auditObj = json_decode($_POST["auditXmlHttp"], false);

    echo $auditObj;



?>