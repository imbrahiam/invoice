<?php
function fetch($url, $body, $method, $headers)
{
    // Body should be ["Name" => "Coca-Cola", ]
    // Headers should be "key: val; "
    $payload = json_encode($body);

    $options = [
        "https" => [
            "method" => $method,
            "header" => "Content-type: application/json; charset=UTF-8\r\n" .
                "x-api-key: 3d290a6111deacfbd4c3143011f8fc1af2d4af40c98f259de065094f560034bc\r\n" . $headers,
            "content" => $payload
        ]
    ];

    $context = stream_context_create($options);
    $response = file_get_contents("https://bewabog782.bsite.net/api/products", false, $context);

    return $response;
}

function redirect($url)
{
    $scriptInjection = <<<CODE
    <html>
        <script type="text/javascript">
            window.location.replace("$url")
        </script>
    </html>
    CODE;

    echo $scriptInjection;
}

function getGUID()
{
    if (function_exists('com_create_guid')) {
        return com_create_guid();
    } else {
        //mt_srand((double)microtime()*10000);//optional for php 4.2.0 and up.
        $charid = strtoupper(md5(uniqid(rand(), true)));
        $hyphen = chr(45);
        $uuid = substr($charid, 0, 8) . $hyphen
            . substr($charid, 8, 4) . $hyphen
            . substr($charid, 12, 4) . $hyphen
            . substr($charid, 16, 4) . $hyphen
            . substr($charid, 20, 12);
        return $uuid;
    }
}

// print("<pre>");
// print($data);
// print("</pre>");