<?php
// Función para ordenar una lista con Insertion Sort
function insertionSort(array $list): array {
    $n = count($list);
    for ($i = 1; $i < $n; $i++) {
        $key = $list[$i];
        $j = $i - 1;

        // Comparar e insertar en la posición correcta
        while ($j >= 0 && strcasecmp($list[$j], $key) > 0) {
            $list[$j + 1] = $list[$j];
            $j--;
        }
        $list[$j + 1] = $key;
    }
    return $list;
}

// Lista inicial de nombres
$list = ["Diego", "Alexander", "Marcos", "Jared", "Juan", "Carlos", "Maria"];

// Mostrar la lista antes de ordenar
echo "Lista original: ";
print_r($list);

// Ordenar la lista con Insertion Sort
$sortedList = insertionSort($list);

// Mostrar la lista después de ordenar
echo "Lista ordenada alfabéticamente: ";
print_r($sortedList);
?>
