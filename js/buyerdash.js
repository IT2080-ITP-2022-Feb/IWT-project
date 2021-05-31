
function otherfun(x){
    if (x==1){
        document.getElementById('un_otherid').style.display = 'block';
        document.getElementById('un_otherid1').style.display = 'none';
        document.getElementById('un_otherid2').style.display = 'none';
    }

    else if (x==2){
        document.getElementById('un_otherid1').style.display = 'block';
        document.getElementById('un_otherid').style.display = 'none';
        document.getElementById('un_otherid2').style.display = 'none';
    }
    else if (x==3){
        document.getElementById('un_otherid2').style.display = 'block';
        document.getElementById('un_otherid1').style.display = 'none';
        document.getElementById('un_otherid').style.display = 'none';
    }
}

