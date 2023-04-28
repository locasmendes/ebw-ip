<div class="my-2">
    @if(!empty($field['label']))
        <label for="{{$form_id.'-'.$field['name']}}" class="form-label">{{$field['label']}}</label>
    @endif
    <input type="email" id="{{$form_id.'-'.$field['name']}}" name="{{$field['name']}}" class="form-control" placeholder="{{$field['placeholder'] ?? ''}}" {{$field['required'] ? 'required' : ''}}>
</div>
