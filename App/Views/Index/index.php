<head>
	<title>Motivos - Login | INSS</title>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
				<form action="/loginConfirm" method="POST" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-51">
						Login - Motivos
					</span>

					<?php if (!empty($_GET['erro']) && $_GET['erro'] === 'userInvalido') {?> 						
						<p style="color: #f00;">Usuário Invalido</p>
					<?php } elseif (!empty($_GET['erro']) && $_GET['erro'] === 'loginNecessario') {?>
						<p style="color: #f00;">É necessário efetuar o login para acessar as páginas</p>
					<?php } ?>
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="SIAPE" placeholder="SIAPE">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="senha" placeholder="Senha">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Esqueceu a senha?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>