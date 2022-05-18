<?php

require_once "../Model/TodoList.php";
require_once "../BusinessModel/AddTodoList.php";

addTodoList("akbar");
addTodoList("akbarb");
addTodoList("akbarbw");

var_dump($todoList);