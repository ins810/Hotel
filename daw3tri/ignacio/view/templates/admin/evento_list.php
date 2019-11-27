

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="conteudo" >
  <div class="tabela">
  <a href="<?php echo $this->base_url?>AdminEvento/add"> <button class="btn"><i class="fa fa-plus-circle"></i></i></button> </a>

   <table class="my_table">
    <tr>
         
          <th>Nombre</th>
          <th>Texto</th>
          <th>Fecha</th>
           <th>Acciones</th>
    </tr>

    <?php foreach ($data['listEvento'] as $listEvento): ?>
          <tr>
             
              <td><?php echo $listEvento->getName() ?></td>
              <td><?php echo $listEvento->getText() ?></td>
              <td><?php echo $listEvento->getFecha() ?></td>
              <td>
                <a  href="<?php echo $this->url?>AdminEvento/editEvento/<?php echo $listEvento->getId_evento();?>"><button class="btn"><i class="fa fa-edit"></i> </button></a>
                <a  href="<?php echo $this->url?>AdminEvento/remove/<?php echo $listEvento->getId_evento();?>"><button class="btn"><i class="fa fa-remove"></i> </button></a>
            </td>
          
          </tr>

     <?php endforeach; ?>
   </table>
  </div>
</div>

</body>
</html>


