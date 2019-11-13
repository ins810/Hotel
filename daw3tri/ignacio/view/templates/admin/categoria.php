


<div class="conteudo" >
  <div class="tabela">
  <a href="<?php echo $this->base_url?>AdminCategoria/add"> nova </a>

   <table class="my_table">
    <tr>
          <th>id</th>
          <th>title</th>
          <th>texto</th>
           <th>actions</th>
    </tr>

    <?php foreach ($data['listCategoria'] as $listCategoria): ?>
          <tr>
             <td><?php echo $listCategoria->getId_categoria() ?></td>
              <td><?php echo $listCategoria->getTitle() ?></td>
               <td><?php echo substr($listCategoria->getText(), 0, 15) . "..." ?></td>
               
                <td>
               <a  href="<?php echo $this->url?>AdminCategoria/edit/<?php echo $listCategoria->getId_categoria();?>"> vai </a>
               <a  href="<?php echo $this->url?>AdminCategoria/removeCategoria/<?php echo $listCategoria->getId_categoria();?>"> del </a>
               
              </td>
          </tr>

     <?php endforeach; ?>
   </table>
  </div>
</div>

</body>
</html>


