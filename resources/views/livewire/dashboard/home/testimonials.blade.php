<div>
    <fieldset class="my-2 p-4 border rounded-3">
        <legend>Depoimentos</legend>
        {{--
        <div class="mb-3 row">
            <label for="testimonial_show_photos" class="col-sm-2 col-form-label">Mostrar fotos?</label>
            <div class="col-sm-10">
                <input type="checkbox" class="form-check-input" id="testimonial_show_photos"
                       name="testimonial_show_photos" {{$showPhotos?'checked':''}}>
            </div>
        </div>
        --}}
        @forelse($testimonials as $testimonial)
            <div class="mb-3 row">
                <label for="testimonial_name_{{$loop->index}}" class="col-sm-2 col-form-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="testimonial_name_{{$loop->index}}" name="testimonial_name_{{$loop->index}}" value="{{$testimonial->name}}">
                </div>
            </div>
            <div class="mb-3 row">
                <span>Foto</span>
                <livewire:upload-photo :name="'testimonial_profile_photo_'.$loop->index" :url="$testimonial->profile_photo"/>
            </div>
            <div class="mb-3 row">
                <label for="testimonial_company_{{$loop->index}}" class="col-sm-2 col-form-label">Empresa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="testimonial_company_{{$loop->index}}" name="testimonial_company_{{$loop->index}}" value="{{$testimonial->company}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="testimonial_testimonial_{{$loop->index}}" class="col-sm-2 col-form-label">Depoimento</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="testimonial_testimonial_{{$loop->index}}" name="testimonial_testimonial_{{$loop->index}}" rows="3">{{$testimonial->testimonial}}</textarea>
                </div>
            </div>
        @empty
        @endforelse
    </fieldset>

</div>
