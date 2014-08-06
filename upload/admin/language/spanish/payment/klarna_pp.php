<?php
// Heading
$_['heading_title']      = 'Klarna Part Payment';

// Text
$_['text_payment']       = 'Pagos';
$_['text_success']       = 'Éxito: ¡Has modificado el módulo de pago Klarna Part Payment!';
$_['text_klarna_pp']     = '<a onclick="window.open(\'https://merchants.klarna.com/signup?locale=en&amp;partner_id=d5c87110cebc383a826364769047042e777da5e8&amp;utm_campaign=Platform&amp;utm_medium=Partners&amp;utm_source=Opencart\');"><img src="view/image/payment/klarna.png" alt="Klarna" title="Klarna" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_live']          = 'Producción';
$_['text_beta']          = 'Beta';

// Entry
$_['entry_merchant']     = 'ID de comercio de Klarna:<br /><span class="help">(estore id) para usar con el servicio de Klarna (provisto por Klarna).</span>';
$_['entry_secret']       = 'Secreto de Klarna:<br /><span class="help">Secreto compartido para usar con el servicio de Klarna (provisto por Klarna).</span>';
$_['entry_server']       = 'Servidor:';
$_['entry_total']        = 'Total:<br /><span class="help">El pago total que el pedido debe alcanzar antes de que este medio de pago se active.</span>';		
$_['entry_order_status'] = 'Estado del pedido:';
$_['entry_geo_zone']     = 'Zona geográfica:';
$_['entry_status']       = 'Estado:';
$_['entry_sort_order']   = 'Orden:';

// Error
$_['error_permission']   = 'Advertencia: ¡No tienes permiso para modificar el pago Klarna Part Payment!';
$_['error_xmlrpc']       = '¡Se requiere que la extensión de PHP XML-RPC esté instalada!';
$_['error_merchant']     = '¡Se requiere el ID de comercio!';
$_['error_secret']       = '¡Se requiere el secreto!';
?>