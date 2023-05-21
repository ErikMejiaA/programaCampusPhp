//---------Variables Globales-----------------------------------------
const verOculatrEmoji = document.querySelector('#emoji');
const verOculatrLogo = document.querySelector('#logoCampusLand');
let verEmojiHtml = '';
let chequeado = 0;
//---------------------------------------------------------------------

//----------------cargar las funciones en el DOM-----------------------
document.addEventListener('DOMContentLoaded', () => {

    seleccionarIdiomaImagen();
    limpiar();
    contarCheckboxSeleccionados();

});
//---------------------------------------------------------------------

//----------ver el emoji segun el idioma seleccionado------------------
const seleccionarIdiomaImagen = () => {
    document.querySelector('#idioma').addEventListener('change', (e) => {
        console.log(e.target.value);
        if (e.target.value == 1) {
            verOculatrEmoji.style.display = "block";
            verEmojiHtml = /* html */ `
                <br/>
                <img src="img/triste.png" alt="Trise">
            `;
            verOculatrEmoji.innerHTML = verEmojiHtml;

        } else if (e.target.value == 2) {
            verOculatrEmoji.style.display = "block";
            verEmojiHtml = /* html */ `
                <br/>
                <img src="img/medioTriste.png" alt="Medio Trise">
            `;
            verOculatrEmoji.innerHTML = verEmojiHtml;

        } else if (e.target.value == 3) {
            verOculatrEmoji.style.display = "block";
            verEmojiHtml = /* html */ `
                <br/>
                <img src="img/feliz1.png" alt="Feliz">
            `;
            verOculatrEmoji.innerHTML = verEmojiHtml;

        } else {
            verOculatrEmoji.style.display = "block";
            verEmojiHtml = /* html */ `
                <br/>
                <img src="img/no Ver.png" alt="No ver">
            `;
            verOculatrEmoji.innerHTML = verEmojiHtml;
        }
    })
}
//---------------------------------------------------------------------

//-----------------Oculatr el emoji y el logo de manpus land-----------
const limpiar = () => {
    document.querySelector(".limpiar").addEventListener('click', (e) => {
        verOculatrEmoji.style.display = "none";
        verOculatrLogo.style.display = "none";
    });
}
//---------------------------------------------------------------------

//-----------------------ver y ocultar el log de Campus Land-----------
function contarCheckboxSeleccionados() {
    const verCheckbox = document.querySelectorAll(".che");
    verCheckbox.forEach((val, op) => {
        val.addEventListener('change', (e) => {
            console.log(e.target.checked)
            if (e.target.checked) {
                chequeado ++;
            } else {
                chequeado --;
            }
            console.log(chequeado);
            verOculatrLogoCampusLand(chequeado);
        });
    });
}

function verOculatrLogoCampusLand(numero) {
    if (numero >= 2) {
        verOculatrLogo.style.display = "block";
    } else {
        verOculatrLogo.style.display = "none";
    }
}
//---------------------------------------------------------------------