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
      var observaciones =  document.getElementById("observaciones").value;
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
        + "&observaciones="+observaciones
        );
}
 function realizarAsignacionClienteAColumbario()
 {
    // alert('idgrupo de producto'+idGrupo);
      var idColumbario =  document.getElementById("idColumbario").value;
      var idClienteEscogido =  document.getElementById("idClienteEscogido").value;
        const http=new XMLHttpRequest();
        const url = '../columbarios/columbario.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                // document.getElementById("mpdalBodyColumbario").innerHTML = this.responseText;
            }
        };
        
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=realizarAsignacionClienteAColumbario"
        + "&idColumbario="+idColumbario
        + "&idClienteEscogido="+idClienteEscogido
        );
        setTimeout(() => {
            verInfoColumbario(idColumbario);
        }, 300);
}
 function buscarNumeroColumbario()
 {
    // alert('idgrupo de producto'+idGrupo);
      var numeroColumbario =  document.getElementById("numeroColumbario").value;
        const http=new XMLHttpRequest();
        const url = '../columbarios/columbario.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("divMuestreColumbarios").innerHTML = this.responseText;
            }
        };
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=buscarNumeroColumbario"
        + "&numeroColumbario="+numeroColumbario
        );
}
 function filtrarEstadosColumbarios()
 {
    // alert('idgrupo de producto'+idGrupo);
      var idEstado =  document.getElementById("idEstado").value;
        const http=new XMLHttpRequest();
        const url = '../columbarios/columbario.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("divMuestreColumbarios").innerHTML = this.responseText;
            }
        };
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=filtrarEstadosColumbarios"
        + "&idEstado="+idEstado
        );
}


 function verInfoColumbario(idColumbario)
 {
        const http=new XMLHttpRequest();
        const url = '../columbarios/columbario.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("mpdalBodyColumbario").innerHTML = this.responseText;
            }
        };
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=verInfoColumbario"
        + "&idColumbario="+idColumbario
        );
}
 function formuAsignarColumbario(idColumbario)
 {
        const http=new XMLHttpRequest();
        const url = '../columbarios/columbario.php';
        http.onreadystatechange = function(){
            if(this.readyState == 4 && this.status ==200){
                document.getElementById("mpdalBodyColumbario").innerHTML = this.responseText;
            }
        };
        http.open("POST",url);
        http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        http.send("opcion=formuAsignarColumbario"
        + "&idColumbario="+idColumbario
        );
}

