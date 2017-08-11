<?php

  App::uses('AppController', 'Controller');

  class PostsController extends AppController {

    public $uses = [
      'Post'
    ];

    //pagination
    public $paginate = [
      'limit' => 1,
      'order' =>[
        'Post.created' => 'asc'
      ]
    ];

    public function index(){
      $this->paginate['conditions'] = [
        'Post.title like' => '%海%'
      ];
      $posts = $this->paginate('Post');
      $this->set(compact('posts'));
      #new dBug($posts);
      #exit;
      #delete
      #$this->Post->delete();
    }

    public function show($id){
      $this->Post->recursive = 2;
      $post = $this->Post->find('first',[
        'contain'=>['Category','Author','Tag','Comment','PostViewCount'],
        'conditions'=>['Post.id'=>$id],
        'order'=>'PostViewCount.view_count DESC'
      ]);

      $this->set(compact('post'));

    }


    //create
    public function create(){
      if($this->request->is('get')){ return; }
      if ($this->Post->save($this->request->data)) {
        $id = $this->Post->getLastInsertId();
        return $this->redirect(['action'=>'show',$id]);
      }else{
        return $this->render();
      }
    }

    //edit
    //update 時はgetLastinsertId使えなかった
    public function edit($id = null){
      $this->Post->id = $id;
      if($this->request->is('get')){
        $this->request->data = $this->Post->read();
        return;
      }
      if ($this->Post->save($this->request->data)) {
        return $this->redirect(['action'=>'show',$id]);
      }else{
        return $this->render();
      }

    }

    //delete
    public function delete($id = null){
      if($this->request->is('post')){
        $this->Post->delete($id);
        return $this->redirect(['action'=>'index']);
      }
    }

    //admin
    public function admin_index(){
      $this->layout = 'admin';
    }


  }
