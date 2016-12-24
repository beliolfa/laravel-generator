@if(!empty($errors))
    @if($errors->any())
        <ul class="notification is-danger" style="list-style-type: none">
            @foreach($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    @endif
@endif
