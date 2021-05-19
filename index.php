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
        <h1 id="subtitulo">EGOV</h1>
        <br>
    </div>

    <form action="recebe.php" method="POST"> 
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" required>
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
                <label>Formação:</label>
                <label>
                    <input type="radio" name="nivel" value="graduacao">Graduação
                </label>
                <label>
                    <input type="radio" name="nivel" value="pos-graduacao">Pós-Graduação
                </label>
                <label>
                    <input type="radio" name="nivel" value="mestrado">Mestrado
                </label>
                <label>
                    <input type="radio" name="nivel" value="doutorado">Doutorado
                </label>
            </div>

        <fieldset class="grupo">
            <div id="check">
                <label>Área de formação:</label><br><br>
                <input type="checkbox" id="formacao" name="formacao" value="Sistemas">
                <label for="formacao1">Sistemas de Informação</label>
                <input type="checkbox" id="formacao" name="formacao" value="Educação">
                <label for="formacao2">Educação Física</label>
                <input type="checkbox" id="formacao" name="formacao" value="Administracao">
                <label for="formacao3">Administração</label>
                <input type="checkbox" id="formacao" name="formacao" value="Contabilidade">
                <label for="formacao4">Ciências Contábeis</label>
                <input type="checkbox" id="formacao" name="formacao" value="Geografia">
                <label for="formacao5">Geografia</label>
                <input type="checkbox" id="formacao" name="formacao" value="Historia">
                <label for="formacao6">História</label>
                <input type="checkbox" id="formacao" name="formacao" value="Biologia">
                <label for="formacao7">Ciências Biológicas</label>
                <input type="checkbox" id="formacao" name="formacao" value="Pisicologia">
                <label for="formacao8">Pisicologia</label>
                <input type="checkbox" id="formacao" name="formacao" value="Direitos">
                <label for="formacao9">Direitos</label>
                <input type="checkbox" id="formacao" name="formacao" value="Ingles">
                <label for="formacao10">Letras Português/Inglês</label>
                <input type="checkbox" id="formacao" name="formacao" value="Espanhol">
                <label for="formacao11">Letras Português/Espanhol</label>
                <input type="checkbox" id="formacao" name="formacao" value="Matematica">
                <label for="formacao12">Matemática</label>
                <input type="checkbox" id="formacao" name="formacao" value="Pedagogia">
                <label for="formacao13">Pedagogia</label>
            </div>
        </fieldset>

        <div class="campo">
            <br>
            <label for="outra_area">Outras áreas de formação: </label>
            <textarea rows="6" style="width: 26em" id="outra_area" name="outra_area"></textarea>
        </div>

        <button class="botao" type="submit" onsubmit="">Cadastrar</button>

    </form>

</body>
</html>