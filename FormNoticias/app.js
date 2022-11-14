let arrImages = [];
let myDropzone = new Dropzone('.dropzone', {
  url:'/Pagina-WEB-AMH/FormNoticias',
  maxFilesize:5242880,
  maxFiles:3,
  acceptedFiles:'.png, .jpg, .jpeg',
  addRemoveLinks:true,
  dictRemoveFile:'Eliminar',
  dictInvalidFileType: "El Archivo subido no es permitido",
  dictFileTooBig: "La imagen es mas grande de lo permitido",
  dictMaxFilesExceeded: "Solamente Se puede subir 3 Imagenes"
})

myDropzone.on('addedfile', file => {
  arrImages.push(file);
})

myDropzone.on('removedfile', file => {
  let i = arrImages.indexOf(file);
  arrImages.splice(i, 1);
})

document.getElementById('send').addEventListener('click', () => {
  let not = [];
  var val=verificacion(arrImages);
  if(val<=0){
    for(let i=0; i<arrImages.length; i++) {
    let imgData = new FormData();
    imgData.append('file', arrImages[i]);
    fetch('./FormNoticias/upload.php', {
      method:'POST',
      body:imgData
    }).then(res => res.json()).then(data => {
      not.push(data);
    });
  }
  }else{
    alert('Revisaaate');
  }
  

  if (!not.includes('fail')) {
    alert('Se ha guardado correctamente');
  } else {
    alert('Error.. al Subir los datos');
  }
})
function verificacion(arrImages) { 
  var conta=0;
  for(let i=0; i<arrImages.length; i++){
    if(arrImages[i] == "image/pjpeg" ||  arrImages[i] == "image/jpeg" || arrImages[i] == "image/png" || arrImages[i] == "image/gif"){
    }else{
      conta++;
      alert(''+arrImages[i]);
    }
  }
  return 0;
}
