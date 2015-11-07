<?php 

class SearchController extends AppController{
public $uses = array('Search', 'News', 'Project', 'Product');
// public $components = array('Paginator');
// public $helpers = array('Paginator');
	public function index(){
		$news = $this->News->find('all',array(
			'limit' => 3,
			'order' => array('created' => 'desc')
			));

		$search = !empty($_GET['q']) ? $_GET['q'] : null;
		if(is_null($search)){
			$search_res = 'Введите пойсковый запрос...';
			return $this->set(compact('search_res', 'news'));
		}

		// $this->Paginator->settings = array(
		// 	'conditions' => array('Product.body LIKE' => '%' . $search . '%'),
		// 	'OR' => array('Project.body LIKE' => '%' . $search . '%'),
		// 	'recursive' => -1,
		// 	'limit' => 3 
		// );
		// $search_res = $this->Paginator->paginate('Product', 'Project'); 
		
		// $options['joins'] = array(
		// 	// array('table' => 'projects',
		// 	// 	'alias' => 'Project',
		// 	// 	'type' => 'inner',
		// 	// 	'conditions' => array('Project.body LIKE' => '%' . $search . '%')
		// 	// 	),
		// 	array('table' => 'products',
		// 		'alias' => 'Product',
		// 		'type' => 'inner',
		// 		'conditions' => array('Product.body LIKE' => '%' . $search . '%')
		// 		)
		// 	);

		$search_res = $this->Project->query("SELECT alias, title, body, 'project' AS 'url' FROM projects 
			WHERE projects.body LIKE '%{$search}%'
				UNION
			SELECT id AS 'alias', title, body, 'news' AS 'url' FROM news 
			WHERE news.body LIKE '%{$search}%'
				UNION
			SELECT alias, title, body, 'service' AS 'url' FROM services 
			WHERE services.body LIKE '%{$search}%'
				UNION
			SELECT alias, title, body, 'pages' AS 'url' FROM pages 
			WHERE pages.body LIKE '%{$search}%'
				UNION
			SELECT alias, title, body, 'product' AS 'url' FROM products
			HAVING products.body LIKE '%{$search}%'
			");
		$this->set(compact('search_res', 'news'));
	}
}
 ?>