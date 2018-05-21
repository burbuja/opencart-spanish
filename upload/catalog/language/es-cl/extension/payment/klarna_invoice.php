<?php

$_['text_title'] = 'Klarna Invoice - Pago dentro de 14 días';
$_['text_terms_fee'] = '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee'] = '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional'] = 'Klarna Invoice requiere información adicional antes de que ellos puedan procesar tu pedido.';
$_['text_male'] = 'Masculino';
$_['text_female'] = 'Femenino';
$_['text_year'] = 'Año';
$_['text_month'] = 'Mes';
$_['text_day'] = 'Día';
$_['text_comment'] = 'Klarna\'s Invoice ID: %s. 
%s/%s: %.4f';
$_['entry_gender'] = 'Sexo';
$_['entry_pno'] = 'Número personal';
$_['entry_dob'] = 'Fecha de nacimiento';
$_['entry_phone_no'] = 'Número de teléfono';
$_['entry_street'] = 'Calle';
$_['entry_house_no'] = 'Número de casa';
$_['entry_house_ext'] = 'Extensión de la casa';
$_['entry_company'] = 'Número de registro de la empresa';
$_['help_pno'] = 'Por favor ingresa aquí tu número de Seguridad Social.';
$_['help_phone_no'] = 'Por favor ingresa tu número de teléfono.';
$_['help_street'] = 'Por favor toma nota de que la entrega solo puede tomar lugar en la dirección registrada al pagar con Klarna.';
$_['help_house_no'] = 'Por favor ingresa el número de tu casa.';
$_['help_house_ext'] = 'Por favor indique la extensión de su casa aquí. Ej. A, B, C, Roja, Azul, etc.';
$_['help_company'] = 'Por favor ingresa el número de registro de tu empresa';
$_['error_deu_terms'] = 'Debes estar de acuerdo con la política de privacidad de Klarna (Datenschutz)';
$_['error_address_match'] = 'Las direcciones de envío y de facturación deben ser las mismas si quieres usar Klarna Invoice';
$_['error_network'] = 'Ocurrió un error al intentar conectarse a Klarna. Por favor intenta de nuevo más tarde.';
