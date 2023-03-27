易始图片处理组件
=============================

（原 windwork image 组件重构）

支持图片缩略图和打水印，兼容各种第三方云存贮。
处理图片后，为方便云存贮处理，不直接保存图片，而是返回图片二进制内容。


## 安装

通过composer安装

```
composer require estart/image
```

## 生成缩略图
```php
use EStart\\image\\ImageFactory;

// 设置源图片内容
$img = ImageFactory::create((file_get_contents('src_image/1.png'));

// 生成200x200的缩略图，超过比例截掉
$imgContent = $img->thumb(200, 200);
// 保存图片
file_put_contents('dist_image/thumb.png.cut_100x200.jpg', $imgContent);

// 生成100x200的缩略图，超过比例则补白色背景
$imgContent = $img->thumb(100, 200, false);
// 保存图片
file_put_contents('dist_image/thumb.png.uncut_100x200.jpg', $imgContent);

// 打水印
$imgContent = $img->watermark('src_image/logo.png');
// 保存图片
file_put_contents('dist_image/water1.jpg', $imgContent);

```

## TODO
- gif动态图打水印后返回动态缩略图。
- 增加支持使用ImageMagick库进行处理图片

