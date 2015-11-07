<?php 

class ProjectsController extends AppController{
	
	public $uses = array('Project', 'News');
	
	
	public function index(){
		$projects = $this->Project->find('all');
		$news = $this->News->find('all',array(
			'limit' => 3,
			'order' => array('created' => 'desc')
			));
		$this->set(compact('projects', 'news'));
	}

	public function admin_index(){
		$projects = $this->Project->find('all');
		
		$this->set(compact('projects'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Project->create();
			//$data = $this->request->data['Project'];
			$slug = Inflector::slug($this->request->data['Project']['title']);
			$data[] = $this->request->data['Project'];
			$data[] = array('alias'=>$slug);
			$data = array_merge($data[0],$data[1]);
			// debug($data);
			 if(!$data['img']['name']){
			 	unset($data['img']);
			}
			if($this->Project->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		
	}
	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Project->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Project->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Project->id = $id;
			$data1 = $this->request->data['Project'];
			if(!$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Project->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			
			$this->set(compact('id', 'data'));
		}
	}

	public function admin_delete($id){
		if (!$this->Project->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Project->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($project_alias = null){
		if(is_null($project_alias)){
			throw new NotFoundException("Такой страницы нету");
		}

		$project = $this->Project->findByAlias($project_alias);
		$projects = $this->Project->find('all');
		if(!$project){
			throw new NotFoundException("Такой страницы нету");
		}

		$title_for_layout = $project['Project']['title'];
		$meta['keywords'] = $project['Project']['keywords'];
		$meta['description'] = $project['Project']['description'];

		$news = $this->News->find('all',array(
			'limit' => 3,
			'order' => array('created' => 'desc')
			));

		$this->set(compact('project', 'projects', 'news'));
	}
}