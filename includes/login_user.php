<?php

    include('connect.php');
    $user = $_POST["login"];
    $pass = hash('ripemd160',$_POST["passwd"]);
    if ($user && $pass) {
        if (!file_exists('private'))
        {
            mkdir('private/');
            $array = [$user => $pass];
            file_get_contents('private/password');
            file_put_contents('private/password', serialize($array));
            echo "OK\n";
        } else {
            $array = [$user => $pass];
            $arrayp = unserialize(file_get_contents('private/password'));
            foreach ($arrayp as $key => $value) {
                if ($key === $user)
                {
                    echo "ERROR\n";
                    return (false);
                }
            }
            file_put_contents('private/password', serialize(array_push($arrayp, $array)));
        }
    } else {
        echo "ERROR\n";
    }
?>