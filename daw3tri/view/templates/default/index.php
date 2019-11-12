

      <section class="container gallery-container">

        <!--Slide-->
        <div class="mySlides fade"> <!-- 01 -->
            <img class="imgslide" src="<?php echo $this->asset?>/imagen/img2.jpg" alt="Arara Azul"/>
        </div>

        <div class="mySlides fade"> <!-- 02 -->
            <img class="imgslide" src="<?php echo $this->asset?>/imagen/img2.jpg" alt="Arara Canindé"/>
        </div>

        <div class="mySlides fade"> <!-- 03 -->
            <img class="imgslide" src="<?php echo $this->asset?>/imagen/img3.jpg" alt="Papagaio Verdadeiro"/>
        </div>



        <!--Final Slides-->

        <!--Navigation-->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </section>

    <section class="habitaciones" id="habitaciones" >
        <H1>HABITACIONES</H1>
            <table >
                 <tr>
                      <th>STANDARD </th>
                      <th>SUPERIOR</th> 
                      <th>DELUXE </th>
                 </tr>
                 <tr>
                      <td><img src="<?php echo $this->asset?>/imagen/img1.jpg"  style="height: 375px; width:425px;"> </td>
                      <td><img src="<?php echo $this->asset?>/imagen/img2.jpg"  style="height: 375px; width:425px;"></td>
                      <td><img src="<?php echo $this->asset?>/imagen/img3.jpg"  style="height: 375px; width:425px;"></td>
                 </tr>
                 <tr>
                      <td><a href="habitaciones.html"><button class="button button1"> Mas</button></a>                      </td>
                      <td><a href="habitaciones.html"><button class="button button1"> Mas</button></a>                      </td>
                      <td><a href="habitaciones.html"><button class="button button1"> Mas</button></a>                      </td>
                 </tr>
            </table>
    </section>
    <section class="eventos" id="eventos">
            <H1>EVENTOS</H1>
                <table >
                     <tr>
                          <th>STANDARD </th>
                          <th>SUPERIOR</th> 
                          <th>DELUXE </th>
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
                     <tr>
                            <td><img src="<?php echo $this->asset?>/imagen/stan.png" style="height: 375px; width:425px;"> </td>
                            <td><img src="<?php echo $this->asset?>/imagen/superior.png" style="height: 375px; width:425px;"></td>
                            <td><img src="<?php echo $this->asset?>/imagen/deluxe.png" style="height: 375px; width:425px;"></td>
                     </tr>
                     <tr>
                            <td><a href="eventos.html"><button class="button button1"> Mas</button></a>                      </td>
                            <td><a href="eventos.html"><button class="button button1"> Mas</button></a>                      </td>
                            <td><a href="eventos.html"><button class="button button1"> Mas</button></a>                      </td>
                       </tr>
                </table>
        </section>
   
</body>
</html>