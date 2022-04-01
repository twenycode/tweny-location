<select name="{{$name}}" id="{{$id}}" {{$attributes->merge(['class'=>'form-control single-select'])}} >
    <option value="">---</option>
    @foreach($locations as $location)
        <option value={{$location->id}} {{old($name,$value) == $location->id ? 'selected' : ''}}>
            {{ $location->name }}
        </option>
    @endforeach
</select>
