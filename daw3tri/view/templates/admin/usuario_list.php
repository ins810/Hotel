


<div class="conteudo" >
  <div class="tabela">
  <a href="<?php echo $this->base_url?>AdminUsuario/add"> nova </a>

   <table class="my_table">
    <tr>
          <th>id</th>
          <th>name</th>
          <th>email</th>
           <th>actions</th>
    </tr>

    <?php foreach ($data['listUsuario'] as $listUsuario): ?>
          <tr>
             <td><?php echo $listUsuario->getId_usuario() ?></td>
              <td><?php echo $listUsuario->getName() ?></td>
              <td><?php echo $listUsuario->getGmail() ?></td>
            <td><a  href="<?php echo $this->url?>AdminUsuario/edit/<?php echo $listUsuario->getId_usuario();?>">Editar</a></td>
          
          </tr>

     <?php endforeach; ?>
   </table>
  </div>
</div>

</body>
</html>


