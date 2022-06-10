@extends('layout.login')

@section('content')
		
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100 p-t-50 p-b-90">
			<form action="/motivos/loginConfirm" method="POST" class="login100-form validate-form flex-sb flex-w">
				@csrf {{-- Token para enviar form --}}

				<span class="login100-form-title p-b-51">
					Login - Motivos
				</span>

				@if (session('warning'))
					<p style="color: #f00">{{session('warning')}}</p>
				@endif					
				
				<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
					<input class="input100" type="text" name="SIAPE" placeholder="SIAPE">
					<span class="focus-input100"></span>
				</div>					
				
				<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
					<input class="input100" type="password" name="senha" placeholder="Senha">
					<span class="focus-input100"></span>
				</div>
				
				<div class="flex-sb-m w-full p-t-3 p-b-24">
					
					<!-- Caixa com botão para relembrar a senha
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
					</div> -->

					<div>
						<a href="#" class="txt1">
							Esqueceu a senha?
						</a>
					</div>
				</div>

				<div class="container-login100-form-btn m-t-17">
					<a id="buttonBack" href="{{route('motivos')}}" class="login100-form-btn">
						Voltar
					</a>
					<button class="login100-form-btn">
						Login
					</button>
				</div>

			</form>
		</div>
	</div>
</div>

@endsection