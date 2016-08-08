<?php

$_['heading_title'] = 'Importación de artículo';
$_['text_openbay'] = 'OpenBay Pro';
$_['text_ebay'] = 'eBay';
$_['text_sync_import_line1'] = '<strong>Caution!</strong> This will import all of your eBay products and build a category structure in your store. It is advised that you delete all categories and products before you run this option. <br />The category structure is from the normal eBay categories, not your shop categories (if you have an eBay shop). You can rename, remove and edit the imported categories without affecting your eBay products.';
$_['text_sync_import_line3'] = 'Necesitas asegurarte de que tu servidor pueda aceptar y procesar tamaños grandes de datos POST. 1000 artículos de eBay son unos 40 MB en tamaño, necesitarás calcular lo que requieras. Si tu llamada fallara, podría ser porque puede haber un tamaño muy pequeño configurado. El límite de memoria de PHP necesita tener unos 128 MB.';
$_['text_sync_server_size'] = 'Tu servidor puede aceptar actualmente';
$_['text_sync_memory_size'] = 'Tu límite de memoria en PHP:';
$_['text_import_confirm'] = 'Esto importará todos los ítems de eBay como productos nuevos, ¿estás seguro? ¡Esto NO SE PUEDE deshacer! ¡ASEGÚRATE de respaldar todo primero!';
$_['text_import_notify'] = 'Your import request has been sent for processing. An import takes about 1 hour per 1000 items.';
$_['text_import_images_msg1'] = 'imágenes que están pendientes de copiar o importar desde eBay. Refresca esta página, se el número no baja entonces';
$_['text_import_images_msg2'] = 'haz clic aquí';
$_['text_import_images_msg3'] = 'and wait. More information about why this happened can be found <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=8_45" target="_blank">here</a>';
$_['entry_import_item_advanced'] = 'Conseguir datos avanzados';
$_['entry_import_categories'] = 'Importar categorías';
$_['entry_import_description'] = 'Importar las descripciones del artículo';
$_['entry_import'] = 'Importar artículos desde eBay';
$_['button_import'] = 'Importar';
$_['button_complete'] = 'Completo';
$_['help_import_item_advanced'] = 'Will take up to 10 times longer to import items. Imports weights, sizes, ISBN and more if available';
$_['help_import_categories'] = 'Builds a category structure in your store from the eBay categories';
$_['help_import_description'] = 'This will import everything including HTML, visit counters etc';
$_['error_import'] = 'Falló al cargar';
$_['error_maintenance'] = 'Tu tienda está en modo de mantenimiento. ¡La importación fallará!';
$_['error_ajax_load'] = 'Falló la conexión al servidor';
$_['error_validation'] = 'You need to register for your API token and enable the module.';
