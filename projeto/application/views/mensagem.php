<script type="text/javascript">
    $(document).ready(function() {
        $('#open-modal-mensagem-button').on("click",function(e) {
            $('#modalMensagem').modal('show');
        });
        $("#btn-close").on("click", function(e){
            $("#modalMensagem").modal('hide');
        });

    });

</script>

<article class="row" id="inicio">

    <!--modal mensagem !-->
    <div class="modal fade" id="modalForum">
        <?php
        echo form_open('forum/cadastrarForum',array('id'=>'formMensagem','name'=>'formMensagem','role'=>'form') );
        ?>
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Cadastrar Fórum</h4>
            </div>
            <div class="modal-body" id="ModalBodyFatness">
                <div class="form-group">
                    <?php echo form_label('Nome ','dsc_titulo_forum',array('class'=>'required')); ?>
                    <?php echo form_input(array("type"=>"text","name"=>"inputTituloForum","id"=>"tituloForum",'class'=>'parametros-group form-control','autofocus'=>'autofocus')); ?>
                    <?php echo form_label('Descrição ','dsc_forum',array('class'=>'required')); ?>
                    <?php echo form_input(array("type"=>"text","name"=>"inputDscForum","id"=>"dscForum",'class'=>'parametros-group form-control','autofocus'=>'autofocus')); ?>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit"  class="btn btn-primary">Gravar</button>
                <button id='btn-close' type="reset" class="btn btn-default">Cancelar</button>
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>



    <div id="container-fluid">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-5 col-sm-offset-1">
                <div class="well"></br>
                    <button type="button" id="open-modal-mensagem-button" class="btn btn-default">Escrever</button>
                    <h3>Mensagens</h3>
                    </br>
                    <?php
                        print_r($mensagens);
                     ?>
                    </br></br></br>
                </div>
            </div>
        </div>
    </div>
</article>


