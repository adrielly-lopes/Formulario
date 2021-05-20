<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="form.css" midia="">
    <title>Cadastro</title>
</head>
<body>
    
    <div>
        <h1 id="titulo">Cadastro</h1>
        <h1 id="subtitulo">Escola de Governo de Corumbá</h1>
        <img id="imagem" src="logo-egov.png">
        <br>
    </div>
    
    <form action="recebe.php" method="POST"> 
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div class="campo">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" required>
            </div>
            
            <div class="campo">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" id="telefone" required>
            </div>
            
            <div class="campo">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required>
            </div>
        </fieldset>

            <div class="campo">
                <label>Qual é o seu grau acadêmico?</label>
                <label>
                    <input type="radio" name="formacao" value="Graduacao">Graduação
                </label>
                <label>
                    <input type="radio" name="formacao" value="Pos-graduacao">Pós-Graduação
                </label>
                <label>
                    <input type="radio" name="formacao" value="Mestrado">Mestrado
                </label>
                <label>
                    <input type="radio" name="formacao" value="Doutorado">Doutorado
                </label>
            </div>

        <fieldset class="grupo">
            <div id="check">
                <label>Qual é a sua área de formação?</label><br><br>
                <input type="checkbox" id="formacao1" name="area" value="Administração, Economia e Negócios">
                <label for="formacao1">Administração, Economia e Negócios</label>
                <input type="checkbox" id="formacao2" name="area" value="Ciências Sociais">
                <label for="formacao2">Ciências Sociais</label>
                <input type="checkbox" id="formacao3" name="area" value="Comunicação e Mídia">
                <label for="formacao3">Comunicação e Mídia</label>
                <input type="checkbox" id="formacao4" name="area" value="Design e Arte">
                <label for="formacao4">Design e Arte</label>
                <input type="checkbox" id="formacao5" name="area" value="Direito">
                <label for="formacao5">Direito</label>
                <input type="checkbox" id="formacao6" name="area" value="Educação">
                <label for="formacao6">Educação</label>
                <input type="checkbox" id="formacao7" name="area" value="Engenharia e Arquitetura">
                <label for="formacao7">Engenharia e Arquitetura</label>
                <input type="checkbox" id="formacao8" name="area" value="Informação e Tecnologia">
                <label for="formacao8">Informação e Tecnologia</label>
                <input type="checkbox" id="formacao9" name="area" value="Saúde">
                <label for="formacao9">Saúde</label>
                <input type="checkbox" id="formacao10" name="area" value="Turismo e Gastronomia">
                <label for="formacao10">Turismo e Gastronomia</label>
                <input type="checkbox" id="formacao11" name="area" value="Ciências Exatas e da Terra">
                <label for="formacao11">Ciências Exatas e da Terra</label>
                <input type="checkbox" id="formacao12" name="area" value="Ciências Biológicas">
                <label for="formacao12">Ciências Biológicas</label>
                <input type="checkbox" id="formacao13" name="area" value="Ciências Humanas">
                <label for="formacao13">Ciências Humanas</label>
                <input type="checkbox" id="formacao14" name="area" value="Letras e Linguística">
                <label for="formacao14">Letras e Linguística</label>
            </div>
        </fieldset>

        <div class="campo">
            <br>
            <label for="outras_areas">Possuí outras áreas de formação além da selecionada?</label>
            <textarea rows="6" style="width: 26em" id="outras_areas" name="outras_areas"></textarea>
        </div>
        
        <div class="campo">
            <br>
            <label for="curso">Qual(is) seu(s) curso(s)?</label>
            <textarea rows="6" style="width: 26em" id="curso" name="curso"></textarea>
        </div>
        
        <button class="botao" type="submit" onsubmit="">Cadastrar</button>

    </form>

</body>
</html>
