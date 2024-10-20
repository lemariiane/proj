function buscaCep(){
    let cep= document.getElementById('cep').value;
    if(cep!=""){
        let url="https://brasilapi.com.br/api/cep/v1/" + cep;
        let req = new XMLHttpRequest();
        req.open("GET", url);
        req.send();

        req.onload = function(){
            if(req.status ===200){
                let endereco = JSON.parse(req.response);
            document.getElementById("estadopac".value)=endereco.state;
            document.getElementById("cidadepac".value)=endereco.city;
            document.getElementById("bairropac".value)=endereco.neighborhood;
            document.getElementById("ruapac".value)=endereco.street;
            document.getElementById("error-message").style.display = 'none';
            }else if(req.status === 404){
                document.getElementById("error-message").style.display = 'block';
            }
        }
    }
}

window.onload = function(){
    let cep= documment.getElementById("cep");
    cep.addEventListener("blur", buscaCep);
}