<?php
require __DIR__ . '/../vendor/autoload.php';

# TIP: Use the $_SERVER Sugerglobal to get all the data your need from the Client's HTTP Request.

# TIP: HTTP headers are printed natively in PHP by invoking header().
#      Ex. header('Content-Type', 'text/html');
use pillr\library\http\ServerRequest;
use pillr\library\http\Stream;
use pillr\library\http\Constants;
use pillr\library\http\Response;
try {
    $body = array();
    $request = new ServerRequest();
    $request->initialize();
    $tempFile = bin2hex(random_bytes(8)) . '.txt';
    $code = 200;
    $reason = "OK";
    $version = "1.1";
    $serverParams = $request->getServerParams();
    
    if ($request->getMethod() == Constants::METHOD_GET) {

        $body["@id"] = $serverParams['REQUEST_URI'];
        $body["to"] = "Pillr";
        $body["subject"] = "Hello Pillr";
        $body["message"] = "Here is my submission.";
        $body["from"] = "Mihir Pujara";
        $body["timeSent"] = time();
    }
} catch (Exception $e) {
    $code = 500;
    $body['text'] = 'ERROR: ' . $e->getMessage();
}

try {
    file_put_contents($tempFile, json_encode($body));
    $body = new Stream($tempFile);
    $header = array();
    $header["Date"] = date("D, d M Y H:i:s T");
    $header["Server"] = $serverParams['SERVER_SOFTWARE'];
    $header["Last-Modified"] = date("D, d M Y H:i:s T");
    $header["Content-Length"] = $body->getSize();
    $header[Constants::HEADER_CONTENT_TYPE] = Constants::CONTENT_TYPE_JSON;
    $response = new Response($version,$code,$reason, $header , $body);
    $response->getHeaders();
    echo $response->getBody()->getContents() . PHP_EOL;
    //var_dump($response);
} catch (Throwable $e) {
    echo $e->getMessage();
} finally {
    unlink($tempFile);
}