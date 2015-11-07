<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

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
	public $uses = array('App', 'Project', 'Service', 'Product', 'Review');
	public $components = array('DebugKit.Toolbar', 'Session', 'Auth' => array(
            'loginRedirect' => '/admin/',
            'logoutRedirect' => '/',
            'authenticate' => array(
                'Form' => array(
                    'passwordHasher' => 'Blowfish'
                )
            )
        ));
	public $helpers = array('Html', 'Form', 'Session');

	public function beforeFilter() {
		parent::beforeFilter();
		$projects_menu = $this->Project->find('all', array(
			'fields' => array('title', 'alias')
			));
		$service_tree = $this->Service->find('threaded');
		$servicesMainMenu = $this->_catMainMenuHtml($service_tree);
		$products = $this->Product->find('all', array(
			'fields' => array('title', 'alias', 'img')
			));
		$reviews = $this->Review->find('all', array(
			'conditions' => array('active' => 1),
			'limit' => 5,
			'order' => array('id' => 'desc')
			));
		
		// debug($this->request->params['prefix']);
		$admin = (isset($this->request->params['prefix']) && $this->request->params['prefix'] == 'admin') ? 'admin/' : false;
		if(!$admin) $this->Auth->allow();
		if($admin){
			$this->layout = 'default';
		}else{
			$this->layout = 'index';
		}

		$this->set(compact('admin', 'projects_menu', 'servicesMainMenu', 'products', 'reviews'));

	}

	protected function _catMainMenuHtml($service_tree = false){
		if(!$service_tree) return false;
		$html = '';
		foreach ($service_tree as $item) {
			$html .= $this->_catMainMenuTemplate($item);
		}
		return $html;
	}

	protected function _catMainMenuTemplate($services1){
		ob_start();
		include APP . "View/Elements/services_menu_tpl.ctp";
		return ob_get_clean();
	}
}
