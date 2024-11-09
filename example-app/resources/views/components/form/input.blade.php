@props(['name'])

<label class="form-label">{{ $label }} :</label>
<input style="@error($name) border: 1px solid red @enderror" type="{{ $type }}" name="{{ $name }}"
       class="form-control" value={{ old($name) }}>

@error($name)
{{-- pwede na dito ilagay ang styling ng messagfe --}}
    <p style="color: red">{{ $message }}</p>
@enderror