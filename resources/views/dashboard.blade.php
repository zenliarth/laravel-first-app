@extends ('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="container-title">
    <h1>Meus Eventos</h1>
</div>
<div class="container-events">
    @if(count($events) > 0)
    @else
    <p>Você ainda não tem eventos.</p>
    <a href="/events/create">criar evento</a>
    @endif
</div>
@endsection