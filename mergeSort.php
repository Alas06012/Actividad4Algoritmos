<?php
// Función principal de Merge Sort
function mergeSort(array $list): array {
    if (count($list) <= 1) {
        return $list;
    }

    // Dividir la lista en dos mitades
    $middle = intdiv(count($list), 2);
    $left = array_slice($list, 0, $middle);
    $right = array_slice($list, $middle);

    // Ordenar recursivamente las mitades y combinarlas
    return merge(mergeSort($left), mergeSort($right));
}

// Función para combinar dos listas ordenadas
function merge(array $left, array $right): array {
    $result = [];
    $i = 0;
    $j = 0;

    // Combinar las dos mitades en orden alfabético
    while ($i < count($left) && $j < count($right)) {
        if (strcasecmp($left[$i], $right[$j]) <= 0) {
            $result[] = $left[$i];
            $i++;
        } else {
            $result[] = $right[$j];
            $j++;
        }
    }

    // Agregar los elementos restantes de ambas mitades
    while ($i < count($left)) {
        $result[] = $left[$i];
        $i++;
    }
    while ($j < count($right)) {
        $result[] = $right[$j];
        $j++;
    }

    return $result;
}

$list = ["Diego", "Alexander", "Alas", "Morales", "Kodigo", "Curso", "Programacion"];

// Mostrar la lista antes de ordenar
echo "Lista original: ";
print_r($list);

// Ordenar la lista con Merge Sort
$sortedList = mergeSort($list);

// Mostrar la lista después de ordenar
echo "Lista ordenada alfabéticamente: ";
print_r($sortedList);
?>
