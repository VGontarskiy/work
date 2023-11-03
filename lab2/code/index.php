<?php

//1. Доступ по ссылке

/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " and diet Dobriy-cola.";
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

//2. Числа
$n1 = 777;
echo "\nn1 = $n1\n";
$n2 = 7.77;
echo "n2 = $n2\n";
echo 6+6,"\n";
$last_month = 1187.23;
$this_month = 1089.98;
echo "Разница между расходами: ", $last_month - $this_month;

//11. Умножение и деление
$num_languages = 4;
$months = 11;
$days = 16 * $months;
$days_per_language = $days / $num_languages;
echo "days_per_language = $days_per_language\n";

//12. Степень
echo "8^2 = ", 8 ** 2;
echo "\n";

//13. Операторы присвоения
$my_num = 1234;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;
echo "\n";

//14. Математические функции
//Работа с %
$a = 10;
$b = 3;
echo "10 % 3 = ", $a % $b;
echo "\n";
if (!($a % $b)) {
	echo "Делится";
} else {
	echo "Делится с остатком ", $a % $b;
}
echo "\n"

//Работа со степенью и корнем
echo "\n";
$st = pow(2, 10);
echo "2^10 = ", $st . "\n";
echo "Корень числа 245 = ", sqrt(245);
echo "\n";
$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $elem) {
	$sum += pow($elem, 2);
}
echo "Сумма квадратов элементов массива 4 2 5 19 13 0 10", sqrt($sum);
echo "\n";

//Работа с функциями округления
echo "\n";
echo round(sqrt(379)) . "\n";
$arr1 = ["floor" => floor(sqrt(587)), "ceil" => ceil(sqrt(587))];
foreach($arr1 as $key => $value) {
	echo "$key => $value . \n";
}
echo "\n";

//Работа с min и max
echo "\n";
$arr2 = [4, -2, 5, 19, -130, 0, 10];
echo "min = ", min($arr2), " max = ",  max($arr2);
echo "\n";

//Работа с рандомом
echo "\n";
echo "Случайное число от 1 до 100 ", rand(1, 100);
$arr3 = [];
for ($i = 0; $i < 10; $i++) {
	array_push($arr3, rand());
}
echo "Массив случайных чисел\n";
foreach ($arr3 as $value) {
	echo $value . " ";
}
echo "\n";

//Работа с модулем
echo "\n";
$a = 10;
$b = 5;
echo abs($a - $b) . " ";
$a = -10;
$b = 5;
echo abs($a - $b) . " ";
$a = 10;
$b = -5;
echo abs($a - $b) . " ";
$a = -10;
$b = -5;
echo abs($a - $b) . " ";
$arr4 = [1, 2, -1, -2, 3, -3];
echo "\nBefore:", arrToStr($arr4);
$arr5 = [];
foreach ($arr4 as $value) {
	array_push($arr5, abs($value));
}
echo "\nAfter: ", arrToStr($arr5);
echo "\n";

//Общее
echo "\n";
$number3 = 30;
$arr6 = [];
for ($i = 1; $i <= $number3; $i++) {
	if ($number3 % $i == 0) {
		array_push($arr6, $i);
	}
}
echo "Массив делителей: ", arrToStr($arr6);
$arr7 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum1 = 0;
$count = 0;
foreach ($arr7 as $value) {
	$sum1 += $value;
	$count++;
	if ($sum1 > 10) {
		$count--;
		break;
	}
}
echo "\nКоличество делителей: $count";
echo "\n";

//15. Функции
echo "\n";
function printStringReturnNumber() {
	echo "string ";
	return 0;
}
$my_num = printStringReturnNumber();
echo $my_num;
echo "\n";

//16. Функции
echo "\n";
function increaseEnhusiasm($str) {
	return $str . "!";
}
echo increaseEnhusiasm("Hello, World");
function repeatThreeTimes($str) {
	return $str . $str . $str;
}
echo "\n", repeatThreeTimes("Hello, World!");
echo increaseEnhusiasm(repeatThreeTimes("Hello, World"));
function cut($str, $count = 10) {
	$str1 = "";
	for($i = 0; $i < strlen($str); $i++) {
		if ($i >= $count) {
			break;
		} else {
			$str1 .= $str[$i];
		}
	}
	return $str1;
}
echo "\n";
echo "Обрезка строки ", cut("Lorem ipsum dolor sit amet");
echo "\nВывод массива через рекурсию: ";
function recursiveOutput($arr, $i = 0) {
	if ($i == count($arr) - 1) {
		echo $arr[$i];
		return 0;
	} else {
		echo "{$arr[$i]} ";
		$i++;
		return recursiveOutput($arr, $i);
	}
}
$arr8 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
recursiveOutput($arr8);
$num = strval(rand(1, 100));
function foo($num) {
	$sum = 0;
	$arr = str_split($num);
	foreach($arr as $elem) {
		$sum += intval($elem);
	}
	if ($sum > 9) {
		return foo(strval($sum));
	} else {
		return $sum;
	}
}
echo "\n";
echo "Число на вход: $num";
echo "\n";
echo "Однозначное число, полученное в результате преобразований: ", foo($num);
echo "\n";

