# Demo Blog con CakePHP 2.x

### Permite

  - Autenticación con usuario y contraseña
  - Creacion de una nueva cuenta
  - Listar Publicaciones
  - Crear Publicaciones
  - Editar Publicaciones
  - Eliminar Publicaciones
 
### Descarga Repositorio
git clone https://github.com/dosjota/blog.git

### Rqequeridos
Apache, PHP, MySQL
Requiere [CakePHP](https://github.com/cakephp/cakephp/releases/tag/2.9.9) v2.9.9

#### Configuración Base de Datos
En "app/Config/database.php"
Agregar los siguientes valores para configurar MySQL
```
public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => '<Tu_Usuario>',
		'password' => '<Tu_Contraseña>',
		'database' => '<Tu_Base_de_Datos>',
		'prefix' => '',
		//'encoding' => 'utf8',
	);
```

Demo basada en [Tutotial CakePHP](https://book.cakephp.org/2.0/es/tutorials-and-examples.html) y Version 2.9.9 de [CakePHP](https://github.com/cakephp/cakephp/releases/tag/2.9.9)


:wink: :+1:
