<div class="my-2">
    @if(!empty($field['label']))
    <label for="{{$form_id.'-'.$field['name']}}" class="form-label">{{$field['label']}}</label>
    @endif
    <input
        type="{{$field['name'] === 'phone' ? 'tel' : 'text'}}"
        id="{{$form_id.'-'.$field['name']}}"
        name="{{$field['name']}}"
        class="form-control" placeholder="{{$field['placeholder'] ?? ''}}" {{$field['required'] ? 'required' : ''}}
        @if($field['name'] === 'phone')
            pattern="\([0-9]{2}\) [0-9]{4,6}-[0-9]{3,4}$"
            maxlength="15"
            onkeyup="handlePhone(event)"
        @endif
    >
</div>
@if($field['name'] === 'phone')
    @push('scripts')
        <script>
            const handlePhone = (event) => {
                let input = event.target
                input.value = phoneMask(input.value)
            }

            const phoneMask = (value) => {
                if (!value) return ""
                value = value.replace(/\D/g,'')
                value = value.replace(/(\d{2})(\d)/,"($1) $2")
                value = value.replace(/(\d)(\d{4})$/,"$1-$2")
                return value
            }
        </script>
    @endpush
@endif
