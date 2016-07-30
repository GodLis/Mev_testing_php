<?php
/**
 * Index File Doc Comment
 *
 * This file is a part of a task15
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task15
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

require __DIR__ .'/vendor/autoload.php';

$file = 'config/config.ini';
$config = parse_ini_file($file);

if (!empty($config['url'])) {
    $tmp = new \GodLis\Task15\Parsing();
    $tmp->parsing($config['url']);
}
