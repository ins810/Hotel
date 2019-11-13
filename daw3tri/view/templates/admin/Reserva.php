


<div class="conteudo" >
  <div class="tabela">
  <a href="<?php echo $this->base_url?>AdminReserva/add"> nova </a>
  <p>reservas</p>
   <table class="my_table">
    <tr>
          <th>id</th>
          <th>title</th>
          <th>texto</th>
           <th>actions</th>
    </tr>

    <?php foreach ($data['listReserva'] as $listReserva): ?>
          <tr>
             <td><?php echo $listReserva->getIdReserva() ?></td>
              <td><?php echo $listReserva->getTitle() ?></td>
               <td><?php echo substr($listReserva->getText(), 0, 15) . "..." ?></td>
               
                <td>
               <a  href="<?php echo $this->url?>AdminReserva/edit/<?php echo $listReserva->getIdreserva();?>"> vai </a>
              </td>
          </tr>

     <?php endforeach; ?>
   </table>
  </div>
</div>

</body>
</html>


