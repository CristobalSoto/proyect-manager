@if (isset($errors)&&count($errors) > 0)
    <div class="alert alert-dismissable alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        @if(count($errors)!=1)
            @foreach ($errors->all() as $error)
                <li><strong>{!! $errors !!}</strong></li>
            @endforeach
        @else
            <li><strong>{!! $errors !!}</strong></li>
        @endif
    </div>
@endif