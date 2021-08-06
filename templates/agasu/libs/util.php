<?php

/**
 * @package     ${NAMESPACE}
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */
class Util
{
    public static function getDateRusString($item): string
    {
        $day = date('d', strtotime($item->created));
        $months = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];
        $month = $months[date('m', strtotime($item->created)) - 1];
        $year = date('y', strtotime($item->created));
        return $day . ' ' . $month . ' ' . $year . ' года';
    }

    public static function getShortDescription(String $string, $length, $encoding, $postfix) {
        $tmp = mb_substr($string, 0, $length, $encoding);
        return mb_substr($tmp, 0, mb_strripos($tmp, ' ', 0, $encoding), $encoding) . $postfix;
    }

}