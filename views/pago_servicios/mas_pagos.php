
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--JQUERY-->
    <script type="text/javascript" src="assets/jquery/jquery-3.4.1.min.js"></script>
    <!--Validate-->
    <script type="text/javascript" src="assets/js/validate/validate1.19.1.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="assets/bootstrap/js/popper.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/bootstrap/js/mdb.min.js"></script>

    <script type="text/javascript" src="assets/js/validate/validate_rules.js"></script>

    <!--CSS-->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-4-3-1.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="assets/css/mdb.min.css" >
    <title></title>
  </head>
  <body>
    <div class="container col-12 col-md-12">
      <br>
      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body w-100 p-2" style="height: 3em;">
              <div class="row justify-content-center">
                <div class="col-12 col-md-2">
                  <h4><b>Pagos</b></h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4><b>Categorias</b></h4>
              <div class="col-12">
                <div class="list-group" id="list-tab" role="tablist">
                  <a class="list-group-item list-group-item-action" id="list-cat1-list" data-toggle="list" href="#list-cat1"
                    role="tab" aria-controls="cat1"><i class="mdi mdi-briefcase-check mr-4 pr-2"></i>Pago de Derechos de Agua</a>
                  <a class="list-group-item list-group-item-action" id="list-cat2-list" data-toggle="list" href="#list-cat2"
                    role="tab" aria-controls="cat2"><i class="mdi mdi-briefcase-check mr-4 pr-2"></i>Productos Por Catálogo</a>
                  <a class="list-group-item list-group-item-action" id="list-cat3-list" data-toggle="list" href="#list-cat3"
                    role="tab" aria-controls="cat3"><i class="mdi mdi-briefcase-check mr-4 pr-2"></i>Pago de Servicios</a>
                  <a class="list-group-item list-group-item-action" id="list-cat4-list" data-toggle="list" href="#list-cat4"
                    role="tab" aria-controls="cat4"><i class="mdi mdi-briefcase-check mr-4 pr-2"></i>Pago de impuestos/Gobierno</a>
                  <a class="list-group-item list-group-item-action" id="list-cat5-list" data-toggle="list" href="#list-cat5"
                    role="tab" aria-controls="cat5"><i class="mdi mdi-briefcase-check mr-4 pr-2"></i>Productos Financieros</a>
                  <a class="list-group-item list-group-item-action" id="list-cat6-list" data-toggle="list" href="#list-cat6"
                    role="tab" aria-controls="cat6"><i class="mdi mdi-briefcase-check mr-4 pr-2"></i>Servicios de Prepago</a>
                  <a class="list-group-item list-group-item-action" id="list-cat7-list" data-toggle="list" href="#list-cat7"
                    role="tab" aria-controls="cat7"><i class="mdi mdi-briefcase-check mr-4 pr-2"></i>Movistar(Pago Factura)</a>
                  <a class="list-group-item list-group-item-action" id="list-cat8-list" data-toggle="list" href="#list-cat8"
                    role="tab" aria-controls="cat8"><i class="mdi mdi-briefcase-check mr-4 pr-2"></i>Iusacell(Pago Factura)</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4 grid-margin stretch-card">
              <div class="col-12">
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade" id="list-cat1" role="tabpanel" aria-labelledby="list-cat1-list">
                    <div class="card">
                      <div class="card-body">
                        <div class="container">
                          <h4><b>Servicios</b></h4>

                          <div class="list-group">
                            <a id="cat1_ser1" data-toggle="collapse" data-target="#prod_cat1_ser1" class="list-group-item list-group-item-action">
                              AGUAKAN
                            </a>
                            <a id="cat1_ser2" data-toggle="collapse" data-target="#prod_cat1_ser2" class="list-group-item list-group-item-action">
                              AGUAS DE SALTILLO
                            </a>
                            <a id="cat1_ser3" data-toggle="collapse" data-target="#prod_cat1_ser3" class="list-group-item list-group-item-action">
                              ADM (Durango, Dgo)
                            </a>
                            <a id="cat1_ser4" data-toggle="collapse" data-target="#prod_cat1_ser4" class="list-group-item list-group-item-action">
                              CESPT (Tijuana)
                            </a>
                            <a id="cat1_ser5" data-toggle="collapse" data-target="#prod_cat1_ser5" class="list-group-item list-group-item-action">
                              CMAPAS (Salamanca, Gto.)
                            </a>
                            <a id="cat1_ser6" data-toggle="collapse" data-target="#prod_cat1_ser6" class="list-group-item list-group-item-action">
                              COMAPA (Nuevo Laredo, Tam.)
                            </a>
                            <a id="cat1_ser7" data-toggle="collapse" data-target="#prod_cat1_ser7" class="list-group-item list-group-item-action">
                              INTERAPAS (San Luis Potosi)
                            </a>
                            <a id="cat1_ser8" data-toggle="collapse" data-target="#prod_cat1_ser8" class="list-group-item list-group-item-action">
                              JAD (Matamoros, Tam.)
                            </a>
                            <a id="cat1_ser9" data-toggle="collapse" data-target="#prod_cat1_ser9" class="list-group-item list-group-item-action">
                              JMAS (Chihuahua, Chi.)
                            </a>
                            <a id="cat1_ser10" data-toggle="collapse" data-target="#prod_cat1_ser10" class="list-group-item list-group-item-action">
                              JUMAPA (Celaya, Gto.)
                            </a>
                            <a id="cat1_ser11" data-toggle="collapse" data-target="#prod_cat1_ser11" class="list-group-item list-group-item-action">
                              SACMEX (CDMX)
                            </a>
                            <a id="cat1_ser12" data-toggle="collapse" data-target="#prod_cat1_ser12" class="list-group-item list-group-item-action">
                              SADM (Monterrey, N.L)
                            </a>
                            <a id="cat1_ser13" data-toggle="collapse" data-target="#prod_cat1_ser13" class="list-group-item list-group-item-action">
                              SEAPAL (Puerto Vallarta, Jal.)
                            </a>
                            <a id="cat1_ser14" data-toggle="collapse" data-target="#prod_cat1_ser14" class="list-group-item list-group-item-action">
                              SIAPA (Guadalajara, Jal.)
                            </a>
                            <a id="cat1_ser15" data-toggle="collapse" data-target="#prod_cat1_ser15" class="list-group-item list-group-item-action">
                              SOAPAP (Agua de Puebla)
                            </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="list-cat2" role="tabpanel" aria-labelledby="list-cat2-list">
                    <div class="card">
                      <div class="card-body">
                        <div class="container">
                          <h4><b>Servicios</b></h4>

                          <div class="list-group">
                            <a id="cat2_ser1" data-toggle="collapse" data-target="#prod_cat2_ser1" class="list-group-item list-group-item-action">
                              ARABELA
                            </a>
                            <a id="cat2_ser2" data-toggle="collapse" data-target="#prod_cat2_ser2" class="list-group-item list-group-item-action">
                              AVON
                            </a>
                            <a id="cat2_ser3" data-toggle="collapse" data-target="#prod_cat2_ser3" class="list-group-item list-group-item-action">
                              FULLER
                            </a>
                            <a id="cat2_ser4" data-toggle="collapse" data-target="#prod_cat2_ser4" class="list-group-item list-group-item-action">
                              HERBALIFE
                            </a>
                            <a id="cat2_ser5" data-toggle="collapse" data-target="#prod_cat2_ser5" class="list-group-item list-group-item-action">
                              ILUSION
                            </a>
                            <a id="cat2_ser6" data-toggle="collapse" data-target="#prod_cat2_ser6" class="list-group-item list-group-item-action">
                              JAFRA
                            </a>
                            <a id="cat2_ser7" data-toggle="collapse" data-target="#prod_cat2_ser7" class="list-group-item list-group-item-action">
                              JOIE
                            </a>
                            <a id="cat2_ser8" data-toggle="collapse" data-target="#prod_cat2_ser8" class="list-group-item list-group-item-action">
                              L EBEL BELCORP
                            </a>
                            <a id="cat2_ser9" data-toggle="collapse" data-target="#prod_cat2_ser9" class="list-group-item list-group-item-action">
                              MARCAS DE RENOMBRE
                            </a>
                            <a id="cat2_ser10" data-toggle="collapse" data-target="#prod_cat2_ser10" class="list-group-item list-group-item-action">
                              NATURA
                            </a>
                            <a id="cat2_ser11" data-toggle="collapse" data-target="#prod_cat2_ser11" class="list-group-item list-group-item-action">
                              ORIFLAME
                            </a>
                            <a id="cat2_ser12" data-toggle="collapse" data-target="#prod_cat2_ser12" class="list-group-item list-group-item-action">
                              PREMIER DIRECT TV
                            </a>
                            <a id="cat2_ser13" data-toggle="collapse" data-target="#prod_cat2_ser13" class="list-group-item list-group-item-action">
                              READERS DIGEST
                            </a>
                            <a id="cat2_ser14" data-toggle="collapse" data-target="#prod_cat2_ser14" class="list-group-item list-group-item-action">
                              REDNOVO
                            </a>
                            <a id="cat2_ser15" data-toggle="collapse" data-target="#prod_cat2_ser15" class="list-group-item list-group-item-action">
                              SOPHIE
                            </a>
                            <a id="cat2_ser16" data-toggle="collapse" data-target="#prod_cat2_ser16" class="list-group-item list-group-item-action">
                              STANHOME
                            </a>
                            <a id="cat2_ser17" data-toggle="collapse" data-target="#prod_cat2_ser17" class="list-group-item list-group-item-action">
                              SWISSJUST
                            </a>
                            <a id="cat2_ser18" data-toggle="collapse" data-target="#prod_cat2_ser18" class="list-group-item list-group-item-action">
                              TERRAMAR
                            </a>
                            <a id="cat2_ser19" data-toggle="collapse" data-target="#prod_cat2_ser19" class="list-group-item list-group-item-action">
                              YANBAL
                            </a>
                            <a id="cat2_ser20" data-toggle="collapse" data-target="#prod_cat2_ser20" class="list-group-item list-group-item-action">
                              YVES ROCHER
                            </a>
                            <a id="cat2_ser21" data-toggle="collapse" data-target="#prod_cat2_ser21" class="list-group-item list-group-item-action">
                              ZERMAT
                            </a>
                          </div>

                          <br>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="list-cat3" role="tabpanel" aria-labelledby="list-cat3-list">
                    <div class="card">
                      <div class="card-body">
                        <div class="container">
                          <h4><b>Servicios</b></h4>

                          <div class="list-group">
                            <a id="cat3_ser1" data-toggle="collapse" data-target="#prod_cat3_ser1" class="list-group-item list-group-item-action">
                              AXTEL
                            </a>
                            <a id="cat3_ser2" data-toggle="collapse" data-target="#prod_cat3_ser2" class="list-group-item list-group-item-action">
                              CABLEMAS
                            </a>
                            <a id="cat3_ser3" data-toggle="collapse" data-target="#prod_cat3_ser3" class="list-group-item list-group-item-action">
                              CABLEVISION (Multimedios)
                            </a>
                            <a id="cat3_ser4" data-toggle="collapse" data-target="#prod_cat3_ser4" class="list-group-item list-group-item-action">
                              CFE
                            </a>
                            <a id="cat3_ser5" data-toggle="collapse" data-target="#prod_cat3_ser5" class="list-group-item list-group-item-action">
                              COMPAÑÍA MEXICANA DE GAS
                            </a>
                            <a id="cat3_ser6" data-toggle="collapse" data-target="#prod_cat3_ser6" class="list-group-item list-group-item-action">
                              DISH
                            </a>
                            <a id="cat3_ser7" data-toggle="collapse" data-target="#prod_cat3_ser7" class="list-group-item list-group-item-action">
                              GAS NATURAL
                            </a>
                            <a id="cat3_ser8" data-toggle="collapse" data-target="#prod_cat3_ser8" class="list-group-item list-group-item-action">
                              IZZI Telecom
                            </a>
                            <a id="cat3_ser9" data-toggle="collapse" data-target="#prod_cat3_ser9" class="list-group-item list-group-item-action">
                              MAXCOM
                            </a>
                            <a id="cat3_ser10" data-toggle="collapse" data-target="#prod_cat3_ser10" class="list-group-item list-group-item-action">
                              Megacable
                            </a>
                            <a id="cat3_ser11" data-toggle="collapse" data-target="#prod_cat3_ser11" class="list-group-item list-group-item-action">
                              PAYNET
                            </a>
                            <a id="cat3_ser12" data-toggle="collapse" data-target="#prod_cat3_ser12" class="list-group-item list-group-item-action">
                              SKY - VeTv
                            </a>
                            <a id="cat3_ser13" data-toggle="collapse" data-target="#prod_cat3_ser13" class="list-group-item list-group-item-action">
                              StarTV
                            </a>
                            <a id="cat3_ser14" data-toggle="collapse" data-target="#prod_cat3_ser14" class="list-group-item list-group-item-action">
                              TELECABLE
                            </a>
                            <a id="cat3_ser15" data-toggle="collapse" data-target="#prod_cat3_ser15" class="list-group-item list-group-item-action">
                              TELMEX
                            </a>
                            <a id="cat3_ser16" data-toggle="collapse" data-target="#prod_cat3_ser16" class="list-group-item list-group-item-action">
                              TELNOR (Baja California)
                            </a>
                            <a id="cat3_ser17" data-toggle="collapse" data-target="#prod_cat3_ser17" class="list-group-item list-group-item-action">
                              TOTALPLAY
                            </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="list-cat4" role="tabpanel" aria-labelledby="list-cat4-list">
                    <div class="card">
                      <div class="card-body">
                        <div class="container">
                          <h4><b>Servicios</b></h4>

                          <div class="list-group">
                          <a id="cat4_ser1" data-toggle="collapse" data-target="#prod_cat4_ser1" class="list-group-item list-group-item-action">
                            CHIHUAHUA
                          </a>
                          <a id="cat4_ser2" data-toggle="collapse" data-target="#prod_cat4_ser2" class="list-group-item list-group-item-action">
                            Distrito Federal/CDMX
                          </a>
                          <a id="cat4_ser3" data-toggle="collapse" data-target="#prod_cat4_ser3" class="list-group-item list-group-item-action">
                            QUERETARO
                          </a>
                          <a id="cat4_ser4" data-toggle="collapse" data-target="#prod_cat4_ser4" class="list-group-item list-group-item-action">
                            ZACATECAS
                          </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="list-cat5" role="tabpanel" aria-labelledby="list-cat5-list">
                    <div class="card">
                      <div class="card-body">
                        <div class="container">
                          <h4><b>Servicios</b></h4>

                          <div class="list-group">
                            <a id="cat5_ser1" data-toggle="collapse" data-target="#prod_cat5_ser1" class="list-group-item list-group-item-action">
                              DINERO EXPRESS
                            </a>
                            <a id="cat5_ser2" data-toggle="collapse" data-target="#prod_cat5_ser2" class="list-group-item list-group-item-action">
                              INFONAVIT
                            </a>
                            <a id="cat5_ser3" data-toggle="collapse" data-target="#prod_cat5_ser3" class="list-group-item list-group-item-action">
                              OFIPA
                            </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="list-cat6" role="tabpanel" aria-labelledby="list-cat6-list">
                    <div class="card">
                      <div class="card-body">
                        <div class="container">
                          <h4><b>Servicios</b></h4>

                          <div class="list-group">
                            <a id="cat6_ser1" data-toggle="collapse" data-target="#prod_cat6_ser1" class="list-group-item list-group-item-action">
                              PayU
                            </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="list-cat7" role="tabpanel" aria-labelledby="list-cat7-list">
                    <div class="card">
                      <div class="card-body">
                        <div class="container">
                          <h4><b>Servicios</b></h4>

                          <div class="list-group">
                            <a id="cat7_ser1" data-toggle="collapse" data-target="#prod_cat7_ser1" class="list-group-item list-group-item-action">
                              MOVISTAR (Pago de Recibo)
                            </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="list-cat8" role="tabpanel" aria-labelledby="list-cat8-list">
                    <div class="card">
                      <div class="card-body">
                        <div class="container">
                          <h4><b>Servicios</b></h4>

                          <div class="list-group">
                            <a id="cat8_ser1" data-toggle="collapse" data-target="#prod_cat8_ser1" class="list-group-item list-group-item-action">
                              AT-T/IUSACELL (Pago de Recibo)
                            </a>
                            <a id="cat8_ser2" data-toggle="collapse" data-target="#prod_cat8_ser2" class="list-group-item list-group-item-action">
                              NEXTEL (Pago de Recibo)
                            </a>
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
        </div>
          <div class="col-md-4 grid-margin stretch-card" >
              <div class="card-body">
                <!-- servicios de pago de derecho de agua-->
                <div id="prod_cat1_ser1" class="collapse" >
                  <div class="mt-3">
                    <div align="right">
                      <h5><b>Producto (AGUAKAN)</b></h5>
                    </div>
                    <ul class="list-group">
                      <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i> Agua Cancun (Mun. De Benito Juarez y de Isla Mujeres)
                        </li>
                      </a>
                    </ul>
                  </div>
                </div>

                <div id="prod_cat1_ser2" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (AGUAS DE SALTILLO)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i> Aguas de Saltillo
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat1_ser3" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto ADM(Durango, Dgo)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i> Aguas del Municipio de Durango
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat1_ser4" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto CESPT(Tijuana)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i> Comisión Estatal de Servicios Publicos de Tijuana
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat1_ser5" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto CMAPAS(Salamanca, Gto.)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i> Agua Potable y Alcantarillado de Salamanca
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat1_ser6" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto COMAPA(Nuevo Laredo, Tam.)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i> Comisión Municipal de Agua Potable
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat1_ser7" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto INTERAPAS (San Luis Potosi)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Organismo Intermunicipal Metropolitano de Agua Potable
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat1_ser8" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto JAD(Matamoros, Tam.)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Junta de Aguas y Drenaje de Matamoros
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat1_ser9" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto JMAS(Chihuahua, Chi.)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Junta Municipal de Agua y Saneamiento
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat1_ser10" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto JUMAPA(Celaya, Gto.)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Agua Potable y Alcantarillado de Celaya
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat1_ser11" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto SACMEX(CDMX)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Sistema de Aguas de la Ciudad de México
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat1_ser12" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto SADM(Monterrey, N.L)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Agua y Drenaje de Monterrey
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat1_ser13" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto SEAPAL(Puerto Vallarta, Jal.)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Sistema de los Servicios de Agua Potable y Alcantarillado
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat1_ser14" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto SIAPA(Guadalajara, Jal.)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Sistema Intermunicipal de Agua Potable y Alcantarillado
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat1_ser15" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto SOAPAP (Agua de Puebla)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Agua de Puebla PARA TODOS
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>
                <!-- Termina servicios de pago de derecho de agua -->

                <!-- Inicia servicios de Productos Por Catálogo-->
                <div id="prod_cat2_ser1" class="collapse" >
                  <div class="mt-3">
                    <div align="right">
                      <h5><b>Producto (ARABELA)</b></h5>
                    </div>
                    <ul class="list-group">
                      <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Arabela
                        </li>
                      </a>
                    </ul>
                  </div>
                </div>

                <div id="prod_cat2_ser2" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (AVON)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Avon
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat2_ser3" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (FULLER)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Fuller Cosmetics
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat2_ser4" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (HERBALIFE)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Herbalife
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat2_ser5" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (ILUSION)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Ilusion
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat2_ser6" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (JAFRA)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Jafra
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat2_ser7" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (JOIE)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Jovi de Francia
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat2_ser8" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (L EBEL BELCORP)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Cy-zone
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>
                <div id="prod_cat2_ser8" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (L EBEL BELCORP)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Esika
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>
                <div id="prod_cat2_ser8" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (L EBEL BELCORP)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>L EBEL
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat2_ser9" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (MARCAS DE RENOMBRE)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Marcas de Renombre
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat2_ser10" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (NATURA)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Natura - Bien estar bien
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat2_ser11" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (ORIFLAME)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Oriflame Cosmetics
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>
                <div id="prod_cat2_ser11" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (ORIFLAME)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Pedidos Disponibles
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat2_ser12" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (PREMIER DIRECT TV)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Premier Direct.TV
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat2_ser13" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (READERS DIGEST)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Revista Selecciones
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat2_ser14" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (REDNOVO)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>RedNovo.com
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat2_ser15" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (SOPHIE)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Sophie Cosmetics
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat2_ser16" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (STANHOME)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>StanHome
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat2_ser17" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (SWISSJUST)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>SwissJust
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat2_ser18" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (TERRAMAR)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Terramar Brands
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat2_ser19" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (YANBAL)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Yanbal Unique
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat2_ser20" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (YVES ROCHER)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Yves Rocher
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat2_ser21" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (ZERMAT)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Zermat Internacional
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>
                <!-- Termina servicios deProductos Por Catálogo-->

                <!-- Inicia servicios de pagos de serv-->
                <div id="prod_cat3_ser1" class="collapse" >
                  <div class="mt-3">
                    <div align="right">
                      <h5><b>Producto (AXTEL)</b></h5>
                    </div>
                    <ul class="list-group">
                      <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Axtel
                        </li>
                      </a>
                    </ul>
                  </div>
                </div>

                <div id="prod_cat3_ser2" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (CABLEMAS)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Cablemas
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat3_ser3" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto CABLEVISION (Multimedios)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Cablevision
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat3_ser4" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (CFE)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>CFE
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat3_ser5" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (COMPAÑÍA MEXICANA DE GAS)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Cia. Mexicana de Gas
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat3_ser6" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (DISH)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Dish
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>
                <div id="prod_cat3_ser6" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (DISH)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Dish Gestores
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>
                <div id="prod_cat3_ser6" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (DISH)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalConsulta">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Consulta Saldo
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat3_ser7" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (GAS NATURAL)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Gas Natural
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat3_ser8" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (IZZI Telecom)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Izzi
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>
                <div id="prod_cat3_ser8" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (IZZI Telecom)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalConsulta">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Consulta Saldo Izzi Telecom
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat3_ser9" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (MAXCOM)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>FACTURA MAXCOM
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>
                <div id="prod_cat3_ser9" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (MAXCOM)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalConsulta">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Consulta de Saldo
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat3_ser10" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (Megacable)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Pago Megacable
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>
                <div id="prod_cat3_ser10" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (Megacable)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalConsulta">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Consulta de Saldo
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat3_ser11" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (PAYNET)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Paynet
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat3_ser12" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (SKY - VeTv)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Pago Sky
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>
                <div id="prod_cat3_ser12" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (SKY - VeTv)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Prepago VeTv
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>
                <div id="prod_cat3_ser12" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (SKY - VeTv)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalConsulta">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Consulta de Saldo
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat3_ser13" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (StarTV)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Startv
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat3_ser14" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (TELECABLE)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Telecable
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat3_ser15" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (TELMEX)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Telmex
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat3_ser16" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto TELNOR (Baja California)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Telnor
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat3_ser17" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (TOTALPLAY)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>TotalPlay
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>
                <div id="prod_cat3_ser17" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (TOTALPLAY)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalConsulta">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Consulta de Saldo
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>
                <!-- Termina servicios de pagos de serv-->

                <!-- Inicia servicios de Pago de Inpuestos de Gob-->
                <div id="prod_cat4_ser1" class="collapse" >
                  <div class="mt-3">
                    <div align="right">
                      <h5><b>Producto (CHIHUAHUA)</b></h5>
                    </div>
                    <ul class="list-group">
                      <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Tramites Vehiculares de Chihuahua
                        </li>
                      </a>
                    </ul>
                  </div>
                </div>

                <div id="prod_cat4_ser2" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (Distrito Federal /CDMX)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Tesoreria de la CDMX
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat4_ser3" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (QUERETARO)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Municipio de Corregidora
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat4_ser4" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (ZACATECAS)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Pago del Impusto Predial
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>
                <!-- Termina servicios de Pago de Inpuestos de Gob-->

                <!-- Inicia servicios de Productos Financieros-->
                <div id="prod_cat5_ser1" class="collapse" >
                  <div class="mt-3">
                    <div align="right">
                      <h5><b>Producto (DINERO EXPRESS)</b></h5>
                    </div>
                    <ul class="list-group">
                      <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Dinero Expres
                        </li>
                      </a>
                    </ul>
                  </div>
                </div>
                <div id="prod_cat5_ser1" class="collapse" >
                  <div class="mt-3">
                    <div align="right">
                      <h5><b>Producto (DINERO EXPRESS)</b></h5>
                    </div>
                    <ul class="list-group">
                      <a  data-toggle="modal" data-target="#modalConsulta">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Consulta Referencia
                        </li>
                      </a>
                    </ul>
                  </div>
                </div>

                <div id="prod_cat5_ser2" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (INFONAVIT)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Credito Infonavit
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>

                <div id="prod_cat5_ser3" class="collapse">
                    <div class="mt-3">
                      <div align="right">
                        <h5><b>Producto (SOFIPA)</b></h5>
                      </div>
                      <ul class="list-group">
                        <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Credito SOFIPA
                        </li>
                        </a>
                      </ul>
                    </div>
                </div>
                <!-- Termina servicios de Productos Financieros -->

                <!-- Inicia servicios de Servicios de Prepago -->
                <div id="prod_cat6_ser1" class="collapse" >
                  <div class="mt-3">
                    <div align="right">
                      <h5><b>Producto (PayU)</b></h5>
                    </div>
                    <ul class="list-group">
                      <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Pago Referencia PayU
                        </li>
                      </a>
                    </ul>
                  </div>
                </div>
                <!-- Termina servicios de Servicios de Prepago -->

                <!-- Inicia servicios de Moivustar pago Factura -->
                <div id="prod_cat7_ser1" class="collapse" >
                  <div class="mt-3">
                    <div align="right">
                      <h5><b>Producto MOVISTAR(Pago de Recibo)</b></h5>
                    </div>
                    <ul class="list-group">
                      <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Factura MOVISTAR
                        </li>
                      </a>
                    </ul>
                  </div>
                </div>
                <!-- Termina servicios de Moivustar pago Factura -->

                <!-- Inicia servicios de Iusacell pago Factura -->
                <div id="prod_cat8_ser1" class="collapse" >
                  <div class="mt-3">
                    <div align="right">
                      <h5><b>Producto AT-T/IUSACELL (Pago de Recibo)</b></h5>
                    </div>
                    <ul class="list-group">
                      <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Recibo AT-T/IUSACELL
                        </li>
                      </a>
                    </ul>
                  </div>
                </div>
                <div id="prod_cat8_ser1" class="collapse" >
                  <div class="mt-3">
                    <div align="right">
                      <h5><b>Producto AT-T/IUSACELL (Pago de Recibo)</b></h5>
                    </div>
                    <ul class="list-group">
                      <a  data-toggle="modal" data-target="#modalConsulta">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Consulta de Saldo
                        </li>
                      </a>
                    </ul>
                  </div>
                </div>

                <div id="prod_cat8_ser2" class="collapse" >
                  <div class="mt-3">
                    <div align="right">
                      <h5><b>Producto NEXTEL (Pago de Recibo)</b></h5>
                    </div>
                    <ul class="list-group">
                      <a  data-toggle="modal" data-target="#modalPagos">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Factura NEXTEL
                        </li>
                      </a>
                    </ul>
                  </div>
                </div>
                <div id="prod_cat8_ser2" class="collapse" >
                  <div class="mt-3">
                    <div align="right">
                      <h5><b>Producto NEXTEL (Pago de Recibo)</b></h5>
                    </div>
                    <ul class="list-group">
                      <a  data-toggle="modal" data-target="#modalConsulta">
                        <li class="list-group-item">
                          <div class="md-v-line"></div><i class="mdi mdi-cash-usd fa-2x mr-4"></i>Consulta de Saldo
                        </li>
                      </a>
                    </ul>
                  </div>
                </div>
                <!-- Termina servicios de Iusacell pago Factura -->

              </div>
          </div>
      </div>
    </div>

    <!-- Modal consulta-->
    <div class="modal fade" id="modalConsulta" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Consulta</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-5">
                <label for="referencia_consulta">Referencia </label>
                <input class="form-control" type="text" name="referencia_consulta" id="referencia_consulta">
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar</button>
        </div>
      </div>
    </div>
    </div>
    <!--End modal consulta-->



    <!-- Modal Pagos-->
    <div class="modal fade" id="modalPagos" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header blue-gradient color-block">
          <h5 class="modal-title w-100 text-white font-weight-bold" id="exampleModalLongTitle">Pago</h5>
        </div>
        <form id="form_pago_servicios" action="#" method="post">
          <div class="modal-body">
            <div class="row justify-content-md-center">
              <div class="col-12 col-md-12">
                <label for="referencia_pago">Referencia de pago </label> <a id="info" data-toggle="modal" data-target="#modalInfo"><span aria-hidden="true"><i class="mdi mdi-information-outline"></i></span></a>
                <input class="form-control required number" type="tel" name="referencia_pago" id="referencia_pago" style="font-size:47px; text-align:center;">
              </div>
            </div>
            <div class="row justify-content-center">
              <div class="col-12 col-md-12">
                <label for="monto_pago">Monto</label>
                <input class="form-control required number" type="number" step="0.01" min="1" name="monto_pago" id="monto_pago" style="font-size:35px; text-align:center;">
              </div>
              <div class="col-12 col-md-12">
                <br>
                <b><p class="text-danger">* Comisión por transaccion: $10.00</p></b>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal" id="closeApuntador">Cerrar</button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalConfPago" id="btnApuntador" disabled>Pagar</button>
          </div>
       </form>
      </div>
    </div>
    </div>
    <!--End modal Pagos-->

    <!-- Modal Info-->
    <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        </div>
        <div class="modal-body">

            <div class="row justify-content-md-center">
              <img id="img_info">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
    </div>
    <!--End modal Info-->

    <!-- Modal ConfirmacionPago-->
    <div class="modal fade" id="modalConfPago" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <!-- Add .modal-dialog-centered to .modal-dialog to vertically center the modal -->
    <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle"><p> Confirmación de pago </p></h5>
        </div>
        <div class="modal-body">
          <div class="row-justify-content-center">
            <center>
            <div class="col-12 col-md-12">
              <p>Se realizará un pago al número de referencia</p>
              <div class="table-responsive">
                <h1><label id="lblreferencia"></label></h1>
              </div>
              <p>Por la cantidad de</p>
              <h1>$<label id="lblmonto"></label></h1>
              <p><b>*Más $10.00 de comisión</b> </p>
              <h1><b><p>TOTAL:</p>$<label id="lbltotalPago"></label></b></h1>
              <p><b>¿Desea continuar?</b></p>
            </div>
          </center>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal">Confirmar</button>
        </div>
      </div>
    </div>
    </div>
    <!--End modal ConfirmacionPago-->

    <script type="text/javascript">
    $(function() {
       validar_formulario("#form_pago_servicios","#btnApuntador");
    });
    </script>
  </body>
</html>
