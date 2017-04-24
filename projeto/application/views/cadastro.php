<script type="text/javascript">
    $(document).ready(function () {
        // Máscaras
        $("#nu_cpf").mask("999.999.999-99");
    });
    function validaLogin(){
        // Validações
        $("#formCadastro").validate({
            rules: {
                nu_cpf: {
                    required: true
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
        return $("#formCadastro").valid();
    }

</script>


<article class="row" id="login">
    <div class="row">
        <div class="col-lg-4 col-lg-offset-2 col-md-8 ">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Cadastre-se</h3>
                </div>
                <div class="panel-body">
                    <?php echo form_open( '/cadastro/realizaCadastro',array( 'id'=>'formCadastro','name'=>'formCadastro','onsubmit'=>'return validaLogin()')); ?>

                    <div class="form-group">
                        <?php echo form_label( 'Nome ', 'dsc_nome',array( 'class'=>'required')); ?>
                        <?php echo form_input(array( 'id'=>'dsc_nome','name'=>'dsc_nome','class'=>'form-control','autofocus'=>'autofocus'),set_value('dscnome',(isset($dscnome)?$dscnome:'')));?>
                    </div>

                    <div class="form-group">
                        <?php echo form_label( 'Email ', 'dsc_email',array( 'class'=>'required')); ?>
                        <?php echo form_input(array( 'id'=>'dsc_email','name'=>'dsc_email','class'=>'form-control','autofocus'=>'autofocus'),set_value('dscemail',(isset($email)?$email:'')));?>
                    </div>


                    <div class="form-group">
                        <?php echo form_label( 'CPF ', 'nu_cpf',array( 'class'=>'required')); ?>
                        <?php echo form_input(array( 'id'=>'nu_cpf','name'=>'nu_cpf','class'=>'form-control','autofocus'=>'autofocus'),set_value('nucpf',(isset($nucpf)?$nucpf:'')));?>
                    </div>

                    <div class="form-group">
                        <?php echo form_label( 'Senha ', 'senha',array( 'class'=>'required')); ?>
                        <?php echo form_input(array( 'id'=>'senha','name'=>'senha','type'=> 'password','class'=>'form-control'),set_value('dcsenha',(isset($dcsenha)?$dcsenha:'')));?>
                    </div>

                    <div class="form-group">
                        <?php echo form_label( 'Matricula ', 'nu_matricula',array( 'class'=>'required')); ?>
                        <?php echo form_input(array( 'id'=>'nu_matricula','name'=>'nu_matricula','class'=>'form-control'),set_value('numatricula',(isset($numatricula)?$numatricula:'')));?>
                    </div>

                    <div class="form-group" style="padding-top: 20px;">
                        <?php echo form_input(array( 'id'=>'submit','type'=>'submit','value'=> 'Cadastrar','class'=>'btn btn-primary pull-right'));?>
                    </div>

                    <?php echo form_close(); ?>

                    <?php if(isset($erro)) { echo "<p class='alert alert-danger col-sm-12' role='alert-danger'>"; echo $erro; echo "</p>"; } ?>
                </div>
            </div>
        </div>
    </div>
</article>