<?php
/**
 * Index File Doc Comment
 *
 * This file is a part of a task9
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task9
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

require __DIR__ .'/vendor/autoload.php';

$file = 'config/config.ini';
$config = parse_ini_file($file);

echo "Строка: ";
echo $config['subject'] ."\n";
echo "Подстрока: ";
echo $config['part'] ."\n";

$tmp = new GodLis\Task9\RegExpStr($config);
echo "Поиск RegExp: ";
print_r($res = $tmp->regExpStr());

$tmp = new GodLis\Task9\UserSeachStr($config);
echo "\nПоиск вручную: ";
$tmp->userSeachStr() ."\n";
