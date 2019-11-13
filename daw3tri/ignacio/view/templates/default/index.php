<?php

$listHabitacion = $data['listHabitacion'];



?>

      <section class="container gallery-container">

      
        <div class="mySlides fade"> 
            <img class="imgslide" src="<?php echo $this->asset?>/imagen/img1.jpg"/>
        </div>

        <div class="mySlides fade"> 
            <img class="imgslide" src="<?php echo $this->asset?>/imagen/img2.jpg"/>
        </div>

        <div class="mySlides fade"> 
            <img class="imgslide" src="<?php echo $this->asset?>/imagen/img3.jpg"/>
        </div>



        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </section>

    <section class="habitaciones" id="habitaciones" >
        <H1>HABITACIONES</H1>
            <table >
            <tr>
         

    </tr>

    <?php foreach ($data['listHabitacion'] as $listHabitacion): ?>
          <tr>
              <td><?php echo $listHabitacion->getName() ?></td>
               <td><?php echo substr($listHabitacion->getDescripcion(), 0, 15) . "..." ?></td>
               <td>
                <img src="<?php echo $this->base_url?>system/upload/<?php echo $listHabitacion->getSrc()?>" width="100"/>
                </td>
               
          </tr>

     <?php endforeach; ?>
            </table>
    </section>
    <section class="eventos" id="eventos">
            <H1>EVENTOS</H1>
                <table >
				<center>
                     <tr>
                          <th>AUDITORIO </th>
                          <th>REUIONES </th> 
                          <th>FIESTAS </th>
                     </tr>
                     <tr>
                          <td><img src="<?php echo $this->asset?>/imagen/sala.jpg" style="height: 375px; width:425px;"> </td>
                          <td><img src="<?php echo $this->asset?>/imagen/sala2.jpg" style="height: 375px; width:425px;"></td>
                          <td><img src="<?php echo $this->asset?>/imagen/sala3.jpg" style="height: 375px; width:425px;"></td>
                     </tr>
                     <tr>
                            <td><a href="eventos.html"><button class="button button1"> Mas</button></a>                      </td>
                            <td><a href="eventos.html"><button class="button button1"> Mas</button></a>                      </td>
                            <td><a href="eventos.html"><button class="button button1"> Mas</button></a>                      </td>
                    </tr>
                    </center>
                </table>
        </section>
   
</body>
</html>