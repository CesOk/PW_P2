function descricao(codigo){
    link = "descricao_.php?codigo=";
    link_completo = link + codigo;

    //alert(link_completo);
    location.replace(link_completo);
}