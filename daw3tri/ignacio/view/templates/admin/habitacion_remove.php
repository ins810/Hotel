<?php
$message = "no encontrado!!";
if ($data) {
    $message = $data['msg'];
}
if($data['habitacion']){
    $habitacion = $data['habitacion'];    
}else{
    $message = "no encontrada !!";
}

?>

<main class="app-content">
<!-- <div class="app-title"> -->
<div class="row">
        <div class="col-md-12">
          <div class="tile">
          <div class="col-12 center">
                                <div class="alert alert-danger alert-dismissable center">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    Seguro?
                                    
                                </div>  

                                                      
                                <form role="form" method="post">

                                    <input type="submit" class="btn btn-danger" value='Apagar' name='del' >
                                    <a href="<?php echo $this->base_url ?>AdminHabitacion/" class="btn btn-default">Cancelar</a>
                                </form>
            </div>

          </div>
        </div>
</div>

<!-- </div> -->
</main>

        
                            
