<?php

    $message = $data['msg'];


?>
<div class="conteudo" >
 <section>
        <div class="form" >
                <form  method="post" enctype="multipart/form-data">
                  <label >Nombre</label>
                  <input type="text" id="fname" name="name" placeholder="Nombre">
              
                  <label>Descricion</label>
                  <input type="text"  name="text" placeholder="text">
                  
                  <label>fecha</label>
                  <input type="date"  name="fecha" placeholder="text">
              
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
