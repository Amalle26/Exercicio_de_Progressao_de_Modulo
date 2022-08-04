<!DOCTYPE html>
<html>
<head>
	<title> Formulario </title>
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid">
	  <div class="row">
		<div class="col-2"></div>			    
		<div class="col-8">
			<h1 class="text-center"> Formulário </h1><hr>
			<form action="ques3_recebe.php" method="POST">
				<div class="row">   			
					<div class="mb-3 col-6">
						<label for="nome-completo" class="form-label">
                            <span class="iconify" data-icon="fontisto:person" data-width="20"></span>
                                Nome Completo
						</label>
					<input type="text" class="form-control" id="nome-completo" placeholder="Digite seu nome" name="nome">
					</div>

					<div class="mb-3 col-2">
					<label for="dtnasc" class="form-label">
                        <span class="iconify" data-icon="icon-park-solid:birthday-cake" data-width="30"></span>
							Data de Nasc.
						</label>
					<input type="date" class="form-control" id="dtnasc"  name="dtnasc">
					</div>

					<div class="mb-3 col-5">
                    <label for="cpf" class="form-label">
                        <span class="iconify" data-icon="fa-solid:id-card" data-width="25"></span>
                            CPF
                    </label>
                    <input type="number" class="form-control" id="cpf" placeholder="Digite o seu cpf" name="cpf">
                    </div>
                    
                    <div class="mb-3 col-3">
                    <label for="telefone" class="form-label">
                        <span class="iconify" data-icon="fa-solid:phone-square-alt" data-width="23"></span>
                            Telefone
                    </label>
                    <input type="number" class="form-control" id="telefone" placeholder="Digite o seu telefone" name="telefone">
                    </div>

                    <div class="mb-3 col-5">
					<label for="email" class="form-label">
                        <span class="iconify" data-icon="clarity:email-solid" data-width="25"></span>
                            Email
					</label>
					<input type="email" class="form-control" id="email" placeholder="Digite seu email" name="email">
					</div>

					<div class="mb-3 col-3">
					<label for="senha" class="form-label">
                        <span class="iconify" data-icon="fontisto:key" data-width="22"></span>
                            Senha
					</label>
					<input type="password" class="form-control" id="senha" placeholder="Digite sua senha" name="senha">
					</div>

					<div class="mb-3 col-12 text-end">
						<button type="submit" class="btn btn-outline-primary">
						<span class="iconify" data-icon="fluent:save-edit-20-filled" data-width="25"></span>
							Salvar Dados
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