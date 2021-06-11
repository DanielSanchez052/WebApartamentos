const deleteApartment =(id)=> {
    let inputId = document.getElementById('removeApartment');
    inputId.value=id;
}

const updateApartment=(data)=>{
    cleanModal();
    //id_apartment,country,department,city,direction,rooms,value_night,maps_ubication,image,image1,image2,image3,review
    modalForm = document.getElementById("modalForm");
    id_apartment=document.getElementById("id_apartment");
    country=document.getElementById("inputCountry");
    department=document.getElementById("inputDepartment");
    city=document.getElementById("inputCity");
    direction=document.getElementById("inputAdress");
    rooms=document.getElementById("inputRoms");
    value_night=document.getElementById("inputNight");
    maps_ubication=document.getElementById("inputUbication");
    review=document.getElementById("inputReview");
    //---------
    id_apartment.value = data.id_apartment;
    country.value = data.country;
    department.value = data.department;
    city.value = data.city;
    direction.value = data.direction;
    rooms.value = data.rooms;
    value_night.value = data.value_night;
    maps_ubication.value = data.maps_ubication;
    review.value = data.review;
    //-----------
    modalForm.action = "http://localhost/WebApartamentos/public/updateApartment";
    
}

const createApartment=()=>{
    cleanModal();
    modalForm = document.getElementById("modalForm");
    modalForm.action = "http://localhost/WebApartamentos/public/addApartment";
}

const cleanModal=()=>{
    // modalForm = document.getElementById("modalForm");
    id_apartment=document.getElementById("id_apartment");
    country=document.getElementById("inputCountry");
    department=document.getElementById("inputDepartment");
    city=document.getElementById("inputCity");
    direction=document.getElementById("inputAdress");
    rooms=document.getElementById("inputRoms");
    value_night=document.getElementById("inputNight");
    maps_ubication=document.getElementById("inputUbication");
    let image = document.getElementById('inputImage');
    let image1 = document.getElementById('inputImage1');
    let image2 = document.getElementById('inputImage2');
    let image3 = document.getElementById('inputImage3');
    review=document.getElementById("inputReview");
    //----------
    id_apartment.value="";
    country.value="";
    department.value="";
    city.value="";
    direction.value="";
    rooms.value="";
    value_night.value="";
    maps_ubication.value="";
    image.value="";
    image1.value="";
    image2.value="";    
    review.value="";

}

const detailApartment=(data)=>{
    let image1 = document.getElementById("image1");
    let image2 = document.getElementById("image2");
    let image3 = document.getElementById("image3");
    let owner =document.getElementById("owner");
    let place =document.getElementById("place");
    let direction =document.getElementById("direction");
    let ubication =document.getElementById("ubication");
    let rooms =document.getElementById("rooms");
    let value =document.getElementById("value");
    let review =document.getElementById("review");

    owner.innerHTML=data.username;
    let placeText=`${data.city}/${data.department}/${data.country}`;
    place.innerHTML=placeText;
    direction.innerHTML=data.direction;
    ubication.href=data.maps_ubication;
    rooms.innerHTML=data.rooms;
    value.innerHTML=data.value_night;
    review.innerHTML=data.review;

    image1.src=data.image==""?image1.src:data.image;
    image2.src=data.image1==""?image2.src:data.image1;
    image3.src= data.image2==""?image3.src:data.image2;
    console.log(data);
}