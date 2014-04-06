<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/*
Facebookログインにさせたかったが、うまくいかなかったためコメントアウト
App::import('Vendor','facebook/src/facebook');
*/

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */


class AppController extends Controller {
	public $components = array('Auth');
/*
Facebookログインにさせたかったが、うまくいかなかったためコメントアウト
	public $facebook;
	public $user;
	function beforeFilter(){
		$this->Auth->fields = array(
			'username' => 'fb_id',
			'password' => 'password',
			);

		$this->facebook = new Facebook(array(
			'appId'  => 'アプリID',
			'secret' => 'アプリの秘訣',
			));
		$this->Auth->autoRedirect = false,
		$this->user = this->Auth->user();

		$this->set('user',$this->user['User']);
		parent::beforeFilter();
	}

*/


}
