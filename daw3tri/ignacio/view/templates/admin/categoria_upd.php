
<div class="conteudo" >
<?php

$message = $data['msg'];
$categoria = $data['categoria'];

?>
 <section>
        <div class="form" >
                <form  method="post" enctype="multipart/form-data">
                  <label >titulo</label>
                  <input type="text" id="fname" name="title" value="<?php echo $categoria['title'] ?>">
              
                  <label>Descripcion</label>
                  <input type="text"  name="text" value="<?php echo $categoria['text'] ?>">
              
                  
                <input type="hidden" name="id" value="<?php echo $categoria['id_categoria'] ?>">
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
