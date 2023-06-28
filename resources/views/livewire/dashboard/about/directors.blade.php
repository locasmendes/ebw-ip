<div>
    @include('admin.dashboard.manage.directors.create', ['id' => 'Director', 'title' => 'Adicionar Sócio' , 'fields' => $fields])
    @include('admin.dashboard.manage.directors.update', ['id' => 'Director', 'title' => 'Editar Sócio' , 'fields' => $fields])
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            {{session('message')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <table class="table table-bordered mt-5">
        <thead>
        <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Cargo</th>
                <th>Descrição</th>
                <th>Citação</th>
                <th>Linkedin</th>
                <th>Foto</th>
                <th>Ação</th>
            </tr>
        </tr>
        </thead>
        <tbody>
            @foreach($directors as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->fullName}}</td>
                    <td>{{$value->position}}</td>
                    <td>{{$value->description}}</td>
                    <td>{{$value->quote}}</td>
                    <td>{{$value->linkedin}}</td>
                    <td><img src="{{$value->img}}" alt="{{$value->name}}" width="100"></td>
                    <td>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#update{{'Director'}}Modal" wire:click="edit({{$value->id}})" class="btn btn-primary btn-sm">Editar</button>
                        <button type="button" wire:click="delete({{$value->id}})" class="btn btn-danger btn-sm">Deletar</button>
                    </td>
                </tr>
            @endforeach
    </table>
</div>
