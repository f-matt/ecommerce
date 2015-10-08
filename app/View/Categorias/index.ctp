<!-- File: /app/View/Categorias/index.ctp -->

<h1>Categorias</h1>

<p><?php echo $this->Html->link("Nova Categoria", 
	array('action' => 'add')); ?></p>

<table>
	<tr>
		<th>Id</th>
		<th>Categoria</th>
	</tr>
	
	<?php foreach ($categorias as $c): ?>
		<tr>
			<td><?php echo $c['Categoria']['id']; ?></td>
			<td><?php echo $c['Categoria']['categoria']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>