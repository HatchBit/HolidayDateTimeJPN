<?php
/**
 * Holiday DateTime JPN
 *
 * 日本の祝日を判定
 *
 * @package     HolidayDateTimeJPN
 * @author      Y.Yajima <yajima@hatchbit.jp>
 * @copyright   2014, HatchBit & Co.
 * @license     http://www.hatchbit.jp/resource/license.html
 * @link        https://github.com/HatchBit/HolidayDateTimeJPN
 * @since       Version 1.0
 * @filesource
 */

/*====================
  DEFINE
  ====================*/

require './holidaydatetime.class.php';

/*====================
  BEFORE ACTIONS
  ====================*/

$dateStr = date('Y-m-d');
if(isset($_POST['date'])) $dateStr = $_POST['date'];
if(isset($_GET['date'])) $dateStr = $_GET['date'];

/*====================
  MAIN ACTIONS
  ====================*/

$datetime = new HolidayDateTime($dateStr);
$result = $datetime->holiday();

if($result === false){
    return "FALSE";
}else{
    return $result;
}

/*====================
  AFTER ACTIONS
  ====================*/

/*====================
  FUNCTIONS
  ====================*/
