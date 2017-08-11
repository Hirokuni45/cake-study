<?php

class Post extends AppModel {

  public $actsAs = ['Containable'];

  public $belongsTo = ['Author','Category'];

  public $hasMany = ['PostTag','Comment','PostViewCountByDate'];

  public $hasOne = ['PostViewCount'];

  public $hasAndBelongsToMany = [
    'Tag' => [
      'joinTable' => 'post_tags',
    ]
  ];

  public function getSortedViewCount(){
      $posts = $this->find('all',[
        'joins' =>[
          [
            'type' => 'INNER',
            'table' => 'post_view_count_by_date',
            'alias' => 'PostViewCountByDate',
            'conditions' => 'Post.id = PostViewCountByDate.post_id'
          ]
        ],
        'order' => 'PostViewCountByDate.view_count desc'
      ]);
      return $posts;
  }

  public $validate = [
    'title' => [
      'rule' => ['minLength',8],
      'message' => '8文字以上入力してよ',
      'required' => true
    ]
  ];



}
