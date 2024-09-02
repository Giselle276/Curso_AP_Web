function displayimg(box){
    var floresimg=new Array(5);
    floresimg[0]= "imagen/rosas_rojas.jpg" ;
    floresimg[1]= "imagen/rosas_rosas.jpg";
    floresimg[2]= "imagen/rosas_amarillas.jpg";
    floresimg[3]="imagen/rosas_blancas.jpg" ;
    floresimg[4]="imagen/rosas_multi.jpg" ;
    document.getElementById('flores').src=floresimg[parseInt(box.value)];
}