function validarLogin()
{
		var varUsuario=$("#correo").val();
		var varClave=$("#clave").val();
		var recordar=$("#recordarme").is(':checked');
		
$("#informe").html("<img src='imagenes/ajax-loader.gif' style='width: 30px;'/>");
	
	$.ajax({
		url:"php/validarUsuario.php",
		type:"post",
		data:{
			'usuario': varUsuario,
			'clave': varClave,
			'recordarme': recordar
			}
	})
	.then(FUncion1, FUncion2); //la primer funcion es correcto la segunda es incorrecto

	function FUncion1(retorno){
		if(retorno == true){	
				MostarBotones();
				MostarLogin();

				$("#BotonLogin").html("Ir a salir<br>-Sesión-");
				$("#BotonLogin").addClass("btn btn-danger");				
				$("#usuario").val("usuario: "+retorno);
			}else
			{
				$("#informe").html("usuario o clave incorrecta");	
				$("#formLogin").addClass("animated bounceInLeft");
			}
	

	//	$("#principal").html(retorno);
	//	$("#informe").html("Correcto Form login!!!");	
	}

	function FUncion2(retorno){
		$("#botonesABM").html(":(");
		$("#informe").html(retorno.responseText);	
	
	
	//	$("#botonesABM").html(":(");
	//	$("#informe").html(retorno.responseText);	
	}
	
	//	url:"php/validarUsuario.php",
	//	type:"post",
	


		
			// si esta logeado le habilito los botones 
	/*		if(retorno == true){	
				MostarBotones();
				MostarLogin();

				$("#BotonLogin").html("Ir a salir<br>-Sesión-");
				$("#BotonLogin").addClass("btn btn-danger");				
				$("#usuario").val("usuario: "+retorno);
			}else
			{
				$("#informe").html("usuario o clave incorrecta");	
				$("#formLogin").addClass("animated bounceInLeft");
			}
*/	//error de ajax muestro lo siguiente
	//	$("#botonesABM").html(":(");
	//	$("#informe").html(retorno.responseText);	

	
}
function deslogear()
{	
	
	$.ajax({
		url:"php/deslogearUsuario.php",
		type:"post",
	})
	.then(FUncion1, FUncion2); //la primer funcion es correcto la segunda es incorrecto

	function FUncion1(retorno){
		$("#botonesABM").html(retorno);
		MostarLogin();
		
	}

	function FUncion2(retorno){
		$("#botonesABM").html(":(");
	}


	//	url:"php/deslogearUsuario.php",
	//	type:"post"		

}
function MostarBotones()
{	
	$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostarBotones"}
	})
	.then(FUncion1, FUncion2); //la primer funcion es correcto la segunda es incorrecto

	function FUncion1(retorno){
		$("#botonesABM").html(retorno);
	}

	function FUncion2(retorno){
		$("#botonesABM").html(":(");
	}


	//	url:"nexo.php",
	//	type:"post",
	//	data:{queHacer:"MostarBotones"}

}


