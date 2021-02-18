<?php require TRAITEMENT . 'convertisseur' . DIRECTORY_SEPARATOR . 'convertir.php' ; ?>

<div class="row">
    <div class="col-md-6 mt-4" >
        <?php
            // fonction qui permet de genere automatique le flash
            !empty($danger) ? danger($danger) : danger();

            !empty($success) ? success($success) : success();
        
        ?>
    </div>

    <div class="col-md-1"></div>
    <div class="col-md-5">
        <h4 class="text-secondary mb-4">Convertisseur</h4>
        <form action="/convertisseur" method="post" class="form">
            <div class="form-group">
                <select name="langage" id="langage" class="form-control shadow" >
                    <option class="shadow" value="" selected> <?= !empty($_GET['param']) ? $_GET['param'] : 'Choississez votre langage' ?></option>
                    <option value=""  class="bg-light shadow" disabled>Binaire ?</option>
                    <option value="bindec">Binaire à décimal </option>
                    <option value="binoct">Binaire à octal</option>
                    <option value="binhex">Binaire à hexadécimal</option>

                    <option value="" class="bg-light shadow" disabled>Octal ?</option>
                    <option value="octbin" class="">Octal à binaire </option>
                    <option value="octdec">Octal à décimal</option>
                    <option value="octhex">Octal à hexadécimal</option>

                    <option value="" class="bg-light shadow" disabled>Décimal ? </option>
                    <option value="decbin">Décimal à binaire </option>
                    <option value="decoct">Décimal à octal</option>
                    <option value="dechex">Décimal à hexadécimal</option>

                    <option value="" class="bg-light shadow" disabled>Hexadécimal ? </option>
                    <option value="hexbin">Hexadécimal à binaire </option>
                    <option value="hexdec">Hexadécimal à décimal</option>
                    <option value="hexoct">Hexadécimal à octal</option>
                    
                </select>
            </div> <br>
            <div class="form-group">
                <input type="text" class="form-control shadow" name="number" placeholder="Valeur à convertir">
            </div> <br>

          

            <button type="submit" class="btn btn-light mb-4 shadow" name="convertir">Convertir</button>
        </form>
    </div>
    


   
</div>
<!-- <div class="spinner-border text-primary" role="status">
    <span class="visually-hidden"></span>
 </div> -->

    <hr>
    <div class="row mt-5">
        <div class="col-md-4">
            <div class="alert alert-success">Message de succes</div>
            <p class="text-muted"> Quand la valeur a été convertit , le message de succes apparaitra </p>
        </div>
        <div class="col-md-4">
           <div class="alert alert-danger"> message d'echec</div>
           <p class="text-muted"> Quand la valeur inseré  n'est pas reconnue comme valeur dans le langage choisit , y aura un message d'echec qui apparaitra </p>
        </div>
        <div class="col-md-4">
          <div class="alert alert-info"> Information</div>
          <p class="text-muted"> Quand le resultat final donne zéro (0) , y aura un message info qui apparaitra </p>
        </div>
    </div>
 