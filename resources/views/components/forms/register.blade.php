<form class="p-5" style="background-color: #F2F2F2; border-radius: 1.6rem;">
    <h3>Preencha o formulário abaixo com os seus dados!</h3>
    @foreach($fields as $field)
        @include('components.forms.fields.'.$field['type'], ['field' => $field, 'form_id' => $formId])
    @endforeach
    <div class="pt-5 pb-3">
        <button type="submit" class="btn cta-btn border-ebw-golden text-black">{{$submitText}} >>></button>
    </div>
</form>
