<?php 
class CategoriasController extends AppController {
	public $helpers = array('Html', 'Form');
	public $name = 'Categorias';

	public function index() {
		$this->set('categorias', 
				$this->Categoria->find('all'));	
	}
	
	public function add() {
		if ($this->request->is('post')) {
			$this->Categoria->create();
			if ($this->Categoria->save($this->request->data)) {
				$this->Session->setFlash(__('Categoria salva com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Erro ao salvar categoria.'));
		}
	}
}

