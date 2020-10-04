<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='robots' content='index, follow'>
    <link rel='shortcut icon' href=''>
    <link rel='stylesheet' href=''>
    <title>Document</title>
</head>

<body>

    <main>
        <form action="" method="post">
            <fieldset>
                <legend>
                    Meu formulário
                </legend>
                <!-- readonly: input apenas para leitura -->
                <p>
                    Insira seu nome: <input type="text" name="nome" id="nome" placeholder="Digite o seu nome" required>
                </p>

                <p>
                    Insira seu email: <input type="email" name="email" id="email" placeholder="Digite o seu email" required>
                </p>

                <p>
                    Insira sua senha: <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                </p>

                <p>
                    Insira seu sexo: <br>
                    <input type="radio" name="sexo" required> Masculino
                    <input type="radio" name="sexo" required> Feminino
                </p>

                <p>
                    Insira sua tecnologia preferida: <br>
                    <input type="checkbox" name="HTML" id="HTML"> HTML 5
                    <input type="checkbox" name="CSS" id="CSS"> CSS 3
                    <input type="checkbox" name="JAVASCRIPT" id="JAVASCRIPT"> JAVASCRIPT
                    <input type="checkbox" name="PHP" id="PHP"> PHP 8
                </p>

                <p>
                    Insira o arquivo: <input type="file" name="file" id="file">
                </p>
                <p>
                    Informe uma url: <input type="url" name="url" id="url" required>
                </p>
                <p>
                    Range: <input type="range" name="range" id="range" max="10" min="1" step="1" required>
                </p>
                <p>
                    Selecione um curso <br>
                    <select name="curso" id="curso">
                        <optgroup label="Grupo1">
                            <option value=""> Grupo 1.1</option>
                            <option value=""> Grupo 1.2</option>
                        </optgroup>
                        <optgroup label="Grupo2">
                            <option value=""> Grupo 2.1</option>
                            <option value=""> Grupo 2.2</option>
                        </optgroup>
                        <option value=""> Opção 1</option>
                        <option value=""> Opção 2</option>
                        <option value=""> Opção 3</option>
                    </select>
                </p>

                <p>
                    Date: <input type="date" name="date" id="date" required>
                </p>
                <p>
                    Time: <input type="time" name="time" id="time" required>
                </p>

                <p>
                    Date Time: <input type="datetime" name="datetime" id="datetime" required>
                </p>

                <p>
                    <button type="submit">
                        Validar !
                    </button>
                </p>
            </fieldset>
        </form>
    </main>
    <script> </script>
</body>

</html>