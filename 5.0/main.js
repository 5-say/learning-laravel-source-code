// 通用页脚
document.write(''
    +'<footer class="site-footer" style="text-align: center;">'
        +'<span class="site-footer-owner"><a href="https://github.com/5-say/learning-laravel-source-code">Learning-laravel-source-code</a> is maintained by <a href="https://github.com/5-say">5-say</a>.</span>'

        +'<span class="site-footer-credits">This page was generated by <a href="https://pages.github.com">GitHub Pages</a> using the <a href="https://github.com/jasonlong/cayman-theme">Cayman theme</a> by <a href="https://twitter.com/jasonlong">Jason Long</a>.</span>'
    +'</footer>'
);

// 构造 GitHub 链接
$('a').each(function () {
    var basePath   = 'https://github.com/5-say/learning-laravel-source-code/blob/5.0/',
        Illuminate = basePath+'vendor/laravel/framework/src/Illuminate/';

    var url = $(this).attr('href');
    $(this).attr('href', url.replace(/^@Illuminate/, Illuminate));
    
    var url = $(this).attr('href');
    $(this).attr('href', url.replace(/^@/, basePath));

    var url = $(this).attr('href');
    if (url.search('https://github.com') == 0)
        $(this).attr('target', '_blank');
});