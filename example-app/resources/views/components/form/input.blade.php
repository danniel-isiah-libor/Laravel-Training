{{-- <div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
</div> --}}

@props(['name'])

<label for="name" class="form-label">{{ $label }}:</label>
<input style="@error($name) border: 1px solid red @enderror" type="{{ $type }}" name="{{ $name }}"
    class="form-control" value="{{ old($name) }}">

{{-- <input type="{{ $type }}" name="{{ $name }}" class="form-control" value="{{ old($name) }}"> --}}


{{-- directive error if has error in procedural--}} 
{{-- $message --predefine  --}}
@error($name) 
    <p style="color: red">{{ $message}}</p>
@enderror