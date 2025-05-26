<?php 

require 'dados.php';

$id = $_REQUEST['id'];

$filtrado = array_filter($carros, function($c) use($id) {
    return $c['id'] == $id;
});

$carro = array_pop($filtrado);

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Car Wise</title>
</head>
<body class="bg-sky-950 text-sky-50">

    <header class="bg-slate-800 border-b-sky-800 border-b-2 shadow-lg shadow-xl">
        <nav class="mx-auto max-w-screen-xl flex justify-between py-4">
            <div class="font-bold text-xl tracking-wide">CAR WISE</div>
            <ul class="flex space-x-6 font-bold">
                <li><a href="/explorar.php" class="text-blue-400">Explorar</a></li>
                <li><a href="/meus-carros.php" class="hover:underline">Minhas Análises</a></li>
            </ul>
            <ul class="font-bold">
                <li><a href="/login.php" class="hover:underline">Fazer login</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-screen-xl space-y-6 mt-10">
        
        <div class="p-2 space-y-2 rounded bg-slate-800 border-2 border-sky-800">
            <div class="flex">
                <div class="w-1/3">Imagem</div>
                <div class="space-y-1">
                    <a href="/carro.php?id=<?=$carro['id']?>" class="font-bold hover:underline"><?=$carro['nome']?></a>
                    <div class="text-xs italic"><?=$carro['data']?></div>
                    <div class="text-xs italic">⭐⭐⭐⭐⭐ (3 avaliações)</div>
                </div>
            </div>
            <div class="text-sm">
                 <?=$carro['descricao']?>
            </div>
        </div>

    </main>
</body>
</html>