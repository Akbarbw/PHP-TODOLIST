<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessModel/RemoveTodoList.php";

function viewRemoveTodoList(){
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (0 untuk batal)");

    if ($pilihan == "0"){
        echo "batal menghapus item" . PHP_EOL;
    }
    else {
        $succes = removeTodoList($pilihan);

        if ($succes){
            echo "sukses menghapus item nomor $pilihan" . PHP_EOL;
        } else {
            echo "gagal menghapus item nomor $pilihan" . PHP_EOL;
        }
    }


}