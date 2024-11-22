<?php

function bubbleSortDesc(array $list): array {
    $n = count($list);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($list[$j] < $list[$j + 1]) {
                // Intercambiar elementos
                $temp = $list[$j];
                $list[$j] = $list[$j + 1];
                $list[$j + 1] = $temp;
            }
        }
    }
    return $list;
}

// Lista inicial 
$list = [3, -1, 0, 9, -5, 9, 7, -3, 5, 8, 1];

// Mostrar la lista antes de ordenar
echo "Lista original: ";
print_r($list);

// Ordenar la lista con Bubble Sort
$sortedList = bubbleSortDesc($list);

// Mostrar la lista después de ordenar
echo "Lista ordenada en orden descendente: ";
print_r($sortedList);
?>
