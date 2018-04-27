$(document).ready(function() {
	$('#btnEliminar').click(function() {
		var datos = $('#frmEliminar').serialize();
		$.ajax({
			type: 'POST',
			url: '../controller/AutomovilController.php',
			data: datos,
			success: function(r)
			{
				switch(r)
				{
					case '1': 
						location.reload();
						break;
					case '0':
						alert('nel');
						break;
					default:
					alert(r);
					break;
				}
			}
		});
	});
});