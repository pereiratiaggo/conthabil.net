<?php
//Return false para parar de exibir o comunicado
return false;
?>
<style type="text/css">
div.comunicado{
    z-index: 3;
    position: absolute;
    margin-top: 75px;
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
    <a href="download/2017-03-16_RELACAO_DE_DOCTOS_IRPF.pdf" target="_blank">
        <img class="img-responsive" src="img/irpf.jpg" />
    </a>
</div>