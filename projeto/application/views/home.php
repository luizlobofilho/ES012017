<script type="text/javascript">
	$(document).ready(function () {
		// Máscaras
		$("#nu_cpf").mask("999.999.999-99");
	});
    function validaLogin(){
		// Validações
		$("#formLogin").validate({
			rules: {
				nu_cpf: {
					required: true,
				},
				senha: {
					required: true
				}
			},
			messages: {
				nu_cpf: {
					required: 'Informe o CPF'
				},
				senha: {
					required: 'Informe a Senha'
				}
			}
		});
        return $("#formLogin").valid();
    }

</script>
<br />
<article class="row" id="login">
	<div class="row">
		<div class="col-lg-4 col-lg-offset-2 col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1">
			<div class="panel panel-primary" style="height: 335px;">
				<div class="panel-heading">
					<h3 class="panel-title">Já tenho cadastro</h3>
				</div>
				<div class="panel-body">
					<?php echo form_open( 'logar/validandoLogin',array( 'id'=>'formLogin','name'=>'formLogin','onsubmit'=>'return validaLogin()')); ?>

						<div class="form-group">
							<?php echo form_label( 'CPF ', 'nu_cpf',array( 'class'=>'required')); ?>
							<?php echo form_input(array( 'id'=>'nu_cpf','name'=>'nu_cpf','class'=>'form-control','autofocus'=>'autofocus'),set_value('nucpf',(isset($nucpf)?$nucpf:'')));?>
						</div>

						<div class="form-group">
							<?php echo form_label( 'Senha ', 'senha',array( 'class'=>'required')); ?>
							<?php echo form_input(array( 'id'=>'senha','name'=>'senha','type'=> 'password','class'=>'form-control'),set_value('dcsenha',(isset($dcsenha)?$dcsenha:'')));?>
						</div>

						<div class="form-group" style="padding-top: 20px;">
							<?php echo form_input(array( 'id'=>'submit','type'=>'submit','value'=> 'Login','class'=>'btn btn-primary pull-right'));?>
							<a href='<?php echo base_url('index.php/login/lembrarSenha ');?>'>Esqueci minha senha</a><br />
                            <a href='<?php echo base_url('index.php/login/novoEmail');?>'>Alterar e-mail</a>
						</div>

						<?php echo form_close(); ?>

						<?php if(isset($erro)) { echo "<p class='alert alert-danger col-sm-12' role='alert-danger'>"; echo $erro; echo "</p>"; } ?>
				</div>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">Não tenho cadastro</h3>
				</div>
				<div class="panel-body">
					<p>
						Para acessar a UnB - Rede Social da UnB, você precisa ser aluno da UnB e preencher o formulário de cadastro.   
					</p>

					<div class="form-group">
						<a class="btn btn-info pull-left" href="tutorial" target="_blank">Ajuda</a>
						<?php echo form_input(array('id'=>'submitCadastro','type'=>'button','value'=> 'Cadastre-se','class'=>'btn btn-primary pull-right','onclick'=>"location.href='".base_url('index.php/Cadastro')."'"));?>
					</div>
				</div>
			</div>
		</div>
	</div>
</article>
