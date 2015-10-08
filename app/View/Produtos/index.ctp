<!-- File: /app/View/Produtos/index.ctp -->

<h1>Produtos</h1>

<p><?php echo $this->Html->link("Novo Produto", 
	array('action' => 'add')); ?></p>

<table>
	<tr>
		<th>Id</th>
		<th>Produto</th>
		<th>Categoria</th>
		<th>Preço</th>
	</tr>
	
	<?php foreach ($produtos as $p): ?>
		<tr>
			<td><?php echo $p['Produto']['id']; ?></td>
			<td><?php echo $p['Produto']['produto']; ?></td>
			<td><?php echo $p['Categoria']['categoria']; ?></td>
			<td><?php echo $p['Produto']['preco']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>