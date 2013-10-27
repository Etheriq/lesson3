<?php
/**
 * Created by JetBrains PhpStorm.
 * File: index.php
 * User: Yuriy Tarnavskiy
 * Date: 18.10.13
 * Time: 12:06
 */

namespace Invent;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require "model/model.php";

$request = Request::createFromGlobals();
$uri = $request->getPathInfo();

if ($uri == "/") {
    include "view/defaultTemplate.html";
} elseif ($uri == "/all") {
    $response = showAll();
    $arg = array();
    foreach ($response as $view) {
        $arg[] = $view;
    }
    include "view/baseTemplate.html";
} elseif ($uri == "/showPc") {
    $response = showPc();
    $arg = array();
    foreach ($response as $view) {
        $arg[] = $view;
    }
    include "view/pcTemplate.html";
}/* elseif ($uri == "/show" and $request->query->has("invent"))
{
    echo $response = showByInvent($request->query->get("invent"));

}*/ elseif ($uri == "/showMonitor") {
    $response = showMonitor();
    $arg = array();
    foreach ($response as $view) {
        $arg[] = $view;
    }
    include "view/monitorTemplate.html";
} elseif ($uri == "/showPrinter") {
    $response = showPrinter();
    $arg = array();
    foreach ($response as $view) {
        $arg[] = $view;
    }
    include "view/printerTemplate.html";
} elseif ($uri == "/test") {
    echo $response = showTest();
} else {
    $html = '<html><body><h1>Page with parameter '.$request->getPathInfo().' Not Found</h1><a href="../index.php">Back to main page</a></body></html>';
    echo $response = new Response($html, 404);
}




