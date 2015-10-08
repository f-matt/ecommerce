<?php 
class ProdutosController extends AppController {
	public $helpers = array('Html', 'Form');
	public $name = 'Produtos';

	public function index() {
		$this->set('produtos', 
				$this->Produto->find('all'));	
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Produto->create();
			if ($this->Produto->save($this->request->data)) {
				$this->Session->setFlash(__('Produto salvo com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Erro ao salvar produto.'));
		}
		
		$categorias = $this->Produto->Categoria->
			find('list', array('fields' => 
					array('id', 'categoria')));
		$this->set('categorias', $categorias);
		
	}
	
	public function busca() {

		$this->layout = "ajax";
		
		$this->set('produtos', $this->Produto->find('all'));
	
	}
}

