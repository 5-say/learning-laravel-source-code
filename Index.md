## 源码结构索引

- [public/index.php](public/index.php)
    + [bootstrap/autoload.php](bootstrap/autoload.php)
    + [bootstrap/app.php](bootstrap/app.php)
    + 运行这个应用程序
    + <pre>
$kernel = $app->make('Illuminate\Contracts\Http\Kernel');

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
    + </pre>
        
