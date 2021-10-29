function onlyNumbers(str){
    return str.replace(/\D/g,"")
}

function valueMask(){
    document.querySelector('preco-input').addEventListener('input', (e) =>{
        let value = onlyNumbers(e.target.value)
        value = value ? parseInt(value):0;
        e.target.value = 'R$ ' + value/100
        e.target.value = e.target.replace('.', ',')
    })
}

valueMask()