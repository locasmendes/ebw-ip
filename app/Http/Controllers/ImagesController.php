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

        // Otimiza a imagem para o formato .webp
        $image->encode('webp')->save();

        // Obtém a URL da imagem otimizada
        $imageUrl = Storage::url($imagePath);

        return response()->json(['url' => $imageUrl], 201);
    }
}
