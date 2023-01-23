<?php

/**
 * Аналог «Проводника» в Windows (в моем случае Files в linux) для директорий
 * на сервере при помощи итераторов.
 *
 * @param $dir - директория, из которой хотим извлечь содержимое - папки или файлы
 */
function getDirectory($dir)
{
    $iterator = new DirectoryIterator(realpath($dir));
    foreach ($iterator as $value) {
        if (!$value->isDot()) {
            if ($value->isDir()) {
                echo 'dir ' . $value->getBaseName() . PHP_EOL;
            } else {
                echo 'file ' . $value->getFilename() . PHP_EOL;
            }
        }
    }
}

getDirectory('/home/nin/gb/');