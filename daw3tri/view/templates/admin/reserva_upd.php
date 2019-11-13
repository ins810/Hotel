
<div class="conteudo" >
<?php

$message = $data['msg'];
var_dump($data['reserva']);
$reserva = $data['reserva'];
echo "<hr>";
var_dump($reserva);
?>
 <section>
        <div class="form" >
                <form  method="post" enctype="multipart/form-data">
                  <label >titulo</label>
                  <input type="text" id="fname" name="title" value="<?php echo $reserva->getTitle() ?>">
              
                  <label>Descripcion</label>
                  <input type="text"  name="text" value="<?php echo $reserva->getText() ?>">
              
                  
                  <input type="hidden" name="id" value="<?php echo $reserva->getIdreserva() ?>">
                  <input type="submit" name='update' value="Enviar">
              
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
