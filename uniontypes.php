<?php

// fitur dimana kita bisa menambahkan lebih dari satu tipe data ke property, argument, parameter, atau return value
class example
{
    // union type di property
    public string|int|bool|array $data;
}

$example = new example();
$example->data = "eko";
$example->data = 1;
$example->data = true;
$example->data = [];

// union type di argument
function samplefunction(string|array $data): void
{
    if (is_string($data)) {
        echo "argument is string \n";
    } elseif (is_array($data)) {
        echo "argument is array \n";
    }
}

samplefunction("eko");
samplefunction([]);

// union type di return value
function samplefunction2(string|array $data): string|array
{
    if (is_string($data)) {
        return "string";
    } elseif (is_array($data)) {
        return ["array"];
    }
}

var_dump(samplefunction2("eko"));
var_dump(samplefunction2(["eko"]));