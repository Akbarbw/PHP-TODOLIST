<?php

function showTodoList(){
    global $todoList;

    echo "List Todolist" . PHP_EOL;

    foreach ($todoList as $number => $value){
        echo "$number. $value" . PHP_EOL;
    }
}