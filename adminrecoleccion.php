<?php
  $page_title = 'Residuos recolectados';

	require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
  $all_recoleccion = find_all('recoleccionresiduos');
?>
<?php include_once('layouts/header.php'); ?> 

<div class="row">
     <div class="col-md-12">
       <?php echo display_msg($msg); ?>
     </div>
    <div class="col-md-12">
      <div class="panel panel-default">
        <div class="panel-heading clearfix">
         <div class="panel-heading">
          <strong>
            <span class="glyphicon glyphicon-th"></span>
            <span>Residuos</span>
         </strong>
        </div>

        </div>
        <div class="panel-body">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th class="text-center" style="width: 20%;"> Área </th>
                <th class="text-center" style="width: 20%;"> Tipo de residuo </th>
                <th class="text-center" style="width: 20%;"> Peso </th>
                <th class="text-center" style="width: 20%;"> Usuario </th>
                <th class="text-center" style="width: 20%;"> Observación </th>
				 <th class="text-center" style="width: 20%;"> Fecha registro </th>
                <th class="text-center" style="width: 100px;"> Acciones </th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($all_recoleccion as $reco):?>
              <tr>
                <td class="text-center"> <?php echo remove_junk($reco['area']); ?></td>
                <td class="text-center"> <?php echo remove_junk($reco['tipo_residuo']); ?></td>
                <td class="text-center"> <?php echo remove_junk($reco['peso']); ?></td>
                <td class="text-center"> <?php echo remove_junk($reco['usuario']); ?></td>
                <td class="text-center"> <?php echo remove_junk($reco['observaciones']); ?></td>
                <td class="text-center"><?php echo read_date($reco['fecha']); ?> </td>
                <td class="text-center">
                  <div class="btn-group">
                    <a href="edit_pacientes.php?id=<?php echo (int)$paci['id'];?>" class="btn btn-info btn-xs"  title="Editar" data-toggle="tooltip">
                      <span class="glyphicon glyphicon-edit"></span>
                    </a>
                     <a href="delete_paciente.php?id=<?php echo (int)$paci['id'];?>" class="btn btn-danger btn-xs"  title="Eliminar" data-toggle="tooltip">
                      <span class="glyphicon glyphicon-trash"></span>
                    </a>
                  </div>
                </td>
              </tr>
             <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
  <?php include_once('layouts/footer.php'); ?>