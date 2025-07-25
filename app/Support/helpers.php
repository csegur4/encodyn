<?php

use Illuminate\Support\Str;

if (!function_exists('img_optimized')) {
    function img_optimized(string $path): string
    {
        $cleanPath = ltrim($path, '/');
        $host = request()->getSchemeAndHttpHost();

        if (Str::contains($host, ['localhost', '127.0.0.1'])) {
            return "{$host}/{$cleanPath}";
        }

        return "{$host}/cdn-cgi/image/format=auto,quality=80,sharpen=1,fit=scale-down,metadata=copyright/{$cleanPath}";
    }
}
