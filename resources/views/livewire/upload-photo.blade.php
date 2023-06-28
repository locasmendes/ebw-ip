<div>
    <div class="row">
        <div class="col">
            <!-- If $photo is not loading -->
            <input type="file" wire:model="photo">
        </div>
        <div class="col">
            <div wire:loading wire:target="photo">
                <div class="spinner-border" role="status">
                    <span class="visually-hidden">Carregando...</span>
                </div>
            </div>
            <div wire:loading.remove wire:target="photo">
                @if ($photo || $uploadedPhotoUrl)
                    <img class="img-fluid" src="{{$photo ? $photo->temporaryUrl() : $uploadedPhotoUrl}}" alt="Preview" width="360">
                @endif
            </div>
        </div>
    </div>

    @if($name && $uploadedPhotoUrl)
        <input type="hidden" name="{{ $name }}" value="{{ $uploadedPhotoUrl }}">
    @endif

    <!-- Exibe mensagens de sucesso -->
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif


    @error('photo') <!-- Exibe mensagens de erro de validação -->
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
</div>
