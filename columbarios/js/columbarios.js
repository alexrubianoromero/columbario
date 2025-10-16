 function pantallaColumbarios123(){
    // alert('columbario');
        const http=new XMLHttpRequest();
        const url = '../columbarios/columbario.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("columncentral").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=pantallaColumbarios"
        // + "&idSuc="+idSuc
        // + "&tipoMov=2"
        );
    }
 function formuNuevoColumbario(){
    // alert('idgrupo de producto'+idGrupo);
        const http=new XMLHttpRequest();
        const url = '../columbarios/columbario.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("mpdalBodyColumbario").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=formuNuevoColumbario"
        // + "&idSuc="+idSuc
        // + "&tipoMov=2"
        );

    }     
 function mostrarColumnarios(){
    // alert('idgrupo de producto'+idGrupo);
        const http=new XMLHttpRequest();
        const url = '../columbarios/columbario.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("divMuestreColumbarios").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=mostrarColumnarios"
        // + "&idSuc="+idSuc
        // + "&tipoMov=2"
        );
    }
 function grabarColumbario()
 {
    // alert('idgrupo de producto'+idGrupo);
      var numero =  document.getElementById("numero").value;
      var idPlanta =  document.getElementById("idPlanta").value;
      var idPared =  document.getElementById("idPared").value;
        const http=new XMLHttpRequest();
        const url = '../columbarios/columbario.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("mpdalBodyColumbario").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=grabarColumbario"
        + "&numero="+numero
        + "&idPlanta="+idPlanta
        + "&idPared="+idPared
        );
}