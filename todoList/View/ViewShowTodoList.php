<?php
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessModel/ShowTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../View/ViewRemoveTodoList.php";

function viewShowTodoList(){
    while (true) {
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Item" . PHP_EOL;
        ECHO "2. hapus Item" . PHP_EOL;
        echo "0. Keluar" . PHP_EOL;

        $pilihan = input("pilih");

        if ($pilihan == "1"){
            viewAddTodoList();
        }
        elseif ($pilihan == "2"){
            viewRemoveTodoList();
        }
        elseif ($pilihan == "0"){
            break;
        }
        else{
            echo "pilihan tidak valid!" . PHP_EOL;
        }
    }
    echo "sampai jumpa lagi" .PHP_EOL;
}
