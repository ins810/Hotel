
<div class="conteudo" >
<?php

$message = $data['msg'];
$habitacion = $data['habitacion'];

?>
 <section>
        <div class="form" >
                <form  method="post" enctype="multipart/form-data">
                  <label >Nombre</label>
                  <input type="text" id="fname" name="name" value="<?php echo $habitacion['name'] ?>">
              
                  <label>Descripcion</label>
                  <input type="text"  name="descripcion" value="<?php echo $habitacion['descripcion'] ?>">
              
                  <label>selecionar img</label>
                  <input type="file"  name="arquivo" placeholder="arquivo">
              
                <input type="hidden" name="id" value="<?php echo $habitacion['id_habitacion'] ?>">
                  <input type="submit" name='upd' value="Enviar">
                </form>
                </form>
          <?php if ($data['msg']): ?>
              <div>
                  <?php echo $data['msg'] ?>
              </div>
          <?php endif ?>
              </div>
 </section>
</div>

</body>
</html>
