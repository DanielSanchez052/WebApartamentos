<main>
  <div class="border-lg mt-5">
        <div class="row">
        <?php foreach($data as $valor): ?>
            <div class="col-sm-12 col-md-6 col-xl-4 pt-2 ">
                <div class="card bg-dark apartment_selected">
                    <div class="card-body row">
                        <p class="text-end"><a href="<?php echo(base_url()."/profile-detail?user=$valor->id_user")?>" class="text-white a_none">Dueño: <?php echo($valor->username)?></a></p>
                        <div class="col-12" data-bs-toggle="modal" data-bs-target="#detailModal">
                            <img src="<?php echo($valor->image);?>" alt="Imagen de un apartamento" style="width: 100%;" onclick='detailApartment(<?php echo(json_encode ((array) $valor));?>)'>

                            <p class="text-white"><?php echo($valor->city);?>/<?php echo($valor->department);?>/<?php echo($valor->country);?></span>
                            <br>
                            <p class="text-white text-end">Precio por noche: <?php echo($valor->value_night);?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach?>
    </div>
</main>

<div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl bg-dark">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detailModalLabel">Apartamento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-sm-12 col-xl-8">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="https://www.medstartr.com/main/images/no-image.png" class="d-block w-100" alt="..." id="image1">
                </div>
                <div class="carousel-item">
                  <img src="https://www.medstartr.com/main/images/no-image.png" class="d-block w-100" alt="..." id="image2">
                </div>
                <div class="carousel-item">
                  <img src="https://www.medstartr.com/main/images/no-image.png" class="d-block w-100" alt="..." id="image3">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
          <div class="col-sm-12 col-xl-4">
            <p class="mt-2"><i class="fas fa-user-tie fa-2x"></i></i>  Dueño: <span id="owner"></span></p><br/>
            <p class=""><i class="fas fa-map-marked-alt fa-2x"></i>  Lugar: <span id="place"></span></p><br/>
            <p><i class="fas fa-map-marker-alt fa-2x"></i>  Direccion: <span id="direction"></span></p><br/>
            <p><i class="fas fa-route fa-2x"></i>  Ubicacion en el mapa: <br/><p><i class="fas fa-route fa-2x"></i>  Ubicacion en el mapa: <br/><a id="ubication" target="_blank">ir a ubicación</a></p></p>
            <p><i class="fas fa-bed fa-2x"></i>  Numero de salas:  <span id="rooms"></span></p><br/>
            <p><i class="fas fa-moon fa-2x"></i>  Valor por noche: <span id="value"></span></p><br/>
            <p><i class="fas fa-align-justify fa-lg"></i>  Reseña: <br/><span id="review"></span></p>
            <span class="text-success text-end fw-bold fs-5">Disponible</span> 
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Reservar</button>
      </div>
    </div>
  </div>
</div>