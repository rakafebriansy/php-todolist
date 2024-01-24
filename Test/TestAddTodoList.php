<?php

require_once '../Model/ToDoList.php';
require_once '../BusinessLogic/AddToDoList.php';

addTodoList("raka");
addTodoList("jethro");
addTodoList("enoch");

var_dump($todo_list);

?>