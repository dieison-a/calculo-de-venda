<?php

$valorVenda = $_GET['valorVenda'];

// desconto
$desconto = $valorVenda * 0.10;

// ICMS
$icms = $valorVenda * 0.12;

// comissão
$comissao = $valorVenda * 0.05;
?>
<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Resultado da Venda</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<main class="card">
			<h1>Resultado da Venda</h1>
			<p>Valor total da venda: R$ <?php echo number_format($valorVenda, 2, ',', '.'); ?></p>
			<p>Desconto do cliente (10%): R$ <?php echo number_format($desconto, 2, ',', '.'); ?></p>
			<p>ICMS pago pela loja (12%): R$ <?php echo number_format($icms, 2, ',', '.'); ?></p>
			<p>Comissão do vendedor (5%): R$ <?php echo number_format($comissao, 2, ',', '.'); ?></p>
		</main>
	</body>
</html>