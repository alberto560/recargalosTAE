	//Pago de servicios
		var megacable;
		var izzi;
		var telmex;
		var cfe;
		var telcelPS;
		var dish;
		var totalp;
		var fuller;
	//Recargas
		var telcel;
		var movistar;
		var atT;

	//funciones para recargas
	function count_telcel() {
		// Si existe contador se incrementa y sino se inicializa
		if (localStorage.telcel) {
				// Se convierte el contador a entero porque por defecto es una cadena
			telcel = localStorage.telcel = parseInt(localStorage.telcel) + 1;
		} else {
			telcel = localStorage.telcel = 1;
		}
		//order();
		recorrido_recargas();
	}
	function count_movistar() {
		// Si existe contador se incrementa y sino se inicializa
		if (localStorage.movistar) {
				// Se convierte el contador a entero porque por defecto es una cadena
			movistar = localStorage.movistar = parseInt(localStorage.movistar) + 1;
		} else {
			movistar = localStorage.movistar = 1;
		}
		//order();
		recorrido_recargas();
	}
	function count_att() {
		// Si existe contador se incrementa y sino se inicializa
		if (localStorage.att) {
				// Se convierte el contador a entero porque por defecto es una cadena
			atT = localStorage.att = parseInt(localStorage.att) + 1;
		} else {
			atT = localStorage.att = 1;
		}
		//order();
		recorrido_recargas();
	}
