function formataRG(RG) {
    const elementoAlvo = RG
    const rgAtual = RG.value   
    
    let rgAtualizado;
    
    rgAtualizado = rgAtual.replace(/(\d{2})(\d{3})(\d{3})(\d{1})/, 
     function(regex, argumento1, argumento2, argumento3, argumento4 ) {
            return argumento1 + '.' + argumento2 + '.' + argumento3 + '-' + argumento4;
    })  
    elementoAlvo.value = rgAtualizado; 
}       