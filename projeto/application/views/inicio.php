<article class="row" id="inicio">
	<div id="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-5 col-sm-offset-1">
            	<div class="well"></br>
						<h1>Seja Bem-Vindo!</h1>
						</br>
						<?php
						foreach ($data as $linha)
							?>
						<h1>
						<?php
							print_r($linha['dsc_nome']);
						?>
						</h1>
						</br></br></br>
				</div>
        	</div>			
        	<div class="col-lg-2 col-md-8 col-sm-5 ">

        		<div class="well">
    					<li class='first active'>
        					<a href='/inicio' title='Home'>Home</a>
    					</li>
    					<li>
        					<a href='/meuPerfil' title='Meu Perfil'>Meu Perfil</a>
    					</li>
    					<li>
        					<a href='/forum' title='Forum'>Forum</a>
    					</li>    
    					<li>
        					<a href='/debates' title='Debates'>Debates</a>
    					</li>
    					<li class='last'>
        					<a href='/avaliacao' title='Avaliações Docentes'>Avaliações Docentes</a>
    					</li>
				</div>
        	</div>
		</div>
	</div>
</article>
