var regNome = new RegExp("[A-z ]{6,100}");
var regEmail = new RegExp("(?=@.)");
var regSenha = new RegExp("^(?=.*[A-Z])(?=.*[!#@$%&-+_(){}])(?=.*[0-9])(?=.*[a-z]).{6,25}$");
var regConfirma = new RegExp("^(?=.*[A-Z])(?=.*[!#@$%&-+_(){}])(?=.*[0-9])(?=.*[a-z]).{6,25}$");
var regCPF = new RegExp("[0-9]{9}-[0-9]{2}");
var regTel = new RegExp("[0-9]{4,5}-[0-9]{4}");


function validar(){
    nome.classList.remove("erro");
    email.classList.remove("erro");
    senha.classList.remove("erro");
    confirma.classList.remove("erro");
    cpf.classList.remove("erro");
    telefone.classList.remove("erro");

    erros.innerHTML = "";

    if(!regNome.test(nome.value)){
        erros.innerHTML = erros.innerHTML + 
            " Informe um nome completo ! ";
        nome.classList.add("erro");
        nome.focus();
    }
    if(!regEmail.test(email.value)){
        erros.innerHTML = erros.innerHTML + 
            " Informe um email valido ! ";
        email.classList.add("erro");
        email.focus();
    }
    if(!regSenha.test(senha.value)){
        erros.innerHTML = erros.innerHTML + 
            " Informe uma senha forte ! ";
        senha.classList.add("erro");
        senha.focus();       
    }
    if(!regConfirma.test(senha.value)){
        erros.innerHTML = erros.innerHTML + 
            " As senhas devem coincidir !</br>";
        confirma.classList.add("erro");
        senha.focus();     
    }
    if(!regCPF.test(cpf.value)){
        erros.innerHTML = erros.innerHTML + 
            " Informe um cpf valido ! ";
        cpf.classList.add("erro");
        cpf.focus();
    }
    if(!regTel.test(telefone.value)){
        erros.innerHTML = erros.innerHTML + 
            "Informe um telefone valido !";
        telefone.classList.add("erro");
        telefone.focus();
    }
    else{
        alert("tudo certo");
    }
}



