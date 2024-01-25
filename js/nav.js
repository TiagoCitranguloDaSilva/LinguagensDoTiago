function nav(destiny){
    if(document.title != "HOME"){
        document.location.replace("../" + destiny)
    }else{
        document.location.replace(destiny)
    }
}

function pageName(name){
    document.getElementById('nomePagina').children[0].innerText = name;
}