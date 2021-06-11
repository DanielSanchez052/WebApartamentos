<main class="pt-5">
    <form class="form-register"  method="POST" action="<?php echo base_url()?>/addUser" enctype="multipart/form-data" onsubmit="return validateRegister()">
        <h1 class="h3 mb-3 font-weight-normal text-white">Registrate</h1>
        <div class="row mb-2">
            <div class="col-sm-12 col-md-6">
                <label for="inputImage" class="form-label text-white">imagen de perfil</label>
                <input type="file" id="inputImage" class="form-control" name="Image" required accept="image/*">
            </div>
            <div class="col-sm-12 col-md-6">
                <label for="inputUserName" class="form-label text-white">Nombre de usuario</label>
                <input type="text" id="inputUserName" class="form-control" placeholder="Escribe un nombre de usuario" name="username" required>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-12 col-md-6">
                <label for="inputName" class="form-label text-white">Nombre Completo</label>
                <input type="text" id="inputName" class="form-control" placeholder="Nombre Completo" name="name" required>
            </div>
            <div class="col-sm-12 col-md-6">
                <label for="inputEmail" class="form-label text-white">Correo Electronico</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Correo Electronico" name="email" required autofocus>   
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-12 col-md-4">
                <label for="inputCountry" class="form-label text-white">Pais</label>
                <input type="text" id="inputCountry" class="form-control" placeholder="Escriba el Pais" name="country" required>
            </div>
            <div class="col-sm-12 col-md-4">
                <label for="inputDepartment" class="form-label text-white">Departamento/Estado</label>
                <input type="text" id="inputDepartment" class="form-control" placeholder="Departamento/Estado" name="department" required>
            </div>
            <div class="col-sm-12 col-md-4">
                <label for="inputCity" class="form-label text-white">Ciudad</label>
                <input type="text" id="inputCity" class="form-control" placeholder="Ciudad" name="city" required>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-sm-12 col-md-6">
                <label for="inputPassword" class="form-label text-white">Contraseña</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" name="password" required> 
            </div>
            <div class="col-sm-12 col-md-6">
                <label for="inputPassword2" class="form-label text-white">Confirmar Contraseña</label>
                <input type="password" id="inputPassword2" class="form-control" placeholder="Confirmar Contraseña" required>
            </div>
        </div>
        <div class="col-12">
                <label for="selectRole" class="form-label text-white">Rol</label>
                <select id="selectRole" class="form-select" name="rol" required>
                    <option value="1">Anfitrion</option>
                    <option value="2">Invitado</option>
                </select>
            </div>
        <div class="col-12">
            <div class="mb-3">
                <label for="inputReview" class="form-label text-white">Descripcion</label>
                <textarea class="form-control" placeholder="Escribe algo sobre ti" id="inputReview" style="height: 100px"name="review"></textarea>
            </div>
        </div>
        <div class="text-white m-2">
            <a href="<?php echo base_url()?>/login" class="a-decorate">Ya tengo una cuenta</a>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>
</main>