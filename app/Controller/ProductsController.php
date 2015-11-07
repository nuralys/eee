<?php 

class ProductsController extends AppController{
	
	public $uses = array('Product', 'News');
	
	
	public function index(){
		$products = $this->Product->find('all');
		$news = $this->News->find('all',array(
			'limit' => 3,
			'order' => array('created' => 'desc')
			));
		$this->set(compact('products', 'news'));
	}

	public function admin_index(){
		$products = $this->Product->find('all');
		
		$this->set(compact('products'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Product->create();
			//$data = $this->request->data['Product'];
			$slug = Inflector::slug($this->request->data['Product']['title']);
			$data[] = $this->request->data['Product'];
			$data[] = array('alias'=>$slug);
			$data = array_merge($data[0],$data[1]);
			// debug($data);
			 if(!$data['img']['name']){
			 	unset($data['img']);
			}
			if($this->Product->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		
	}
	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->Product->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->Product->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Product->id = $id;
			$data1 = $this->request->data['Product'];
			if(!$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Product->save($data1)){
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
		if (!$this->Product->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Product->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function view($product_alias = null){
		if(is_null($product_alias)){
			throw new NotFoundException("Такой страницы нету");
		}

		$product = $this->Product->findByAlias($product_alias);
		$products = $this->Product->find('all');
		if(!$product){
			throw new NotFoundException("Такой страницы нету");
		}

		$title_for_layout = $product['Product']['title'];
		$meta['keywords'] = $product['Product']['keywords'];
		$meta['description'] = $product['Product']['description'];

		$news = $this->News->find('all',array(
			'limit' => 3,
			'order' => array('created' => 'desc')
			));

		$this->set(compact('product', 'products', 'news'));
	}
}