<?php

namespace App\Http\Controllers;

use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Storage;

class ImagesController
{
    public function upload(Request $request)
    {

        $image = $request->file('image');

        // Salva a imagem original no diretório "storage/app/public/uploads"
        $imagePath = $image->store('uploads', 'public');

        // Cria uma instância da imagem usando o pacote Intervention Image
        $image = Image::make(storage_path("app/public/{$imagePath}"));

        $imageExtension = $image->extension;
        if ($imageExtension !== 'webp'){
            $image->encode('webp');
            $originalPath = $imagePath;
            $imagePath = str_replace($imageExtension, ".webp", $imagePath);
            $webp = (string) $image;
            file_put_contents(storage_path("app/public/{$imagePath}"), $webp);
            Storage::delete($originalPath);
        }

        $imageUrl = Storage::url($imagePath);

        return response()->json(['url' => $imageUrl], 201);
    }
}
