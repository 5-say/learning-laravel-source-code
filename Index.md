## 源码结构索引

<ul>
    <li>
        <a href="public/index.php">public/index.php</a>
        <ul>
            <li>
                <a href="bootstrap/autoload.php">bootstrap/autoload.php</a>
            </li>
            <li>
                <a href="bootstrap/app.php">bootstrap/app.php</a>
            </li>
            <li>
                运行这个应用程序
                <pre>
$kernel = $app->make('Illuminate\Contracts\Http\Kernel');

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);
                </pre>
            </li>
        </ul>
    </li>
</ul>


