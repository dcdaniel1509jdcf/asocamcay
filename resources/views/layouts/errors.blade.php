@if (count($errors)>0)
<div class="">
    <div>
        @foreach ($errors->all() as $error)
            <p class="">{{ $error }}</p>
        @endforeach
    </div>
</div>


@endif