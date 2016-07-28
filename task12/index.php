<?php
/**
 * Index File Doc Comment
 *
 * This file is a part of a task12
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task12
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

require __DIR__ .'/vendor/autoload.php';

$datetime1 = new \DateTime('1996-01-19');
$datetime2 = new \DateTime('now', new \DateTimeZone('UTC'));

$tmp = new GodLis\Task12\DataClass();
if (!empty($datetime1 && $datetime2)) {
    echo "Difference between 2 dates is ". $tmp->data($datetime1, $datetime2)->format('%R%a days') ."\n";
} else {
    exit(1);
}
