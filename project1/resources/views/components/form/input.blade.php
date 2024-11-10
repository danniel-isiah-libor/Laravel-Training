@props(['name'])

<label>{{$label}}:</label>
<input style = "@error($name) border:1px solid red @enderror" class = "form-control {{$class}}" type="{{$type}}" name = "{{$name}}" value="{{old($name)}}"/>

@error($name)
    <p style = "color: 1px solid red">{{$message}}</p>
@enderror