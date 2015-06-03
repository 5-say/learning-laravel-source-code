<?php
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
| 注册自动加载
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| Composer 提供了一个便利，为我们的应用程序自动生成了一个类加载器。
| our application. We just need to utilize it! We'll simply require it
| 我们只需要利用它！我们会简单的引入它到脚本的这个位置，
| into the script here so that we don't have to worry about manual
| 这样我们就不必为以后手动加载任何我们自己的类而担心。
| loading any of our classes later on. It feels nice to relax.
| 放松的感觉好极了。
|
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
| 打开灯光
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let's turn on the lights.
| 我们需要照亮 PHP 的开发，所以让我们打开灯光。
| This bootstraps the framework and gets it ready for use, then it
| 在这里引导这个框架并获取准备好的它来使用，
| will load up this application so that we can run it and send
| 然后它会加载这个应用程序，让我们可以运行它
| the responses back to the browser and delight these users.
| 并发送响应返回给浏览器和取悦这些用户。
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
| 运行这个应用程序
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| 一旦我们有了这个应用，我们就可以处理通过内核传入的请求，
| through the kernel, and send the associated response back to
| 并发送相关的响应返回给客户端的浏览器，
| the client's browser allowing them to enjoy the creative
| 让他们享受
| and wonderful application we have prepared for them.
| 我们为他们准备的创意和精彩的应用。
|
*/

$kernel = $app->make('Illuminate\Contracts\Http\Kernel');

$response = $kernel->handle(
	$request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
