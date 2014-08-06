<?php
// Heading
$_['lang_heading_title']        = 'OpenBay Pro';
$_['lang_text_manager']         = 'Administrador de OpenBay Pro';

// Text
$_['text_install']              = 'Instalar';
$_['text_uninstall']            = 'Desinstalar';
$_['lang_text_success']         = 'Éxito: Las configuraciones han sido guardadas';
$_['lang_text_no_results']      = 'No se encuentran resultados';
$_['lang_checking_version']     = 'Revisando la versión del software';
$_['lang_btn_manage']           = 'Administrar';
$_['lang_btn_retry']            = 'Reintentar';
$_['lang_btn_save']             = 'Guardar';
$_['lang_btn_cancel']           = 'Anular';
$_['lang_btn_update']           = 'Actualizar';
$_['lang_btn_settings']         = 'Configuraciones';
$_['lang_btn_patch']            = 'Parche';
$_['lang_btn_test']             = 'Probar la conexión';
$_['lang_latest']               = 'Estás ejecutando la última versión';
$_['lang_installed_version']    = 'Versión instalada';
$_['lang_admin_dir']            = 'Directorio de administración';
$_['lang_admin_dir_desc']       = 'Si cambiaste tu directorio de administración, actualízalo a la nueva ubicación';
$_['lang_version_old_1']        = 'Una nueva versión está disponible. Tu versión es';
$_['lang_version_old_2']        = 'la última es';
$_['lang_use_beta']             = 'Usar la versión Beta';
$_['lang_use_beta_2']           = '¡NO se sugiere!';
$_['lang_test_conn']            = 'Probar la conexión FTP';
$_['lang_text_run_1']           = 'Ejecutar la actualización';
$_['lang_text_run_2']           = 'Ejecutar';
$_['lang_no']                   = 'No';
$_['lang_yes']                  = 'Sí';
$_['lang_language']             = 'Lenguaje de respuesta de la API';
$_['lang_getting_messages']     = 'Obteniendo los mensajes de OpenBay Pro';

// Column
$_['lang_column_name']          = 'Nombre de la extensión';
$_['lang_column_status']        = 'Estado';
$_['lang_column_action']        = 'Acción';

// Error
$_['error_permission']          = 'Advertencia: ¡No tienes permiso para modificar las extensiones de eBay!';

// Updates
$_['lang_use_pasv']                     = 'Usar FTP pasivo';
$_['field_ftp_user']                    = 'Nombre de usuario del FTP';
$_['field_ftp_pw']                      = 'Contraseña del FTP';
$_['field_ftp_server_address']          = 'Dirección del servidor FTP';
$_['field_ftp_root_path']               = 'Ruta en el servidor FTP';
$_['field_ftp_root_path_info']          = '(Sin barra al final p.ej.: httpdocs/www)';
$_['desc_ftp_updates']                  = 'Activar las actualizaciones desde aquí quiere decir que no tienes que actualizar manualmente tu módulo usando arrastrar y soltar estándar a través del FTP. Tu FTP no se envía a la API.<br />';

//Updates
$_['lang_run_patch_desc']               = 'Parche de post actualización<span class="help">Solo se necesita si actualizas manualmente</span>';
$_['lang_run_patch']                    = 'Ejecutar la ruta';
$_['update_error_username']             = 'Se esperaba el nombre de usuario';
$_['update_error_password']             = 'Se esperaba la contraseña';
$_['update_error_server']               = 'Se esperaba el servidor';
$_['update_error_admindir']             = 'Se esperaba el directorio de administración';
$_['update_okcon_noadmin']              = 'Se logra la conexión al servidor, pero no se encuentra la carpeta admin de tu OpenCart';
$_['update_okcon_nofiles']              = 'Se logra la conexión al servidor, pero ¡no se encuentran las carpetas de OpenCart! ¿Está correcta la ruta raíz?';
$_['update_okcon']                      = 'Se logra la conexión al servidor. Se pudieron encontrar las carpetas de OpenCart';
$_['update_failed_user']                = 'No se pudo iniciar sesión con ese usuario';
$_['update_failed_connect']             = 'No se pudo conectar al servidor';
$_['update_success']                    = 'El módulo ha sido actualizado (v.%s)';
$_['lang_patch_notes1']                 = 'Para leer acerca de las actualizaciones recientes y pasadas';
$_['lang_patch_notes2']                 = 'haz clic aquí';
$_['lang_patch_notes3']                 = "The update tool will make changes to your shop's file system. Make sure you have a backup before using this tool.";

