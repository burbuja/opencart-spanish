<?php
//Payment page links
$_['text_amazon_checkout'] = '<a onclick="window.open(\'http://go.amazonservices.com/UKCBASPOpenCart.html\');"><img src="view/image/payment/amazon.png" alt="Amazon Payments" title="Amazon Payments" style="border: 1px solid #EEEEEE;" /></a>';
$_['text_amazon_join'] = '<a href="http://go.amazonservices.com/UKCBASPOpenCart.html" title="Click here to join Amazon Payments">Haz clic aquí para crear tu cuenta en Amazon Payments</a>';

//Headings
$_['heading_title'] = 'Amazon Payments';
$_['text_home'] = 'Inicio';
$_['text_payment'] = 'Pago';

//Text
$_['text_cron_job_url'] = "Cron Job's URL:";
$_['help_cron_job_url'] = "Set a cron job to call this URL";
$_['text_cron_job_token'] = "Secret Token";
$_['help_cron_job_token'] = "Make this long and hard to guess";
$_['text_access_key'] = 'Clave de acceso:';
$_['text_access_secret'] = 'Clave secreta:';
$_['text_merchant_id'] = 'ID de comerciante:';
$_['text_marketplace'] = 'Mercado:';
$_['text_germany'] = 'Alemania';
$_['text_uk'] = 'Reino Unido';
$_['text_checkout_mode'] = 'Modo de pago:';
$_['text_geo_zone'] = 'Zona geográfica:';
$_['text_status'] = 'Estado:';
$_['text_live'] = 'Ambiente productivo';
$_['text_sandbox'] = 'Ambiente de desarrollo';
$_['text_sort_order'] = 'Orden:';
$_['text_minimum_total'] = 'Total mínimo del pedido:';
$_['text_all_geo_zones'] = 'Todas las zonas geográficas';
$_['text_status_enabled'] = 'Activado';
$_['text_status_disabled'] = 'Desactivado';
$_['text_default_order_status'] = 'Pendiente:';
$_['text_ready_order_status'] = 'Estado para listo para ser enviado:';
$_['text_canceled_order_status'] = 'Estado para pedido anulado:';
$_['text_shipped_order_status'] = 'Estado para pedido enviado:';
$_['text_last_cron_job_run'] = "Last cron job's run time:";
$_['text_allowed_ips'] = "IPs allowed";
$_['text_add'] = "Add";
$_['text_upload_success'] = 'El archivo fue subido exitosamente.';
$_['help_adjustment'] = 'Se requieren los campos en negrilla y por lo menos un campo "-adj"';
$_['help_allowed_ips'] = "Leave empty if you want everyone to see the checkout button";

// Buttons
$_['button_cancel'] = 'Anular';
$_['button_save'] = 'Guardar';

// Errors
$_['error_permissions'] = 'No tienes permiso para modificar este módulo';
$_['error_empty_access_secret'] = 'Se requiere la clave secreta';
$_['error_empty_access_key'] = 'Se requiere la clave de acceso';
$_['error_empty_merchant_id'] = 'Se requiere el ID de comerciante';
$_['error_curreny'] = 'Tu compra debe tener la divisa %s instalada y habilitada';
$_['error_upload'] = 'Falló la subida';

// Checkout button settings
$_['text_button_settings'] = 'Preferencias del botón de pago';
$_['text_colour'] = 'Color:';
$_['text_orange'] = 'Naranja';
$_['text_tan'] = 'Broceado';
$_['text_white'] = 'Blanco';
$_['text_light'] = 'Claro';
$_['text_dark'] = 'Oscuro';
$_['text_size'] = 'Tamaño:';
$_['text_medium'] = 'Mediano';
$_['text_large'] = 'Grande';
$_['text_x_large'] = 'Extra grande';
$_['text_background'] = 'Fondo:';
$_['text_download'] = '<a href="%s">Bajar</a> el archivo plantilla';

// Messages
$_['text_success'] = 'Se actualizó el módulo Amazon Payments';

// Order Info
$_['text_amazon_details'] = 'Detalles de Amazon';
$_['text_amazon_order_id'] = 'ID de pedido en Amazon:';
$_['text_upload'] = 'Subir';
$_['text_upload_template'] = '';
$_['tab_order_adjustment'] = 'Ajustes del pedido';

//Table columns
$_['column_submission_id'] = 'ID de envío';
$_['column_status'] = 'Estado';
$_['column_text'] = 'Respuesta';
$_['column_amazon_order_item_code'] = 'Código del pedido del producto en Amazon';
?>