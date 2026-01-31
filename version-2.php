<?php

echo "Имя: ";
$inputFirstName = trim(fgets(STDIN));
echo "Фамилия: ";
$inputLastName = trim(fgets(STDIN));
echo "Отчество: ";
$inputMidName = trim(fgets(STDIN));

$firstName = 
    mb_strtoupper(mb_substr($inputFirstName, 0, 1, 'UTF-8'), 'UTF-8') .
    mb_strtolower(mb_substr($inputFirstName, 1, null, 'UTF-8'), 'UTF-8');

$lastName =
    mb_strtoupper(mb_substr($inputLastName, 0, 1, 'UTF-8'), 'UTF-8') .
    mb_strtolower(mb_substr($inputLastName, 1, null, 'UTF-8'), 'UTF-8');

$midName =
    mb_strtoupper(mb_substr($inputMidName, 0, 1, 'UTF-8'), 'UTF-8') .
    mb_strtolower(mb_substr($inputMidName, 1, null, 'UTF-8'), 'UTF-8');

$fullName = $lastName . ' ' . $firstName . ' ' . $midName;

$firstNameLetter = mb_substr($firstName, 0, 1, 'UTF-8');
$lastNameLetter = mb_substr($lastName, 0, 1, 'UTF-8');
$midNameLetter = mb_substr($midName, 0, 1, 'UTF-8');

$fio = $lastNameLetter . $firstNameLetter . $midNameLetter;

$surnameAndInitials = $lastName . ' ' . $firstNameLetter . '.' . $midNameLetter . '.';

echo 'Полное имя: ' . $fullName . PHP_EOL;
echo 'Фамилия и инициалы: ' . $surnameAndInitials . PHP_EOL;
echo 'Аббревиатура: ' . $fio . PHP_EOL;
