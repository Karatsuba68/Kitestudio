@extends('layout.main')

    @section('title', 'Criar evento')

    @section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
      
      
        <h1>Crie um Evento</h1>
        <form action="/events" method="post" enctype="multipart/form-data">
      @csrf
  
      <div class="form-group">
        <label for="image">Imagem do Evento:</label>
        <input type="file" id="image" name="image" class="from-control-file">
      </div>
  
          <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome">
          </div>
  
          <div class="form-group">
            <label for="date">Data do Evento:</label>
            <input type="date" class="form-control" id="date" name="date">
          </div>
  
          <div class="form-group">
            <label for="title">Cidade</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="cidade...">
          </div>
  
          <div class="form-group">
            <label for="title">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
              <option value="0">Não</option>
              <option value="1">Sim</option>
            </select>
          </div>
  
          <div class="form-group">
            <label for="title">Descricão</label>
           <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento?"></textarea>
          </div>
  
  
          <div class="form-group">
            <label for="title">Adicione funções de infraestruturas:</label>
            <div class="form-group">
              <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
  
            <div class="form-group">
              <input type="checkbox" name="items[]" value="Palco"> Palco
            </div>
            
            <div class="form-group">
              <input type="checkbox" name="items[]" value="Cerveja Grátis"> Cerveja Grátis
            </div>
  
            <div class="form-group">
              <input type="checkbox" name="items[]" value="Brindes"> Brindes
            </div>
            
            
            <div class="form-group">
              <input type="checkbox" name="items[]" value="Open Food"> Open Food
            </div>
          
          </div>
  
  
        <input type="submit" class="btn btn-primary" value="Criar evento" id="botao">
        </form>
      </div>

@endsection