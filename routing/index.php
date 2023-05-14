<?php
require "functions.php";

//dd($_SERVER);

$uri= $_SERVER["REQUEST_URI"];


//dd(parse_url($uri));


// if ($uri = '/')
// {
//     require "controller/index.php";
// }
// else if ($uri === '/about')
// {
//     require "controller/about.php";
// }
// else if ($uri === '/contact')
// {
//     require "controller/contact.php";
// }


$arr=[
    '/MVC14/' => "controller/index.php",
    '/about' => "controller/about.php",
    '/contact' => "controller/contact.php"
];

// if (array_key_exists($uri,$arr))
// {
//     require $arr[$uri];
// }

function routing ($uri,$arr)
{
    if (array_key_exists($uri,$arr))
    {
            require $arr[$uri];
    }
    else
    {
        die();

    }
}

routing($uri,$arr);