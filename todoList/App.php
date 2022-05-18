<?php

require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/BusinessModel/AddTodoList.php";
require_once __DIR__ . "/BusinessModel/ShowTodoList.php";
require_once __DIR__ . "/BusinessModel/RemoveTodoList.php";
require_once __DIR__ . "/View/ViewRemoveTodoList.php";
require_once __DIR__ . "/View/ViewShowTodoList.php";
require_once __DIR__ . "/View/ViewAddTodoList.php";

echo "APLIKASI TODOLIST" . PHP_EOL;

viewShowTodoList();