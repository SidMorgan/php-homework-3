<?php

echo "Имя: ";
$inputFirstName = trim(fgets(STDIN));
echo "Фамилия: ";
$inputLastName = trim(fgets(STDIN));
echo "Отчество: ";
$inputMidName = trim(fgets(STDIN));

$firstName = mb_ucfirst(mb_strlower($inputFirstName));
$lastName = mb_ucfirst(mb_strlower($inputLastName));
$midName = mb_ucfirst(mb_strlower($inputMidName));

$fullName = $lastName . ' ' . $firstName . ' ' . $midName;

$firstNameLetter = mb_substr($firstName, 0, 1, 'UTF-8');
$lastNameLetter = mb_substr($lastName, 0, 1, 'UTF-8');
$midNameLetter = mb_substr($midName, 0, 1, 'UTF-8');

$fio = $lastNameLetter . $firstNameLetter . $midNameLetter;
$surnameAndInitials = $firstName . ' ' . $firstNameLetter . '.' . $midNameLetter . '.';

echo 'Полное имя: ' . $fullName . PHP_EOL;
echo 'Фамилия и инициалы: ' . $surnameAndInitials . PHP_EOL;
echo 'Аббревиатура: ' . $fio . PHP_EOL;
