<!DOCTYPE html>
<html>
<head>
	<title> Entrar </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
	  <div class="row">
		<div class="col-2"></div>			    
		<div class="col-8">
			<h1 class="text-center"> Entrar </h1><hr>
			<form action="ques5_recebe.php" method="POST">
				<div class="row text-center">				
					<div class="mb-3 col-5">
						<label for="email" class="form-label">
                            Email 
						</label>
					<input type="email" class="form-control" id="email" placeholder="Digite o email" name="email">
					</div>

					<div class="mb-3 col-3">
						<label for="senha" class="form-label">
							Senha
						</label>
					<input type="password" class="form-control" id="senha" placeholder="Digite a senha" name="senha">
					</div>

					<div class="mb-3 col-12 text-end">
						<button type="submit" class="btn btn-outline-primary">
						<span class="iconify" data-icon="clarity:login-line" data-width="23"></span>
							Entrar
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

