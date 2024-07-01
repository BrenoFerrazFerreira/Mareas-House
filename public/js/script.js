// script.js
const modelosFiatMarea = [
    'Marea 1.6',
    'Marea 1.8',
    'Marea 2.0',
    // Adicione outros modelos aqui
];

function exibirModelos() {
    const inputModelo = document.querySelector('.search-input');
    const modeloSelecionado = inputModelo.value;

    if (modelosFiatMarea.includes(modeloSelecionado)) {
        const resultado = document.getElementById('resultado');
        resultado.textContent = `Modelo selecionado: ${modeloSelecionado}`;
    } else {
        alert('Modelo não encontrado. Selecione um modelo válido.');
    }
}


const navbar = document.querySelector(".navbar");
        const menuButton = document.querySelector(".menu-button");
        menuButton.addEventListener("click", () => {
            navbar.classList.toggle("show-menu");
        });


        const imgs = document.querySelectorAll('.img-select a');
        const imgBtns = [...imgs];
        let imgId = 1;
        
        imgBtns.forEach((imgItem) => {
            imgItem.addEventListener('click', (event) => {
                event.preventDefault();
                imgId = imgItem.dataset.id;
                slideImage();
            });
        });
        
        function slideImage(){
            const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;
        
            document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
        }
        
        window.addEventListener('resize', slideImage);