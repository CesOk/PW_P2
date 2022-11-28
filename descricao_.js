function cesta(codigo){
    link = "cesta_.php?codigo=";
    link_completo = link + codigo;

    //alert(link_completo);
    location.replace(link_completo);
}