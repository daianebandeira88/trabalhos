function contar(){

    let inicio=document.getElementById('text1')
    let fim=document.getElementById('textf')
    let passo=document.getElementById('textp')
    let resp=document.getElementById('resp')

    if(inicio.value.length == 0 || fim.value.length ==0 ||passo.value.length == 0){
        window.alert('[erro]')
    }else{
        resp.innerHTML = 'contando ..<br>'
        let i=Number(inicio.value)
        let f=Number(fim.value)
        let p=Number(passo.value)

        if(p <= 0){
            window.alert('passo invalido ,considerando passo 1')
            p=1
        }

        if (i < f){
            for(let c=i ; c<=f; c+= p){
                resp.innerHTML += ` ${c} \u{1f449} `
            }
        }else{
            for(let c = i ; c >= f ; c -= p){
                resp.innerHTML+= ` ${c} \u{1f449}`
                
            }
        }    
        resp.innerHTML += `\u{1f3c1}`
    }
    

}