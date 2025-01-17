
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Funcionários</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <main>
        <section id="tela-login">
            <div class="img-user">
                <img src="img\user.png" alt="">
            </div>
            <div class="titulo-login">
                <h1>Cadastro de Primeiro Acesso</h1>
            </div>
            <div>
                <form action="cadastrar-usuario.php" method="post" autocomplete="off">
                    <div class="campo">
                        <label>Email</label>
                        <input type="email" name="login" placeholder="Digite seu e-mail" required>
                    </div>
                    <div class="campo">
                        <label>Senha</label>
                        <input type="password" name="password" placeholder="Digite sua senha" required maxlength="30">
                    </div>  
                     <div class="campo btn-acessar">
                     <button type="submit" value="Acessar">Cadastrar</button>
                     </div>   
                     
                </form>
            </div>
            
        </section>
    </main>
</body>
</html>