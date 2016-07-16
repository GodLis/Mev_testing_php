<?php
/**
 * Index File Doc Comment
 *
 * This file is a part of a task3
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task4
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
require __DIR__ .'/vendor/autoload.php';

//$k = mt_rand(20, 30);
//$array1[] = [];
//$array2[] = [];
//
//for ($i=0; $i<$k; $i++) {
//    $array1[$i] = random_int(1, 30);
//    $array2[$i] = random_int(1, 30);
//};
//
//echo "Массив 1\n";
//for ($i=0; $i<$k; $i++) {
//    echo ($array1[$i] ." ");
//};
//
//echo "\nМассив 2\n";
//for ($i=0; $i<$k; $i++) {
//    echo ($array2[$i] ." ");
//};

$file = 'config/config.ini';
$config = parse_ini_file($file);
$arrToQuickSort = $arr = $config['arr'];
echo "Array 1:\n";
print_r($config['array1']);
echo "Array 2:\n";
print_r($config['array2']);

echo "\nНахождение общих елементов функцией 'array_intersect':\n";

if (!empty($config['array1'] && $config['array2'])) {
    print_r($result = array_intersect($config['array1'], $config['array2']));
}

echo "Нахождение общих елементов функцией пользователя:\n";
if (!empty($config['array1'] && $config['array2'])) {
    $tmp = new \GodLis\Task4\UserFunction($config);
    print_r($tmp->userFunction());
}

