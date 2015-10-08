function buscaProdutos() {
	
	$.post( "/ecommerce/produtos/busca", null, 
			function(data) {
				$("#produtos").html(data); 
			}
	);

}