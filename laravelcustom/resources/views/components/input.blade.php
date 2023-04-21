<div class="col-xs-12 col-sm-12 col-md-12">
<div class="form-group">
<strong><label>{{$label}}</label></strong>
            <input type="{{$type}}" name="{{$name}}"  id="" class="form-control" placeholder="{{$placeholder}}"/>
            <span class="text-danger">
               @error('name')
                {{ $message }}
                @enderror
            </span>
    </div>
</div>