<?php
function f_judul(){
    echo("  Kevin Julius Siahaan
       Surabaya
           
  basic login system");
}
$id = [
    [
        "username" => "karan01",
        "email" => "agistyakaran@Nmail@.com",
        "password" => "karan060600"
    ],
    [
        "username" => "gregorio01",
        "email" => "makisiggregorio@Nmail@.com",
        "password" => "greg240397"
    ],
    [
        "username" => "gangjing01",
        "email" => "huanggangjing@Nmail@.com",
        "password" => "gangjing200997"
    ],
    [
        "username" => "rai01",
        "email" => "mamorurai@Nmail@.com",
        "password" => "rai010700"
    ],
    [
        "username" => "minho01",
        "email" => "parkminho@Nmail@.com",
        "password" => "jaeji250598"
    ],
    [
        "username" => "jaeji01",
        "email" => "parkjaeji@Nmail@.com",
        "password" => "minho250598"
    ],
    [
        "username" => "itona00",
        "email" => "horibeitona@Nmail@.com",
        "password" => "koro310397"
    ],
    [
        "username" => "arata02",
        "email" => "watanabearata@Nmail@.com",
        "password" => "arata010199"
    ],
    [
        "username" => "isamu02",
        "email" => "watanabeisamu@Nmail@.com",
        "password" => "isamu010100"
    ],
    [
        "username" => "jibril02",
        "email" => "seikhjibril@Nmail@.com",
        "password" => "ibrahim231002"
    ]
];
f_judul();echo("\n");
foreach($id as $post){
    $username = readline ("Username / email : ");
    $password = readline ("Password : ");
    if ((($username != $post["username"]) || ($username != $post["email"])) && ($password != $post["password"])) {
        echo("username atau password anda masukkan salah\n");
    } else {
        echo("login berhasil\n");
        break;
    }
}
?>
