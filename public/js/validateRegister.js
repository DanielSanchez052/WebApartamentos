const validateRegister=()=>{
    let name = document.getElementById("inputName");
    let email=document.getElementById("inputEmail");
    let country=document.getElementById("inputCountry");
    let city=document.getElementById("inputCity");
    let password=document.getElementById("inputPassword");
    let password2=document.getElementById("inputPassword2");
    let role=document.getElementById("selectRole");

    passwordValid=validatePassword(password.value,password2.value)
    
    if(name.value!="" && email.value.value!="" && country.value!="" && city.value!="" && role.value!="" && passwordValid){
        return true 
        }
    else{
        swal.fire({
            icon:'error',
            title:'El registro no es valido',
            text:'verifica la contraseña, esta debe incluir una mayuscula, una minuscula, un numero y un caracter especial'
        })
        return false
    }
}

const validatePassword = (password)=>{
    if(password.length >= 8)
			{		
				var upper = false;
				var lower = false;
				var number = false;
				var special = false;
				
				for(var i = 0;i<password.length;i++)
				{
					if(password.charCodeAt(i) >= 65 && password.charCodeAt(i) <= 90)
					{
						upper = true;
					}
					else if(password.charCodeAt(i) >= 97 && password.charCodeAt(i) <= 122)
					{
						lower = true;
					}
					else if(password.charCodeAt(i) >= 48 && password.charCodeAt(i) <= 57)
					{
						number = true;
					}
					else
					{
						special = true;
					}
				}
				if(upper == true && lower == true && special == true && number == true)
				{
					return true;
				}
			}
			return false;
}