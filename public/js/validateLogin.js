const validateLogin = ()=>{
    let email=document.getElementById("inputEmail");
    let password=document.getElementById("inputPassword");

    if(email.value != "" && password.value !=""){
        return true 
        }
    else{
        swal.fire({
            icon:'error',
            title:'ha ocurrido un error al tratar de iniciar sesión'
        });
        return false
    }
}
