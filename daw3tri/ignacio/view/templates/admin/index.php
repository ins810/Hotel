<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="conteudo" >
  <div class="tabela">
  <a href="<?php echo $this->base_url?>AdminHabitaciones/add"> <button class="btn"><i class="fa fa-plus-circle"></i></i></button> </a>

   <table class="my_table">
    <tr>
          
          <th>Nombre</th>
          <th>Descripcion</th>
          <th>Imagen</th>
           <th>Acciones</th>
    </tr>

    <?php foreach ($data['listHabitacion'] as $listHabitacion): ?>
          <tr>
             
              <td><?php echo $listHabitacion->getName() ?></td>
               <td><?php echo substr($listHabitacion->getDescripcion(), 0, 180) . "..." ?></td>
               <td>
                <img src="<?php echo $this->base_url?>system/upload/<?php echo $listHabitacion->getSrc()?>" width="250"/>
                </td>
                <td>
               <a  href="<?php echo $this->url?>AdminHabitaciones/edit/<?php echo $listHabitacion->getId_habitacion();?>"> <button class="btn"><i class="fa fa-edit"></i> </button></a>
			   
               <a  href="<?php echo $this->url?>AdminHabitaciones/remove/<?php echo $listHabitacion->getId_habitacion();?>"><button class="btn"><i class="fa fa-remove"></i> </button> </a>
              </td>
          </tr>

     <?php endforeach; ?>
   </table>
  </div>
</div>

</body>
</html>


