## 源码结构索引

<ul>
    <li>
        入口文件
        <a href="public/index.php">public/index.php</a>
        <ul>
            <li>
                注册自动加载
                <a href="bootstrap/autoload.php">bootstrap/autoload.php</a>
                <ul>
                    <li>
                        申明常量 LARAVEL_START 记录应用程序开始时间
                        <pre>define('LARAVEL_START', microtime(true));</pre>
                    </li>
                    <li>
                        注册 Composer 自动加载程序
                        <pre>require __DIR__.'/../vendor/autoload.php';</pre>
                    </li>
                    <li>
                        加载预编译的类文件
                        <pre>
$compiledPath = __DIR__.'/../vendor/compiled.php';

if (file_exists($compiledPath))
{
    require $compiledPath;
}</pre>
                    </li>
                </ul>
            </li>
            <li>
                获取应用程序实例
                <a href="bootstrap/app.php">bootstrap/app.php</a>
                <ul>
                    <li>
                        实例化应用程序
                        <pre>
$app = new Illuminate\Foundation\Application(
    // 应用程序基础路径（根目录）
    // realpath() 返回规范化的绝对路径名
    // 在 Windows 上，realpath() 会将 unix 风格的路径改成 Windows 风格的。
    realpath(__DIR__.'/../')
);
                        </pre>
                    </li>
                </ul>
            </li>
            <li>
                运行应用程序
                <pre>
$kernel = $app->make('Illuminate\Contracts\Http\Kernel');

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);</pre>
            </li>
        </ul>
    </li>
</ul>


