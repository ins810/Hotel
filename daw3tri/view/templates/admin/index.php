


<div class="conteudo" >
  <div class="tabela">
  <a href="<?php echo $this->base_url?>AdminHabitaciones/add"> nova </a>

   <table class="my_table">
    <tr>
          <th>id</th>
          <th>nome</th>
          <th>Descripcion</th>
          <th>imagen</th>
           <th>actions</th>
    </tr>

    <?php foreach ($data['listHabitacion'] as $listHabitacion): ?>
          <tr>
             <td><?php echo $listHabitacion->getId_habitacion() ?></td>
              <td><?php echo $listHabitacion->getName() ?></td>
               <td><?php echo substr($listHabitacion->getDescripcion(), 0, 15) . "..." ?></td>
               <td>
                <img src="<?php echo $this->base_url?>system/upload/<?php echo $listHabitacion->getSrc()?>" width="100"/>
                </td>
                <td>
               <a  href="<?php echo $this->url?>AdminHabitaciones/edit/<?php echo $listHabitacion->getId_habitacion();?>"> vai </a>
              </td>
          </tr>

     <?php endforeach; ?>
   </table>
  </div>
</div>

</body>
</html>


