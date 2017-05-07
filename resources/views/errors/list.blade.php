@if(count($errors))
    <div class="alert alert-danger">
        Houve algum erro com o processo.
        <br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
