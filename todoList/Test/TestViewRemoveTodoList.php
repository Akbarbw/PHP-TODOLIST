<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessModel/AddTodoList.php";
require_once "../BusinessModel/ShowTodoList.php";

addTodoList("akbare");
addTodoList("akbarwwwww");
addTodoList("akbardddd");

showTodoList();

viewRemoveTodoList();

showTodoList();
