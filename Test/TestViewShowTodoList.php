<?php

require_once '../View/ViewShowTodoList.php';
require_once '../BusinessLogic/AddTodoList.php';

addTodoList('raka');
addTodoList('noah');
addTodoList('enoch');

viewShowTodoList();

?>