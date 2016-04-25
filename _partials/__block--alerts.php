<!--Custom alerts for users-->
<?php if($_GET['status'] == "error"){ ?>
  <div class="alert alert-dismissible alert-danger">
    <strong>¡Error!</strong> Algo inesperado ha sucedido. Intente nuevamente.
  </div>   
<?php } ?>
<?php if($_GET['status'] == "ok"){ ?>
  <div class="alert alert-dismissible alert-success">
    <strong>¡Correcto!</strong> La información ha sido procesada correctamente.
  </div>
<?php } ?>
<?php if($_GET['status'] == "deleted"){ ?>
  <div class="alert alert-dismissible alert-success">
    <strong>¡Correcto!</strong> La información ha sido eliminada correctamente.
  </div>
<?php } ?>
<?php if($_GET['status'] == "updated"){ ?>
  <div class="alert alert-dismissible alert-success">
    <strong>¡Correcto!</strong> La información se ha actualizado correctamente.
  </div>
<?php } ?>

<!--End custom alerts for users-->