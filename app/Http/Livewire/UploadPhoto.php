<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Http;

class UploadPhoto extends Component
{
    use WithFileUploads;

    public $photo;
    public $name;
    public $uploadedPhotoUrl;

    public function mount($name, $url = null)
    {
        $this->name = $name;
        $this->uploadedPhotoUrl = $url;
    }

    public function render()
    {
        return view('livewire.upload-photo');
    }

    public function save()
    {
        try {
            $this->uploadedPhotoUrl = $this->uploadImage($this->photo);
            session()->flash('success', 'Imagem carregada com sucesso. Para manter a imagem vinculada ao slide, salve o formulário.');
        } catch (\Exception $e) {
            session()->flash('error', 'Erro ao salvar a imagem. Tente novamente mais tarde.');
            return;
        }
    }

    //when $this->photo is updating, this method will be called
    public function updatedPhoto()
    {
        $this->resetErrorBag();
        $this->uploadedPhotoUrl = null;
        $this->save();
    }


    public function uploadImage($image)
    {
        // Salva a imagem original no diretório "storage/app/public/uploads"
        $imagePath = $image->store('uploads', 'public');

        // Cria uma instância da imagem usando o pacote Intervention Image
        $image = Image::make(storage_path("app/public/{$imagePath}"));

        $imageExtension = $image->extension;
        if ($imageExtension !== 'webp'){
            $image->encode('webp');
            $originalPath = $imagePath;
            $imagePath = str_replace($imageExtension, "webp", $imagePath);
            $webp = (string) $image;
            file_put_contents(storage_path("app/public/{$imagePath}"), $webp);
            Storage::delete($originalPath);
        }

        $imageUrl = Storage::url($imagePath);

        return $imageUrl;
    }
}
