@extends('layouts.app')
@section('content')

    <div class="card-body">
      <h5 class="card-title">Eliminar Libro</h5>
        <form method="POST" action="{{ route ('libros.destroy') }}">
            @csrf
            <div class="form-group">
                <label for="nombre">Id del libro:</label>
                <input type="text" id="IdLibro" name="IdLibro" class="form-control" required>
            </div>
            <button type="submit" class="form-control">Eliminar</button>
        </form>
        @if (session('success'))
        <div class="alert alert-success " role="alert">
            {{ session('success') }}
        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-success " role="alert">
            {{ session('success') }}
        </div>
        @endif
    </div>

@endsection