<?php
function fetch($url, $body, $method, $headers)
{
    // Body should be ["Name" => "Coca-Cola", ]
    // Headers should be "key: val; "
    $payload = json_encode($body);

    $options = [
        "http" => [
            "method" => $method,
            "header" => "Content-type: application/json; charset=UTF-8\r\n" .
                "x-api-key: 3d290a6111deacfbd4c3143011f8fc1af2d4af40c98f259de065094f560034bc\r\n" . $headers,
            "content" => $payload
        ]
    ];

    $context = stream_context_create($options);
    $response = file_get_contents("http://localhost:2034/api/products", false, $context);

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

// print("<pre>");
// print($data);
// print("</pre>");
