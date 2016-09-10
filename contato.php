<?php ?>
<div class="container">
    <div class="page-header">
        <h1>Entre em contato</h1>
    </div>
    <ul class="breadcrumb">
        <li><a href="home.php">Página inicial</a> </li>
        <li class="active">Contato</li>
    </ul>
    <div class="row">
        <div class="col-md-9 col-sm-9 col-xs-12">
            <form name="form1" method="post" novalidate>
                <div class="control-group">
                    <label class="control-label" for="nome">Nome:</label>
                    <div class="controls">
                        <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome completo"
                               required
                               data-validation-required-message="Este campo é obrigatório, preencha por favor!"
                               >
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="telefone">Telefone:</label>
                    <div class="controls">
                        <input type="tel" class="form-control" name="telefone" id="telefone"
                               placeholder="digite um número com ddd"
                               required
                               data-validation-required-message="Preencha o telefone por favor!"                               
                               data-mask="(99) 9999-9999?9"
                               >
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label" for="email">E-mail:</label>
                    <div class="controls">
                        <input type="email" class="form-control" name="email" id="email"
                               placeholder="digite seu e-mail"
                               required
                               data-validation-required-message="O email é 
                               obrigatório, preencha por favor!"
                               data-validation-email-message="Preencha um e-mail válido!!!"
                               
                               >
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
            </form>
        </div>
        <div class="col-md-3 col-sm-3 col-xs-12">
            <h2>Outros meios de contato:</h2>
            <p>
                Facebook: www.facebook.com
                <br>
                Email: adriano@adrianob.com.br
                <br>
                Telefone: (0800) 011-1406
            </p>
        </div>
    </div>
</div>