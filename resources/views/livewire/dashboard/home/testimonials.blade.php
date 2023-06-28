<div>
    @include('admin.dashboard.manage.testimonials.create', ['id' => 'Testimonial', 'title' => 'Criar Depoimento' , 'fields' => $fields])
    @include('admin.dashboard.manage.testimonials.update', ['id' => 'Testimonial', 'title' => 'Editar Depoimento' , 'fields' => $fields])
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
                <th>Empresa</th>
                <th>Depoimento</th>
                <th>Foto</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($testimonials as $value)
                <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->company}}</td>
                    <td>{{$value->testimonial}}</td>
                    <td><img src="{{$value->profile_photo}}" alt="{{$value->name}}" width="100"></td>
                    <td>
                        <button type="button" data-bs-toggle="modal" data-bs-target="#update{{'Testimonial'}}Modal" wire:click="edit({{$value->id}})" class="btn btn-primary btn-sm">Editar</button>
                        <button type="button" wire:click="delete({{$value->id}})" class="btn btn-danger btn-sm">Deletar</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
