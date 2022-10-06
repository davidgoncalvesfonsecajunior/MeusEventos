@extends('layouts.app')

@section('title')
    Criar Evento -
@endsection

@section('content')
    <div class="row">
        <div class="col-12 my-5">
            <h2>Criar Evento</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <form action="{{ route('admin.events.store') }}" method="post">

                @csrf

                <div class="form-group">


                    <label>Titulo Evento</label>
                    <input type="text"
                        class="form-control @error('title')
                        is-invalid
                    @enderror"
                        name="title" value="{{ old('title') }}">

                    @error('title')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div class="form-group">


                    <label>descrição rápida Evento</label>
                    <input type="text"
                        class="form-control @error('description')
                    is-invalid
                @enderror"
                        name="description" value="{{ old('description') }}">

                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror


                </div>

                <div class="form-group">


                    <label>Fale mais sobre o Evento</label>
                    <textarea name="body" id="" cols="30" rows="10"
                        class="form-control @error('body')
                    is-invalid
                @enderror">{{ old('body') }}</textarea>

                    @error('body')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror


                </div>

                <div class="form-group">


                    <label>Quando vai Acontecer?</label>
                    <input type="text"
                        class="form-control @error('start_event')
                    is-invalid
                @enderror"
                        name="start_event" value="{{ old('start_event') }}">

                    @error('start_event')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <button type="submit" class="btn btn-lg btn-success my-5">Criar Evento</button>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        let el = document.querySelector('input[name=start_event]');

        let im = new Inputmask('99/99/9999 99:99:99');
        im.mask(el);
    </script>
@endsection
