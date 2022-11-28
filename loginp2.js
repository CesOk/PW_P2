var regSenha = new RegExp("^(?=.*[A-Z])(?=.*[!#@$%&-+_(){}])(?=.*[0-9])(?=.*[a-z]).{6,25}$");
var regEmail = new RegExp("(?=@.)");
var regDeny = new RegExp("or 1=1|location.href|<script|lixo|antivac|terra plana");

function validar(){
    senha.classList.remove("erro");
    email.classList.remove("erro");

    if(!regEmail.test(email.value)){
        erros.innerHTML = erros.innerHTML + 
            "Informe um email valido ! ";
        email.classList.add("erro");
        email.focus();
    }
    if(!regSenha.test(senha.value)){
        erros.innerHTML = erros.innerHTML + 
            "Informe uma senha forte ! ";
        senha.classList.add("erro");
        senha.focus();     
    }
    else{
        frm1.submit();
    }
}

function cadastrar(){
    location.replace("cadastro_.php");
}