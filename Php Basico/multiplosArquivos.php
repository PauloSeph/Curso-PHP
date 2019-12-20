<!-- primeira forma -->
<div> <h2>Primeira forma Formulario 1</h2></div>
<form method="POST" action="recebedor.php">
    E-mail: <br/>
    <input type="text" name="email" /><br/> <br/> 

  
    <input type="submit" value="Enviar dados" /><br/> <br/> 

</form>

<br/>

<!-- Segunda forma que é importando arquivo php -->

<?php
require "recebedor.php"
?>
<div> <h2>Segunda forma Formulario 2</h2></div>
<form method="POST">
    E-mail: <br/>
    <input type="text" name="email" /><br/> <br/> 

  
    <input type="submit" value="Enviar dados" /><br/> <br/> 

</form>