// 17. Массивы
echo "\n";
function fillX ($num) {
	$arr = [];
	for ($i = 0; $i <= $num; $i++) {
		$str = "";
		for ($j = 0; $j <= $i; $j++) {
			$str .= "x";
		}
		array_push($arr, $str);
	}
	return $arr;
}
echo "Массив с х: ", arrToStr(fillX(rand(1, 10)));

function arrayFill ($elem, $count) {
	$arr = [];
	for ($i = 0; $i <= $count; $i++) {
		array_push($arr, $elem);
	}
	return $arr;
}
echo "\nМассив заполненный заданным значением длины n: ", arrToStr(arrayFill("123", rand(1, 10)));
$newArr = [[1, 2, 3], [4, 5], [6]];
$arraysSum = 0;
foreach ($newArr as $arrs) {
	$arrSum = 0;
	foreach($arrs as $elem) {
		$arrSum += $elem;
	}
	$arraysSum += $arrSum;
}
echo "\nСумма массивов: {$arraysSum}";
$newArr1 = [];
$n = 1;
for ($i = 0; $i < 3; $i++) {
	$tmpArr = [];
	for ($j = 0; $j < 3; $j++) {
		array_push($tmpArr, $n);
		$n++;
	}
	array_push($newArr1, $tmpArr);
}
echo "\nЗаполненный двумерный массив\n";
foreach ($newArr1 as $arrs) {
	echo arrToStr($arrs) . "\n";
}
$newArr2 = [2, 5, 3, 9];
$result = 0;
for ($i = 0; $i < 3; $i++) {
	$tmpSum = $newArr2[$i] * $newArr2[$i + 1];
	$result += $tmpSum;
}
echo "Сумма элементов массива, умноженных на следующий: {$result}";
$user = ["name" => "John", "surname" => "Doe", "patronymic" => "Loremovich"];
echo "\nuser: {$user["surname"]} {$user["name"]} {$user["patronymic"]}";
$date = ["year" => date("Y"), "month" => date("m"), "day" => date("d")];
echo "\nДата: {$date["year"]}-{$date["month"]}-{$date["day"]}";
$arr = ['a', 'b', 'c', 'd', 'e'];
echo "\nДлина массива arr: ", count($arr);
echo "\nПоследний элемент массива arr: {$arr[count($arr) - 1]}, предпоследний элемент массива arr {$arr[count($arr) - 2]}";
echo "\n";

//18. Конструкция if else
echo "\n";
function foo1 ($num1, $num2) {
	echo "num1 = {$num1}, num2 = {$num2} ";
	if (($num1 + $num2) > 10) {
		echo "true";
		return true;
	} else {
		echo "false";
		return false;
	}
}
echo "Функция, проверяющая больше ли сумма чисел числа 10 ";
foo1 (rand(1, 10), rand(1, 10));

function foo2 ($num1, $num2) {
	echo "num1 = {$num1}, num2 = {$num2} ";
	if ($num1 == $num2) {
		echo "true";
		return true;
	} else {
		echo "false";
		return false;
	}
}
echo "\nФункция, проверяющая равны ли числа ";
foo2 (rand(1, 10), rand(1, 10));

$age = strval(rand(1, 110));
echo "\nВозраст {$age}\n";
$arr = str_split($age);
$sum = 0;
foreach($arr as $elem) {
	$sum += intval($elem);
}
if ($age >= 10 || $age <= 99) {

	if ($sum >= 10) {
		echo "Сумма цифр возраста двузначна";
	} else {
		echo "Сумма цифр возраста однозначна";
	}
} else {
	echo "Возраст не попадает в промежуток [10-99]";
}
$arr = [];
for ($i = 0; $i <= rand(1, 10); $i++) {
	$arr[$i] = rand(1, 10);
}
echo "\narr: ", arrToStr($arr);
if (count($arr) == 3) {
	$sum = 0;
	foreach ($arr as $elem) {
		$sum += $elem;
	}
	echo "Сумма этого массива = {$sum}";
}
echo "\n";

//19. Циклы
echo "\n";
for ($i = 0; $i <= 20; $i++) {
	$str = "";
	for ($j = 0; $j < $i; $j++) {
		$str .= "x";
	}
	echo $str . "\n";
}
echo "\n";

//20. Комбинация функиций
echo "\n";
$arr = [];
for ($i = 0; $i <= rand(1, 10); $i++) {
	$arr[$i] = rand(1, 10);
}
echo "Массив: ", arrToStr($arr);
echo " Среднее значение: ", array_sum($arr) / count($arr);
echo "\nСумма чисел от 1 до 100: ", array_sum(range(1, 100));
$arr = [];
for ($i = 0; $i <= rand(1, 10); $i++) {
	$arr[$i] = rand(1, 10);
}
echo "\nМассив: ", arrToStr($arr);
echo "Массив из корней элементов этого массива: ", arrToStr(array_map('sqrt', $arr));
$arr = array_combine(range('a', 'z'), range(1, 26));
echo "\nМассив, заполненный в виде 'a' => 1, 'b' => 2 и т.д. \n";
foreach ($arr as $key => $value) {
	echo "$key => $value\n";
}
$str = "1234567890";
$arr = str_split($str);
$arr = array_chunk($arr, 2);
$arr = array_map('implode', $arr);
echo "Сумма элементов массива в виде 12+34+56+78+90 = ", array_sum($arr);