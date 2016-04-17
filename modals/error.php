<?php
$archParms = file_get_contents("../../config/params.json");
$lenguajes = json_decode($archParms, true);
$captura_error = json_decode($_GET['success']);

$error = $captura_error->error;
$print_error = $lenguajes['Errors'][$_COOKIE['lan']][$error];
?>

<div id="divErrors" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Error!</h4>
      </div>
      <div class="modal-body">
        <p class="alert alert-danger">
        	<?php echo $print_error; ?>
        </p>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
	$('#divErrors').modal('show');
</script>