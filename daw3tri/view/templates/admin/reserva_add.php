<?php

    $message = $data['msg'];


?>
<div class="conteudo" >
 <section>
        <div class="form" >
                <form  method="post" enctype="multipart/form-data">
                  <label >Tituo</label>
                    <input type="text" id="fname" name="title" placeholder="Nombre">
                  <label>Descripcion</label>
                    <input type="text"  name="text" placeholder="text">
                  <select name="id_habitacion" class="form-control">
                    <option>selecionar habitacion</option>
                <?php
                    foreach($data['lista'] as $habt){
                        echo "<option value=".$habt->getId_habitacion().">".$habt->getName()."</option>";
                    }
                ?>
                  </select>
                  <input type="submit" name='add' value="Enviar">

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
