<?php declare(strict_types = 1);

return [
	'lastFullAnalysisTime' => 1756695153,
	'meta' => array (
  'cacheVersion' => 'v12-linesToIgnore',
  'phpstanVersion' => '2.1.22',
  'metaExtensions' => 
  array (
  ),
  'phpVersion' => 80212,
  'projectConfig' => '{parameters: {level: 7, paths: [F:\\OneDrive\\Рабочий стол\\test-app\\src], tmpDir: F:\\OneDrive\\Рабочий стол\\test-app\\var\\phpstan, universalObjectCratesClasses: [RedBeanPHP\\OODBBean]}}',
  'analysedPaths' => 
  array (
    0 => 'F:\\OneDrive\\Рабочий стол\\test-app\\src',
  ),
  'scannedFiles' => 
  array (
  ),
  'composerLocks' => 
  array (
    'F:/OneDrive/Рабочий стол/test-app/composer.lock' => '9f9fe69f217995d628e10c97a42b416edb561cb9',
  ),
  'composerInstalled' => 
  array (
    'F:/OneDrive/Рабочий стол/test-app/vendor/composer/installed.php' => 
    array (
      'versions' => 
      array (
        'altorouter/altorouter' => 
        array (
          'pretty_version' => '2.0.3',
          'version' => '2.0.3.0',
          'reference' => '9931b976423f7334c94f7b5b348be8ab1da3415d',
          'type' => 'library',
          'install_path' => 'F:\\OneDrive\\Рабочий стол\\test-app\\vendor\\composer/../altorouter/altorouter',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'gabordemooij/redbean' => 
        array (
          'pretty_version' => 'v5.7.5',
          'version' => '5.7.5.0',
          'reference' => 'fc08c2f9bc5a4f5074721b0d9039881be244f842',
          'type' => 'library',
          'install_path' => 'F:\\OneDrive\\Рабочий стол\\test-app\\vendor\\composer/../gabordemooij/redbean',
          'aliases' => 
          array (
          ),
          'dev_requirement' => false,
        ),
        'phpstan/phpstan' => 
        array (
          'pretty_version' => '2.1.22',
          'version' => '2.1.22.0',
          'reference' => '41600c8379eb5aee63e9413fe9e97273e25d57e4',
          'type' => 'library',
          'install_path' => 'F:\\OneDrive\\Рабочий стол\\test-app\\vendor\\composer/../phpstan/phpstan',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
        'squizlabs/php_codesniffer' => 
        array (
          'pretty_version' => '3.13.2',
          'version' => '3.13.2.0',
          'reference' => '5b5e3821314f947dd040c70f7992a64eac89025c',
          'type' => 'library',
          'install_path' => 'F:\\OneDrive\\Рабочий стол\\test-app\\vendor\\composer/../squizlabs/php_codesniffer',
          'aliases' => 
          array (
          ),
          'dev_requirement' => true,
        ),
      ),
    ),
  ),
  'executedFilesHashes' => 
  array (
    'phar://F:\\OneDrive\\Рабочий стол\\test-app\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\Attribute85.php' => '123dcd45f03f2463904087a66bfe2bc139760df0',
    'phar://F:\\OneDrive\\Рабочий стол\\test-app\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionAttribute.php' => '0b4b78277eb6545955d2ce5e09bff28f1f8052c8',
    'phar://F:\\OneDrive\\Рабочий стол\\test-app\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionIntersectionType.php' => 'a3e6299b87ee5d407dae7651758edfa11a74cb11',
    'phar://F:\\OneDrive\\Рабочий стол\\test-app\\vendor\\phpstan\\phpstan\\phpstan.phar\\stubs\\runtime\\ReflectionUnionType.php' => '1b349aa997a834faeafe05fa21bc31cae22bf2e2',
  ),
  'phpExtensions' => 
  array (
    0 => 'Core',
    1 => 'PDO',
    2 => 'Phar',
    3 => 'Reflection',
    4 => 'SPL',
    5 => 'SimpleXML',
    6 => 'bcmath',
    7 => 'bz2',
    8 => 'calendar',
    9 => 'ctype',
    10 => 'curl',
    11 => 'date',
    12 => 'dom',
    13 => 'exif',
    14 => 'fileinfo',
    15 => 'filter',
    16 => 'ftp',
    17 => 'gettext',
    18 => 'hash',
    19 => 'iconv',
    20 => 'json',
    21 => 'libxml',
    22 => 'mbstring',
    23 => 'mysqli',
    24 => 'mysqlnd',
    25 => 'openssl',
    26 => 'pcre',
    27 => 'pdo_mysql',
    28 => 'pdo_sqlite',
    29 => 'random',
    30 => 'readline',
    31 => 'session',
    32 => 'standard',
    33 => 'tokenizer',
    34 => 'xml',
    35 => 'xmlreader',
    36 => 'xmlwriter',
    37 => 'zlib',
  ),
  'stubFiles' => 
  array (
  ),
  'level' => '7',
),
	'projectExtensionFiles' => array (
),
	'errorsCallback' => static function (): array { return array (
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\AdminController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\controllers\\AdminController::restrictIfNotAdmin() has no return type specified.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\AdminController.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\AdminController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 14,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\controllers\\AdminController::dashboard() has no return type specified.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\AdminController.php',
       'line' => 22,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\AdminController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 22,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\controllers\\AdminController::listPosts() has no return type specified.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\AdminController.php',
       'line' => 37,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\AdminController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 37,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\controllers\\AdminController::deletePost() has no return type specified.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\AdminController.php',
       'line' => 41,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\AdminController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 41,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\controllers\\AdminController::deletePost() has parameter $id with no type specified.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\AdminController.php',
       'line' => 41,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\AdminController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 41,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\controllers\\AdminController::logout() has no return type specified.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\AdminController.php',
       'line' => 45,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\AdminController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 45,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\HelpersController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\controllers\\HelpersController::clientIp() has parameter $server with no value type specified in iterable type array.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\HelpersController.php',
       'line' => 7,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\HelpersController.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 7,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\controllers\\HelpersController::urlWith() has parameter $overrides with no value type specified in iterable type array.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\HelpersController.php',
       'line' => 41,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\HelpersController.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 41,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PageController.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\controllers\\PageController::renderPage() has parameter $data with no value type specified in iterable type array.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PageController.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PageController.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 15,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\controllers\\PageController::simplePage() has no return type specified.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PageController.php',
       'line' => 54,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PageController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 54,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\controllers\\PageController::simplePage() has parameter $page with no type specified.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PageController.php',
       'line' => 54,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PageController.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 54,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PostFormHandler.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $string of function parse_str expects string, string|false given.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PostFormHandler.php',
       'line' => 109,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PostFormHandler.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 109,
       'nodeType' => 'PhpParser\\Node\\Expr\\FuncCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $raw on left side of ?? always exists and is not nullable.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PostFormHandler.php',
       'line' => 109,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PostFormHandler.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 109,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Coalesce',
       'identifier' => 'nullCoalesce.variable',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\controllers\\PostFormHandler::json() has parameter $payload with no value type specified in iterable type array.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PostFormHandler.php',
       'line' => 153,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PostFormHandler.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 153,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\TemplateLoader.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant APP not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\TemplateLoader.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\TemplateLoader.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 14,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\controllers\\TemplateLoader::getPart() has parameter $data with no type specified.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\TemplateLoader.php',
       'line' => 19,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\TemplateLoader.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 19,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $beans of static method RedBeanPHP\\Facade::exportAll() expects iterable<RedBeanPHP\\OODBBean>&RedBeanPHP\\OODBBean, array<int, RedBeanPHP\\OODBBean> given.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\TemplateLoader.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\TemplateLoader.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\controllers\\TemplateLoader::render() has parameter $data with no value type specified in iterable type array.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\TemplateLoader.php',
       'line' => 40,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\TemplateLoader.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 40,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #2 $username of static method RedBeanPHP\\Facade::setup() expects string|null, string|false given.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'line' => 14,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 12,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #3 $password of static method RedBeanPHP\\Facade::setup() expects string|null, string|false given.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'line' => 15,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 12,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Call to static method getRedBean() on an unknown class R.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'line' => 17,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 17,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'class.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\models\\Database::getAllGuestbookMessages() return type has no value type specified in iterable type array.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'line' => 21,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 21,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\models\\Database::getGuestbookPage() has parameter $filters with no value type specified in iterable type array.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 26,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\models\\Database::getGuestbookPage() return type has no value type specified in iterable type array.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'traitFilePath' => NULL,
       'tip' => 'See: https://phpstan.org/blog/solving-phpstan-no-value-type-specified-in-iterable-type',
       'nodeLine' => 26,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.iterableValue',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Parameter #1 $beans of static method RedBeanPHP\\Facade::exportAll() expects iterable<RedBeanPHP\\OODBBean>&RedBeanPHP\\OODBBean, array<RedBeanPHP\\OODBBean> given.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'line' => 65,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 65,
       'nodeType' => 'PhpParser\\Node\\Expr\\StaticCall',
       'identifier' => 'argument.type',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\models\\Database::addGuestbookMessage() has no return type specified.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'line' => 81,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 81,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\models\\Database::addGuestbookMessage() has parameter $email with no type specified.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'line' => 81,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 81,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\models\\Database::addGuestbookMessage() has parameter $message with no type specified.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'line' => 81,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 81,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\models\\Database::addGuestbookMessage() has parameter $name with no type specified.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'line' => 81,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 81,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\models\\Database::addGuestbookMessage() has parameter $server with no type specified.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'line' => 81,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 81,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\models\\Database::deleteGuestbookMessage() has no return type specified.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'line' => 109,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 109,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.return',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Method app\\models\\Database::deleteGuestbookMessage() has parameter $id with no type specified.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'line' => 109,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 109,
       'nodeType' => 'PHPStan\\Node\\InClassMethodNode',
       'identifier' => 'missingType.parameter',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\admin\\dashboard.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $this might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\admin\\dashboard.php',
       'line' => 1,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\admin\\dashboard.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 1,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $data might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\admin\\dashboard.php',
       'line' => 50,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\admin\\dashboard.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 50,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $this might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\admin\\dashboard.php',
       'line' => 51,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\admin\\dashboard.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 51,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $data might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\admin\\dashboard.php',
       'line' => 57,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\admin\\dashboard.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 57,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $this might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\admin\\dashboard.php',
       'line' => 57,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\admin\\dashboard.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 57,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\error\\404.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $data might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\error\\404.php',
       'line' => 3,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\error\\404.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 3,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $this might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\error\\404.php',
       'line' => 3,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\error\\404.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 3,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\layouts\\default.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $this might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\layouts\\default.php',
       'line' => 1,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\layouts\\default.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 1,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $this might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\layouts\\default.php',
       'line' => 9,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\layouts\\default.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 9,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\home.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $data might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\home.php',
       'line' => 1,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\home.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 1,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $this might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\home.php',
       'line' => 1,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\home.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 1,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $data might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\home.php',
       'line' => 50,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\home.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 50,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $this might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\home.php',
       'line' => 51,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\home.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 51,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $data might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\home.php',
       'line' => 56,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\home.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 56,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $this might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\home.php',
       'line' => 56,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\home.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 56,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\single.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $this might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\single.php',
       'line' => 4,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\single.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 4,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\article.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $is_admin might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\article.php',
       'line' => 2,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\article.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 2,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $username might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\article.php',
       'line' => 33,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\article.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 33,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $email might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\article.php',
       'line' => 34,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\article.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 34,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $message might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\article.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\article.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 36,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\banner.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $title might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\banner.php',
       'line' => 7,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\banner.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 7,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc tag @var contains unresolvable type.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 5,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 6,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Nop',
       'identifier' => 'varTag.unresolvableType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc tag @var does not specify variable name.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 6,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 6,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Nop',
       'identifier' => 'varTag.noVariable',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 29,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 29,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 30,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 31,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 31,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 32,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 32,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 33,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 33,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 34,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 34,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 35,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 35,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 36,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 36,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 37,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 37,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 38,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 38,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 39,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 39,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 40,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 40,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    14 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 41,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 41,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    15 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 42,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 42,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    16 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 43,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 43,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    17 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 44,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 44,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    18 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 45,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 45,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    19 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 46,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 46,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    20 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 49,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 49,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    21 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 50,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 50,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    22 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 51,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 51,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    23 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 52,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 52,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    24 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 53,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 53,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    25 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'line' => 55,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 55,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc tag @var contains unresolvable type.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'line' => 5,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 6,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Nop',
       'identifier' => 'varTag.unresolvableType',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'PHPDoc tag @var does not specify variable name.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'line' => 6,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 6,
       'nodeType' => 'PhpParser\\Node\\Stmt\\Nop',
       'identifier' => 'varTag.noVariable',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'line' => 22,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 22,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'line' => 23,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 23,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    4 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'line' => 24,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 24,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    5 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'line' => 25,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 25,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    6 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'line' => 26,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 26,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    7 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'line' => 27,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 27,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    8 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'line' => 28,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 28,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    9 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'line' => 29,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 29,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    10 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'line' => 30,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 30,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    11 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'line' => 31,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 31,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    12 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'line' => 32,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 32,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    13 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'line' => 33,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 33,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    14 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Constant PATH not found.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'line' => 52,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php',
       'traitFilePath' => NULL,
       'tip' => 'Learn more at https://phpstan.org/user-guide/discovering-symbols',
       'nodeLine' => 52,
       'nodeType' => 'PhpParser\\Node\\Expr\\ConstFetch',
       'identifier' => 'constant.notFound',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\pagination.php' => 
  array (
    0 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $pages might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\pagination.php',
       'line' => 22,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\pagination.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 22,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    1 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Result of && is always false.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\pagination.php',
       'line' => 27,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\pagination.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 27,
       'nodeType' => 'PHPStan\\Node\\BooleanAndNode',
       'identifier' => 'booleanAnd.alwaysFalse',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    2 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Strict comparison using === between 0 and int<1, max> will always evaluate to false.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\pagination.php',
       'line' => 27,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\pagination.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 27,
       'nodeType' => 'PhpParser\\Node\\Expr\\BinaryOp\\Identical',
       'identifier' => 'identical.alwaysFalse',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
    3 => 
    \PHPStan\Analyser\Error::__set_state(array(
       'message' => 'Variable $pages might not be defined.',
       'file' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\pagination.php',
       'line' => 38,
       'canBeIgnored' => true,
       'filePath' => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\pagination.php',
       'traitFilePath' => NULL,
       'tip' => NULL,
       'nodeLine' => 38,
       'nodeType' => 'PhpParser\\Node\\Expr\\Variable',
       'identifier' => 'variable.undefined',
       'metadata' => 
      array (
      ),
       'fixedErrorDiff' => NULL,
    )),
  ),
); },
	'locallyIgnoredErrorsCallback' => static function (): array { return array (
); },
	'linesToIgnore' => array (
),
	'unmatchedLineIgnores' => array (
),
	'collectedDataCallback' => static function (): array { return array (
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\AdminController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'app\\controllers\\AdminController',
        1 => 'listPosts',
        2 => 'app\\controllers\\AdminController',
      ),
      1 => 
      array (
        0 => 'app\\controllers\\AdminController',
        1 => 'deletePost',
        2 => 'app\\controllers\\AdminController',
      ),
    ),
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'session_destroy',
        1 => 47,
      ),
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PageController.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\MethodWithoutImpurePointsCollector' => 
    array (
      0 => 
      array (
        0 => 'app\\controllers\\PageController',
        1 => 'isLoggedIn',
        2 => 'app\\controllers\\PageController',
      ),
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PostFormHandler.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'session_start',
        1 => 16,
      ),
      1 => 
      array (
        0 => 'session_start',
        1 => 87,
      ),
      2 => 
      array (
        0 => 'http_response_code',
        1 => 155,
      ),
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\TemplateLoader.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'extract',
        1 => 33,
      ),
      1 => 
      array (
        0 => 'extract',
        1 => 52,
      ),
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureStaticCallCollector' => 
    array (
      0 => 
      array (
        0 => 'RedBeanPHP\\Facade',
        1 => 'setup',
        2 => 12,
      ),
      1 => 
      array (
        0 => 'RedBeanPHP\\Facade',
        1 => 'begin',
        2 => 89,
      ),
      2 => 
      array (
        0 => 'RedBeanPHP\\Facade',
        1 => 'commit',
        2 => 100,
      ),
      3 => 
      array (
        0 => 'RedBeanPHP\\Facade',
        1 => 'rollback',
        2 => 104,
      ),
      4 => 
      array (
        0 => 'RedBeanPHP\\Facade',
        1 => 'begin',
        2 => 112,
      ),
      5 => 
      array (
        0 => 'RedBeanPHP\\Facade',
        1 => 'trash',
        2 => 115,
      ),
      6 => 
      array (
        0 => 'RedBeanPHP\\Facade',
        1 => 'commit',
        2 => 116,
      ),
      7 => 
      array (
        0 => 'RedBeanPHP\\Facade',
        1 => 'rollback',
        2 => 119,
      ),
      8 => 
      array (
        0 => 'RedBeanPHP\\Facade',
        1 => 'rollback',
        2 => 123,
      ),
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\add.php' => 
  array (
    'PHPStan\\Rules\\DeadCode\\PossiblyPureFuncCallCollector' => 
    array (
      0 => 
      array (
        0 => 'session_start',
        1 => 30,
      ),
    ),
  ),
); },
	'dependencies' => array (
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\AdminController.php' => 
  array (
    'fileHash' => '0bf468cfa4980f0ad0aae6e4f41e1344cf2f10f4',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\HelpersController.php' => 
  array (
    'fileHash' => '1efb40904603176302bd72690872ba405e7da625',
    'dependentFiles' => 
    array (
      0 => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PageController.php',
      1 => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php',
      2 => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\pagination.php',
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PageController.php' => 
  array (
    'fileHash' => '7e567396881f009c396fcb85f9650aa5389e6e4d',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PostFormHandler.php' => 
  array (
    'fileHash' => 'c81a903bc30244fd481381abeb9470357cc87399',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\TemplateLoader.php' => 
  array (
    'fileHash' => '4366c30f32bdc532d100eaa460bca7440a41f5f4',
    'dependentFiles' => 
    array (
      0 => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\AdminController.php',
      1 => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PageController.php',
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php' => 
  array (
    'fileHash' => '0142372522709672f8b050aff188831c316cc7e1',
    'dependentFiles' => 
    array (
      0 => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\AdminController.php',
      1 => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PageController.php',
      2 => 'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PostFormHandler.php',
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\admin\\dashboard.php' => 
  array (
    'fileHash' => '24101dd849c138073e6b24aa7720c031dcde65bb',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\error\\404.php' => 
  array (
    'fileHash' => '3ea8e64fbed255d352095f2ab3e6822120f1f81b',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\index.php' => 
  array (
    'fileHash' => 'da39a3ee5e6b4b0d3255bfef95601890afd80709',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\layouts\\default.php' => 
  array (
    'fileHash' => '9eff5a2a08692cf1b8f278ec387f617c8eb44de1',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\add.php' => 
  array (
    'fileHash' => '29c3b24573b09c641212654d9d703fb120bb6706',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\home.php' => 
  array (
    'fileHash' => 'af5ed1f65a103cd411a2dd8c93a4192cdb7519e9',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\login.php' => 
  array (
    'fileHash' => 'f15af992420547670d909dae9272bf65d013c495',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\pages\\single.php' => 
  array (
    'fileHash' => '991da70497eafe3ab7aa72798af03badb2ae86d3',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\article.php' => 
  array (
    'fileHash' => '319b26214624f8cf1f138465363d3cce6e7d40b8',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\banner.php' => 
  array (
    'fileHash' => 'f7b07e2b08a6dcf64f963af46bbf39d08828f2c1',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\footer.php' => 
  array (
    'fileHash' => '7d527882d3df7d8e115c71887e34139227e7140b',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\header.php' => 
  array (
    'fileHash' => '281692c65a008d318ebaacb457967b92f7f9ce99',
    'dependentFiles' => 
    array (
    ),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\views\\parts\\pagination.php' => 
  array (
    'fileHash' => 'cdd1be49a949fb51efa97785f941b8d60f903530',
    'dependentFiles' => 
    array (
    ),
  ),
),
	'exportedNodesCallback' => static function (): array { return array (
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\AdminController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'app\\controllers\\AdminController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isAdmin',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'restrictIfNotAdmin',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'dashboard',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'listPosts',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deletePost',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        5 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'logout',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\HelpersController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'app\\controllers\\HelpersController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'clientIp',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'server',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'normDir',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'v',
               'type' => '?string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'default',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'urlWith',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => true,
           'returnType' => 'string',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'overrides',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PageController.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'app\\controllers\\PageController',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isLoggedIn',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'renderPage',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contentPage',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'titlePage',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'indexAction',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'viewAction',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'simplePage',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'page',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\PostFormHandler.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'app\\controllers\\PostFormHandler',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => true,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'handle',
           'phpDoc' => 
          \PHPStan\Dependency\ExportedNode\ExportedPhpDocNode::__set_state(array(
             'phpDocString' => '/**
     * Обрабатывает POST и выводит JSON-ответ. Ничего не возвращает.
     */',
             'namespace' => 'app\\controllers',
             'uses' => 
            array (
              'database' => 'app\\models\\Database',
            ),
             'constUses' => 
            array (
            ),
          )),
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'delete',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\controllers\\TemplateLoader.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'app\\controllers\\TemplateLoader',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedPropertiesNode::__set_state(array(
           'names' => 
          array (
            0 => 'templateDir',
          ),
           'phpDoc' => NULL,
           'type' => 'string',
           'public' => false,
           'private' => false,
           'static' => false,
           'readonly' => false,
           'abstract' => false,
           'final' => false,
           'publicSet' => false,
           'protectedSet' => false,
           'privateSet' => false,
           'virtual' => false,
           'attributes' => 
          array (
          ),
           'hooks' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'isLoggedIn',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => false,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'bool',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'templateDir',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getPart',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'partPath',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'is_admin',
               'type' => 'bool',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'render',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'void',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'layoutPath',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'contentPath',
               'type' => 'string',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'data',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
  'F:\\OneDrive\\Рабочий стол\\test-app\\src\\models\\Database.php' => 
  array (
    0 => 
    \PHPStan\Dependency\ExportedNode\ExportedClassNode::__set_state(array(
       'name' => 'app\\models\\Database',
       'phpDoc' => NULL,
       'abstract' => false,
       'final' => false,
       'extends' => NULL,
       'implements' => 
      array (
      ),
       'usedTraits' => 
      array (
      ),
       'traitUseAdaptations' => 
      array (
      ),
       'statements' => 
      array (
        0 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => '__construct',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        1 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getAllGuestbookMessages',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
          ),
           'attributes' => 
          array (
          ),
        )),
        2 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'getGuestbookPage',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => 'array',
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'page',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'filters',
               'type' => 'array',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'perPage',
               'type' => 'int',
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => true,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        3 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'addGuestbookMessage',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'message',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            1 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'name',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            2 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'email',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
            3 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'server',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
        4 => 
        \PHPStan\Dependency\ExportedNode\ExportedMethodNode::__set_state(array(
           'name' => 'deleteGuestbookMessage',
           'phpDoc' => NULL,
           'byRef' => false,
           'public' => true,
           'private' => false,
           'abstract' => false,
           'final' => false,
           'static' => false,
           'returnType' => NULL,
           'parameters' => 
          array (
            0 => 
            \PHPStan\Dependency\ExportedNode\ExportedParameterNode::__set_state(array(
               'name' => 'id',
               'type' => NULL,
               'byRef' => false,
               'variadic' => false,
               'hasDefault' => false,
               'attributes' => 
              array (
              ),
            )),
          ),
           'attributes' => 
          array (
          ),
        )),
      ),
       'attributes' => 
      array (
      ),
    )),
  ),
); },
];
