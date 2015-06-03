<?php

/*
|--------------------------------------------------------------------------
| Create The Application
| 创建应用程序
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| 我们要做的第一件事就是创建一个新的 laravel 应用实例
| which serves as the "glue" for all the components of Laravel, and is
| 作为“胶水”用于 laravel 的所有组件，
| the IoC container for the system binding all of the various parts.
| 它是为系统结合各种零件的 IOC 容器。
|
*/

$app = new Illuminate\Foundation\Application(
    // 应用程序基础路径（根目录）
    // realpath() 返回规范化的绝对路径名
    // 在 Windows 上，realpath() 会将 unix 风格的路径改成 Windows 风格的。
	realpath(__DIR__.'/../')
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
| 绑定重要的接口
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| 接下来，我们需要将一些重要的接口绑定到容器中
| we will be able to resolve them when needed. The kernels serve the
| 以便我们能够在需要的时候解析它们。这些核心（Kernel）将同时用于
| incoming requests to this application from both the web and CLI.
| 从网络和命令行脚本中进入的请求。
|
*/

// $app->singleton(); 注册单例
// Illuminate\Container\Container.php@singleton

$app->singleton(
	'Illuminate\Contracts\Http\Kernel',
	'App\Http\Kernel'
);

$app->singleton(
	'Illuminate\Contracts\Console\Kernel',
	'App\Console\Kernel'
);

$app->singleton(
	'Illuminate\Contracts\Debug\ExceptionHandler',
	'App\Exceptions\Handler'
);

/*
|--------------------------------------------------------------------------
| Return The Application
| 返回应用程序
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| 此脚本返回应用程序实例。该实例被提供给
| the calling script so we can separate the building of the instances
| 调用脚本，所以我们可以将 构建实际运行的应用程序实例
| from the actual running of the application and sending responses.
| 和发送响应 分开。
|
*/

return $app;
