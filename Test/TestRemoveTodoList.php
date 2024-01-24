<?php

require_once '../Model/ToDoList.php';
require_once '../BusinessLogic/ShowToDoList.php';
require_once '../BusinessLogic/AddToDoList.php';
require_once '../BusinessLogic/RemoveToDoList.php';

addTodoList("raka");
addTodoList("saladin");
addTodoList("pope");

showTodoList();
removeTodoList(2);
showTodoList();
$a = removeTodoList(4);
var_dump($a)
?>