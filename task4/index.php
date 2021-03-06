<?php
/**
 * Index File Doc Comment
 *
 * This file is a part of a task4
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

$file = 'config/config.ini';
$config = parse_ini_file($file);
$arrToQuickSort = $arr = $config['arr'];


if (!empty($config['array1'] && $config['array2'])) {
    echo "Array 1:\n";
    print_r($config['array1']);
    echo "Array 2:\n";
    print_r($config['array2']);

    echo "\nНахождение общих елементов функцией 'array_intersect':\n";
    $tmp = new GodLis\Task4\ArrayIntersectFunction($config);
    print_r($tmp->arrayIntersectFunction());

    echo "Нахождение общих елементов функцией пользователя:\n";
    $tmp = new GodLis\Task4\UserFunction($config);
    print_r($tmp->userFunction());
} else {
    exit(1);
}
