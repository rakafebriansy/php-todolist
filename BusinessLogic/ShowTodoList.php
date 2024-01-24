<?php

function showTodoList()
{
    global $todo_list;
    echo "TODOLIST" . PHP_EOL;
    foreach ($todo_list as $i => $val) {
        echo "$i. $val" . PHP_EOL;
    }
}

?>