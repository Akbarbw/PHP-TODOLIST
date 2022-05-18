<?php

require_once "../Model/TodoList.php";
require_once "../BusinessModel/RemoveTodoList.php";
require_once "../BusinessModel/AddTodoList.php";
require_once "../BusinessModel/ShowTodoList.php";

addTodoList("akbar1");
addTodoList("akbar2");
addTodoList("akbar3");

showTodoList();

removeTodoList(3);

showTodoList();