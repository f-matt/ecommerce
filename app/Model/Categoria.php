<?php 
class Categoria extends AppModel {
	public $name = 'Categoria';
	
	public $validate = array(
		'categoria' => array(
			'rule' => 'notEmpty'
		)
	);
}
