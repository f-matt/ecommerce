<!-- File: /app/View/Categorias/add.ctp -->
<h1>Adicionar categoria</h1>
<?php
	echo $this->Form->create('Categoria');
	echo $this->Form->input('categoria');
	echo $this->Form->end('Salvar Categoria');
?>