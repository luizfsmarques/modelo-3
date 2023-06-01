console.log("jfb.asdjkfbljfbsdla oi");

let imagens = document.querySelectorAll('.box-imagem');

let teste = (param) => {
    // alert("Testando!");
    alert(param);

}



Array.from(imagens).forEach((img) => {
    img.addEventListener('click', (event) => {

        if( event.target.nodeName === "P" )
        {
            console.log('paragrafo');
            console.log( event.target.offsetParent.offsetParent.offsetParent.id);
            console.log( '#'+event.target.offsetParent.offsetParent.offsetParent.id);


        }else if( event.target.nodeName === "FIGCAPTION" ){

            console.log('figcaption');
            console.log( event.target.offsetParent.offsetParent.id);
            console.log( '#'+event.target.offsetParent.offsetParent.id);

        }

        // console.log( typeof event.target.offsetParent.offsetParent.offsetParent.id);

    });
  });


// Array.from(imagens).forEach( (img) => {
//     img.addEventListener('click', estiloImagem);
// });













