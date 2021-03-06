<ul class="nav nav-pills pull-right">
    <li>
        <a href="<?=$_base?>/dte/dte_ventas/ver/<?=$periodo?>" title="Volver a la IEV del período <?=$periodo?>">
            Volver a la IEV <?=$periodo?>
        </a>
    </li>
</ul>

<h1>Rectificación IEV para el período <?=$periodo?></h1>
<?php
$f = new \sowerphp\general\View_Helper_Form();
echo $f->begin([
    'action' => $_base.'/dte/dte_ventas/enviar_sii/'.$periodo,
    'onsubmit'=>'Form.check() && Form.checkSend(\'¿Está seguro de enviar la rectificación del libro?\')'
]);
echo $f->input([
    'name' => 'CodAutRec',
    'label'=>'Autorización rectificación',
    'help' => 'Código de autorización de rectificación obtenido desde el SII',
    'check'=>'notempty',
]);
echo $f->end('Enviar rectificación');
