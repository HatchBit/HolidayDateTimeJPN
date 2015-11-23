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
error_reporting(E_ALL);

/*====================
  DEFINE
  ====================*/

require( dirname(__FILE__).'/holidaydatetime.class.php' );

/*====================
  BEFORE ACTIONS
  ====================*/

$dateStr = date('Y-m-d');
if(isset($_POST['date'])) $dateStr = $_POST['date'];
if(isset($_GET['date'])) $dateStr = $_GET['date'];
//echo $dateStr;

/*====================
  MAIN ACTIONS
  ====================*/

$datetime = new HolidayDateTime($dateStr);
$result = $datetime->holiday();
//var_dump($result);

if($result === false){
    echo "FALSE";
}else{
    echo $result;
}

/*====================
  AFTER ACTIONS
  ====================*/

/*====================
  FUNCTIONS
  ====================*/
