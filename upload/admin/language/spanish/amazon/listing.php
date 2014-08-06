<?php
$_['lang_title'] = 'Nuevo listado de Amazon';
$_['lang_openbay'] = 'OpenBay Pro';
$_['lang_amazon'] = 'Amazon';

$_['button_search'] = 'Búsqueda';
$_['button_new'] = 'Crear nuevo producto';
$_['button_return'] = 'Volver a productos';
$_['button_amazon_price'] = "Get Amazon's price";
$_['button_list'] = "List on Amazon";

$_['text_view_on_amazon'] = 'Ver en Amazon';
$_['text_list'] = 'Lista';
$_['text_new'] = 'Nuevo';
$_['text_used_like_new'] = 'Usado - Como nuevo';
$_['text_used_very_good'] = 'Usado - Muy bueno';
$_['text_used_good'] = 'Usado - Bueno';
$_['text_used_acceptable'] = 'Usado - Aceptable';
$_['text_collectible_like_new'] = 'Coleccionable - Como nuevo';
$_['text_collectible_very_good'] = 'Coleccionable - Muy bueno';
$_['text_collectible_good'] = 'Coleccionable - Bueno';
$_['text_collectible_acceptable'] = 'Coleccionable - Aceptable';
$_['text_refurbished'] = 'Restaurado';
$_['text_germany'] = 'Alemania';
$_['text_france'] = 'Francia';
$_['text_italy'] = 'Italia';
$_['text_spain'] = 'España';
$_['text_united_kingdom'] = 'Reino Unido';

$_['text_product_sent'] = 'El producto fue enviado exitosamente a Amazon.';
$_['text_product_not_sent'] = 'El producto no fue enviado a Amazon. Razón: %s';

$_['lang_no_results'] = 'No se encuentran resultados';

$_['column_image'] = 'Imagen';
$_['column_asin'] = 'ASIN';
$_['column_name'] = 'Nombre del producto';
$_['column_price'] = 'Precio';
$_['column_action'] = 'Acción';

$_['entry_sku'] = 'SKU:';
$_['entry_condition'] = 'Condición:';
$_['entry_condition_note'] = 'Nota de condición:';
$_['entry_price'] = 'Precio:';
$_['entry_sale_price'] = 'Precio de venta:';
$_['entry_quantity'] = 'Cantidad:';
$_['entry_start_selling'] = 'Disponible desde la fecha:';
$_['entry_restock_date'] = 'Fecha en que volverá a llegar:';
$_['entry_country_of_origin'] = 'País de origen:';
$_['entry_release_date'] = 'Fecha de lanzamiento:';
$_['entry_from'] = 'Fecha desde';
$_['entry_to'] = 'Fecha hasta';

$_['help_sku'] = "Unique product's ID assigned by the merchant";
$_['help_restock_date'] = "This is the date you will be able to ship any back-ordered items to a customer. This date should not be greater than 30 days from the date listed or orders received may automatically be canceled.";
$_['help_sale_price'] = "Sale Price must have a start and end date";

$_['lang_not_in_catalog'] = 'O, si no está en el catálogo&nbsp;&nbsp;&nbsp;';

$_['error_text_missing'] = 'Debes ingresar algunos detalles de búsqueda';
$_['error_data_missing'] = 'Faltan los datos requeridos';
$_['error_missing_asin'] = 'Falta el ASIN';
$_['error_marketplace_missing'] = 'Por favor selecciona un mercado';
$_['error_condition_missing'] = "Please select condition";
$_['error_fetch'] = 'No se pudieron obtener los datos';
$_['error_amazon_price'] = 'No se pudo obtener el precio desde Amazon';
$_['error_stock'] = 'No puedes listar un producto con menos de un ítem en existencia';
$_['error_sku'] = 'Debes ingresar un SKU para el producto';
$_['error_price'] = 'Debes ingresar un precio para el producto';

$_['tab_required_info'] = 'Información requerida';
$_['tab_additional_info'] = 'Opciones adicionales';

$_['lang_placeholder_search'] = 'Ingresa el nombre del producto, UPC, EAN, ISBN o ASIN';
$_['lang_placeholder_condition'] = 'Usa esta caja para describir la condición de tus productos.';

/* Headers, tab names */
$_['item_links_header_text'] = 'Enlaces del producto';
$_['quick_listing_header_text'] = 'Listado rápido';
$_['advanced_listing_header_text'] = 'Listado avanzado';
$_['saved_heder_text'] = 'Guardar listados';
$_['lang_tab_main'] = 'Principal';

