function nav(destiny){
    let path = document.location.pathname
    if(path != "\\index.php"){
        document.location.replace("../" + destiny)
    }else{
        document.location.replace(destiny)
    }
}

function pageName(name){
    document.getElementById('nomePagina').innerText = name;
}