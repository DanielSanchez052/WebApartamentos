    <div class="d-flex w-100 h-100 flex-column">
        <main class="pt-8">
            <form action="<?php echo base_url()?>/login" method="POST" class="form-signin" onsubmit="return validateLogin()">
                <h1 class="h3 mb-3 font-weight-normal text-white"><i class="fas fa-user"></i> Iniciar Sesion</h1>
                <div class="mb-3">
                    <label for="inputEmail" class="form-label text-white"><i class="fas fa-envelope"></i> Correo Electronico</label>
                    <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                </div>
                <div class="mb-2">
                    <label for="inputPassword" class="form-label text-white"><i class="fas fa-signature"></i> Contraseña</label>
                    <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
                </div>
                <div class="text-white m-2">
                    <a href="<?php echo base_url()?>/register" class="a-decorate"> Crear una cuenta</a>
                </div>
                <button class="btn btn-lg btn-light" type="submit">Iniciar Sesión</button>
            </form>
        </main>
    </div>