$_['item_links_tab_text'] = 'Enlaces del producto';
$_['quick_listing_tab_text'] = 'Listado rápido';
$_['advanced_listing_tab_text'] = 'Listado avanzado';
$_['saved_tab_text'] = 'Listados guardados';

$_['text_error_connecting'] = 'Advertencia: Hubo un problema al conectar a los servidores de la API de Welford Media. Por favor revisa tus preferencias de OpenBay Pro Amazon. Si el problema persiste, por favor contacta al soporte de Welford.';

/* Quick/advanced listing tabs */
$_['quick_listing_description'] = 'Usa este método cuando el producto coincidente ya exista en el catálogo de Amazon. La coincidencia es encontrada por Amazon usando un ID estándar de producto (ASIN, ISBN, UPS, EAN)';
$_['advanced_listing_description'] = 'Usar este método para crear nuevos listados en Amazon';
$_['listing_row_text'] = 'Listado para el producto:';
$_['already_saved_text'] = 'Este producto ya está en los listados guardados. Haz clic en editar si quieres revisar';
$_['save_button_text'] = 'Guardar';
$_['save_upload_button_text'] = 'Guardar y enviar';
$_['saved_listings_button_text'] = 'Ver los listados guardados';
$_['cancel_button_text'] = 'Cancelar';
$_['field_required_text'] = '¡Se requiere este campo!';
$_['not_saved_text'] = 'El listado no fue guardado. Revisa lo ingresado.';
$_['chars_over_limit_text'] = 'caracteres sobre el límite.';
$_['minimum_length_text'] = 'El largo mínimo es';
$_['characters_text'] = 'caracteres';
$_['delete_confirm_text'] = '¿Estás seguro?';

$_['clear_image_text'] = 'Limpiar';
$_['browse_image_text'] = 'Examinar';

$_['category_selector_field_text'] = 'Categoría de Amazon:';

/* Item links tab */
$_['item_links_description'] = 'Aquí puedes agregar y editar los enlaces de producto a los ya existentes en Amazon sin listarlos desde OpenCart. Esto permitirá controlar las existencias entre los mercados habilitados. Si tienes openStock instalado - esto también te permitirá enlazar opciones de producto a SKU\'s individuales de Amazon (enviando productos desde OpenCart a Amazon automáticamente agregará los enlaces).';
$_['new_link_table_name'] = 'Nuevo enlace';
$_['new_link_product_column'] = 'Producto';
$_['new_link_sku_column'] = 'SKU';
$_['new_link_amazon_sku_column'] = 'SKU de producto de Amazon';
$_['new_link_action_column'] = 'Acción';

$_['item_links_table_name'] = 'Enlaces del producto';


/* Marketplaces */
$_['marketplaces_field_text'] = 'Mercado';
$_['marketplaces_help'] = '';


/* Saved listings tab */
$_['saved_listings_description'] = '';
$_['actions_edit_text'] = '';
$_['actions_remove_text'] = '';
$_['upload_button_text'] = '';

$_['name_column_text'] = '';
$_['model_column_text'] = '';
$_['sku_column_text'] = '';
$_['amazon_sku_column_text'] = '';
$_['actions_column_text'] = '';
$_['saved_localy_text'] = '';
$_['uploaded_alert_text'] = '';
$_['upload_failed'] = '';


/* ITEM LINKS */
$_['links_header_text'] = '';
$_['links_desc1_text'] = '';
$_['links_desc2_text'] = '';
$_['links_load_btn_text'] = '';
$_['links_new_link_text'] = '';
$_['links_autocomplete_product_text'] = '';
$_['links_amazon_sku_text'] = '';
$_['links_action_text'] = '';
$_['links_add_text'] = '';
$_['links_add_sku_tooltip'] = '';
$_['links_remove_text'] = '';
$_['links_linked_items_text'] = '';
$_['links_unlinked_items_text'] = '';
$_['links_name_text'] = '';
$_['links_model_text'] = '';
$_['links_sku_text'] = '';
$_['links_amazon_sku_text'] = '';
$_['links_sku_empty_warning'] = '';
$_['links_name_empty_warning'] = '';
$_['links_product_warning'] = '';

$_['option_default'] = '';
$_['lang_error_load_nodes'] = '';

/* Listin edit page */
$_['text_edit_heading'] = '';

$_['text_has_saved_listings'] = '';

$_['text_product_links'] = '';
$_['button_create_new_listing'] = "Create new listing";
$_['button_remove_links'] = "Remove links";
$_['button_saved_listings'] = "View saved listings";

$_['column_name'] = 'Nombre del producto';
$_['column_model'] = '';
$_['column_combination'] = '';
$_['column_sku'] = '';
$_['column_amazon_sku'] = '';