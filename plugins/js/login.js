$(document).ready(function(){
	$('#btnLogin').click(function(){
		var datos = $('#frmLogin').serialize();

		$.ajax({
			type: 'POST',
			data: datos,
			url: '../controller/UsuarioController.php',
			success: function(r)
			{
				switch(r)
				{
					case '':
						location.
						break;
				}
			}
		});
	});
});