<?php
//Return false para parar de exibir o comunicado
return false;
?>
<style type="text/css">
div.comunicado{
    z-index: 3;
    position: fixed;
    margin-top: 150px;
    left: 50%;
    transform: translate(-50%);	
    max-width: 80%;	
    vertical-align: middle;
    text-align: center;
    padding: 20px;
}
</style>
<div class="alert alert-info alert-dimissible comunicado">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <h2>Comunicado - Feriado dia 28/02/2017</h2>
    <hr />
    <p>
        Informamos, que a Conthábil Assessoria não terá expediente nos dias 27/02 e 28/02/2017, devido ao feriado do Carnaval.<br />
        <br />
        Retornamos ao atendimento normal no dia 01/03/2017.<br />
        <br />
        Pedimos a gentileza de antecipar seus assuntos.<br />
        <br />
        Agradecemos à compreensão.<br />
        <br />
        Conthábil Assessoria.
    </p>
</div>