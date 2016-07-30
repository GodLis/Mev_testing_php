<?php
/**
 * Geocoding Class Doc Comment
 *
 * This file is a part of a task17
 *
 * PHP version 7
 *
 * @category Testing
 * @package  GodLis\Task17
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */

namespace GodLis\Task17;

/**
 * Class Geocoding
 *
 * @category Testing
 * @package  GodLis\Task17
 * @author   Olechka Brajko <olechkabrajko@gmail.com>
 * @license  http://www.gnu.org/copyleft/gpl.html GNU General Public License
 * @link     https://github.com/GodLis/Mev_testing_php
 */
class Geocoding
{
    /**
     * Geocoding variable
     *
     * @var
     */
    protected $geo;

    /**
     * Geocoding variable
     *
     * @var
     */
    protected $backgeo;

    /**
     * Geocoding constructor.
     *
     * @param array $config Configs that are transfer to use
     */
    public function __construct($config)
    {
        $this->geo = $config['geo'];
        $this->backgeo = $config['backgeo'];
    }

    /**
     * Geocoding destructor.
     */
    public function __destruct()
    {
        $this->geo = null;
        $this->backgeo = null;
    }

    /**
     * Geocoding function
     *
     * @return void
     */
    public function geocoding()
    {
        echo "Прямое геокодирвоание:\n";
        $xml = simplexml_load_file(
            'https://geocode-maps.yandex.ru/1.x/?geocode='.$this->geo.')'
        );
        print_r($xml);

        echo "\nОбратное геокодирвоание:\n";
        $xml2 = simplexml_load_file(
            'https://geocode-maps.yandex.ru/1.x/?geocode='.$this->backgeo.')'
        );
        print_r($xml2);
    }
}