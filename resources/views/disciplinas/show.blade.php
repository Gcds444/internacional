@extends('main')
@section('content')

<div class="card">

<div class="card-header"><b>Dados da disciplina cursada</b></div>
    <div class="card-body">

        <div class="row">

        <div class="col-sm form-group">
                <div class="form-group">
                    <label for="nome" class="required"><b>Nome da Disciplina: </b></label>
                    <br>  {{ $disciplina->nome ?? '' }} 
                </div>  
            </div>

            <div class="col-sm form-group">
                <div class="form-group">
                    <label for="nota" class="required"><b>Nota: </b></label>
                    <br>  {{ $disciplina->nota ?? '' }} 
                </div>
            </div> 
        
            <div class="col-sm form-group">
                <div class="form-group">
                    <label for="creditos" class="required"><b>Créditos obtidos: </b></label>
                    <br>  {{ $disciplina->creditos ?? '' }} 
                </div>
            </div>

            <div class="col-sm form-group">
                <div class="form-group">
                    <label for="carga_horaria" class="required"><b>Carga horaria: </b></label>
                    <br>  {{ $disciplina->carga_horaria ?? '' }} 
                
            </div>  
        </div>  
    </div>
</div>

<div class="card-header"><b>Disciplina equivalante na USP</b></div>
    <div class="card-body">

        <div class="row">
            <div class="col-sm form-group col-sm-3">
                <div class="form-group">
                    <label for="codigo" class="required"><b>Código: </b></label>
                    <br>  {{ $disciplina->codigo ?? '' }} 
                </div>
            </div> 
            

            <div class="col-sm form-group">
                <div class="form-group">
                    <label for="nome_usp" class="required"><b>Nome: </b></label>
                    <br>  {{ $disciplina->nome_usp ?? '' }} 
               </div>
            </div>
            
      </div>
      <div class="form-group">
      <form method="POST" action="/disciplinas/{{$disciplina->id}}"> 
                @csrf
                @method('delete')
<a href="/disciplinas/{{$disciplina->id}}/edit"><i class="fas fa-pencil-alt"></a></i>
<button type="submit" onclick="return confirm('Tem certeza que deseja excluir?');" style="background-color: transparent;border: none;"><i class="far fa-trash-alt" color="#007bff"></i></button>  
</form>
            
    </div>
    </div>
</div>


@endsection