<?php

function addTodoList(string $todo)
{
    global $todo_list;
    $index = sizeof($todo_list) + 1;
    $todo_list[$index] = $todo;
}

?>