<main>
    <div class="border-lg mt-5">
        <h3 class="text-white">Mis apartamentos</h3>
        <div class="text-start"><button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ApartmentModal" onclick="createApartment()"><i class="far fa-plus-square fa-lg"></i> Añadir apartamentos</button></div>
        <div class="row">
        <?php foreach($data as $valor): ?>
            <div class="col-sm-12 col-md-6 pt-2 ">
                <div class="card bg-dark apartment_selected">
                    <div class="card-body row">
                        <div class="col-sm-12 col-md-6">
                            <img src="<?php echo($valor->image);?>" alt="Imagen de un apartamento" style="width: 100%;" data-bs-toggle="modal" data-bs-target="#detailModal" onclick='detailApartment(<?php echo(json_encode ((array) $valor));?>)'>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <p class="text-white"><?php echo($valor->city);?>/<?php echo($valor->department);?>/<?php echo($valor->country);?></span>
                            <br>
                            <p class="text-white">Habitaciones: <?php echo($valor->rooms);?></p>
                            <p class="text-white">Direccion: <?php echo($valor->direction);?></p>
                            <p class="text-white text-end">Precio: <?php echo($valor->value_night);?></p>
                            <p class="text-end">
                                <button type="button"  class="btn btn-warning m-2" data-bs-toggle="modal" data-bs-target="#ApartmentModal" onclick='updateApartment(<?php print_r(json_encode ((array) $valor));?>)'>
                                    <i class="fas fa-edit fa-md"></i>
                                </button>
                                <button class="btn btn-danger m-2" data-bs-toggle="modal" data-bs-target="#deleteApartmentModal" onclick="deleteApartment(<?php echo($valor->id_apartment)?>)">
                                    <i class="far fa-trash-alt fa-md"></i>
                                </button>
                            </p>    
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach?>
    </div>
</main>

<!-- Modal Create Apartments-->
<div class="modal fade" id="ApartmentModal" tabindex="-1" aria-labelledby="ApartmentLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ApartmentLabel"><i class="far fa-plus-square fa-lg"></i> Gestionar Apartamento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?php echo base_url()?>/addApartment" method="POST" enctype="multipart/form-data" id="modalForm" onsubmit="return validateApartment()">
        <div class="modal-body">
            <div class="row">
                <input type="hidden" name="id_apartment" id='id_apartment'>
                <div class="col-4 mb-3">
                    <label for="inputCountry" class="form-label">País</label>
                    <input type="text" class="form-control" name="inputCountry" id="inputCountry" required>
                </div>
                <div class="col-4 mb-3">
                    <label for="inputDepartment" class="form-label">Departamento/Estado</label>
                    <input type="text" name="inputDepartment" id="inputDepartment" class="form-control" required>
                </div>
                <div class="col-4 mb-3">
                    <label for="inputCity" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" name="inputCity" id="inputCity" required>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="inputAdress" class="form-label">Dirección</label>
                    <input type="text" class="form-control" name="inputAdress" id="inputAdress" required>
                </div>
                <div class="col-6 mb-3">
                    <label for="inputRoms" class="form-label">Numero de habitaciones:</label>
                    <input type="number" class="form-control" name="inputRoms" id="inputRoms" required>
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="inputNight" class="form-label">Valor por noche</label>
                    <input type="text" class="form-control" name="inputNight" id="inputNight" required>
                </div>
                <div class="col-6 mb-3">
                    <label for="inputUbication" class="form-label">Ubicacion Google maps(URL de la ubicacion)</label>
                    <input type="url" class="form-control" name="inputUbication" id="inputUbication" required>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <label for="inputImage" class="form-label">Imagen destacada</label>
                    <input type="file" class="form-control" name="inputImage" id="inputImage" accept="image/*">
                </div>
                <div class="col-12">
                    <label for="inputImage1" class="form-label">Imagen uno</label>
                    <input type="file" class="form-control" name="inputImage1" id="inputImage1" accept="image/*">
                </div>
                <div class="col-12">
                    <label for="inputImage2" class="form-label">Imagen dos</label>
                    <input type="file" class="form-control" name="inputImage2" id="inputImage2" accept="image/*">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="mb-3">
                        <label for="inputReview" class="form-label">Reseña de el apartamento</label>
                        <textarea class="form-control" placeholder="Escribe una pequeña reseña de el apartamento" id="inputReview" style="height: 145px" name="review" require></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            <button type="submit" class="btn btn-success">Guardar cambios</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal Delete Apartments-->
<div class="modal fade" id="deleteApartmentModal" tabindex="-1" aria-labelledby="deleteApartmentLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteApartmentLabel"><i class="far fa-trash-alt fa-md"></i> Eliminar Apartamento</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form  action="<?php echo base_url()?>/removeApartment" method="POST" >
        <div class="modal-body">
            <p class="h3">¿Desea Eliminar el apartamento?</p>
            <input type="hidden" id='removeApartment' name='id_apartment' require>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-danger">Eliminar</button>
        </div>

      </form>
    </div>
  </div>
</div>

<!-- Modal Apartment Detail -->
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
            <p><i class="fas fa-route fa-2x"></i>  Ubicacion en el mapa: <br/><a id="ubication" target="_blank">ir a ubicación</a></p>
            <p><i class="fas fa-bed fa-2x"></i>  Numero de salas:  <span id="rooms"></span></p><br/>
            <p><i class="fas fa-moon fa-2x"></i>  Valor por noche: <span id="value"></span></p><br/>
            <p><i class="fas fa-align-justify fa-2x"></i>  Reseña: <br/><span id="review"></span></p>
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

<script>
    document.addEventListener("DOMContentLoaded", () => {
        let state = '<?php echo($state);?>';
        if(state!=='error' && state!==''){    
            Swal.fire({
                title: state,
                icon: 'success'
            });
        }else if(state!==''){
            Swal.fire({
                title: state,
                icon: 'error'
            });
        }
        console.log(state);
    });

    document.body.classList.remove('background')
    document.body.classList.add('background-1')
</script>

