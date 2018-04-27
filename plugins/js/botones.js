function Eliminar(id)
{
	$('#idEliminar').val(id);
}

function Editar(id)
{
	$('#idEditar').val(id);

	$.ajax({
		type: 'POST',
		url: '../controller/AutomovilController.php',
		data: 'tipo=consulta&idEditar='+id,
		success: function(r)
		{
			var arreglo = $.parseJSON(r);

			$('#marcaEditar').val(arreglo.marca);
			$('#modeloEditar').val(arreglo.modelo);
			$('#yearEditar').val(arreglo.anho);
		}
	});
}