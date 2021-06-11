const validateProfile=()=>{
    let imageURL=document.getElementById('inputImageURL');
    let name=document.getElementById('inputName');
    let country=document.getElementById('inputCountry');
    let department=document.getElementById('inputDepartment');
    let city=document.getElementById('inputCity');
    let review=document.getElementById('inputReview');

    if(imageURL.value != '' && name.value != '' && country.value != '' && department.value != '' && city.value != '' && review.value != ''){
        return true;
    }else {
        swal.fire({
            icon:'error',
            title:'ha ocurrido un error al tratar de actualizar el perfil'
        });
        return false;
    }
}