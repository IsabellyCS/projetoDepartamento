<?php
// produtos.php

// Conexão com banco de dados
$host = 'localhost';
$db   = 'produtos';    // seu banco de dados
$user = 'root';       // seu usuário MySQL
$pass = '';           // sua senha MySQL (se houver)
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

// Buscar produtos
$stmt = $pdo->query("SELECT * FROM produtos");
$produtos = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Estoque - Produtos</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
</head>
<style>
    body {
    font-family: 'Inter', sans-serif;
    background: #f9f9f9;
    margin: 0;
    padding: 20px;
}

.container {
    width: 95%;
    max-width: 1200px;
    margin: auto;
}

.top-bar {
    display: flex;
    gap: 10px;
    align-items: center;
    margin-bottom: 20px;
}
.titulos-grid,
.produto-card {
    display: grid;
    grid-template-columns:
        250px /* Produto */
        120px /* Tipo */
        160px /* Fornecedor */
        100px /* ID */
        120px /* Disponível */
        110px /* Valor */
        110px /* Demanda */
        40px; /* Menu */
    align-items: center;
    padding: 10px 15px;
    gap: 10px;
    margin-bottom: 10px;
    background: white;
    border-radius: 10px;
    border: 1px solid #ccc;
}

.titulos-grid {
    font-weight: 600;
    color: #444;
    background: transparent;
    border: none;
}


.titulos-grid span,
.produto-card > div {
    padding: 0 5px;
}



.col-tipo {
    text-align: center;
}


/* Conteúdo da coluna de produto */
.col-produto-content {
    display: flex;
    align-items: center;
    gap: 10px;
}

.search-input {
    flex: 1;
    padding: 10px 15px;
    border-radius: 25px;
    border: 1px solid #ccc;
    font-size: 14px;
}

.btn {
    border: none;
    padding: 10px 20px;
    border-radius: 25px;
    font-weight: 600;
    cursor: pointer;
}

.categorias {
    background-color: #003087;
    color: white;
}

.filtrar {
    background-color: #d8c16a;
    color: #000;
}

.titulos {
    display: flex;
    justify-content: space-between;
    padding: 10px 15px;
    font-size: 14px;
    font-weight: 600;
    color: #444;
}

.produto-card {
    background: white;
    border: 1px solid #ccc;
    border-radius: 15px;
    margin-bottom: 10px;
}
.col-produto {
    display: flex;
    align-items: center;
    gap: 10px;
}


.produto-card {
    background: white;
    border: 1px solid #ccc;
    border-radius: 15px;
    margin-bottom: 10px;
    height: 100px;  /* altura fixa ou max-height */
    overflow: hidden; /* para cortar conteúdo que passar da altura */
    display: flex;
    align-items: center;
    padding: 10px 15px;
    gap: 10px;
}

.produto-info {
    display: flex;
    flex-direction: column;
    justify-content: center;
    font-size: 14px;
}
.produto-info small {
    display: -webkit-box;
    -webkit-line-clamp: 2;  /* número máximo de linhas visíveis */
    -webkit-box-orient: vertical;  
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: 12px;
    color: #777;
}
.produto-info strong {
    display: block;
    font-size: 14px;
    margin-bottom: 3px;
}
.produto-info div {
    font-size: 13px;
    color: #555;
    margin-bottom: 3px;
}

/* Outras colunas */
.col-tipo,
.col-fornecedor,
.col-id,
.col-disponivel,
.col-valor,
.col-demanda,
.col-menu {
    text-align: center;
    font-size: 14px;

}
.produto-img {
    width: 50px;
    height: 50px;
    object-fit: cover;
    border-radius: 10px;
}



.col-menu {
    font-size: 20px;
    cursor: pointer;
}


.menu {
    font-size: 20px;
    cursor: pointer;
}

</style>
<body>
    <div class="container">
    <div class="top-bar">
        <input type="text" placeholder="Pesquisa Produto" class="search-input">
        <button class="btn categorias">Categorias <span class="seta">▾</span></button>
        <button class="btn filtrar">Filtrar <span class="icone-filtro">🔽</span></button>
    </div>

   <div class="titulos-grid">
        <span class="col-produto">Produto</span>
        <span class="col-tipo">Tipo</span>
        <span class="col-fornecedor">Fornecedor</span>
        <span class="col-id">ID</span>
        <span class="col-disponivel">Disponível</span>
        <span class="col-valor">Valor</span>
        <span class="col-demanda">Demanda</span>
        <span class="col-menu"></span>
    </div>






    <?php foreach ($produtos as $produto): ?>
        <?php
            // Extrair dados para variáveis para passar para o card
            $id = $produto['id'];
            $imagemPainel = $produto['imagemPainel'];
            $imagemPng = $produto['imagemPng'];
            $nome = $produto['nome'];
            $tipo = $produto['tipo'];
            $fornecedor = $produto['fornecedor'];
            $dimensoes = $produto['dimensoes'];
            $estoque = $produto['estoque'];
            $valor = $produto['valor'];
            $resumo = $produto['resumo'];
            $detalhes = $produto['detalhes'];
            $demanda = $produto['demanda'];

            // Incluir o card
            include 'produto-card.php';
        ?>
    <?php endforeach; ?>

</div>
</body>
</html>
