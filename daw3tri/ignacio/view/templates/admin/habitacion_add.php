<?php

    $message = $data['msg'];


?>
<div class="conteudo" >
 <section>
        <div class="form" >
                <form  method="post" enctype="multipart/form-data">
                  <label >Nombre</label>
                  <input type="text" id="fname" name="name" placeholder="Nombre">
              
                  <label>Descripcion</label>
                  <input type="number"  name="descripcion" placeholder="descripcions">
              
                  <label>selecionar img</label>
                  <input type="file"  name="arquivo" placeholder="arquivo">
              

                  <input type="submit" name='add' value="Enviar">
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
