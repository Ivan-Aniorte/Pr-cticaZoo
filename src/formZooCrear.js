let cantidadFormulario = 'a';
let cant = 0;

document.getElementById('cantidadAnimales').addEventListener('change', (e)=>{
    cantidadFormulario = parseInt(document.getElementById('cantidadAnimales').value);
    let contenedor = document.getElementById('contenedorAnimales');
    document.getElementById('contenedorAnimales').textContent = "";
    cant = 0;

   if(cantidadFormulario > 0){
        for(let i=0; i< cantidadFormulario; i++){
            let animal = 'animal' + i;
            let nombreAnimal = document.createElement('input');
            nombreAnimal.type = 'text';
            nombreAnimal.name = animal;
            nombreAnimal.id = animal;
            nombreAnimal.placeholder = 'Nombre del animal';

            // Campo imagen
            let imagenAnimal = document.createElement('input');
            imagenAnimal.type = 'file';
            imagenAnimal.name = 'imagen' + i;
            imagenAnimal.accept = 'image/*'; 

            // Añadir al formulario
            contenedor.append(nombreAnimal, imagenAnimal, document.createElement('br'));
            cant++;
        }
   }else{
        e.preventDefault();
        document.getElementById('cantidadAnimales').value = 1;
        window.alert('INGRESA UNA CANTIDAD MAYOR A 0!!');
   }
});


document.getElementById('formAnimal').addEventListener('submit', (e)=>{
  
      const cantidad = parseInt(document.getElementById('cantidadAnimales').value) || 0;
    document.getElementById('animalesCantidadphp').value = cantidad;
    
});