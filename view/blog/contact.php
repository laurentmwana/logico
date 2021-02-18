<?php 

require TRAITEMENT . 'function.php';  
require TRAITEMENT . 'contact' . DIRECTORY_SEPARATOR . 'send.php';  ?>



<h1 class="text-primary text-center">Contact </h1>
<div class="row bg-light mt-3  py-4 shadow">
  <div class="col-md-4 text-center">
    <h3 class="text-secondary text-center">Adresse</h3>
    <p class="text-muted">33 Avenue Marechal , Commune de Masina , Quartier Sans-fil </p>
   </div>
  <div class="col-md-4 text-center text-muted">
  <h3> Adresse e-mail </h3>
  <p>Laurentmwn@gmail.com</p>
  
  </div>
  <div class="col-md-4 text-muted text-center"> 
  <h3> Téléphone</h3>
  <p>+243 82 06 45 973 </p>
  
  </div>
</div>
<div class="row bg-light p-4 shadow mt-2">
    <div class="col-md-2"></div>
    <div class="col-md-8">
     
        <form action="/contact" class="form mt-4" method="POST">
            
            <div class="form-row">
                <div class="form-group col-md-6">
                <input type="text" class="form-control" name="name" id="" aria-describedby="helpId" placeholder=" Votre Nom  ">
                <small id="helpId" class="form-text text-muted"></small>
                </div>

                <div class="form-group  col-md-6">
                <input type="text" class="form-control" name="sujet" id="" aria-describedby="helpId" placeholder=" Le sujet ">
                <small id="helpId" class="form-text text-muted"></small>
                </div>
            </div>


            <div class="form-group">
              <input type="email" class="form-control" name="mail" id="" aria-describedby="emailHelpId" placeholder=" Votre adresse e-mail ">
              <small id="emailHelpId" class="form-text text-muted"></small>
            </div>

            
           <div class="form-group">
            
             <textarea class="form-control" name="message" id="" rows="3" placeholder="Message"></textarea>
           </div>

            
            <button type="submit" name="contact" id="" class="btn btn-primary btn-lg btn-block"> Nous contacter</button>
        </form>
        <div class="error mt-4">
        <?php  
         !empty($success) ? success($success) : success() ;
         
         !empty($danger) ? danger($danger) : danger();          
        ?>
        </div>
    </div>

    <div class="col-md-2"></div>
    <div class="row">
   
    </div>
</div>