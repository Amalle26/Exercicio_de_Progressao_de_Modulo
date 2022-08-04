<!DOCTYPE html>
<html>
<head>
	<title> Soma e Média Aritmética </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
	  <div class="row">
		<div class="col-2"></div>			    
		<div class="col-8">
			<h1 class="text-center"> Soma e Média Aritmética </h1><hr>
			<form action="ques1_recebe.php" method="POST">
				<div class="row">				
					<div class="mb-3 col-2">
						<label for="primeiro-numero" class="form-label">
                        <span class="iconify" data-icon="ph:number-square-one-light" data-width="25"></span>
                            Primeiro Número 
						</label>
					<input type="number" class="form-control" id="primeiro-numero" placeholder="Digite o número" name="primeiroNumero">
					</div>

					<div class="mb-3 col-2">
						<label for="segundo-numero" class="form-label">
                        <span class="iconify" data-icon="ph:number-square-two-light" data-width="25"></span>
							Segundo Número 
						</label>
					<input type="number" class="form-control" id="segundo-numero" placeholder="Digite o número" name="segundoNumero">
					</div>

					<div class="mb-3 col-2">
						<label for="terceiro-numero" class="form-label">
                        <span class="iconify" data-icon="ph:number-square-three-light" data-width="25"></span>    
							Terceiro Número 
						</label>
					<input type="number" class="form-control" id="terceiro-numero" placeholder="Digite o número" name="terceiroNumero">
					</div>

                    <div class="mb-3 col-2">
						<label for="quarto-numero" class="form-label">
                        <span class="iconify" data-icon="ph:number-square-four-light" data-width="25"></span> 
							Quarto Número 
						</label>
					<input type="number" class="form-control" id="quarto-numero" placeholder="Digite o número" name="quartoNumero">
					</div>

                    <div class="mb-3 col-2">
						<label for="quinto-numero" class="form-label">
                        <span class="iconify" data-icon="ph:number-square-five-light" data-width="25"></span>
							Quinto Número 
						</label>
					<input type="number" class="form-control" id="quinto-numero" placeholder="Digite o número" name="quintoNumero">
					</div>

                    <div class="mb-3 col-2">
						<label for="sexto-numero" class="form-label">
                        <span class="iconify" data-icon="ph:number-square-six-light" data-width="25"></span>
							Sexto Número 
						</label>
					<input type="number" class="form-control" id="sexto-numero" placeholder="Digite o número" name="sextoNumero">
					</div>

                    <div class="mb-3 col-2">
						<label for="setimo-numero" class="form-label">
                        <span class="iconify" data-icon="ph:number-square-seven-light" data-width="25"></span>
							Setimo Número 
						</label>
					<input type="number" class="form-control" id="setimo-numero" placeholder="Digite o número" name="setimoNumero">
					</div>

                    <div class="mb-3 col-2">
						<label for="oitavo-numero" class="form-label">
                        <span class="iconify" data-icon="ph:number-square-eight-light" data-width="25"></span>
							Oitavo Número 
						</label>
					<input type="number" class="form-control" id="oitavo-numero" placeholder="Digite o número" name="oitavoNumero">
					</div>

                    <div class="mb-3 col-2">
						<label for="nono-numero" class="form-label">
                        <span class="iconify" data-icon="ph:number-square-nine-light" data-width="25"></span>
							Nono Número 
						</label>
					<input type="number" class="form-control" id="nono-numero" placeholder="Digite o número" name="nonoNumero">
					</div>

                    <div class="mb-3 col-2">
						<label for="decimo-numero" class="form-label">
                        <span class="iconify" data-icon="ph:number-square-one-light" data-width="25"></span>
                        <span class="iconify" data-icon="ph:number-square-zero-light" data-width="25"></span>
							Décimo Número 
						</label>
					<input type="number" class="form-control" id="decimo-numero" placeholder="Digite o número" name="decimoNumero">
					</div>

					<div class="mb-3 col-12 text-end">
						<button type="submit" class="btn btn-outline-primary">
						<span class="iconify" data-icon="fluent:send-20-filled"></span>
							Calcular
						</button>
					</div>
				</div>			
			</form>

			

		</div>			    
		<div class="col-2"></div>			    
	  </div>
	</div>

	<script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
</body>
</html>


