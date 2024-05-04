# Traducción al español para OpenCart

## Introducción

Este proyecto nació junto con la idea de dar marcha a una tienda virtual que nunca vio la luz, donde se alcanzó a realizar esta traducción, la cual quisimos dejar a disposición de quienes la encuentren útil.

## Instrucciones de instalación

### Instalación del plugin

1. Se debe descargar e instalar la [última versión de OpenCart](https://github.com/opencart/opencart/releases/latest).
2. Se descarga el archivo `opencart_spanish.ocmod.zip`, de la versión correspondiente, desde [releases](https://github.com/burbuja/opencart-spanish/releases).
3. Dentro de la administración de OpenCart, se debe hacer clic en Extensions → Installer → Upload (botón azul) y seleccionar el archivo `opencart_spanish.ocmod.zip`.
4. Una vez realizada la carga del archivo, aparecerá un nuevo elemento llamado "Spanish Translation for OpenCart", donde habrá que hacer clic en Install (botón verde).
5. Para activar el idioma español, habrá que hacer clic en Extensions → Extensions y seleccionar Languages. Aquí aparecerá un nuevo elemento llamado "Spanish Language", donde habrá que hacer clic en Install (botón verde) y luego en Edit (botón con un lápiz), para finalmente activar el selector en Status y hacer clic en Save (botón con un disquete).
6. El idioma español podrá seleccionarse haciendo clic en System → Edit (botón con un lápiz) → Local, donde habrá que cambiar como mínimo algunos parámetros:
     - Country: `tu propio país`
     - Region / State: `tu propia región o estado`
     - Language: `Español`
     - Administration Language: `Español`
 7.  Finalmente, se guarda esta configuración haciendo clic en Save (botón con un disquete).

#### Advertencia

Es importante que se realice la desinstalación, seleccionando primero el idioma inglés desde el menú desplegable de la esquina superior derecha, donde se puede encontrar una bandera, de lo contrario, nos encontraremos con un catálogo aparentemente vacío.

Si lo descrito anteriormente llegarse a pasar, habrá que volver a instalar y desinstalar el plugin, tomando la precaución de **seleccionar el idioma inglés antes de desinstalar**.

### Instalación clásica

 1. Se debe descargar la [última versión de OpenCart](https://github.com/opencart/opencart/releases/latest), junto al archivo de código fuente (source code), correspondiente de esta traducción, desde [releases](https://github.com/burbuja/opencart-spanish/releases).
 2. Se descomprimen ambas descargas, se combina el contenido de las carpetas upload, se sube al servidor y se realiza la instalación.
 3. Una vez terminada la instalación, se debe ingresar a la administración, hacer clic en System → Localization → Languages → Add New (botón con signo más).
 5. Se debe rellenar el formulario con los siguientes datos:
     - Language Name: `Español`
     - Code: `es-cl`
     - Locale: `es,es-cl,es-CL,es_CL`
     - Status: `Enabled`
     - Sort Order: `1`
 6. Se guarda la configuración con Save (botón con un disquete).
 7. Una vez que guardada esta nueva configuración, se debe hacer clic en System → Edit (botón con un lápiz) → Local, donde habrá que cambiar como mínimo algunos parámetros:
     - Country: `tu propio país`
     - Region / State: `tu propia región o estado`
     - Language: `Español`
     - Administration Language: `Español`
 9.  Finalmente, se guarda esta configuración haciendo clic en Save (botón con un disquete).

## Ayuda

Puedes visitar nuestros [foros](https://burbuja.cl/foros/) para realizar consultas sobre cualquier asunto relacionado con OpenCart u otras traducciones.

Para obtener mayor información sobre esta traducción, puedes visitar la [página del proyecto en Burbuja](https://burbuja.cl/proyectos/opencart/).
 
## Licencia

[GNU General Public License version 3 (GPLv3)](https://github.com/burbuja/opencart-spanish/blob/master/LICENSE)
