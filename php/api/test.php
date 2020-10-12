<?php
if (isset($_GET["data"])) {
    $data = array(
        "data" => "Hello world"
    );
    sleep(5);
    echo json_encode($data);
}
