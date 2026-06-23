<?php

$baseDir = __DIR__ . '/../public/assets/img/rg';

$maxWidth = 1600;
$quality = 72;

$allowed = ['jpg', 'jpeg', 'png'];

function resizeImage(string $path, int $maxWidth, int $quality): void
{
    $info = getimagesize($path);

    if (!$info) {
        echo "Impossible de lire : $path\n";
        return;
    }

    [$width, $height] = $info;
    $mime = $info['mime'];

    if ($width <= $maxWidth && filesize($path) < 450 * 1024) {
        echo "OK déjà léger : $path\n";
        return;
    }

    $ratio = $height / $width;
    $newWidth = min($width, $maxWidth);
    $newHeight = (int) round($newWidth * $ratio);

    switch ($mime) {
        case 'image/jpeg':
            $source = imagecreatefromjpeg($path);
            break;

        case 'image/png':
            $source = imagecreatefrompng($path);
            break;

        default:
            echo "Format ignoré : $path\n";
            return;
    }

    if (!$source) {
        echo "Erreur ouverture : $path\n";
        return;
    }

    $target = imagecreatetruecolor($newWidth, $newHeight);

    if ($mime === 'image/png') {
        imagealphablending($target, false);
        imagesavealpha($target, true);
        $transparent = imagecolorallocatealpha($target, 255, 255, 255, 127);
        imagefilledrectangle($target, 0, 0, $newWidth, $newHeight, $transparent);
    }

    imagecopyresampled(
        $target,
        $source,
        0,
        0,
        0,
        0,
        $newWidth,
        $newHeight,
        $width,
        $height
    );

    $oldSize = filesize($path);

    if ($mime === 'image/jpeg') {
        imagejpeg($target, $path, $quality);
    }

    if ($mime === 'image/png') {
        imagepng($target, $path, 7);
    }

    $newSize = filesize($path);

    imagedestroy($source);
    imagedestroy($target);

    echo "Optimisé : $path\n";
    echo "Avant : " . round($oldSize / 1024) . " Ko | Après : " . round($newSize / 1024) . " Ko\n\n";
}

$iterator = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($baseDir, RecursiveDirectoryIterator::SKIP_DOTS)
);

foreach ($iterator as $file) {
    if (!$file->isFile()) {
        continue;
    }

    $extension = strtolower($file->getExtension());

    if (!in_array($extension, $allowed, true)) {
        continue;
    }

    resizeImage($file->getPathname(), $maxWidth, $quality);
}
