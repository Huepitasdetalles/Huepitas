var url = "./../Controlador/Inventario.controlador.php";

function Consultar(){
    $.ajax({
        url: url,
        data: {"accion": "CONSULTAR"},
        type: 'POST',
        dataType: 'json'
    }).done(function(response){
        var html = "";
        $.each(response, function(index, data){
            html += "<tr>";
            html += "<td>" + data.listadeproductos + "</td>";
            html += "<td>" + data.cantidadactual + "</td>";
            html += "<td>" + data.cantidaddesalida + "</td>";
            html += "<td>" + data.cantidaddeentrada + "</td>";
            html += "<td>";
            html += "<button class='btn btn-warning' onclick='ConsultarPorId("+ data.idInventario+")'><span class= 'fa fa-edit'></span>Modificar</button>"
            html += "<button class='btn btn-danger' onclick='Eliminar("+ data.idInventario+")'><span class= 'fa fa-trash'></span>Eliminar</button>"
            html += "<td>";
            html += "<tr>";
        });

        document.getElementById("datos").innerHTML = html;
    }).fail(function(response){
        console.log(response)
    });
}

function ConsultarPorId(idInventario){
    $.ajax({
        url: url,
        data: {"idInventario" : idInventario, "accion": "CONSULTAR_ID"},
        type:'POST',
        dataType: 'json'
    }).done(function(response){
        document.getElementById('listadeproductos').value = response.listadeproductos;
        document.getElementById('cantidadactual').value = response.cantidadactual;
        document.getElementById('cantidaddesalida').value = response.cantidaddesalida;
        document.getElementById('cantidaddeentrada').value = response.cantidaddeentrada;
        document.getElementById('idInventario').value = response.idInventario;
    }).fail(function(response){
        console.log(response);
    });

}

function Guardar(){
    $.ajax({
        url: url,
        data: retornarDatos("GUARDAR"),
        type: 'POST',
        dataType: 'json'
    }).done(function(response){
        if(response == "OK"){
            alert("Datos guardados con éxito")
        }else{
            alert(response);
        }
    }).fail(function(response){
        console.log(response);
    });
}

function Modificar(){
    $.ajax({
        url: url,
        data: retornarDatos("MODIFICAR"),
        type: 'POST',
        dataType: 'json'  
    }).done(function(response){
        if(response == "OK"){
            alert("Datos guardados con éxito")
        }else{
            alert(response);
        }
    }).fail(function(response){
        console.log(response);
    });  
}

function Eliminar(idInventario){
    $.ajax({
        url:url,
        data: {"idInventario": idInventario, "accion": "ELIMINAR"},
        type: 'POST',
        dataType: 'json'
    }).done(function(response){
        if(response == "OK"){
            alert("Datos guardados con éxito")
        }else{
            alert(response);
        }
    }).fail(function(response){
        console.log(response);
    });

}

function validar(){
    listadeproductos = document.getElementById('listadeproductos').value;
    cantidadactual = document.getElementById('cantidadactual').value;
    cantidaddesalida = document.getElementById('cantidaddesalida').value;
    cantidaddeentrada = document.getElementById('cantidaddeentrada').value;

    if(listadeproductos == "" || cantidadactual == "" || cantidaddesalida == "" || cantidaddeentrada == ""){
        return false;
    } 
    return true;
}

function retornarDatos(accion){
    idInventario = document.getElementById("idInventario").value;
    return{
        "listadeproductos" : document.getElementById('listadeproductos').value,
        "cantidadactual" : document.getElementById('cantidadactual').value,
        "cantidaddesalida" : document.getElementById('cantidaddesalida').value,
        "cantidaddeentrada" : document.getElementById('cantidaddeentrada').value,
        "accion" : accion,
        "idInventario" : document.getElementById("idInventario").value
      
    };
}