<?php

require_once __DIR__ . '/../Helper/Input.php';
require_once __DIR__ . '/../BusinessLogic/RemoveTodoList.php';

function viewRemoveTodoList ()
{
    echo 'MENGHAPUS TODO' . PHP_EOL;
    $pilihan = input('Nomor (x untuk batal)');
    if ($pilihan == 'x'){
        echo 'Batal menghapus todo' . PHP_EOL;
    } else if (is_numeric($pilihan)) {
        $sukses = removeTodoList($pilihan);
        if ($sukses) {
            echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Nomor $pilihan tidak ada" . PHP_EOL;
        }
    } else {
        echo 'Pilihan tidak dimengerti' . PHP_EOL;
    }
}

?>