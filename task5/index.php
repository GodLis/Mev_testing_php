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

$file = 'config/config.ini';
$config = parse_ini_file($file);

if (!empty($config['n'] && $config['m']) && ($config['n'] || $config['m']) != 0) {
    echo "n = ". $config['n'];
    echo "\nm = ". $config['m'] ."\n";
    $tmp = new \GodLis\Task5\SortingEmbodiments();
    $tmp->sortingEmbodiments(0, $config['mas'], $config['n'], $config['m']);
} else {
    exit(1);
}
