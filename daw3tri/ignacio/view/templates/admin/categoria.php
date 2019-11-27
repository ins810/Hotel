
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="conteudo" >
  <div class="tabela">
  <a href="<?php echo $this->base_url?>AdminCategoria/add"> <button class="btn"><i class="fa fa-plus-circle"></i></i></button> </a>

   <table class="my_table">
    <tr>
          
          <th>Nombre</th>
          <th>Informacion de reserva</th>
           <th>Acciones</th>
    </tr>

    <?php foreach ($data['listCategoria'] as $listCategoria): ?>
          <tr>
           
              <td><?php echo $listCategoria->getTitle() ?></td>
               <td><?php echo $listCategoria->getText() ?></td>
               
                <td>
               <a  href="<?php echo $this->url?>AdminCategoria/edit/<?php echo $listCategoria->getId_categoria();?>"> <button class="btn"><i class="fa fa-edit"></i> </button> </a>
               <a  href="<?php echo $this->url?>AdminCategoria/removeCategoria/<?php echo $listCategoria->getId_categoria();?>"> <button class="btn"><i class="fa fa-remove"></i> </button> </a>
               
              </td>
          </tr>

     <?php endforeach; ?>
   </table>
  </div>
</div>

</body>
</html>


