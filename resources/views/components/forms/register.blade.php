<form class="py-5">
    @foreach($fields as $field)
        @include('components.forms.fields.'.$field['type'], ['field' => $field, 'form_id' => $formId])
    @endforeach
    <div class="my-2">
        <button type="submit">{{$submitText}}</button>
    </div>
</form>
