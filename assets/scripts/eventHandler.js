<<<<<<< HEAD
const produtos = document.getElementById('produtos');
const index = document.querySelectorAll('img.index-products');
const jordan = document.querySelector('div.sub-hero');

produtos.addEventListener('mouseover', () => {
    document.querySelector('div.produtos-hover').style.display = "grid";
    for(let i = 0; i < 3; i++){
        index[i].style.filter = "blur(5px)";
    }
});

produtos.addEventListener('mouseout', () => {
    document.querySelector('div.produtos-hover').style.display = "none";
    for(let i = 0; i < 3; i++){
        index[i].style.filter = "blur(0px)";
    }
});
=======
const produtos = document.getElementById('produtos');
const index = document.querySelectorAll('img.index-products');

const jordan = document.querySelector('div.sub-hero');

produtos.addEventListener('mouseover', () => {
    document.querySelector('div.produtos-hover').style.display = "grid";
    for(let i = 0; i < 3; i++){
        index[i].style.filter = "blur(5px)";
    }
});

produtos.addEventListener('mouseout', () => {
    document.querySelector('div.produtos-hover').style.display = "none";
    for(let i = 0; i < 3; i++){
        index[i].style.filter = "blur(0px)";
    }
});

>>>>>>> 6fea23db9353af15956510dfee15927d93e7105b
