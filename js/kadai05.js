const uploadImage = document.querySelector( "#upload_image" );
const thumbImage  = document.querySelector( ".thumb img" );

uploadImage.onchange = ( e )=>{

  const elem = e.currentTarget;
  let files = elem.files[ elem.files.length -1 ];
  let fileReader = new FileReader();
  fileReader.readAsDataURL( files );
  fileReader.onload = ( e ) => {
    let base64Img = e.target.result;
    thumbImage.setAttribute( "src", base64Img );
  }

}
