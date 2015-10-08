<!-- File: /app/View/Produtos/add.ctp -->

<table>
	<tr>
		<th>Código</th>
		<th>Produto</th>
	</tr>

	<?php foreach ($produtos as $produto) { ?>
		<tr>
			<td><?php echo $produto['Produto']['id']; ?></td>
			<td><?php echo $produto['Produto']['produto']; ?></td>
		</tr>
	<?php } ?>
</table>