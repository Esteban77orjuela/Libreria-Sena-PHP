<!-- Modal -->
<div class="modal fade" id="modal-{{ $libro->id }}" tabindex="-1" aria-labelledby="modal-label-{{ $libro->id }}" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="modal-label-{{ $libro->id }}">Actualizar Libro</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form method="POST" action="{{ route ('libros.update', $libro) }}">
              @csrf
              @method('put')
              <div class="form-group">
                  <label for="nombre">Nombre:</label>
                  <input type="text" id="nombre" name="nombre" value="{{$libro->nombre}}" class="form-control" required>
              </div>
              <div class="form-group">
                  <label for="nombre">Descripcion:</label>
                  <input type="text" id="descripcion" name="descripcion" value="{{$libro->descripcion}}" class="form-control" required>
              </div>
              <div class="form-group">
                  <label for="nombre">Autor:</label>
                  <input type="text" id="autor" name="autor" value="{{$libro->autor}}" class="form-control" required>
              </div>
              <button type="submit" class="form-control">Actualizar</button>
          </form>
          </div>
      </div>
  </div>
</div>
