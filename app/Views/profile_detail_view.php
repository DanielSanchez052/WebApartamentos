<main>
    <div class="container">
        <div class="border-lg mt-5">
            <h2 class="text-center text-white">Profile</h3>
            <div class="row">
                <div class="col-lg-6 col-sm-12 text-center">
                    <img src="<?php echo($data[0]->url_image);?>" alt="imagen de perfil" class="image-1"> 
                </div>
                <div class="col-lg-6 col-sm-12">
                    <div class="mb-3">
                        <p id="Name" class="form-label text-white">Nombre Completo:<br/> <?php echo($data[0]->full_name);?></p>
                    </div>
                    <div class="mb-3">
                        <p id="Username" class="text-center text-white">Username:<br/> <?php echo($data[0]->username);?></p>
                    </div>
                    <div class="mb-3">
                        <p id="Country" class="text-center text-white">Pais:<br/> <?php echo($data[0]->country);?></p>
                    </div>
                    <div class="mb-3">
                        <p id="Department" class="text-center text-white">Departamento/Estado:<br/> <?php echo($data[0]->department);?></p>
                    </div>
                    <div class="mb-3">
                        <p id="City" class="text-center text-white">Ciudad:<br/> <?php echo($data[0]->city);?></p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <p id="Review" class="text-center text-white">Descripcion:<br/> <?php echo($data[0]->review);?> </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>