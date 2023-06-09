<form class="p-5" style="background-color: #F2F2F2; border-radius: 1.6rem;" method="post" action="{{ route('cadastro.save') }}">
    @csrf
    <input type="hidden" name="_captcha" data-csrf="{{ csrf_token() }}" /><input type="hidden" name="{{ Str::random(16) }}" />
    <input type="text" name="search_username" aria-label="Name" style="position:fixed;left:-{{ rand(10000,30000) }}px" autocomplete="off"/>
    <script>
        @if(!defined('LOAD_HIDDEN_CAPTCHA'))
        if(document.getElementById('cptch-js')===null) {var s=document.createElement('script');s.id="cptch-js";s.src="{{ mix('captcha.min.js', '/assets/vendor/hidden-captcha') }}";document.head.appendChild(s);}
        @php(define('LOAD_HIDDEN_CAPTCHA', true))
        if(typeof hdCptch!=='undefined') { hdCptch() }
        @endif
    </script>
    <h3>Preencha o formulário abaixo com os seus dados!</h3>
    @foreach($fields as $field)
        @include('components.forms.fields.'.$field['type'], ['field' => $field, 'form_id' => $formId])
    @endforeach
    <hr>
    <div class="form-check my-2">
        <input class="form-check-input" type="checkbox" value="yes" id="whatsapp" name="whatsappOptIn">
        <label class="form-check-label" for="whatsapp" style="font-size: 0.9rem; color: #484c4f;">
            Aceito receber informações sobre produtos e serviços da EBW pelo WhatsApp.
        </label>
    </div>
    <div class="form-check my-2">
        <input class="form-check-input" type="checkbox" value="yes" id="email" name="emailOptIn">
        <label class="form-check-label" for="email" style="font-size: 0.9rem; color: #484c4f;">
            Aceito receber informações sobre produtos e serviços da EBW por e-mail.
        </label>
    </div>
    <div class="pt-5 pb-3">
        <button type="submit" class="btn cta-btn border-ebw-golden text-black">{{$submitText}} >>></button>
    </div>
</form>
