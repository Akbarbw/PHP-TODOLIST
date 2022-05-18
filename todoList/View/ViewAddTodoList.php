<?php
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessModel/AddTodoList.php";

function viewAddTodoList(){
    echo "menambah todo" . PHP_EOL;

    $todo = input("TODO (0 untuk batal) ");

    if ($todo == "0"){
        echo "batal menambahkan item" . PHP_EOL;
    }
    else{
        addTodoList($todo);
    }
}