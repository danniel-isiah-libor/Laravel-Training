@props(['name'])

<div class="mb-3">
    <label class="form-label">{{$label}}</label>
    <input type="{{$type}}" style="@error($name) border: 1px solid red @enderror" name="{{$name}}" class="form-control" value="{{old($name)}}">

    @error($name)
        <p style="color:red">{{$message}}</p>
    @enderror
</div>