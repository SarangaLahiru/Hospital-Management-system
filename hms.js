var slide=document.querySelectorAll('.simg')


function slideInt(){
    var curr=document.querySelector('.curr')
    curr.classList.remove('curr')

    if(curr.nextElementSibling){
        
        curr.nextElementSibling.classList.add('curr')
    }
    else{
        slide[0].classList.add('curr')
    }
}
var intTime=setInterval(slideInt,8000)
console.log(slide[1].nextElementSibling)




var expert=document.getElementById('expert')
var type=document.getElementById('type')
var year=document.getElementById('year')
var c1=1;
var c2=1;
var c3=1;

function count1(){
    
    c1+=1;
     
    expert.innerHTML=c1+'+';
    if(c1==170){
        clearInterval(time1);
    }
    
}
var time1=setInterval(count1,40);

function count2(){
    
    c2+=1;
     
    year.textContent=c2+'+';
    if(c2==10){
        clearInterval(time2);
    }
    
}
var time2=setInterval(count2,800);

function count3(){
    
    c3+=1;
     
    type.textContent=c3+'K';
    if(c3==15){
        clearInterval(time3);
    }
    
}
var time3=setInterval(count3,500);

var benifit=document.querySelector('.benifit');
var img=document.querySelector('.img')
var dis1=document.querySelector('.tdis1')
var head1=document.querySelector('.head1');
var boxt=document.querySelector('.boxt')
var massage=document.querySelector('.massage')


window.addEventListener('scroll',function(e){
    

    if(this.scrollY>100){
        benifit.classList.add('beni',this.scrollY>=100)

    }
    if(this.scrollY>650){
        img.classList.add('timg',this.scrollY>=400);

    }
    if(this.scrollY>650){
        dis1.classList.add('tdis',this.scrollY>=355)

    }
    
        head1.classList.toggle('head',this.scrollY>=200)

        if(this.scrollY>1250){
            boxt.classList.add('boxts',this.scrollY>=1250)
    
        }

        if(this.scrollY>1650){
            massage.classList.add('msg',this.scrollY>=1250)
    
        }

      
})

var log1=document.getElementById('log')
log1.addEventListener('click',function(e){
    e.preventDefault();
    register.classList.add('reg')
})

var cancle1=document.getElementById('cancle1')
var register=document.querySelector('.register')
console.log(register)
cancle1.addEventListener('click',function(e){
    e.preventDefault();
    register.classList.remove('reg')

})



var log2=document.getElementById('loginb')
log2.addEventListener('click',function(e){
    e.preventDefault();
    login.classList.add('log')
    register.classList.remove('reg')
})

var cancle2=document.getElementById('cancle2')
var login=document.querySelector('.login')
console.log(register)
cancle2.addEventListener('click',function(e){
    e.preventDefault();
    login.classList.remove('log')

})



var feed=document.querySelectorAll('.feed')
function feedback(){
    feed.forEach((item,i)=>{

        var prewid=item.getBoundingClientRect();
        var wid=prewid.width/3;
    
    
        item.scrollLeft+=wid;
        if(item.scrollLeft>680){
            item.scrollLeft=0;
        }
        else if(item.scrollLeft>3050){
            item.scrollLeft=0;
        }
        console.log(item.scrollLeft)

        
        
         
    })
}
var intTime1=setInterval(feedback,2000);





