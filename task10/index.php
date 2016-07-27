<?php
/**
 * Index File Doc Comment
 *
 * This file is a part of a task10
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task10
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

require __DIR__ .'/vendor/autoload.php';

$file = 'config/config.ini';
$config = parse_ini_file($file);

if (!empty($config)) {
    echo "Строка с пробелами:" ."\n";
    echo $config['str'] ."\n";

    $tmp = new GodLis\Task10\StrDeleteV1($config);
    echo "Способ 1:" ."\n";
    echo $tmp->strDeleteV1() ."\n";

    $tmp = new GodLis\Task10\StrDeleteV2($config);
    echo "Способ 2:" ."\n";
    echo $tmp->strDeleteV2() ."\n";
} else {
    exit(1);
}



