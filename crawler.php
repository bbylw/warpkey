<?php

// 定义源URL数组
$source = [
    'https://t.me/s/warpplus',
    'https://t.me/s/warppluscn',
    'https://t.me/s/warpPlusHome',
    'https://t.me/s/warp_veyke',
];

// 定义正则表达式模式
$pattern = '/<code>([A-Za-z0-9-]+)<\/code>/';

// 获取所有的keys
$keys = getKeysFromSources($source, $pattern);

// 去重
$keys = array_unique($keys);

if (count($keys) > 0) {
    // 保存到文件
    saveKeysToFile($keys, "plus/full", 100);
    shuffle($keys);
    saveKeysToFile($keys, "plus/lite", 15);
}

/**
 * 从源URL中获取keys
 *
 * @param array $source
 * @param string $pattern
 * @return array
 */
function getKeysFromSources(array $source, string $pattern): array
{
    $keys = [];
    foreach ($source as $url) {
        $getData = @file_get_contents($url);
        if ($getData === FALSE) {
            error_log("Failed to fetch data from $url");
            continue;
        }
        if (preg_match_all($pattern, $getData, $matches)) {
            $keys = array_merge($keys, $matches[1]);
        }
    }
    return $keys;
}

/**
 * 将keys保存到文件
 *
 * @param array $keys
 * @param string $filePath
 * @param int $limit
 */
function saveKeysToFile(array $keys, string $filePath, int $limit): void
{
    $keysToSave = array_slice($keys, 0, $limit);
    $content = implode("\n", $keysToSave);
    if (file_put_contents($filePath, $content) === false) {
        error_log("Failed to write keys to $filePath");
    } else {
        error_log("Successfully wrote keys to $filePath");
    }
}
