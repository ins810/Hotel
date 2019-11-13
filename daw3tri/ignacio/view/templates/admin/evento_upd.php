
<div class="conteudo" >
<?php

$message = $data['msg'];
$evento = $data['evento'];

?>
 <section>
        <div class="form" >
                <form  method="post" enctype="multipart/form-data">
                  <label >Nombre</label>
                  <input type="text" id="fname" name="name" value="<?php echo $evento['name'] ?>">
              
                  <label>texto</label>
                  <input type="text"  name="text" value="<?php echo $evento['text'] ?>">
                  
                  <label>fecha</label>
                  <input type="date"  name="fecha" value="<?php echo $evento['fecha'] ?>">
              
                 
                <input type="hidden" name="id" value="<?php echo $evento['id_evento'] ?>">
                  <input type="submit" name='upd' value="Enviar">
                </form>
                </form>
          <?php if ($data['msg']): ?>
              <div>
                  <?php echo $data['msg'] ?>
              </div>
          <?php endif ?>
          </div>
              </div>
 </section>
</div>

</body>
</html>
