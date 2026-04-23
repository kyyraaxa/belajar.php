<?php

function isFunction($var) {
    return is_callable($var);
}

$myFunction = function() {
    return "Hello, World!";
};

var_dump(isFunction($myFunction)); // bool(true)
var_dump(isFunction("strlen")); // bool(true)
var_dump(isFunction("nonExistentFunction")); // bool(false)