
var imgBtnAdd=document.querySelector('#add');
var imgBtnBusc=document.querySelector('#busca');


function mudaImagem(){
var imgbt=document.querySelector('#add').src="image/add_hover.png";

}
function mudaImagemv(){
    var imgbt=document.querySelector('#add').src="image/add.png";
    
    }

    function mudaImagemb(){
        var imgbt=document.querySelector('#busca').src="image/busca_hover.png";
        
        }
        function mudaImagembb(){
            var imgbt=document.querySelector('#busca').src="image/busca.png";
            
            }

    function redirect(){
        setTimeout("window.location='index.html'",3000);
    }

    function volta(){
        setTimeout("history.back(1)",5000);
    }

  
   
  

 