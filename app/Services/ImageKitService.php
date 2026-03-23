<?php

namespace App\Services;

use ImageKit\ImageKit;

class ImageKitService
{
    protected $imageKit;

    public function __construct()
    {
        $this->imageKit = new ImageKit(
            config('services.imagekit.public_key'),
            config('services.imagekit.private_key'),
            config('services.imagekit.url_endpoint')
        );
    }

    public function upload($file, $fileName = null, $folder = '/')
    {
        $fileName = $fileName ?? uniqid() . '.' . $file->getClientOriginalExtension();
        
        $result = $this->imageKit->uploadFile([
            'file' => base64_encode(file_get_contents($file->getRealPath())),
            'fileName' => $fileName,
            'folder' => $folder,
        ]);

        return $result->result->url ?? null;
    }
}