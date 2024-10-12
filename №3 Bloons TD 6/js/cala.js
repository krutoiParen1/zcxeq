// button
var regular = document.getElementById('regular')
var wars = document.getElementById('wars')
var magic = document.getElementById('magic')
var helper = document.getElementById('helper')
var Close = document.getElementById('btn_shlow_close')


// blocks
var regularr = document.getElementById('regularr')
var warss = document.getElementById('warss')
var magicc = document.getElementById('magicc')
var helperr = document.getElementById('helperr')
// blocks
var regularrr = document.getElementById('regularrr')
var warsss = document.getElementById('warsss')
var magiccc = document.getElementById('magiccc')
var helperrr = document.getElementById('helperrr')
var block = document.getElementById('gg_monkey_block')

Close.addEventListener('click', function(){
    if(block.style.display == 'flex'){
        block.style.display = 'none'
        Close.innerHTML = 'Развернуть макак'  
    }else{
        block.style.display = 'flex'
        Close.innerHTML = 'Свернуть макак'   
    }
})
console.log(Close)

regular.addEventListener('click', function(){
    regularr.style.display = 'flex'
    warss.style.display = 'none'
    magicc.style.display = 'none'
    helperr.style.display = 'none'
    regularrr.style.display = 'flex'
    warsss.style.display = 'none'
    magiccc.style.display = 'none'
    helperrr.style.display = 'none'
})
wars.addEventListener('click', function(){
    regularr.style.display = 'none'
    warss.style.display = 'flex'
    magicc.style.display = 'none'
    helperr.style.display = 'none'
    regularrr.style.display = 'none'
    warsss.style.display = 'flex'
    magiccc.style.display = 'none'
    helperrr.style.display = 'none'
})
magic.addEventListener('click', function(){
    regularr.style.display = 'none'
    warss.style.display = 'none'
    magicc.style.display = 'flex'
    helperr.style.display = 'none'
    regularrr.style.display = 'none'
    warsss.style.display = 'none'
    magiccc.style.display = 'flex'
    helperrr.style.display = 'none'
})
helper.addEventListener('click', function(){
    regularr.style.display = 'none'
    warss.style.display = 'none'
    magicc.style.display = 'none'
    helperr.style.display = 'flex'
    regularrr.style.display = 'none'
    warsss.style.display = 'none'
    magiccc.style.display = 'none'
    helperrr.style.display = 'flex'
})