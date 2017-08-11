<?php

App::uses('SimplePasswordHasher', 'Controller/Component/Auth');

class User extends AppModel {

  public $validate = [
    'username' =>[
        'rule' => ['minLength', 4],
        'message' => 'ユーザーネームは必要です'
    ],
    'password' => [
        'rule' => ['minLength',8],
        'message' => 'パスワードは必要です'
    ],
    'role' => [
      'valid' => [
        'rule' => ['inList',[
            'admin','author'
          ]
        ],
        'message' => 'ちゃんとしたの選んでね',
        'allowEmpty' => false
      ]
    ]
  ];

  public function beforeSave($options = array()) {
    if (isset($this->data[$this->alias]['password'])) {
      $passwordHasher = new SimplePasswordHasher();
      $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
    }
    return true;
  }

}
