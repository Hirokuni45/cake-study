<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');



/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package    app.Controller
 * @link    http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
  public $components = [
    'Auth' =>[
      'authenticate' => [
        'Form'=>[
          'userModel' => 'User',
          'fields' => ['username' => 'username','password' => 'password']
        ]
      ],
      'loginRedirect' =>[
        'controller' => 'posts',
        'action' => 'admin_index'
      ],
      'loginAction' =>[
        'controller' => 'users',
        'action' => 'admin_login'
      ],
      'logoutRedirect' =>[
        'controller' => 'users',
        'action' => 'admin_login'
      ]

    ]
  ];

  public function beforeFilter(){
    $this->Auth->allow($this->params['action']);
  }
}
