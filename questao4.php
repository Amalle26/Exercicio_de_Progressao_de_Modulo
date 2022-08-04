Crie um programa capaz de ler os lados de um triangulo e informar se o mesmo é equilátero (3 lados iguais), isósceles (2 lados iguais) 
ou escaleno (todos os lados diferentes). Use formulários. (3 esc)
<!DOCTYPE html>
<html>
<head>
	<title> Lados do Triângulo </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
	  <div class="row">
		<div class="col-2"></div>			    
		<div class="col-8">
			<h1 class="text-center"> Lados do Triângulo </h1><hr>
			<form action="ques4_recebe.php" method="POST">
				<div class="row text-center">				
					<div class="mb-3 col-3">
						<label for="primeiro-lado" class="form-label">
                            Primeiro Lado 
						</label>
					<input type="number" class="form-control" id="primeiro-lado" placeholder="Digite o número" name="primeiroLado">
					</div>

					<div class="mb-3 col-3">
						<label for="segundo-lado" class="form-label">
							Segundo Lado
						</label>
					<input type="number" class="form-control" id="segundo-lado" placeholder="Digite o número" name="segundoLado">
					</div>

                    <div class="mb-3 col-3">
						<label for="terceiro-lado" class="form-label">
							Terceiro Lado 
						</label>
					<input type="number" class="form-control" id="terceiro-lado" placeholder="Digite o número" name="terceiroLado">
					</div>

					<div class="mb-3 col-12 text-end">
						<button type="submit" class="btn btn-outline-primary">
						<span class="iconify" data-icon="carbon:calculator-check" data-width="25"></span>
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



 

