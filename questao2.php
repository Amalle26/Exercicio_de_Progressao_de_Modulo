<!DOCTYPE html>
<html>
<head>
	<title> Calculadora </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
	  <div class="row">
		<div class="col-2"></div>			    
		<div class="col-8">
			<h1 class="text-center"> Calculadora </h1><hr>
			<form action="ques2_recebe.php" method="POST">
				<div class="row text-center">				
					<div class="mb-3 col-3">
						<label for="primeiro-numero" class="form-label">
                            Primeiro Número 
						</label>
					<input type="number" class="form-control" id="primeiro-numero" placeholder="Digite o número" name="primeiroNumero">
					</div>

					<div class="mb-3 col-3">
						<label for="segundo-numero" class="form-label">
							Segundo Número 
						</label>
					<input type="number" class="form-control" id="segundo-numero" placeholder="Digite o número" name="segundoNumero">
					</div>

					<div class="mb-3 col-12 text-center">
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



 

