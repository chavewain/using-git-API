{{-- {{ var_dump($repos)}} --}}


@foreach($repos as $repo)
    {{ $repo['full_name'] }} <br/>
@endforeach