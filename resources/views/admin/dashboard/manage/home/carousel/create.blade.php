<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create{{$id}}">
    Adicionar
</button>

<!-- Modal -->
<div wire:ignore.self class="modal fade" id="create{{$id}}" tabindex="-1" role="dialog" aria-labelledby="create{{$id}}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="create{{$id}}Label">{{$title}}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    @foreach($fields as $field)
                        <div class="form-group">
                            @if(!in_array($field['type'], ['file', 'image']))
                                <label for="{{$field['name']}}">{{ $field['label'] }}</label>
                                <input type="{{ $field['type'] }}" class="form-control" id="{{$field['name']}}" placeholder="{{ $field['label'] }}" wire:model="{{ $field['name'] }}">
                            @endif
                         </div>
                    @endforeach
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Fechar</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal" data-bs-dismiss="modal">Salvar</button>
            </div>
        </div>
    </div>
</div>
