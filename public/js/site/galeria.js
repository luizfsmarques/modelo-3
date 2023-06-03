let navbar = document.querySelector(".navbar");

let imagens = document.querySelectorAll('.box-imagem');
let fundoEscuro = document.querySelector('#fundo-escuro');
let fecharFoto = document.querySelector('#fechar-foto');

let esconderElementos = () => {
    for(let i = 0; i<imagens.length; i++){
        imagens[i].style.visibility = 'hidden';
    }
    navbar.style.visibility = 'hidden';
}

let destacarImagem = ( elemento ) => {

    let imagem = document.querySelector(elemento);
    
    imagem.style.visibility = 'visible';

    //para esconder o figcaption e p desta imagem
    let imagemFigcaption = document.querySelector(elemento+' figcaption');
    let imagemP = document.querySelector(elemento+' p');

    imagemP.style.visibility = 'hidden';
    imagemFigcaption.style.visibility = 'hidden';

    imagem.style.position = 'fixed';
    imagem.style.top = '40px';
    imagem.style.left = '22.5%';
    imagem.style.width = '55%';
    imagem.style.height = '55%';

    //colocar fundo escuro
    fundoEscuro.style.visibility = 'visible';
    fundoEscuro.style.position = 'fixed';
    fundoEscuro.style.top = '0';
    fundoEscuro.style.left = '0';
    fundoEscuro.style.backgroundColor = 'black';
    fundoEscuro.style.opacity = '0.7';
    fundoEscuro.style.width = '100%';
    fundoEscuro.style.height = '100%';

    //faz aparecer fechar foto
    fecharFoto.style.visibility = 'visible';
    fecharFoto.style.position = 'fixed';
    fecharFoto.style.top = '20px';
    fecharFoto.style.right = '20px';
    fecharFoto.style.color = '#ffffff';
    fecharFoto.style.fontSize = '2.5rem';
    fecharFoto.style.cursor = 'pointer';
}

Array.from(imagens).forEach((img) => {
    img.addEventListener('click', (event) => {
        if( event.target.nodeName === "P" )
        {
            let paiP = '#'+event.target.offsetParent.offsetParent.offsetParent.id;
            
            esconderElementos();
            destacarImagem( paiP );


        }else if( event.target.nodeName === "FIGCAPTION" ){

            console.log('figcaption');
            console.log( event.target.offsetParent.offsetParent.id);
            console.log( '#'+event.target.offsetParent.offsetParent.id);
        }

    });
  });

//restaura a galeria recarregando a página
fecharFoto.addEventListener('click', () => {
    location.reload();
});






