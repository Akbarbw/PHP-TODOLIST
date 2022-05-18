<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessModel/AddTodoList.php";

addTodoList("test1");
addTodoList("test2");
addTodoList("test3");
addTodoList("test4");

viewShowTodoList();