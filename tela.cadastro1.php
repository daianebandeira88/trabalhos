
<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title> cadastro </title>
   <meta name="description" content="cadastro">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
    
     <style>
       body{

         background-color: rgba(50, 66, 66, 0.253);
         font-size:larger;}
       td{
         font-size: medium;} 
         #pchave{align-content: flex-end;}
     </style>
     
     <script>
         function mostra() {
            var temp = document.getElementById("senha");
            if (temp.type === "password") {
                temp.type = "text";
            }
            else {
                temp.type = "password";
            }
        }
      $(document).ready(function(){
            $('.date1').mask('00/00/0000' , {reverse: true});
            $('.cep').mask('00000-000');
            $('.phone').mask('(00) 00000-0000');
            $('.cpf').mask('000.000.000-00');
            });
    
         function voltapag(){
                window.location="login.html";
        }
         
     </script>
     
     
 </head>

 <body >
  
  <h2> Preencha o formul&aacuterio abaixo para realizar seu cadastro</h2><br />

<form action="Script_do_Formulario" method="post">


<fieldset>
 <legend>Dados Pessoais</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="nome">Nome: </label>
   </td>
   <td align="left">
    <input required type="text" name="email">
   </td>
   <td>
    <label for="sobrenome">Sobrenome: </label>
   </td>
   <td align="left">
    <input required type="text" name="sobrenome">
   </td>
  </tr>
  <tr>
   <td>
    <label>Nascimento: </label>
   </td>
   <td align="left">
    <input required type="date" class="date1" name="data"   placeholder="dd/mm/aaaa"> 
   
   </td>
  </tr>
  <tr>
   <td>
    
    <label>CPF:</label>
   </td>
   <td align="left">
    <input class="cpf" type="text"  name="cpf" inputmode="number" minlength="11" maxlength="11"  pattern="^[0-9]{3}.?[0-9]{3}.?[0-9]{3}-?[0-9]{2}"
    required autocomplete="off">
   </td>
  </tr>
 </table>
</fieldset>

<br />

<fieldset>
 <legend>Dados de Endere&ccedilo</legend>
 <table cellspacing="10">

  <tr>
   <td>
    <label for="rua">Rua:</label>
   </td>
   <td align="left">
    <input type="text" name="rua">
   </td>
   <td>
    <label for="numero">Numero:</label>
   </td>
   <td align="left">
    <input type="text" name="numero" size="4">
   </td>
  </tr>
  <tr>
   <td>
    <label for="bairro">Bairro: </label>
   </td>
   <td align="left">
    <input type="text" name="bairro">
   </td>
  </tr>
  <tr>
   <td>
    <label for="estado">Estado:</label>
   </td>
   <td align="left">
    <select name="estado"> 
    <option value="ac">Acre</option> 
    <option value="al">Alagoas</option> 
    <option value="am">Amazonas</option> 
    <option value="ap">Amap&aacute</option> 
    <option value="ba">Bahia</option> 
    <option value="ce">Cear&aacute</option> 
    <option value="df">Distrito Federal</option> 
    <option value="es">Esp&iacuterito Santo</option> 
    <option value="go">Goi&aacutes</option> 
    <option value="ma">Maranh&atildeo</option> 
    <option value="mt">Mato Grosso</option> 
    <option value="ms">Mato Grosso do Sul</option> 
    <option value="mg">Minas Gerais</option> 
    <option value="pa">Par&aacute</option> 
    <option value="pb">Para&iacuteba</option> 
    <option value="pr">Paran&aacute</option> 
    <option value="pe">Pernambuco</option> 
    <option value="pi">Piau&iacute</option> 
    <option value="rj">Rio de Janeiro</option> 
    <option value="rn">Rio Grande do Norte</option> 
    <option value="ro">Rond&ocircnia</option> 
    <option value="rs">Rio Grande do Sul</option> 
    <option value="rr">Roraima</option> 
    <option value="sc">Santa Catarina</option> 
    <option value="se">Sergipe</option> 
    <option value="sp">S&atildeo Paulo</option> 
    <option value="to">Tocantins</option> 
   </select>
   </td>
  </tr>
  <tr>
   <td>
    <label for="cidade">Cidade: </label>
   </td>
   <td align="left">
    <input id="cidade" type="text"  name="cidade">
   </td>
  </tr>
  <tr>
   <td>
    <label for="cep">CEP: </label>
   </td>
   <td align="left">
    <input type="text" class="cep" name="cep" placeholder="00000-000"> 
   </td>
  </tr>
 </table>
</fieldset>
<br />


<fieldset>
 <legend>Dados de login</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="email">E-mail: </label>
   </td>
   <td align="left">
    <input type="text" name="email">
   </td>
  </tr>
  
  <tr>
   <td>
    <label for="login">confirme e-mail </label>
   </td>
   <td align="left" >
    <input required type="text" name="login">
   </td>
  </tr>
  <tr>
   <td>
    <label for="pass">Senha: </label>
   </td>

   <td align="left">
    <input required type="password" name="pass" id="senha" placeholder="senha"  >
       <input type="checkbox" onclick="mostra()" onKeyUp="verifica()">
    <b>mostar senha</b>
   </td>
  </tr>
  <tr>
   <td>
    <label for="passconfirm">Confirme a senha: </label>
   </td>
   <td align="left">
    <input required type="password" name="passconfirm" id="confsenha" placeholder="confirmar senha" >
      
   </td>
  </tr>
     </table>
     </fieldset>
     <fieldset>
         <legend>dados para recupera&ccedil&atildeo de senha</legend>
 <table cellspacing="10">
         <table>
     <tr>
   <td>
    
    <label for="recdados" > </label>
   </td>
   <td align="right">
   
   </td>
  </tr>
 
     <tr>
     <td>
    <label for="telefone">telefone: </label>
   </td>
   <td align="left">
    <input required type="tel" class="phone" name="telefone" placeholder="(xx)xxxxxxxx" maxlength="11">
   </td>
  </tr>
   <tr margin="20px">
     <td>
    <label for="palavra" >insira uma palavra-chave<br> para recuper&ccedil&atildeo de senha </label> 
   </td>
   <td align="left">
    <input required type="text"  name="pchave"  maxlength="11">
     
   </td>
   
  </tr>  
  
 </table>
</fieldset>
<br />
 <button><a href="#" id="recsenha" onClick="voltapag()" class="text1">voltar</a>   </button>     
<input type="submit" value="enviar">
<input type="reset" value="Limpar">
</form>

 </body>
</html>
