<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		https://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

  public $components = array(
    'DebugKit.Toolbar'
  );

  public function setLang($lang) {
    // I TRIED TO USE CONFIGURE::READ & CONFIGURE::WRITE TO STORE APP LANG IN core.php
    // EVEN WENT AS FAR AS TO WRITE MY OWN CONF FILE AND LOAD IT
    // HAD A PROBLEM WHERE AFTER UPDATING MY CONF LANG VALUE THE APPLICATION STILL USED THE OLD et VALUE
    // SO I USED COOKIES INSTEAD
    setcookie('lang', $lang, time() + ((86400 * 30) * 31), "/");
    $this->redirect($this->referer());
  }

  public function translate($string) {
    // THIS FUNCTION HANDLES ALL OF OUR IN APP LOCALISATION, DEFAULT SOLUTION DOES NOT SEEM GOOD
    if(!isset($_COOKIE['lang'])) { // IF WE HAVE NOT ALREADY SET OUR LANG COOKIE
      setcookie('lang', 'et', time() + ((86400 * 30) * 31), "/"); // A MONTH LONG COOKIE FOR STORING USER'S CHOSEN LANGUAGE
    }
    $lang = $_COOKIE['lang'];
    if (empty($lang)) $lang = 'et'; // FALLBACK TO ET IF NO LANG VALUE PRESENT
    $langFile = get_object_vars(json_decode(file_get_contents("../Locale/". $lang .".json"))); // GET CURRENT LANG FILE
    return $langFile[$string];
  }
}
