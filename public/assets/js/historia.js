document.getElementById('1942').style.display = 'none';
document.getElementById('menos').style.display = 'none';

function mashistoria(){
    if(document.getElementById('1942').style.display = 'none'){
        document.getElementById('1942').style.display = 'block'
        document.getElementById('menos').style.display = 'block';
        document.getElementById('mas').style.display = 'none';
    }
}

function menoshistoria(){
    if(document.getElementById('1942').style.display == 'block'){
        document.getElementById('1942').style.display = 'none'
        document.getElementById('mas').style.display = 'block';
        document.getElementById('menos').style.display = 'none';
    }
}