//FIN de funciones para recargas
//***********
//funciones para pagos de servicios
	function count_megacable(){
	    // Si existe contador se incrementa y sino se inicializa
	    if (localStorage.megacable) {
	        // Se convierte el contador a entero porque por defecto es una cadena
	      megacable = localStorage.megacable = parseInt(localStorage.megacable) + 1;
	    } else {
	      megacable = localStorage.megacable = 1;
	    }
	    //order();
	    recorrido();
	}

	function count_izzi(){
	    // Si existe contador se incrementa y sino se inicializa
	    if (localStorage.izzi) {
	        // Se convierte el contador a entero porque por defecto es una cadena
	      izzi = localStorage.izzi = parseInt(localStorage.izzi) + 1;
	    } else {
	      izzi = localStorage.izzi = 1;
	    }
	    //order();
	    recorrido();
	}

	function count_telmex(){
	    // Si existe contador se incrementa y sino se inicializa
	    if (localStorage.telmex) {
	        // Se convierte el contador a entero porque por defecto es una cadena
	     telmex = localStorage.telmex = parseInt(localStorage.telmex) + 1;
	    } else {
	     telmex = localStorage.telmex = 1;
	    }
	    recorrido();
	}

	function count_cfe(){
	    // Si existe contador se incrementa y sino se inicializa
	    if (localStorage.cfe) {
	        // Se convierte el contador a entero porque por defecto es una cadena
	     cfe = localStorage.cfe = parseInt(localStorage.cfe) + 1;
	    } else {
	     cfe = localStorage.cfe = 1;
	    }
	    recorrido();
	}

	function count_telcelPS(){
	    // Si existe contador se incrementa y sino se inicializa
	    if (localStorage.telcelPS) {
	        // Se convierte el contador a entero porque por defecto es una cadena
	     telcelPS = localStorage.telcelPS = parseInt(localStorage.telcelPS) + 1;
	    } else {
	     telcelPS = localStorage.telcelPS = 1;
	    }
	    recorrido();
	}
	function count_dish(){
	    // Si existe contador se incrementa y sino se inicializa
	    if (localStorage.dish) {
	        // Se convierte el contador a entero porque por defecto es una cadena
	     dish = localStorage.dish = parseInt(localStorage.dish) + 1;
	    } else {
	     dish = localStorage.dish = 1;
	    }
	    recorrido();
	}
	function count_totalp(){
	    // Si existe contador se incrementa y sino se inicializa
	    if (localStorage.totalp) {
	        // Se convierte el contador a entero porque por defecto es una cadena
	     totalp = localStorage.totalp = parseInt(localStorage.totalp) + 1;
	    } else {
	     totalp = localStorage.totalp = 1;
	    }
	    recorrido();
	}
	function count_fuller(){
	    // Si existe contador se incrementa y sino se inicializa
	    if (localStorage.fuller) {
	        // Se convierte el contador a entero porque por defecto es una cadena
	     fuller = localStorage.fuller = parseInt(localStorage.fuller) + 1;
	    } else {
	     fuller = localStorage.fuller = 1;
	    }
	    recorrido();
	}
	//FIN funciones pago de servicios


	function valor_inicial() {
		if (localStorage.megacable == null) {
			localStorage.megacable = 2;
		}
		if (localStorage.izzi == null) {
			localStorage.izzi = 2;
		}
		if (localStorage.telmex == null) {
			localStorage.telmex = 2;
		}
		if (localStorage.cfe == null) {
			localStorage.cfe = 2;
		}
		if (localStorage.telcelPS == null) {
			localStorage.telcelPS = 2;
		}
		if (localStorage.dish == null) {
			localStorage.dish = 1;
		}
		if (localStorage.totalp == null) {
			localStorage.totalp = 1;
		}
		if (localStorage.fuller == null) {
			localStorage.fuller = 1;
		}
	}

	function valor_inicialR() {
		if (localStorage.telcel == null) {
			localStorage.telcel = 1;
		}
		if (localStorage.att == null) {
			localStorage.att = 1;
		}
		if (localStorage.movistar == null) {
			localStorage.movistar = 1;
		}
	}

	tinysort.defaults.order = 'desc';


	function recorrido() {
		var megacableget = localStorage.getItem("megacable");
		var izziget = localStorage.getItem("izzi");
		var telmexget = localStorage.getItem("telmex");
		var cfeget = localStorage.getItem("cfe");
		var telcelPSget = localStorage.getItem("telcelPS");
		var dishget = localStorage.getItem("dish");
		var totalpget = localStorage.getItem("totalp");
		var fullerget = localStorage.getItem("fuller");
		valor_inicial();
		$("#divmegacable2").attr("sort",megacableget);
		$("#divizzi2").attr("sort",izziget);
		$("#divtelmex2").attr("sort",telmexget);
		$("#divcfe2").attr("sort",cfeget);
		$("#divtelcel2").attr("sort",telcelPSget);
		$("#divdish").attr("sort",dishget);
		$("#divtotalp").attr("sort",totalpget);
		$("#divfuller").attr("sort",fullerget);
		tinysort('#div_principal > div',{attr:'sort'});

	}
	var megacabl = parseInt(localStorage.getItem("megacable"));
	var izz = parseInt(localStorage.getItem("izzi"));
	var telme = parseInt(localStorage.getItem("telmex"));
	var cfee = parseInt(localStorage.getItem("cfe"));
	var telcelP = parseInt(localStorage.getItem("telcelPS"));
	var dis = parseInt(localStorage.getItem("dish"));
	var total = parseInt(localStorage.getItem("totalp"));
	var fulle = parseInt(localStorage.getItem("fuller"));
	var array_servicios = [megacabl,izz,telme,cfee,telcelP,dis,total,fulle];
			array_servicios.sort(function (a,b) {
				return b-a;
			});

 	function mostrar_serv() {
			alert(array_servicios);
			alert(cfee);
			alert(array_servicios[4]);
	}

	function recorrido_inicioPS() {
		if (megacabl < array_servicios[4]) {
			$("#divmegacable2").css("display","none");
		}else{
			$("#divmegacable2").css("display","block");
		}

		if (izz < array_servicios[4]) {
			$("#divizzi2").css("display","none");
		}else {
			$("#divizzi2").css("display","block");
		}

		if (telme < array_servicios[4]) {
			$("#divtelmex2").css("display","none");
		}else {
			$("#divtelmex2").css("display","block");
		}

		if (cfee < array_servicios[4]) {
			$("#divcfe2").css("display","none");
		}else {
			$("#divcfe2").css("display","block");
		}

		if (telcelP < array_servicios[4]) {
			$("#divtelcel2").css("display","none");
		}else {
			$("#divtelcel2").css("display","block");
		}

		if (dis < array_servicios[4]) {
			$("#divdish").css("display","none");
		}else {
			$("#divdish").css("display","block");
		}

		if (total < array_servicios[4]) {
			$("#divtotalp").css("display","none");
		}else {
			$("#divtotalp").css("display","block");
		}

		if (fulle < array_servicios[4]) {
			$("#divfuller").css("display","none");
		}else {
			$("#divfuller").css("display","block");
		}

	}


	//***
	//****
	//ordenamiento de recargas
	function recorrido_recargas() {
		valor_inicialR();
		var telcelget = localStorage.getItem("telcel");
		var attget = localStorage.getItem("att");
		var movistarget = localStorage.getItem("movistar");

		$("#divtelcelR").attr("sort",telcelget);
		$("#divattR").attr("sort",attget);
		$("#divmovistarR").attr("sort",movistarget);
		tinysort('#div_gralR > div',{attr:'sort'});

	}
