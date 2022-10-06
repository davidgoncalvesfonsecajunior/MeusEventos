@extends('layouts.site')

@section('title')
    Evento: {{ $event->title }} -
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Evento: {{ $event->title }}</h2>
            <p>
                Evento acontecerá em: {{ $event->start_event->format('d/m/y H:i:s') }}
            </p>
            <p>
                {{ $event->description }}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12">


            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about-tab-pane"
                        type="button" role="tab" aria-controls="about-tab-pane" aria-selected="true">Sobre</button>
                </li>
                @if ($event->photos->count())
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="photos-tab" data-bs-toggle="tab" data-bs-target="#photos-tab-pane"
                            type="button" role="tab" aria-controls="photos-tab-pane"
                            aria-selected="false">Fotos</button>
                @endif

            </ul>
            <div class="tab-content pt-5" id="myTabContent">
                <div class="tab-pane fade show active" id="about-tab-pane" role="tabpanel" aria-labelledby="about-tab"
                    tabindex="0">{{ $event->body }}</div>



                @if ($event->photos->count())
                    <div class="tab-pane fade pt-5" id="photos-tab-pane" role="tabpanel" aria-labelledby="photos-tab"
                        tabindex="0">
                        <div class="row">
                            @foreach ($event->photos as $photo)
                                <div class="col-3">
                                    <img src="{{ $photo->photo }}" alt="Foto do evento {{ $event->title }}"
                                        class="img-fluid">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>
        </div>
    </div>
@endsection
