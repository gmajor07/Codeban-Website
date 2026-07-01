<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected const PRODUCTION_PUBLIC_PATH = '/home/codebanc/public_html';

    protected function storePublicUpload($file, string $directory): string
    {
        $filename = time().'_'.preg_replace('/\s+/', '_', $file->getClientOriginalName());
        $destinationPath = $this->publicImagePath('storage/'.$directory);

        if (! file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }

        $file->move($destinationPath, $filename);

        return 'storage/'.$directory.'/'.$filename;
    }

    protected function deletePublicUpload(?string $path, string $directory): void
    {
        if (! $path || ! str_starts_with($path, 'storage/'.$directory.'/')) {
            return;
        }

        $imagePath = $this->publicImagePath($path);

        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    protected function publicImagePath(string $path): string
    {
        $publicPath = app()->environment('production')
            ? self::PRODUCTION_PUBLIC_PATH
            : public_path();

        return rtrim($publicPath, DIRECTORY_SEPARATOR).DIRECTORY_SEPARATOR.ltrim($path, DIRECTORY_SEPARATOR);
    }
}
