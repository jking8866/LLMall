<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta name="format-detection" content="telephone=no">
        <title>FrozenUI Demo</title>
        <script type="text/javascript" src="http://tajs.qq.com/stats?sId=37342703" charset="UTF-8"></script>
        <link rel="stylesheet" href="/LLMall/Public/wx/css/frozen.css">
        <link rel="stylesheet" href="demo.css">
        <script src="/LLMall/Public/wx/lib/zepto.min.js"></script>
        <script src="/LLMall/Public/wx/js/frozen.js"></script>
    </head>
    
    <body ontouchstart>
        <header class="ui-header ui-header-positive ui-border-b">
            <i class="ui-icon-return" onclick="history.back()"></i><h1>列表 list</h1><button class="ui-btn">回首页</button>
        </header>
        <footer class="ui-footer ui-footer-btn">
            <ul class="ui-tiled ui-border-t">
                <li data-href="index.html" class="ui-border-r"><div>基础样式</div></li>
                <li data-href="ui.html" class="ui-border-r"><div>UI组件</div></li>
                <li data-href="js.html"><div>JS插件</div></li>
            </ul>
        </footer>
        <section class="ui-container">



<section id="list">
    <div class="demo-item">
        <p class="demo-desc">简单列表</p>
        <div class="demo-block">
            <ul class="ui-list ui-list-pure ui-border-tb">
                <li class="ui-border-t">
                    <p><span>1.faycheng </span><span class="date"> 2月12日</span></p>
                    <h4>这本书太赞了，每次看都有不一样的体会和感悟，超级喜欢！期待大结局。</h4>
                </li>
                <li class="ui-border-t">
                    <p><span>2.faycheng </span><span class="date"> 2月12日</span></p>
                    <h4>标题标题标题标题标题标题题标题标题标题标题标题标题标题标题标题</h4>
                </li>
                <li class="ui-border-t">
                    <p><span>3.faycheng </span><span class="date"> 2月12日</span></p>
                    <h4>标题标题标题标题标题标题题标题标题标题标题标题标题标题标题标题</h4>
                </li>
            </ul>
        </div>
    </div>
    <div class="demo-item">
        <p class="demo-desc">右边有内容的列表</p>
            <div class="demo-block">
                <ul class="ui-list ui-list-text ui-border-tb">
                <li class="ui-border-t">
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">这是标题，加ui-nowrap可以超出长度截断</h4>
                    </div>
                    <div class="ui-badge">new</div>
                </li>
                <li class="ui-border-t">
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">这是标题，加ui-nowrap可以超出长度截断</h4>
                    </div>
                    <div class="ui-badge-muted">new</div>
                </li>
                <li class="ui-border-t">
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">这是标题，加ui-nowrap可以超出长度截断</h4>
                    </div>
                    <div class="ui-badge-num">123</div>
                </li>
                <li class="ui-border-t">
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">这是标题，加ui-nowrap可以超出长度截断</h4>
                    </div>
                    <div class="ui-reddot ui-reddot-static"></div>
                </li>
                <li class="ui-border-t">
                    <div class="ui-list-info">
                        <h4>标题标题标题标题标题标题标</h4>
                    </div>
                    <div class="ui-list-action">使用中</div>
                </li>
                <li class="ui-border-t">
                    <div class="ui-list-info">
                        <h4>标题标题标题标题标题标题标</h4>
                    </div>
                    <label class="ui-switch">
                        <input type="checkbox" />
                    </label>
                </li>
                
            </ul>
        </div>
    </div>
    <div class="demo-item">
        <p class="demo-desc">文字列表</p>
        <div class="demo-block">
            <ul class="ui-list ui-list-text ui-list-link ui-border-tb">
                <li class="ui-border-t">
                    <h4>长文字长文字长文字长文字长文字长文字长文字长文字长文字长文字长文字长文字长文字长文字长文字长文字</h4>
                    <div class="ui-txt-info">男</div>
                </li>
                <li class="ui-border-t">
                    <h4 class="ui-nowrap">生日</h4>
                    <div class="ui-txt-info">1988年8月8日</div>
                </li>
            </ul>
        </div>
    </div>
    <div class="demo-item">
        <p class="demo-desc">图文一行列表</p>
        <div class="demo-block">
            <ul class="ui-list ui-list-one ui-list-link ui-border-tb">
                <li class="ui-border-t">
                    <div class="ui-list-thumb">
                        <span style="background-image:url(http://placeholder.qiniudn.com/100x100)"></span>
                    </div>
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">性别</h4>
                        <div class="ui-txt-info">男</div>
                    </div>
                </li>
                <li class="ui-border-t">
                    <div class="ui-list-thumb">
                        <span style="background-image:url(http://placeholder.qiniudn.com/100x100)"></span>
                    </div>
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">生日</h4>
                        <div class="ui-reddot ui-reddot-static"></div>
                    </div>
                </li>
            </ul>
            <ul class="ui-list ui-list-one ui-list-link ui-border-tb">
                <li>
                    <div class="ui-list-thumb">
                        <span style="background-image:url(http://placeholder.qiniudn.com/100x100)"></span>
                    </div>
                    <div class="ui-list-info ui-border-t">
                        <h4 class="ui-nowrap">性别</h4>
                        <div class="ui-txt-info">男</div>
                    </div>
                </li>
                <li>
                    <div class="ui-list-thumb">
                        <span style="background-image:url(http://placeholder.qiniudn.com/100x100)"></span>
                    </div>
                    <div class="ui-list-info ui-border-t">
                        <h4 class="ui-nowrap">生日</h4>
                        <div class="ui-reddot ui-reddot-static"></div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="demo-item">
        <p class="demo-desc">图文列表，active不再默认加上，用js加</p>
        <div class="demo-block">
            <ul class="ui-list ui-list-link ui-border-tb">
                <li class="ui-border-t active">
                    <div class="ui-list-thumb">
                        <span style="background-image:url(http://placeholder.qiniudn.com/100x100)"></span>
                    </div>
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">ui-list-thumb缩略图</h4>
                    </div>
                </li>
                <li class="ui-border-t">
                    <div class="ui-list-thumb-s">
                        <span style="background-image:url(http://placeholder.qiniudn.com/56x56)"></span>
                    </div>
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">ui-list-thumb-s缩略小图</h4>
                    </div>
                </li>
                <li class="ui-border-t">
                    <div class="ui-list-icon">
                        <span style="background-image:url(http://placeholder.qiniudn.com/80x80)"></span>
                    </div>
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">ui-list-icon icon图</h4>
                    </div>
                </li>
                <li class="ui-border-t">
                    <div class="ui-list-icon">
                        <span style="background-image:url(http://placeholder.qiniudn.com/80x80)"></span>
                    </div>
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">ui-list-icon icon图</h4>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="demo-item">
        <p class="demo-desc">通栏和默认带active列表</p>
        <div class="demo-block">
            <ul class="ui-list ui-list-text ui-list-active ui-list-cover ui-border-tb">
                <li class="ui-border-t">
                    <p>加ui-list-active会带按压态</p>
                </li>
                <li class="ui-border-t">
                    <p>加ui-list-cover通栏</p>
                </li>
            </ul>
        </div>
    </div>
    <div class="demo-item">
        <p class="demo-desc">图文列表带头像</p>
        <div class="demo-block">
            <ul class="ui-list ui-border-tb">
                <li class="ui-border-t">
                    <div class="ui-avatar">
                        <span style="background-image:url(http://placeholder.qiniudn.com/100x100)"></span>
                    </div>
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">这是标题，加ui-nowrap可以超出长度截断</h4>
                        <p class="ui-nowrap">这是内容，加ui-nowrap可以超出长度截断</p>
                    </div>
                </li>
                <li  class="ui-border-t">
                    <div class="ui-avatar">
                        <span  style="background-image:url(http://placeholder.qiniudn.com/100x100)"></span>
                    </div>
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">这是标题，加ui-nowrap可以超出长度截断</h4>
                        <p class="ui-nowrap">这是内容，加ui-nowrap可以超出长度截断</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="demo-item">
        <p class="demo-desc">图文列表带头像</p>
        <div class="demo-block">
            <ul class="ui-list ui-list-link ui-border-tb">
                <li>
                    <div class="ui-avatar">
                        <span style="background-image:url(http://placeholder.qiniudn.com/100x100)"></span>
                    </div>
                    <div class="ui-list-info ui-border-t">
                        <h4 class="ui-nowrap">这是标题，加ui-nowrap可以超出长度截断</h4>
                    </div>
                </li>
                <li>
                    <div class="ui-avatar">
                        <span  style="background-image:url(http://placeholder.qiniudn.com/100x100)"></span>
                    </div>
                    <div class="ui-list-info ui-border-t">
                        <h4 class="ui-nowrap">这是标题，加ui-nowrap可以超出长度截断</h4>
                        <p class="ui-nowrap">这是内容，加ui-nowrap可以超出长度截断</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div class="demo-item">
        <p class="demo-desc">图文列表带小头像</p>
        <div class="demo-block">
            <ul class="ui-list ui-list-function ui-list-link ui-border-tb">
                <li class="ui-border-t">
                    <div class="ui-avatar-s">
                        <span style="background-image:url(http://placeholder.qiniudn.com/80x80)"></span>
                    </div>
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">这是标题，加ui-nowrap可以超出长度截断</h4>
                    </div>
                    <div class="ui-btn">PK</div>
                </li>
                <li  class="ui-border-t">
                    <div class="ui-avatar-s">
                        <span style="background-image:url(http://placeholder.qiniudn.com/80x80)"></span>
                    </div>
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">这是标题，加ui-nowrap可以超出长度截断</h4>
                    </div>
                    <div class="ui-btn">PK</div>
                </li>
            </ul>
        </div>
    </div>

    <div class="demo-item">
        <p class="demo-desc">图文列表</p>
        <div class="demo-block">
            <ul class="ui-list ui-list-link ui-border-tb">
                <li class="ui-border-t">
                    <div class="ui-list-img">
                        <span style="background-image:url(http://placeholder.qiniudn.com/200x136)"></span>
                    </div>
                    <div class="ui-list-info">
                        <h4 class="ui-nowrap">这是标题，加ui-nowrap可以超出长度截断</h4>
                        <p class="ui-nowrap">这是内容，加ui-nowrap可以超出长度截断</p>
                    </div>
                </li>
                <li class="ui-border-t">
                    <div class="ui-list-img">
                        <span style="background-image:url(http://placeholder.qiniudn.com/200x136)"></span>
                    </div>
                    <div class="ui-list-info">
                        <h4>标题标题标题标题标题标题标题标题标题标题标题</h4>
                    </div>
                </li>
            </ul>
            <div class="ui-loading-wrap">
                <p>加载中</p>
                <i class="ui-loading"></i>
            </div>
        </div>
    </div>
</section>


 
        </section><!-- /.ui-container-->
        <script>
        $('.ui-list li,.ui-tiled li').click(function(){
            if($(this).data('href')){
                location.href= $(this).data('href');
            }
        });
        $('.ui-header .ui-btn').click(function(){
            location.href= 'index.html';
        });
        </script>
    </body>
</html>