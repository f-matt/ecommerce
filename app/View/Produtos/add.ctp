<!-- File: /app/View/Produtos/add.ctp -->
<h1>Adicionar Produto</h1>
<?php
	echo $this->Form->create('Produto');
	echo $this->Form->input('produto');
	echo $this->Form->input('categoria_id', 
		array('options'=>$categorias));
	echo $this->Form->input('preco');
		
	echo $this->Form->end('Salvar Produto');
?>