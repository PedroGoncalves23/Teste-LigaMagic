<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
<?php

include("language.php");

echo '

<!DOCTYPE html>
<html>
<body>
<h1>Esta página é uma Prova para trabalhar na LigaMagic</h1>

<p class="pselect">Selecione Abaixo o Idioma que deseja utilizar do sistema.</p>

<div class="cont">
<form action="index.php" method="GET">
  <label for="idioma" class="lselect">Idioma:</label>
  <select name="selectedLanguage" id="selectedLanguage">
    <option value="Português">Português</option>
    <option value="Inglês">Inglês</option>
    <option value ="Espanhol">Espanhol</option>
  </select>
  <br><br>
  <input class="btn" type="submit" name="submit" value="Enviar Seleção">
</form> 
</div>';

//pegando o valor que foi selecionado no select
if ($_GET["selectedLanguage"] == "Português") {
  echo '<p>'.Language::getLanguage([Language::ptBR => '
  Obrigado por realizar a Prova para trabalhar na LigaMagic.<br>Boa Sorte']).'</p>';

} else if ($_GET["selectedLanguage"] == "Inglês"){
  echo '<p>'.Language::getLanguage([Language::enUS => '
  Thank you for taking the Trial to work at LigaMagic. <br> Good luck']).'</p>';
}
else{
  echo '<p>'.Language::getLanguage([Language::esES => '
  Gracias por llevar el Trial a trabajar en LigaMagic. <br> Buena suerte']).'</p>';
}

'</body>
</html>';

?>