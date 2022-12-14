@extends('layouts.site')
@section('title')
    Principais Eventos -
@endsection
@section('content')
    <div class="row">
        <div class="col12">
            <H2>Eventos</H2>
            <hr>
        </div>
    </div>
    <div class="row mb-4">
        @forelse ($events as $event)
            <div class="col-4">
                <div class="card">
                    <img src="https://via.placeholder.com/1024x480.png/002255?text=teste+aula" alt=""
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">{{ $event->title }}</h5>

                        <strong>Acontece em {{ $event->start_event->format('d/m/y H:i:s') }}</strong>

                        <p class="card-text">{{ $event->description }}</p>


                        <p>Evento Organizado por: <a href="#">{{ $event->owner_name }}</a></p>




                        <a href="{{ route('event.single', ['slug' => $event->slug]) }}" class="btn btn-default">Ver
                            Evento</a>
                    </div>
                </div>
            </div>
            @if ($loop->iteration % 3 == 0)
    </div>
    <div class="row mb-4">
        @endif
    @empty
        <div class="col-12">
            <div class="alert alert-warning">Nenhum evento encontrado nesse site...</div>
        </div>
        @endforelse
    </div>
@endsection
