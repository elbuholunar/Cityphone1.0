<?php
$archParms = file_get_contents("../../config/params.json");
$lenguajes = json_decode($archParms, true);
$captura_success = json_decode($_COOKIE['success']);
$success = $captura_success->successVlr;
$print_error = $success;
?>

<div id="divSuccess" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-floppy-saved"></span></h4>
      </div>
      <div class="modal-body">
        <p class="alert alert-success">
          <?php echo $print_error; ?>
        </p>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
  $('#divSuccess').modal('show');
</script>

<?php  @setcookie('success', null, -1, '/'); ?>