
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="conteudo" >
  <div class="tabela">
  <a href="<?php echo $this->base_url?>AdminUsuario/add"> <button class="btn"><i class="fa fa-plus-circle"></i></i></button> </a>

   <table class="my_table">
    <tr>
         
          <th>Nombre</th>
          <th>Email</th>
           <th>Acciones</th>
    </tr>

    <?php foreach ($data['listUsuario'] as $listUsuario): ?>
          <tr>
             
              <td><?php echo $listUsuario->getName() ?></td>
              <td><?php echo $listUsuario->getGmail() ?></td>
            <td>
              <a  href="<?php echo $this->url?>AdminUsuario/edit/<?php echo $listUsuario->getId_usuario();?>"><button class="btn"><i class="fa fa-edit"></i> </button></a>
              <a  href="<?php echo $this->url?>AdminUsuario/removeUsuario/<?php echo $listUsuario->getId_usuario();?>"><button class="btn"><i class="fa fa-remove"></i> </button></a>
          </td>

          </tr>

     <?php endforeach; ?>
   </table>
  </div>
</div>

</body>
</html>


