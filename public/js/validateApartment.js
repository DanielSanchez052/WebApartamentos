const validateApartment = ()=>{
    let id_apartemnt = document.getElementById("modalForm");
    let country = document.getElementById('inputCountry');
    let department = document.getElementById('inputDepartment');
    let city = document.getElementById('inputCity');
    let adress = document.getElementById('inputAdress');
    let roms = document.getElementById('inputRoms');
    let night = document.getElementById('inputNight');
    let ubication = document.getElementById('inputUbication');
    let image = document.getElementById('inputImage');
    let image1 = document.getElementById('inputImage1');
    let image2 = document.getElementById('inputImage2');
    let review = document.getElementById('inputReview');
    let result;
    if(id_apartemnt.value !==''){
        if(country.value != "" && department.value != "" && city.value != "" && adress.value != "" && roms.value > 0 && night.value != "" && ubication.value != "" && image!='' && image1!='' && image2!='' && review.value != ""){
            result = true;
        }
        else {
            swal.fire({
                icon:'error',
                title:'ha ocurrido un error y el formulario no es valido'
            });
            result = false;
        }
    }else{
        if(country.value != "" && department.value != "" && city.value != "" && adress.value != "" && roms.value > 0 && night.value != "" && ubication.value != "" && review.value != ""){
            result = true;
        }else {
            swal.fire({
                icon:'error',
                title:'ha ocurrido un error y el formulario no es valido'
            });
            result = false;
        }
    }
    return result;
}



