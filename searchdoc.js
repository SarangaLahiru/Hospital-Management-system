
var topdoctors=document.querySelector('.topdoctors')
var search=document.getElementById('search')
var doctor=topdoctors.querySelectorAll('.box');

search.addEventListener('keyup',function(){
    var searchThing=search.value.toLowerCase();

    for(var i=0; i<doctor.length; i++){
        var doctorName=doctor[i].getElementsByTagName('h2')[0];
        var doctorSpecial=doctor[i].getElementsByTagName('h4')[0];
        var match= doctorName.textContent.toLowerCase().concat(doctorSpecial.innerHTML.toLowerCase());
      
  console.log(match)
        if(match.indexOf(searchThing)>-1){

            doctor[i].style.display="";

        }
        else{
            doctor[i].style.display="none";
        }
        
    }

    

})

var notice=document.querySelector('.notice')
var notice1=document.querySelector('.notice1')
window.addEventListener('online',function(){
    notice.classList.toggle('online');
})
window.addEventListener('offline',function(){
    notice1.classList.toggle('offline');
})