@extends('layout.app')
@section("contenu_de_la_page")

<!-- Button trigger modal -->
<button type="button" display=center class="btn btn-indigo" data-toggle="modal" data-target="#exampleModalScrollable">
  contrat de publication
</button>
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<form>
  <div class="form-group col-md-4">
    <label for="exampleFormControlInput1">Notre email</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" value="boubacarpoulo@gmail.com" placeholder="name@example.com">
  </div>
  <div class="form-group col-md-4">
    <label for="exampleFormControlInput1">Votre addresse enail</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  
  <div class="form-group col-md-4">
    <label for="exampleFormControlTextarea1">Votre message</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" col="50"></textarea>
  </div>
  <div class="form-group col-md-4">
  <button type="submit" class="btn btn-primary"> Envoyer </div>
</form>
@endsection