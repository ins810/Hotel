


<div class="conteudo" >
  <div class="tabela">
  <a href="<?php echo $this->base_url?>AdminEvento/add"> nova </a>

   <table class="my_table">
    <tr>
          <th>id</th>
          <th>Nombre</th>
          <th>Texto</th>
          <th>Fecha</th>
           <th>actions</th>
    </tr>

    <?php foreach ($data['listEvento'] as $listEvento): ?>
          <tr>
             <td><?php echo $listEvento->getId_evento() ?></td>
              <td><?php echo $listEvento->getName() ?></td>
              <td><?php echo $listEvento->getText() ?></td>
              <td><?php echo $listEvento->getFecha() ?></td>
              <td>
                <a  href="<?php echo $this->url?>AdminEvento/editEvento/<?php echo $listEvento->getId_evento();?>">Editar</a>
                <a  href="<?php echo $this->url?>AdminEvento/remove/<?php echo $listEvento->getId_evento();?>">del</a>
            </td>
          
          </tr>

     <?php endforeach; ?>
   </table>
  </div>
</div>

</body>
</html>


