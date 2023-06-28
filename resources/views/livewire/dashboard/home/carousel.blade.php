<div>
    @include('admin.dashboard.manage.home.carousel.create', ['id' => 'HeroSlide', 'title' => 'Criar Slide' , 'fields' => $fields])
    @include('admin.dashboard.manage.home.carousel.update', ['id' => 'HeroSlide', 'title' => 'Editar Slide' , 'fields' => $fields])
    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>#</th>
                <th>Título</th>
                <th>Texto</th>
                <th>CTA</th>
                <th>Link</th>
                <th>Imagem</th>
                <th> Imagem de sobreposição </th>
                <th> Legenda da sobreposição </th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carousels as $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->title }}</td>
                    <td>{{ $value->description }}</td>
                    <td>{{ $value->call_to_action }}</td>
                    <td>{{ $value->link }}</td>
                    <td><img src="{{ $value->cover }}" alt="{{ $value->title }}" width="100"></td>
                    <td>
                        @if($value->overlay_url)
                            <img src="{{ $value->overlay_url }}" alt="{{ $value->title }}" width="100">
                        @endif
                    </td>
                    <td>{{ $value->overlay_caption }}</td>
                    <td>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#update{{'HeroSlide'}}Modal" wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Editar</button>
                        <button type="button" wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Deletar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
