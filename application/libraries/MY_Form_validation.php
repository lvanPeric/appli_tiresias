<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation
{

    public function __construct($rules = array())
    {
        parent::__construct($rules);
    }

    public function valid_date($date)
    {
        $d = DateTime::createFromFormat('Y-m-d', $date);
        return $d && $d->format('Y-m-d') === $date;
    }

    private function callback_date_valid($date){
        $day = (int) substr($date, 0, 2);
        $month = (int) substr($date, 3, 2);
        $year = (int) substr($date, 6, 4);
        return checkdate($month, $day, $year);
    }

    public function valid_numero_secu($str) {
        $myPattern = '/^[12][0-9]{2}[0-1][0-9](2[AB]|[0-9]{2})[0-9]{3}[0-9]{3}[0-9]{2}$/x';
        if(preg_match($myPattern, $str)){
            return true;
        } else {
            return false;
        }
    }
}