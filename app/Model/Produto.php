<?php
class Produto extends AppModel {
	public $name = 'Produto';
	
	public $belongsTo = 'Categoria';
	
}