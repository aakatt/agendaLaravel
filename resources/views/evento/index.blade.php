@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<div class="container">
    <div id="agenda">
    </div>
</div>


<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="modal fade" id="evento" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Dados do evento</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" id="formularioEventos">

                {!! csrf_field() !!}

                <div class="mb-3 d-none">
                  <label for="id" class="form-label">ID</label>
                  <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">Help text</small>
                </div>

                <div class="mb-3">
                  <label for="" class="form-label">Título</label>
                  <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="Escreva o título do evento">
                  <small id="helpId" class="form-text text-muted">Help text</small>
                </div>

                <div class="mb-3">
                  <label for="description" class="form-label">Descrição </label>
                  <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                </div>

                <div class="mb-3 d-none">
                  <label for="start" class="form-label">start</label>
                  <input type="date" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">aaaa-mm-aa</small>
                </div>

                <div class="mb-3 d-none">
                  <label for="end" class="form-label">end</label>
                  <input type="date" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">aaaa-mm-dd</small>
                </div>

                </form>
            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-success" id="btnSalvar">Salvar</button>
                <button type="button" class="btn btn-warning" id="btnEditar">Editar</button>
                <button type="button" class="btn btn-danger"  id="btnExcluir">Excluir</button>
            </div>
        </div>
    </div>
</div>


<!-- Optional: Place to the bottom of scripts -->
<script>
    const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)

</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
@endsection