
<div class="conteudo" >
<?php

$message = $data['msg'];
$usuario = $data['usuario'];
var_dump($usuario)
?>
 <section>
        <div class="form" >
                <form  method="post" enctype="multipart/form-data">
                  <label >Nombre</label>
                  <input type="text" id="fname" name="name" value="<?php echo $usuario->getName() ?>">
              
                  <label>Email</label>
                  <input type="text"  name="gmail" value="<?php echo $usuario->getGmail()?>">
                  
                  <label>Contraseña</label>
                  <input type="password"  name="password" value="<?php echo $usuario->getPassword() ?>">

                  
               
              
                <input type="hidden" name="id" value="<?php echo $usuario->getId_usuario() ?>">
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
