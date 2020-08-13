<h1 align="center"> laravel-l2d </h1>

<p align="center"> A <a href="https://github.com/stevenjoezhang/live2d-widget">live2d widget</a> for laravel.</p>
<p align="center"> 为Laravel定制的<a href="https://github.com/stevenjoezhang/live2d-widget">live2d widget</a>。</p>


## 安装

1. 使用composer安装
    ```shell
    $ composer require sinonjzh/laravel-l2d
    ```
2. 发布资源文件
   ```shell
   $ php artisan vendor:publish --provider "SinonJZH\LaravelL2d\ServiceProvider"
   ```
3. 加载js和css  
   `/resources/js/app.js`
   ```javascript
   //……
   require('./laravel-l2d/live2d-min.js');
   require('./laravel-l2d/autoload.js');
   ```
   `/resources/sass/app.scss`
   ```scss
   @import 'laravel-l2d/waifu';
   ```
   然后使用终端运行
   ```shell
   $ npm run watch-poll
   ```
## 配置

1. 修改live2d_api路径  
   `/resources/js/laravel-l2d/autoload.js`
   ```javascript
   if (screen.width >= 768) {
	   initWidget({
		   waifuPath: window.domain + "/vendor/laravel-l2d/waifu-tips.json",
		   apiPath: "https://your.domain/your/api/path",//修改此项
	   });
   }
   //……
   ```
   关于自己搭建api服务器以及模型添加请参阅[live2d-api](https://github.com/fghrsh/live2d_api)。
2. 修改对话  
   只需在`/resources/js/laravel-l2d/autoload.js`以及`/public/vendor/laravel-l2d/waifu-tips.json`中修改即可。

## 用法

安装完成后即可在站点显示live2d看板娘。

## License

GNU v3.0