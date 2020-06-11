<?php

http_response_code(200);

foreach ($_GET as $key => $value) {
    $response .= htmlspecialchars($key)."=".htmlspecialchars($value)."&";
}

$myfile = fopen("webhooks_output.txt", "a");
fwrite($myfile, date('m/d/Y h:i:s a', time()) . $response.'\n');
fclose($myfile);

?>