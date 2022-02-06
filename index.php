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
        <h1 id="titulo">Ficha de Inscrição</h1>
        <h1 id="subtitulo">Cadastramento</h1>
        <img id="imagem" src="homer.jpg">
        <br>
    </div>
    
    <form action="recebe.php" method="POST"> 
        <fieldset class="grupo">
            <div class="campo">
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome" required>
            </div>
            <div class="campo">
                <label for="cpf">CPF(Apenas Números)</label>
                <input type="number" name="cpf" id="cpf" required>
            </div>
            
            <div class="campo">
                <label for="telefone">Telefone com DDD</label>
                <input type="text" name="telefone" id="telefone" required>
            </div>
            
            <div class="campo">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" required>
            </div>
            
            <div class="campo">
                <label for="endereco">Endereço Completo com Número</label>
                <input type="text" name="endereco" id="endereco" required>
            </div>
            
            <div class="campo">
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="bairro" required>
            </div>
            
            <div class="campo">
                <label for="cep">CEP</label>
                <input type="text" name="cep" id="cep" required>
            </div>
            
            <div class="campo">
                <label for="nascimento">Data de Nascimento(Dia/Mês/Ano)</label>
                <input type="text" name="nascimento" id="nascimento" required> 
            </div>
               
        </fieldset>
            <div class="campo">
                <label>Sexo</label>
                <label>
                    <input type="radio" name="sexo" value="Masculino" required>Masculino
                </label>
                <label>
                    <input type="radio" name="sexo" value="Feminino" required>Feminino
                </label>
                <label>
                    <input type="radio" name="sexo" value="Outro" required>Outro
                </label>
            </div>
                  
            <div class="campo">
                <label>Nível de Formação</label>
                <label>
                    <input type="radio" name="formacao" value="Graduacao" required>Graduação
                </label>
                <label>
                    <input type="radio" name="formacao" value="Pos-Graduacao" required>Pós-Graduação
                </label>
                <label>
                    <input type="radio" name="formacao" value="Mestrado" required>Mestrado
                </label>
                <label>
                    <input type="radio" name="formacao" value="Doutorado" required>Doutorado
                </label>
            </div>
        <div class="campo">
            <br>
            <label for="area">Área(s) de Formação(ões)</label>
            <textarea rows="4" style="width: 20em" id="area" name="area" required></textarea>
        </div>
        
        <div class="campo">
            <br>
            <label for="curso">Curso(s)</label>
            <textarea rows="4" style="width: 20em" id="curso" name="curso" required></textarea>
        </div>
        
        <fieldset class="grupo">
            <div id="check">
                <label>Marcar antes de se cadastrar</label><br><br>
                <input type="checkbox" id="termo" name="termo" value="termo_aceito" required>
                <label for="termo">Declaro que li e aceito as condições.</label>
                <a href="site">Clique aqui para acessar o site</a>
            </div>
        </fieldset>
        
        <button class="botao" type="submit" onsubmit="">Cadastrar</button>
    </form>
</body>
</html>
