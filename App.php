<?php
require_once __DIR__ . '/Model/TodoList.php';
require_once __DIR__ . '/Helper/Input.php';
require_once __DIR__ . '/BusinessLogic/ShowToDoList.php';
require_once __DIR__ . '/BusinessLogic/AddTodoList.php';
require_once __DIR__ . '/BusinessLogic/RemoveTodoList.php';
require_once __DIR__ . '/View/ViewShowToDoList.php';
require_once __DIR__ . '/View/ViewAddTodoList.php';
require_once __DIR__ . '/View/ViewRemoveTodoList.php';

echo 'Aplikasi To-Do List' . PHP_EOL;
viewShowTodoList();

?>