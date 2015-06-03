<?php

// 申明常量 LARAVEL_START 记录应用程序开始时间
// 返回当前 Unix 时间戳和微秒数
// microtime() 参数为 true，返回浮点数
define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Composer Auto Loader
| 注册 Composer 自动加载程序
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader
| Composer 提供了一个便利，为我们的应用程序自动生成了一个类加载器。
| for our application. We just need to utilize it! We'll require it
| 我们只需要直接使用它！我们在脚本的这个位置引入它，
| into the script here so that we do not have to worry about the
| 因此我们就不需要为“手动”加载任何自己的类而担心。
| loading of any our classes "manually". Feels great to relax.
| 放松的感觉好极了。
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Include The Compiled Class File
| 加载预编译的类文件
|--------------------------------------------------------------------------
|
| To dramatically increase your application's performance, you may use a
| 要显著提高应用程序的性能，
| compiled class file which contains all of the classes commonly used
| 你可以在一个请求中，使用其中包含了所有常用类的编译后的类文件。
| by a request. The Artisan "optimize" is used to create this file.
| Artisan 的 "optimize" 命令可以用于创建这个文件。
|
*/

$compiledPath = __DIR__.'/../vendor/compiled.php';

if (file_exists($compiledPath))
{
	require $compiledPath;
}
