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

<?php  foreach ($listHabitacion as $list): ?>
         <td>
            <img src="<?php echo $this->base_url?>system/upload/<?php echo $list->getSrc()?>"style="height: 375px; width:425px;"/>
           <center> <?php echo $list->getName() ?> <br/><br/><br/>
			<?php echo $list->getDescripcion() ?> </center>
        </td>
           

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
					 
					 
                    
                    </center>
                </table>
        </section>
   
</body>
</html>