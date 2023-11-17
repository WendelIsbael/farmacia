<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmacia</title>
    <style>
    #usr {    
  background-image: url("https://clipartmag.com/images/magnifying-glass-transparent-24.png");
  background-repeat: no-repeat;
  background-position: left;
  background-size: 1.3em;
  padding-left: 1.3em;
}

body {
    background-color: rgb(19, 38, 212);
}



</style>
</head>
<body>
    <form method="POST">
        <label>Nome: </label>
        <input type="text" id="tNome" name="tNome">
        <br>
        <label>RG: </label>
        <input type="text" id="tRG" name="tRG">
        <br>
        <label>Telefone: </label>
        <input type="text" id="tTelefone" name="tTelefone">
        <br>
        <label>Plano de Saúde: </label><br>
        <label>Sim: </label>
        <input type="radio" id="sPlanoSaude" name="sPlanoSaude" value="false" disabled>
        <label>Não: </label>
        <input type="radio" id="nPlanoSaude" name="nPlanoSaude" value="false" disabled>
        <br>
        

<label>Uso de farmácia popular?: </label><br>
        <label>Sim: </label>
        <input type="radio" id="sPlanoSaude" name="sPlanoSaude" value="false" disabled>
        <label>Não: </label>
        <input type="radio" id="nPlanoSaude" name="nPlanoSaude" value="false" disabled>
        <br>  
<label>Escolha uma das farmacias: </label><br> 
    <form action="">
        <select name="farmacia" id="farmacia">
            <option value="f1">Abraça Farma</option>
            <option value="f2">AdociFarma</option>
            <option value="f3">Ainda bem Farmácia</option>
            <option value="f4">Amparo Drogaria</option>
        </select>
    </form>
    <label>procure produtos</label>
    
    <form action="">
        <input type="text"  id="usr" name="search" placeholder="Search...">
    </form>
    
 

    </form>
</body>
</html>

