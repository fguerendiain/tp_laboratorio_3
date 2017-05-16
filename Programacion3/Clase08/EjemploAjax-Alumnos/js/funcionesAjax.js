
function MostrarError()
{
	alert("error");
	$.ajax({
		url: "nexoNoExiste.php",

	})
	.then(FUncion1, FUncion2);

	function FUncion1(retorno){
		console.info(retorno);
	}

	function FUncion2(retorno){
		console.info(retorno);
		$("#informe").html(retorno.responseText);
		$("#principal").html("LALALALALLALALAA =()");
	}
	//url:"nexoNoExiste.php",type:"post"
}

function MostrarSinParametros()
{
//	alert("error");
	$.ajax({
		url: "nexoTexto.php"

	})
	.then(FUncion1, FUncion2); //la primer funcion es correcto la segunda es incorrecto

	function FUncion1(retorno){
		console.info(retorno);
		$("#informe").html("correcto");
		$("#principal").html(retorno);
	}

	function FUncion2(retorno){
		console.info(retorno);
		$("#informe").html(retorno.responseText);
		$("#principal").html("LALALALALLALALAA =()");
	}
	//url:"nexoTexto.php"});

	
}

function Mostrar(queMostrar)
{
	alert(queMostrar);
	$.ajax({
		url: "nexo.php",
		type:"post",
		data:{'queHacer':queMostrar},
		dataType : "JSON"
	})
	.then(FUncion1, FUncion2); //la primer funcion es correcto la segunda es incorrecto

	function FUncion1(retorno){
		console.info(retorno);
		$("#informe").html(retorno.responseText);
		$("#principal").html("LALALALALLALALAA =()");
	}

	function FUncion2(retorno){
		$("#informe").html("correcto");
		$("#principal").html(retorno.responseText);
	}
	
		//url:"nexo.php",
		//type:"post",
	
}

function MostarLogin()
{
		//alert(queMostrar);
	$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostarLogin"}
	})
	.then(FUncion1, FUncion2); //la primer funcion es correcto la segunda es incorrecto

	function FUncion1(retorno){
		$("#principal").html(retorno);
		$("#informe").html("Correcto Form login!!!");	
	}

	function FUncion2(retorno){
		$("#botonesABM").html(":(");
		$("#informe").html(retorno.responseText);	
	}


/*	ESTO ANDA
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{queHacer:"MostarLogin"}
	});
	funcionAjax.done(function(retorno){
		$("#principal").html(retorno);
		$("#informe").html("Correcto Form login!!!");	
	});
	funcionAjax.fail(function(retorno){
		$("#botonesABM").html(":(");
		$("#informe").html(retorno.responseText);	
	});
	funcionAjax.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
*/
}