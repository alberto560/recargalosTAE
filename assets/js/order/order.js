
	var user;


	function get_User() {    
	  user = $("#inputUser").val();	  	
	  
	  arrayUsers();
	  instanciar();
	}
	//****
	//**** ARRAY DE USUARIOS
	var arrayUsuarios =  {Users:{}
						 };

	function startArrayUsers() {
		if (!localStorage.Usuarios) {
			let toLSarray = JSON.stringify(arrayUsuarios);
			localStorage.setItem("Usuarios", toLSarray);
		}
	}

	function arrayUsers() {	
		startArrayUsers();
		var get_array = localStorage.getItem("Usuarios");
		if (!(get_array.includes( user ))) {
			let newContent = JSON.parse(get_array);			
			let tamaño_inicio = Object.keys(newContent.Users).length;		
			let i = tamaño_inicio;
			i++;		
			let newUser = "usuario"+i;
			let newValue = user;
			newContent.Users[newUser] = newValue ;
			//console.log(newContent);
			let newArrayUsers = JSON.stringify(newContent);
			localStorage.setItem("Usuarios", newArrayUsers);
		}
		

	}
	//****
	//****
	//****DECLARACION DE USUARIOS NUEVOS
	function instanciar() {		
		if (localStorage.getItem(user) === null) { 
			var contenido = {"megacable":"2", "izzi":"2", "telmex":"2","cfe":"2","telcelPS":"2",
							"dish": "1","totalp": "1","fuller": "1",
							"telcel":"1","movistar":"1","att":"1"};
			var toText = JSON.stringify(contenido);
			localStorage.setItem(user, toText);			
			//console.log("se registro el usuario: "+user);
		}		
	}
	//****
	//****
	//**** CONTADORES DE PREFERENCIAS PAGO DE SERVICIOS
	function count_megacable(){
	    let get_array = localStorage.getItem(user);
		let newContent = JSON.parse(get_array);
		let mega = newContent.megacable;

		//console.log(mega);
		let intMega = parseInt(mega);
		intMega ++;
		//console.log(intMega);
		let stringNewMega = intMega.toString();
		
		//console.log(stringNewMega);
		newContent.megacable = stringNewMega;
		let Text = JSON.stringify(newContent);
		localStorage.setItem(user, Text);	
		//console.log(newContent);

		recorrido();
	}

	function count_izzi(){
	 	let get_array = localStorage.getItem(user);
		let newContent = JSON.parse(get_array);
		let izzi = newContent.izzi;

		//console.log(izzi);
		let intIzzi = parseInt(izzi);
		intIzzi ++;
		//console.log(intIzzi);
		let stringNewIzzi = intIzzi.toString();
		
		//console.log(stringNewIzzi);
		newContent.izzi = stringNewIzzi;
		let Text = JSON.stringify(newContent);
		localStorage.setItem(user, Text);	
		//console.log(newContent);

		recorrido();
	}

	function count_telmex(){
	    let get_array = localStorage.getItem(user);
		let newContent = JSON.parse(get_array);
		let telmex = newContent.telmex;

		//console.log(telmex);
		let intTelmex = parseInt(telmex);
		intTelmex ++;
		//console.log(intTelmex);
		let stringNewTelmex = intTelmex.toString();
		
		//console.log(stringNewTelmex);
		newContent.telmex = stringNewTelmex;
		let Text = JSON.stringify(newContent);
		localStorage.setItem(user, Text);	
		//console.log(newContent);

		recorrido();
	}

	function count_cfe(){
	    let get_array = localStorage.getItem(user);
		let newContent = JSON.parse(get_array);
		let cfe = newContent.cfe;

		//console.log(cfe);
		let intCfe = parseInt(cfe);
		intCfe ++;
		//console.log(intCfe);
		let stringNewCfe = intCfe.toString();
		
		//console.log(stringNewCfe);
		newContent.cfe = stringNewCfe;
		let Text = JSON.stringify(newContent);
		localStorage.setItem(user, Text);	
		//console.log(newContent);

		recorrido();
	}

	function count_telcelPS() {
		let get_array = localStorage.getItem(user);
		let newContent = JSON.parse(get_array);
		let telcel = newContent.telcelPS;

		//console.log(telcel);
		let intTelcel = parseInt(telcel);
		intTelcel ++;
		//console.log(intTelcel);
		let stringNewTelcel = intTelcel.toString();
		
		//console.log(stringNewTelcel);
		newContent.telcelPS = stringNewTelcel;
		let Text = JSON.stringify(newContent);
		localStorage.setItem(user, Text);	
		//console.log(newContent);

		recorrido();
	}

	function count_dish(){
	    let get_array = localStorage.getItem(user);
		let newContent = JSON.parse(get_array);
		let dish = newContent.dish;

		//console.log(dish);
		let intDish = parseInt(dish);
		intDish ++;
		//console.log(intDish);
		let stringNewDish = intDish.toString();
		
		//console.log(stringNewDish);
		newContent.dish = stringNewDish;
		let Text = JSON.stringify(newContent);
		localStorage.setItem(user, Text);	
		//console.log(newContent);

	    recorrido();
	}
	function count_totalp(){
	    let get_array = localStorage.getItem(user);
		let newContent = JSON.parse(get_array);
		let totalp = newContent.totalp;

		//console.log(totalp);
		let intTotalp = parseInt(totalp);
		intTotalp ++;
		//console.log(intTotalp);
		let stringNewTotalp = intTotalp.toString();
		
		//console.log(stringNewTotalp);
		newContent.totalp = stringNewTotalp;
		let Text = JSON.stringify(newContent);
		localStorage.setItem(user, Text);	
		//console.log(newContent);

	    recorrido();
	}
	function count_fuller(){
	    let get_array = localStorage.getItem(user);
		let newContent = JSON.parse(get_array);
		let fuller = newContent.fuller;

		//console.log(fuller);
		let intTelcel = parseInt(fuller);
		intTelcel ++;
		//console.log(intTelcel);
		let stringNewFuller = intTelcel.toString();
		
		//console.log(stringNewFuller);
		newContent.fuller = stringNewFuller;
		let Text = JSON.stringify(newContent);
		localStorage.setItem(user, Text);	
		//console.log(newContent);

	    recorrido();
	}
	/////FIN CONTADORES PAGO DE SERVICIOS

	tinysort.defaults.order = 'desc';
	//***
	//***
	//*** FUNCION PARA ORDENAMIENTO
	function recorrido() {
		let get_array = localStorage.getItem(user);
		let newContent = JSON.parse(get_array);
		

		let megacable = newContent.megacable;
		let izzi = newContent.izzi;
		let telmex = newContent.telmex;
		let cfe = newContent.cfe;
		let telcelPS = newContent.telcelPS;
		let dish = newContent.dish;
		let totalp = newContent.totalp;
		let fuller = newContent.fuller;
		
		//valor_inicial();
		$("#divmegacable2").attr("sort",megacable);
		$("#divizzi2").attr("sort",izzi);
		$("#divtelmex2").attr("sort",telmex);
		$("#divcfe2").attr("sort",cfe);
		$("#divtelcel2").attr("sort",telcelPS);
		$("#divdish").attr("sort",dish);
		$("#divtotalp").attr("sort",totalp);
		$("#divfuller").attr("sort",fuller);

		tinysort('#div_principal > div',{attr:'sort'});

	}
	//FIN FUNCION DE ORDENAMIENTO
	//****
	//****
	//**** FUNCIONES PARA VISUALIZAR O NO EN VISTA INICIO_PAGOS
	

	function recorrido_inicioPS() {

		var getArray = localStorage.getItem(user);
		var newContentt = JSON.parse(getArray);

		var megacabl = parseInt(newContentt.megacable);
		var izz = parseInt(newContentt.izzi);
		var telme = parseInt(newContentt.telmex);
		var cfee = parseInt(newContentt.cfe);
		var telcelP = parseInt(newContentt.telcelPS);
		var dis = parseInt(newContentt.dish);
		var total = parseInt(newContentt.totalp);
		var fulle = parseInt(newContentt.fuller);
		var array_servicios = [megacabl,izz,telme,cfee,telcelP,dis,total,fulle];
			array_servicios.sort(function (a,b) {
				return b-a;
			});

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
	// FIN RECORRIDO VISTA INICIO PAGOS
	//******
	//*******
	//****
	//****
	//**** CONTADORES DE PREFERENCIAS INICIO RECARGAS
	function count_telcel(){
	    let get_array = localStorage.getItem(user);
		let newContent = JSON.parse(get_array);
		let telcel = newContent.telcel;

		//console.log(telcel);
		let intTelcel = parseInt(telcel);
		intTelcel ++;
		//console.log(intTelcel);
		let stringNewTelcel = intTelcel.toString();
		
		//console.log(stringNewTelcel);
		newContent.telcel = stringNewTelcel;
		let Text = JSON.stringify(newContent);
		localStorage.setItem(user, Text);	
		//console.log(newContent);

		recorrido_recargas();
	}

	function count_movistar(){
	 	let get_array = localStorage.getItem(user);
		let newContent = JSON.parse(get_array);
		let movistar = newContent.movistar;

		//console.log(movistar);
		let intMovistar = parseInt(movistar);
		intMovistar ++;
		//console.log(intMovistar);
		let stringNewMovistar = intMovistar.toString();
		
		//console.log(stringNewMovistar);
		newContent.movistar = stringNewMovistar;
		let Text = JSON.stringify(newContent);
		localStorage.setItem(user, Text);	
		//console.log(newContent);

		recorrido_recargas();
	}

	function count_att(){
	    let get_array = localStorage.getItem(user);
		let newContent = JSON.parse(get_array);
		let att = newContent.att;

		//console.log(att);
		let intAtt = parseInt(att);
		intAtt ++;
		//console.log(intAtt);
		let stringNewAtt = intAtt.toString();
		
		//console.log(stringNewAtt);
		newContent.att = stringNewAtt;
		let Text = JSON.stringify(newContent);
		localStorage.setItem(user, Text);	
		//console.log(newContent);

		recorrido_recargas();
	}
	// FIN FUNCIONES DE CONTEO DE RECARGAS

	//***
	//***
	//*** ORDENAMIENTO POR PREFERENCIAS EN INICIO RECARGAS
	function recorrido_recargas() {
		let get_array = localStorage.getItem(user);
		let newContent = JSON.parse(get_array);
		

		let telcelget = newContent.telcel;
		let movistarget = newContent.movistar;
		let attget = newContent.att;

		$("#divtelcelR").attr("sort",telcelget);
		$("#divattR").attr("sort",attget);
		$("#divmovistarR").attr("sort",movistarget);
		tinysort('#div_gralR > div',{attr:'sort'});

	}
