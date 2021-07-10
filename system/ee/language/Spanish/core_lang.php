<?php

$lang = array(

    /* General word list */
    'and' => 'y',

    'and_n_others' => 'y %d más...',

    'at' => 'en',

    'auto_redirection' => 'Serás redirigido automáticamente en %x segundos',

    'back' => 'Atrás',

    'by' => 'por',

    'click_if_no_redirect' => 'Haga clic aquí si no es redirigido automáticamente',

    'disabled' => 'deshabilitado',

    'dot' => 'punto',

    'enabled' => 'activado',

    'encoded_email' => '(JavaScript debe estar habilitado para ver esta dirección de correo electrónico)',

    'first' => 'Primero',

    'id' => 'ID',

    'last' => 'Última',

    'next' => 'Siguiente',

    'no' => 'Nu',

    'not_authorized' => 'No está autorizado a realizar esta acción',

    'not_available' => 'No disponible',

    'of' => 'de',

    'off' => 'apagado',

    'on' => 'en',

    'or' => 'o',

    'pag_first_link' => '&lsaquo; Primero',

    'pag_last_link' => 'Último &rsaquo;',

    'page' => 'Pgina',

    'preference' => 'Preferencia',

    'prev' => 'Anterior',

    'return_to_previous' => 'Volver a la página anterior',

    'search' => 'Buscar',

    'setting' => 'Ajustes',

    'site_homepage' => 'Página web',

    'submit' => 'Enviar',

    'system_off_msg' => 'Este sitio está actualmente inactivo.',

    'thank_you' => '¡Gracias!',

    'update' => 'Actualizar',

    'updating' => 'Actualizando',

    'yes' => 'Sí',

    'required_fields' => 'Campos requeridos',

    'edit_this' => 'Editar esto',

    /* Errors */
    'captcha_incorrect' => 'No has enviado la palabra exactamente como aparece en la imagen',

    'captcha_required' => 'Debe enviar la palabra que aparece en la imagen',

    'checksum_changed_accept' => 'Aceptar cambios',

    'checksum_changed_warning' => 'Uno o más archivos del núcleo han sido alterados:',

    'checksum_email_message' => 'ExpressionEngine ha detectado la modificación de un archivo base en: {url}

Los siguientes archivos son afectados:
{changed}

Si hizo estos cambios, por favor acepte las modificaciones en la página principal del panel de control. Si no modificó estos archivos, puede indicar un intento de hacking. Revisa los archivos para cualquier contenido sospechoso (JavaScript o iFrames) y ver: ' . DOC_URL . 'troubleshooting/error_messages/expressionengine_has_detected_the_modification_of_a_core_file.html',

    'checksum_email_subject' => 'Un archivo central fue modificado en tu sitio.',

    'warning_system_status_title' => 'Por favor, compruebe el estado de conexión del sistema',

    'warning_system_status_message' => 'El estado actual del sistema está establecido en <b>%s</b>. Si necesita cambiar eso, por favor visite <a href="%s">Configuración del Sistema</a> o presione el botón de abajo.',

    'warning_system_status_button' => 'Establecer sistema %s',

    'csrf_token_expired' => 'Este formulario ha caducado. Por favor, actualiza e inténtalo de nuevo.',

    'current_password_incorrect' => 'Su contraseña actual no ha sido enviada correctamente.',

    'current_password_required' => 'Su contraseña actual es requerida.',

    'curl_not_installed' => 'cURL no está instalado en tu servidor',

    'error' => 'Error',

    'file_not_found' => 'El archivo %s no existe.',

    'general_error' => 'Se encontraron los siguientes errores',

    'generic_fatal_error' => 'Algo ha salido mal y esta URL no puede ser procesada en este momento.',

    'invalid_action' => 'La acción que has solicitado no es válida.',

    'invalid_url' => 'La URL que has enviado no es válida.',

    'missing_encryption_key' => 'No tiene valor establecido para <code>%s</code> en su configuración. hp. Esto puede dejar su instalación abierta a vulnerabilidades de seguridad. Restaurar las claves o ver <a href="%s">este artículo de solución de problemas</a> en la guía de usuario para obtener ayuda.',

    'el_folder_present' => '<code>%s</code> directorio está presente en tu servidor. Por favor, asegúrate de que has reemplazado tu <code>índice. hp</code> y <code>admin.php</code> según <a href="%s">las instrucciones de actualización</a> y eliminar este directorio.',

    'missing_mime_config' => 'No se puede importar la lista blanca de tipo mime: el archivo %s no existe o no se puede leer.',

    'new_version_error' => 'Se ha producido un error inesperado al intentar descargar el número de versión actual de ExpressionEngine. Vea este <a href="%s" rel="external noreferrer">documento de solución de problemas</a> para más información.',

    'nonexistent_page' => 'La página solicitada no fue encontrada',

    'redirect_xss_fail' => 'El enlace al que se está redirigiendo para contener algún código potencialmente malicioso o peligroso. Le recomendamos que presione el botón atrás y envíe un correo electrónico a %s para informar del enlace que generó este mensaje.',

    'redirect_warning_header' => 'Advertencia de redirección',

    'redirect_description' => 'Estás abriendo una nueva página web que va a alojar <b>%s</b> que no es parte de',

    'redirect_check_address' => 'Por favor, compruebe que la dirección es correcta.',

    'redirect_cancel' => 'Cancelar',

    'submission_error' => 'El formulario enviado contiene los siguientes errores',

    'theme_folder_wrong' => 'La ruta de la carpeta del tema es incorrecta. Por favor, ve a <a href="%s">URL y configuración de ruta</a> y comprueba la <code>ruta de temas</code> y <code>URL de temas</code>.',

    'unable_to_load_field_type' => 'No se puede cargar el archivo de tipo de campo solicitado: %s.<br /> Confirme que el archivo de tipo de campo se encuentra en el /' . SYSDIR . 'directorio /user/addons/',

    'unwritable_cache_folder' => 'La carpeta de caché no tiene los permisos adecuados.<br />Para arreglar: Establece la carpeta de caché (/' . SYSDIR . 'Permisos /user/cache/) a 777 (o equivalentes para su servidor).',

    'unwritable_config_file' => 'Su archivo de configuración no tiene los permisos adecuados.<br />Para arreglar: establezca el archivo de configuración (/' . SYSDIR . 'Permisos de /user/config/config.php) a 666 (o equivalente para tu servidor).',

    'version_mismatch' => 'Su instalación de ExpressionEngine&rsquo;s (%s) no es consistente con la versión reportada (%s). <a href="' . DOC_URL . 'installation/update.html" rel="external">Por favor, actualiza tu instalación de ExpressionEngine de nuevo</a>.',

    'php72_intl_error' => 'Su extensión <code>intl</code> de PHP está desactualizada. Asegúrese de que tiene instalado <code>ICU 4.6</code> o posterior.',

    /* Member Groups */
    'banned' => 'Baneado',

    'guests' => 'Invitados',

    'members' => 'Miembros',

    'pending' => 'Pendiente',

    'super_admins' => 'Súper Admin',

    /* Template.php */
    'error_fix_module_processing' => 'Compruebe que el módulo \'%x\' está instalado y que \'%y\' es un método disponible para el módulo',

    'error_fix_syntax' => 'Por favor, corrija la sintaxis en su plantilla.',

    'error_invalid_conditional' => 'Tienes una condición no válida en tu plantilla. Por favor, revisa tus condicionales para una cadena no cerrada, operadores no válidos, falta }, o falta {/if}.',

    'error_layout_too_late' => 'Plugin o etiqueta de módulo encontrada antes de la declaración de diseño. Por favor, mueva la etiqueta de diseño a la parte superior de su plantilla.',

    'error_multiple_layouts' => 'Múltiples diseños encontrados, por favor asegúrese de que sólo tiene una etiqueta de diseño por plantilla',

    'error_tag_module_processing' => 'La siguiente etiqueta no puede ser procesada:',

    'error_tag_syntax' => 'La siguiente etiqueta tiene un error de sintaxis:',

    'layout_contents_reserved' => 'El nombre "contenido" está reservado para los datos de la plantilla y no puede utilizarse como una variable de diseño (por ejemplo, {layout:set name="contents"} o {layout="foo/bar" contenidos=""}).',

    'template_load_order' => 'Orden de carga de plantillas',

    'template_loop' => 'Ha causado un bucle de plantilla debido a subplantillas anidadas incorrectamente (\'%s\' recursivamente)',

    /* Email */
    'error_sending_email' => 'No se puede enviar correo electrónico en este momento.',

    'forgotten_email_sent' => 'Si esta dirección de correo electrónico está asociada con una cuenta, las instrucciones para restablecer su contraseña acaban de ser enviadas por correo electrónico.',

    'no_email_found' => 'La dirección de correo electrónico que ha enviado no se ha encontrado en la base de datos.',

    'password_has_been_reset' => 'Su contraseña fue restablecida y una nueva le ha sido enviada por correo electrónico.',

    'password_reset_flood_lock' => 'Has intentado restablecer tu contraseña demasiadas veces hoy. Por favor, compruebe su bandeja de entrada y las carpetas de spam para solicitudes anteriores, o póngase en contacto con el administrador del sitio.',

    'forgotten_username_email_sent' => 'Si esta dirección de correo electrónico está asociada con una cuenta, un correo electrónico que contiene su nombre de usuario acaba de ser enviado por correo electrónico.',

    'your_new_login_info' => 'Información de acceso',

    /* Timezone */
    'invalid_date_format' => 'El formato de fecha enviado no es válido.',

    'invalid_timezone' => 'La zona horaria que has enviado no es válida.',

    'no_timezones' => 'No Timezones',

    'select_timezone' => 'Seleccionar zona horaria',

    /* Date */
    'singular' => 'uno',

    'less_than' => 'menos que',

    'about' => 'sobre',

    'past' => 'Hace %s',

    'future' => 'en %s',

    'ago' => 'hace %x',

    'year' => 'año',

    'years' => 'años',

    'month' => 'mes',

    'months' => 'meses',

    'fortnight' => 'quince días',

    'fortnights' => 'quince días',

    'week' => 'semana',

    'weeks' => 'semanas',

    'day' => 'día',

    'days' => 'días',

    'hour' => 'hora',

    'hours' => 'horas',

    'minute' => 'minuto',

    'minutes' => 'minutos',

    'second' => 'segundo',

    'seconds' => 'segundos',

    'am' => 'm',

    'pm' => 'pm',

    'AM' => 'M',

    'PM' => 'MP',

    'Sun' => 'Sol',

    'Mon' => 'Mon',

    'Tue' => 'Tue',

    'Wed' => 'Mié',

    'Thu' => 'Thu',

    'Fri' => 'Vie',

    'Sat' => 'Sáb',

    'Su' => 'S',

    'Mo' => 'M',

    'Tu' => 'T',

    'We' => 'M',

    'Th' => 'T',

    'Fr' => 'D',

    'Sa' => 'S',

    'Sunday' => 'Domingo',

    'Monday' => 'Lunes',

    'Tuesday' => 'Martes',

    'Wednesday' => 'Miércoles',

    'Thursday' => 'Jueves',

    'Friday' => 'Viernes',

    'Saturday' => 'Sábado',

    'Jan' => 'Ene',

    'Feb' => 'Feb',

    'Mar' => 'Mar',

    'Apr' => 'Abril',

    'May' => 'Mayo',

    'Jun' => 'Jun',

    'Jul' => 'Jul',

    'Aug' => 'Ago',

    'Sep' => 'Septiembre',

    'Oct' => 'Oct',

    'Nov' => 'Nov',

    'Dec' => 'Dic',

    'January' => 'Enero',

    'February' => 'Febrero',

    'March' => 'Marzo',

    'April' => 'Abril',

    'May_l' => 'Mayo',

    'June' => 'Junio',

    'July' => 'Julio',

    'August' => 'Agosto',

    'September' => 'Septiembre',

    'October' => 'Octubre',

    'November' => 'Noviembre',

    'December' => 'Diciembre',

    'UM12' => '(UTC -12:00) Barbacoa/Isla de cómic',

    'UM11' => '(UTC -11:00) Niue',

    'UM10' => '(UTC -10:00) Hora Estándar Hawaii-Aleutian, Islas Cook, Tahití',

    'UM95' => '(UTC -9:30) Islas Marquesas',

    'UM9' => '(UTC -9:00) Tiempo Estándar de Alaska, Islas Gambier',

    'UM8' => '(UTC -8:00) Hora estándar del Pacífico, Isla Clipperton',

    'UM7' => '(UTC -7:00) Hora estándar de la montaña',

    'UM6' => '(UTC -6:00) Hora estándar central',

    'UM5' => '(UTC -5:00) Hora Estándar del Estándar del Estándar del Caribe Occidental',

    'UM45' => '(UTC -4:30) Hora Estándar de Venezuela',

    'UM4' => '(UTC -4:00) Hora del Estándar Atlántico, Hora Estándar del Caribe Oriental',

    'UM35' => '(UTC -3:30) Hora Estándar de Terranova',

    'UM3' => '(UTC -3:00) Argentina, Brasil, Guayana, Uruguay',

    'UM2' => '(UTC -2:00) Islas Sur/Sur de Sandwich',

    'UM1' => '(UTC -1:00) Azores, Islas de Cabo Verde',

    'UTC' => '(UTC) Greenwich Media Time, Western European Time',

    'UP1' => '(UTC +1:00) Tiempo de Europa Central, Hora de África Occidental',

    'UP2' => '(UTC +2:00) Tiempo de África Central, Hora de Europa Oriental, Hora de Kalininingrado',

    'UP3' => '(UTC +3:00) Hora de África Oriental, Hora Estándar de Arabia',

    'UP35' => '(UTC +3:30) Hora Estándar de Irán',

    'UP4' => '(UTC +4:00) Hora de Moscú, Hora Estándar',

    'UP45' => '(UTC +4:30) Afghanistan',

    'UP5' => '(UTC +5:00) Hora Estándar de Pakistán, Hora de Yekaterinburgo',

    'UP55' => '(UTC +5:30) Hora Estándar de la India, Hora de Sri Lanka',

    'UP575' => '(UTC +5:45) Tiempo Nepal',

    'UP6' => '(UTC +6:00) Hora Estándar de Bangladesh, Tiempo Bhutan, Tiempo Omsk',

    'UP65' => '(UTC +6:30) Islas Cocos, Myanmar',

    'UP7' => '(UTC +7:00) Krasnoyarsk Time, Cambodia, Laos, Thailand, Vietnam',

    'UP8' => '(UTC +8:00) Hora Estándar del Oeste Australiano, Beijing Time, Irkutsk Time',

    'UP875' => '(UTC +8:45) Hora Estándar Central Occidental',

    'UP9' => '(UTC +9:00) Hora Estándar de Japón, Hora Estándar de Corea, Hora Yakutsk',

    'UP95' => '(UTC +9:30) Hora Estándar Central Australiana',

    'UP10' => '(UTC +10:00) Hora Estándar Australiana, Hora de ivostok',

    'UP105' => '(UTC +10:30) Isla de Howe del Señor',

    'UP11' => '(UTC +11:00) Hora de Magadán, Islas Salomón, Vanuatu',

    'UP115' => '(UTC +11:30) Isla Norfolk',

    'UP12' => '(UTC +12:00) Fiyi, Islas Gilbert, Kamchatka Time, Nueva Zelanda Hora Estándar',

    'UP1275' => '(UTC +12:45) Tiempo Estándar de las Islas Catham',

    'UP13' => '(UTC +13:00) Zona horaria de Samoa, Zona horaria del Fénix, Tiempo de Islas Fénix, Tonga',

    'UP14' => '(UTC +14:00) Islas Líneas',

);

// EOF
