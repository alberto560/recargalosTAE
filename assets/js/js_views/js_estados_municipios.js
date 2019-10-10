function getData(param,estado,municipio,colonia) {

    var query = jlinq.from(data.datos)
             .where(function(record) { return record.cp == param; })
               .select();

    if (param.length > 3 && param.length<6 && query) {
      getEstado(query,estado);
      getMunicipio(query,municipio);
      getColonia(query,colonia);
    }else{
      $(estado).val("");
      $(municipio).val("");
      $(colonia).val("");
    }
    var queryJ = JSON.stringify(query);
    //  alert(j);
    console.log(queryJ);
  }

  function getEstado(jsonData,estado) {
    for (var i = 0; i < jsonData.length; i++) {
          contenEstado =  jsonData[i]["estado"]
        }

        $(estado).val(contenEstado);
  }

  function getMunicipio(jsonData,municipio) {
    for (var i = 0; i < jsonData.length; i++) {
          contenMunicipio =  jsonData[i]["municipio"]
        }

        $(municipio).val(contenMunicipio);
  }

  function getColonia(jsonData,colonia) {
    for (var i = 0; i < jsonData.length; i++) {
        contenColonia =  jsonData[i]["colonia"]
        }

      var separador = ";";
      var selCol = contenColonia.split(separador);
      var select;

      for (var i=0; i < selCol.length; i++) {
        select += '<option value="'+selCol[i]+'">'+selCol[i]+'</option>';

      }

    $(colonia).html(select);
  }
