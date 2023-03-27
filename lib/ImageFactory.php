<?php
declare(strict_types=1);

namespace EStart\image;

/**
 * 图片处理类，使用GD2生成缩略图和打水印.
 */
class ImageFactory
{
    public static string $driver = 'gd';

    public static function create(string $imageContent, array $bgRgb = null): ImageInterface
    {
        $drivers = [
            'gd' => ImageGD::class,
            // 'im' => ImageMagick::class, // TODO 支持 ImageMagick
        ];

        return new $drivers[static::$driver]($imageContent, $bgRgb);
    }
}
