<!-- Modal -->
<div wire:ignore.self class="modal fade" id="update{{$id}}Modal" tabindex="-1" role="dialog" aria-labelledby="{{$id}}Label" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{$id}}Label">{{$title}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    @foreach($fields as $field)
                        <div class="form-group">
                            @if(!in_array($field['type'], ['file', 'image']))
                                <label for="updatemodal-{{$field['name']}}">{{ $field['label'] }}</label>
                                <input type="{{ $field['type'] }}" class="form-control" id="updatemodal-{{$field['name']}}" placeholder="{{ $field['label'] }}" wire:model="{{ $field['name'] }}">
                            @endif
                            @error($field['name']) <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    @endforeach
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-bs-dismiss="modal">Salvar</button>
            </div>
        </div>
    </div>
</div>
