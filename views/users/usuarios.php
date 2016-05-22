<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8"/> 
	<link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link href="../../css/css_bootstrap/bootstrap.css" rel="stylesheet" media="screen"> 
	<link href="../../css/css_bootstrap/bootstrap-theme.css" rel="stylesheet" media="screen">
	<script type="text/javascript" src="../../libraries/js/jquery/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="../../libraries/js/js_bootstrap/bootstrap.min.js"></script>
  <script type="text/javascript" src="../../js/manageJsonConf.js"></script>
	<script type="text/javascript" src="../../js/adminScripts.js"></script>
  <script type="text/javascript">
    // Cargue de listado usuarios
    objActAdmon.cargue_doc();
  </script>
	<link rel="stylesheet" type="text/css" href="../../css/users/principal.css">
</head>
<body>
<?php  
  $head = 2;
  require_once("../general/header.php");

?>
  
<div class="general-content">
<div class="container-fluid" >
  <div>
    <ul id="myTabs" class="nav nav-tabs" role="tablist"> 
      <li role="presentation" class="active">
        <a aria-expanded="false" href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" onclick="objActAdmon.cargue_doc()"><font id="title4" class="changeLanguages">Listado Usuarios</font></a>
      </li> 
    </ul>
    <div id="myTabContent" class="tab-content">
      <div role="tabpanel" class="tab-pane fade fade active in" id="profile" aria-labelledby="profile-tab">
        <br>
        <div class="well">
          <div id="eraserDiv" class="hidden">
            <div class="alert alert-warning alert-dismissible fade in" role="alert">
              <span class="glyphicon glyphicon-hand-up"></span>
              <a href="#" class="alert-link" id="">
                <font id="LinkDelUser" class="changeLanguages">Eliminar usuario!</font>
              </a> 
              <font class="changeLanguages" id="identificacionDel">con número de identificación</font> 
              <em><font id="identUserDel"></font></em>
              <button type="button" class="close" onclick="$('#eraserDiv').addClass('hidden')">
                <span aria-hidden="true">&times;</span>
              </button>              
            </div>            
          </div> 
          <table class="table table-hover table-bordered">
            <thead>
              <tr class="text-primary">
                <th id="headListUser1" class="changeLanguages" style="text-align: center !important;">Identificación</th>
                <th id="headListUser2" class="changeLanguages" style="text-align: center !important;">Nombres</th>
                <th id="headListUser3" class="changeLanguages" style="text-align: center !important;">Apellidos</th>
                <th id="headListUser4" class="changeLanguages" style="text-align: center !important;">Estado</th>
                <th id="headListUser5" class="changeLanguages" style="text-align: center !important;">Acciones</th>
              </tr>
            </thead>
            <tbody id="dataUsers">
            </tbody>
          </table>
        </div>
      </div>
    </div> 
  </div>
</div>

<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" id="ModalForm">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Modal</h4>
      </div>
      <div class="modal-body">
        <?php require_once ('../../templates/template_form.UserAddEdit.php'); ?>
      </div>
    </div>
  </div>
</div>

<footer>
	<div class="footer">
	</div>
</footer>
</body>
</html>

<?php
  if (!empty($_COOKIE['success'])) {

    $captura_cookie = json_decode($_COOKIE['success']);
    $state = $captura_cookie->success;

    if ($state == 'success')
      require_once '../../modals/success.php';
    else
      require_once '../../modals/error.php';
  }
?>