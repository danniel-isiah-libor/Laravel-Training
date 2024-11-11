<div class="form-group">
    @props(['name'],'value'=null)
    <label class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" name="{{ $name }}"  style="@error($name) border: 1px solid red @enderror" class="form-control {{ $class }}" value="{{ old($name)}}??value">
    @error($name)
        <p style="color:red">{{ $message }}</p>
    @enderror
</div>

