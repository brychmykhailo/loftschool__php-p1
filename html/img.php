<?php
require '../vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

$img = Image::make('img.jpg');

$img->resize(200, null, function (Intervention\Image\Constraint $image) {
    $image->aspectRatio();
});

$img->text('Loftschool',
    $img->getWidth() - 10,
    $img->getHeight() - 10,
    function (Intervention\Image\AbstractFont $font) {
    $font->size(24);
    $font->color([255, 255, 255, 0.6]);
    $font->align('right');
    $font->valign('bottom');
});

$img->save('imgResized.jpg');

echo $img->response('jpg');