//Help tab
$_['lang_help_title']                   = 'Información de ayuda y soporte';
$_['lang_help_support_title']           = 'Soporte';
$_['lang_help_support_description']     = 'Deberías leer nuestra sección de P+F para ver si tu pregunta ya fue respondida <a href="http://shop.openbaypro.com/index.php?route=information/faq" title="P+F de soporte de OpenBay Pro para OpenCart">aquí</a>. <br />Si no puedes encontrar una respuesta entonces puedes crear un ticket de soporte, <a href="http://support.welfordmedia.co.uk" title="Sitio de soporte de OpenBay Pro para OpenCart">haciendo clic aquí</a>';
$_['lang_help_template_title']          = 'Crear plantillas de eBay';
$_['lang_help_template_description']    = 'Información para desarrolladores y diseñadores para crear plantillas personalizadas para sus listados de eBay, <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=30" title="Plantillas HTML de OpenBay Pro para eBay">haz clic aquí</a>';

$_['lang_tab_help']                     = 'Ayuda';
$_['lang_help_guide']                   = 'Guías de usuario';
$_['lang_help_guide_description']       = 'Para bajar y ver las guías de uso de eBay y Amazon <a href="http://shop.openbaypro.com/index.php?route=information/faq&topic=37" title="Gúidas de usuario de OpenBay Pro">haz clic aquí</a>';

$_['lang_mcrypt_text_false']            = 'La biblioteca de PHP "mcrypt_encrypt" no está habilitada. Ponte en contacto con tu proveedor de alojamiento.';
$_['lang_mb_text_false']                = 'La biblioteca de PHP "mb strings" no está habilitada. Ponte en contacto con tu proveedor de alojamiento.';
$_['lang_ftp_text_false']               = 'Las funciones de FTP en PHP no están habilitadas. Ponte en contacto con tu proveedor de alojamiento.';
$_['lang_error_oc_version']             = 'Tu versión de OpenCart no se ha probado para trabajar con este módulo. Puedes experimentar problemas.';
$_['lang_patch_applied']                = 'Parche aplicado';
$_['faqbtn']                            = 'Ver P+F';
$_['lang_clearfaq']                     = 'Limpiar las ventanas emergentes ocultas de P+F';
$_['lang_clearfaqbtn']                  = 'Limpiar';

// Ajax elements
$_['lang_ajax_ebay_shipped']            = 'Este pedido será marcado como enviado en eBay automáticamente';
$_['lang_ajax_amazoneu_shipped']        = 'Este pedido será marcado como enviado en Amazon U.E. automáticamente';
$_['lang_ajax_amazonus_shipped']        = 'Este pedido será marcado como enviado en Amazon EE.UU. automáticamente';
$_['lang_ajax_refund_reason']           = 'Razón de la devolución';
$_['lang_ajax_refund_message']          = 'Mensaje de devolución';
$_['lang_ajax_refund_entermsg']         = 'Debes ingresar un mensaje de devolución';
$_['lang_ajax_refund_charmsg']          = 'Tu mensaje que devolución debe tener menos de 1000 caracteres';
$_['lang_ajax_refund_charmsg2']         = 'Tu mensaje no puede contener los caracteres > o <';
$_['lang_ajax_courier']                 = 'Courier';
$_['lang_ajax_courier_other']           = 'Otro courier';
$_['lang_ajax_tracking']                = 'Número de seguimiento';
$_['lang_ajax_tracking_msg']            = 'Debes ingresar un ID de seguimiento, usa "none" si no tienes uno';
$_['lang_ajax_tracking_msg2']           = 'Tu ID de seguimiento no puede contener los caracteres > o <';
$_['lang_ajax_tracking_msg3']           = 'Debes seleccionar el courier si quieres enviar el número de seguimiento';
$_['lang_ajax_tracking_msg4']           = 'Por favor deja el campo del courier vacío si quieres usar un courier personalizado.';

$_['lang_title_help']                   = '¿Necesitas ayuda con OpenBay Pro?';
$_['lang_pod_help']                     = 'Ayuda';
$_['lang_title_manage']                 = 'Administrar OpenBay Pro; actualizaciones, configuraciones y más';
$_['lang_pod_manage']                   = 'Administrar';
$_['lang_title_shop']                   = 'Tienda de OpenBay Pro; añadidos, plantillas y más';
$_['lang_pod_shop']                     = 'Tienda';

$_['lang_checking_messages']            = 'Chequeando mensajes';
$_['lang_title_messages']               = 'Mensajes y notificaciones';
$_['lang_error_retry']          		= 'No se pudo conectar al servidor de OpenBay.';
?>