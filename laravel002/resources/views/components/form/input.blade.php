@props(['name'])

<label class="form-label">{{ $label }}</label>
<input type="{{ $type }}" name="{{ $name }}" class="form-control" value="{{ old($name) }}" style="@error($name) border: 1px solid red @enderror" >

@error($name)
    <p style="color:red">{{ $message }}</p>
@enderror