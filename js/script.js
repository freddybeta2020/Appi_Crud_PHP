var usuarios = [];
let url = '../../registro_usuario/usuarios_backend/api/usuarios.php'; 

function obtenerUsuarios() {
   axios({
        method: 'GET',
        url: url, 
        responseType: 'json',

   }).then(res=>{
    usuarios = res.data;    
    llenarTbala();
   }).catch(error=>{
    console.error(error);
   }); 
}

obtenerUsuarios();

function llenarTbala() {
    document.querySelector('#tabla_info tbody').innerHTML = "";
    for(let i = 0 ;i < usuarios.length;i++ ){
    document.querySelector('#tabla_info tbody').innerHTML +=
   ` <tr>
      <td>${usuarios[i].nombre}</td>
      <td>${usuarios[i].apellido}</td>
      <td>${usuarios[i].fechaNacimiento}</td>
      <td>${usuarios[i].pais}</td>
      <td class="d-flex justify-content-space-between">
      <button type="button" onClick="eliminar(${i})" class="btn btn-primary mb-3 ">Eliminar</button>
      <button type="button" onClick="seleccionar(${i})" class="btn btn-primary mb-3 ">Editar</button> 
      <span class="m-2"></span>
       </td>
    </tr> `;
    }
}

function eliminar(indice) {
    console.log("Eliminar el elemento con el indice " + indice);
    axios({
        method: 'DELETE',
        url: url +`?id=${indice}`, 
        responseType: 'json',

   }).then(res=>{    
    console.log(res.data);
    obtenerUsuarios();   
   }).catch(error=>{
    console.error(error);
   }); 
}

function Guardar() {
    let usuario = {
        nombre: document.getElementById('nombre').value,
        apellido: document.getElementById('apellido').value,
        fechaNacimiento: document.getElementById('fechaNacimiento').value,
        pais: document.getElementById('pais').value
    };
    //console.log(usuario);
    axios({
        method: 'POST',
        url: '../../registro_usuario/usuarios_backend/api/usuarios.php',
        responseType: 'json',
        data:usuario,
        timeout: 5000
    }).then(res=> {
        // Manejar la respuesta exitosa
    }).catch(error => {
        if (axios.isAxiosError(error)) {
            // Manejar errores de Axios específicos
            if (error.code === 'ECONNABORTED') {
                console.error('Tiempo de espera agotado:', error.message);
            } else {
                console.error('Error en la solicitud:', error.message);
            }
        } else {
            // Manejar otros tipos de errores
            console.error('Error inesperado:', error);
        }
    });   
    
}

function Nuevo() {
     document.getElementById('nombre').value = null,
     document.getElementById('apellido').value = null,
     document.getElementById('fechaNacimiento').value = null,
     document.getElementById('pais').value = null
}

function Actualizar() {

    
}

function formatearFecha(fecha) {
    // La fecha original está en formato "dd/MM/yyyy"
    const partes = fecha.split('/');
    if (partes.length === 3) {
      const dia = partes[0];
      const mes = partes[1];
      const año = partes[2];
  
      // Formatear la fecha como "yyyy-MM-dd"
      return `${año}-${mes}-${dia}`;
    } else {
      // Si la fecha no tiene el formato esperado, devolverla sin cambios
      return fecha;
    }
  }

function seleccionar(indice) {
    console.log(("Se selecciono el elemento " + indice));
    axios({
        method: 'GET',
        url: url +`?id=${indice}`, 
        responseType: 'json',
   }).then(res=>{    
    console.log(res.data);
    document.getElementById('nombre').value = res.data.nombre,
    document.getElementById('apellido').value = res.data.apellido,
    fechaFormateada = formatearFecha(res.data.fechaNacimiento)
    document.getElementById('fechaNacimiento').value = fechaFormateada;
    document.getElementById('pais').value = res.data.pais      
   }).catch(error=>{
    console.error(error);
   }); 
}