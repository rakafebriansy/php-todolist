<?php

require_once '../View/ViewAddTodoList.php';
require_once '../BusinessLogic/ShowTodoList.php';
require_once '../BusinessLogic/AddTodoList.php';

addTodoList('raka');
addTodoList('jimmy');
viewAddTodoList();
viewAddTodoList();

showTodoList();

?>