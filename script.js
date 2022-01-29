function carregar(){
    var msg=window.document.getElementById('msg')
    var img=window.document.getElementById('imagem')
    var data=new Date()
    var min=data.getMinutes()
    var hora=data.getHours()

   


    msg.innerHTML=`Agora são ${hora}:${min} horas`
  if (hora>=0 && hora< 12){
      img.src='manha.png'
      document.body.style.background='#9b9caa'
  }else if(hora>=12 && hora<= 18 ){
      img.src='tarde.png'
      document.body.style.background='#d18957'
  }else{
      img.src='noite.png'
      document.body.style.background='#555b53'
  }
}