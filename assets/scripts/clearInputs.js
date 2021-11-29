const clearButton = document.getElementById('clear1');


clearButton.addEventListener('click', () => {
    
    document.getElementById('noome').value = '';
    document.getElementById('RG').value = '';
    document.getElementById('CPF').value = '';
    document.getElementById('adress').value = '';
    document.getElementById('gender').value = 'Masculino';
    document.getElementById('birthday').value = '';
    document.getElementById('alone').checked = false;
    document.getElementById('married').checked = false;
    document.getElementById('widower').checked = false;

});