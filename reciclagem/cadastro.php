<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cadastro - Seu App de Reciclagem</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="h-full bg-white">
  <?php
  // Verifica se o formulário foi enviado
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifica as credenciais do usuário (exemplo simplificado)
    $name = $_POST['name'];
    $city = $_POST['city'];
    $neighborhood = $_POST['neighborhood'];
    $cep = $_POST['cep'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Aqui você pode adicionar a lógica de cadastro, como inserir os dados em um banco de dados

    // Exemplo simples de cadastro
    $cadastroSucesso = true;
  }
  ?>
  
  <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=green&shade=600" alt="Recycle Logo">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Crie sua conta</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
          <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nome</label>
          <div class="mt-2">
            <input id="name" name="name" type="text" autocomplete="name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <label for="city" class="block text-sm font-medium leading-6 text-gray-900">Cidade</label>
          <div class="mt-2">
            <select id="city" name="city" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6">
              <option value="">Selecione a cidade</option>
              <option value="Navegantes">Navegantes</option>
              <option value="Itajai">Itajaí</option>
              <option value="Balneário Camboriú">Balneário Camboriú</option>
              <option value="Outra Cidade 1">Brusque</option>
              <option value="Outra Cidade 2">Bombinhas</option>
              <option value="Outra Cidade 3">Nova Trento</option>
              <option value="Outra Cidade 4">Pomerode</option>
              <option value="Outra Cidade 5">Florianópolis</option>
              <option value="Outra Cidade 6">Blumenau</option>
            </select>
          </div>
        </div>

        <div>
          <label for="neighborhood" class="block text-sm font-medium leading-6 text-gray-900">Bairro</label>
          <div class="mt-2">
            <input id="neighborhood" name="neighborhood" type="text" autocomplete="neighborhood" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <label for="cep" class="block text-sm font-medium leading-6 text-gray-900">CEP</label>
          <div class="mt-2">
            <input id="cep" name="cep" type="text" autocomplete="cep" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Endereço de email</label>
          <div class="mt-2">
            <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6">
          </div>
        </div>

        <div>
          <div class="flex items-center justify-between">
            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Senha</label>
          </div>
          <div class="mt-2">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-green-600 sm:text-sm sm:leading-6">
          </div>
        </div>
        
        <?php
        // Exibe uma mensagem de sucesso após o cadastro
        if (isset($cadastroSucesso) && $cadastroSucesso) {
          echo '<p class="mt-2 text-center text-green-500">Cadastro realizado com sucesso!</p>';
        }
        ?>

        <div>
          <button type="submit" class="flex w-full justify-center rounded-md bg-green-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">Cadastrar</button>
        </div>

        <div class="mt-4">
          <p class="text-sm text-center text-gray-500">
            Já tem uma conta? <a href="login.php" class="font-medium text-green-600 hover:text-green-500">Faça login</a>
          </p>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
