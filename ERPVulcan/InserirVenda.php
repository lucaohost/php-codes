<?php

require_once('Cabecalho.php');

?>

<div class="row">
	<div class="col-3"></div>
	<div class="col-6 mt-5">
		<form method="post">
			<div class="form-group">
				<label for="cliente">Cliente</label>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-user-alt"></i></div>
					</div>
					<input type="text" class="form-control" id="cliente" name="cliente" placeholder="Nome do cliente">
				</div>
			</div>
			<div class="form-group">
				<label for="data">Data</label>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-calendar-alt"></i></div>
					</div>
					<input type="date" class="form-control" id="data" name="data">
				</div>
			</div>
			<div class="form-group">
				<label for="valor">Valor</label>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-money-bill-alt"></i></div>
					</div>
					<input type="number" class="form-control" id="valor" name="valor">
				</div>
			</div>
			<div class="form-group">
				<label for="cotacao">Cotação</label>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-exchange-alt"></i></div>
					</div>
					<input type="number" class="form-control" id="cotacao" name="cotacao">
				</div>
			</div>
			<div class="form-group">
				<label for="valoruss">Valor (US$)</label>
				<div class="input-group mb-2">
					<div class="input-group-prepend">
						<div class="input-group-text"><i class="fas fa-dollar-sign"></i></div>
					</div>
					<input type="number" class="form-control" id="valoruss" name="valoruss">
				</div>
			</div>
			<div style="text-align: center;">
				<button type="submit" class="btn btn-primary mr-5">Salvar</button>
				<button onclick="window.href='InserirVenda.php'" class="btn btn-secondary">Cancelar</button>
			</div>
		</form>
	</div>
	<div class="col-3"></div>
</div>


<?php

require_once('Rodape.php');

?>