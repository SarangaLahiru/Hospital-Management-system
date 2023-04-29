var download=document.getElementById('download');
var dname=document.getElementById('dname');
var pname=document.getElementById('name');
var puser=document.getElementById('puser');
var path=document.getElementById('path');
var page=document.getElementById('age');
var ptime=document.getElementById('time');
var pdate=document.getElementById('date');
var pphone=document.getElementById('phone');
var city=document.getElementById('city');


download.addEventListener('click',function(e){
    e.preventDefault();
  
    generatepdf();

    

})


function generatepdf(){
    const piese=document.querySelector('.file');

    html2pdf()
    .from(piese)
    .save();
}