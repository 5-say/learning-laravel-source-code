<style>
    .l2 { margin-left: 2em; }
    .l3 { margin-left: 4em; }
    .l4 { margin-left: 6em; }
</style>

## 源码结构索引

> 入口文件 /public/[index.php](public/index.php)


<pre>
# 注册自动加载
require __DIR__.'/../bootstrap/<a href="bootstrap/autoload.php">autoload.php</a>';
</pre>

<pre class="l2">
# 申明常量 LARAVEL_START 记录应用程序开始时间
define('LARAVEL_START', microtime(true));

# 注册 Composer 自动加载程序
require __DIR__.'/../vendor/autoload.php';

# 加载预编译的类文件
$compiledPath = __DIR__.'/../vendor/compiled.php';

if (file_exists($compiledPath))
{
    require $compiledPath;
}
</pre>

<pre>
# 获取应用程序实例
$app = require_once __DIR__.'/../bootstrap/<a href="bootstrap/app.php">app.php</a>';
</pre>

<pre class="l2">
# 实例化应用程序
$app = new Illuminate\Foundation\Application(
    // 应用程序基础路径（根目录）
    // realpath() 返回规范化的绝对路径名
    // 在 Windows 上，realpath() 会将 unix 风格的路径改成 Windows 风格的。
    realpath(__DIR__.'/../')
);

# 绑定重要接口
// $app->singleton(); 注册单例
// <a href="vendor/laravel/framework/src/Illuminate/Container/Container.php">Illuminate\Container\Container.php</a>@singleton

// http
$app->singleton(
    'Illuminate\Contracts\Http\Kernel',
    'App\Http\Kernel'
);
// 控制台
$app->singleton(
    'Illuminate\Contracts\Console\Kernel',
    'App\Console\Kernel'
);
// 异常处理
$app->singleton(
    'Illuminate\Contracts\Debug\ExceptionHandler',
    'App\Exceptions\Handler'
);

# 返回应用程序实例
return $app;
</pre>

<pre>
# 运行应用程序
$kernel = $app->make('Illuminate\Contracts\Http\Kernel');

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
</pre>



