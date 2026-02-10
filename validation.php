<?php
function validated(): array
{
    $errors = [];

    if (!filter_var($_GET['nbvalues'], FILTER_VALIDATE_INT, ['options' => ['min_range' => 1, 'max_range' => 10]])) {
        $errors['values'] = 'Le nombre de valeurs doit être un nombre entier supérieur à 0 et inférieur à 11.';
    }
    if (!filter_var($_GET['nbtables'], FILTER_VALIDATE_INT, ['options' => ['min_range' => 1, 'max_range' => 10]])) {
        $errors['tables'] = 'Le nombre de tables doit être un nombre entier supérieur à 0 et inférieur à 11.';
    }

    if (count($errors)) return compact('errors');

    $nbtables = (int)$_GET['nbtables'];
    $nbvalues = (int)$_GET['nbvalues'];

    return compact('nbtables', 'nbvalues');
}