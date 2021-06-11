    <main class="pt-3">
        <div class="container ">
            <form class="form-profile" method="POST" action="<?php echo base_url()?>/updateUser" enctype="multipart/form-data" onsubmit="return validateProfile()">
                <h2 class="text-center text-white">Profile</h3>
                <div class="row">
                    <div class="col-lg-6 col-sm-12 text-center">
                        <img src="<?php echo($data[0]->url_image);?>" alt="imagen de perfil" class="image"> 
                        <div class="mb-3">
                            <label for="inputImage" class="form-label text-white">imagen:</label>
                            <div class="">
                                <input type="file" class="form-control" id="inputImage" placeholder="your profile image" name="ImageFile" accept="image/*">
                                <input type="hidden" name="inputUrlImage" value="<?php echo($data[0]->url_image);?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="mb-3">
                            <label for="inputName" class="form-label text-white">Nombre Completo:</label>
                            <div class="">
                                <input type="text" name="inputName" class="form-control" id="inputName" placeholder="Nombre Completo" value="<?php echo($data[0]->full_name);?>">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputUsername" class="form-label text-white">Username:</label>
                            <div class="">
                                <input type="text" class="form-control" id="inputUsername" name="inputUsername" disabled placeholder="User name" value="<?php echo($data[0]->username);?>">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="inputCountry" class="form-label text-white">Pais</label>
                            <input type="text" id="inputCountry" name="inputCountry" class="form-control" placeholder="Pais" value="<?php echo($data[0]->country);?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputDepartment" class="form-label text-white">Departamento/Estado</label>
                            <input type="text" id="inputDepartment" name="inputDepartment" class="form-control" placeholder="Departamento/Estado" value="<?php echo($data[0]->department);?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputCity" class="form-label text-white">Ciudad:</label>
                            <div class="">
                                <input type="text" class="form-control" id="inputCity" name="inputCity" placeholder="Ciudad" value="<?php echo($data[0]->city);?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3">
                            <label for="inputReview" class="form-label text-white">Descripcion</label>
                            <textarea class="form-control" placeholder="Escribe algo sobre ti" id="inputReview" style="height: 145px" name="inputReview"><?php echo($data[0]->review);?></textarea>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="<?php echo base_url()?>/my-apartments" class="btn btn-danger">Cancelar</a>
                    <button type="submit" class="btn btn-success ml-auto">Guardar</button>
                </div>
            </form>
        </div>
    </main>