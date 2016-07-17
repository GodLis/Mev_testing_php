<?php
/**
 * Index File Doc Comment
 *
 * This file is a part of a task5
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task5
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
require __DIR__ .'/vendor/autoload.php';

//$file = 'config/config.ini';
//$config = parse_ini_file($file);
//$arrToQuickSort = $arr = $config['arr'];

$mas = [];
$m = mt_rand(4, 6);
$n = mt_rand(2, 4);
$tmp = new \GodLis\Task5\SortingEmbodiments();
$tmp->sortingEmbodiments(0, $mas, $n, $m);
