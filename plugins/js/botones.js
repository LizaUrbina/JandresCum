function Eliminar(id)
{
	$('#idEliminar').val(id);
}

function Editar(id)
{
	$('#idEditar').val(id);

	$.ajax({
		type: 'POST',
		url: '../controller/ControllerUsuario.php',
		data: 'tipo=consulta&idEditar='+id,
		success: function(r)
		{
			var arreglo = $.parseJSON(r);

			$('#usuarioEditar').val(arreglo.usuario);
			$('#passwordEditar').val(arreglo.password);
			$('#estadoEditar').val(arreglo.estado);
			$('#rolEditar').val(arreglo.rol);
		}
	});
}