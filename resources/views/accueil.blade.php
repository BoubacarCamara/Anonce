@extends('layout.app')
@section("contenu_de_la_page")

<!-- Button trigger modal -->
<!-- <button type="button" display=center class="btn btn-indigo" data-toggle="modal" data-target="#exampleModalScrollable">
  contrat de publication
</button> -->
<!-- Modal -->
<!-- <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->
<!-- <form> -->
  

<div class="row">

<div class="col-sm-4 col-md-4 col-lg-4  text-center color:black margin-top:15;"> 
<h3  style="border:1px solid black; padding-top:25px; color:red; margin-left:30px; width:150px; height:150px; border-radius:100%;"> <a href="/propriete/create">Publier</a> </h3>


</div>
<div class="col-sm-4 col-md-4 col-lg-4 text-center margin-top:15;">
<h3 style="border:1px solid black; padding-top:25px; color:blue; margin-left:30px; width:150px; height:150px; border-radius:100%;">Menu</3>

</div>
<div class="col-sm-4 col-md-4 col-lg-4 text-center margin-top:15;">
<h3 style="border:1px solid black; padding-top:25px; color:yellow; margin-left:30px; width:150px; height:150px; border-radius:100%;">contrat</h3>
<!-- <p style=" width=50%;" >
<h5 >Publier</h5>
votre anonce sur notre site web gratuitement .
Pour beneficier de notre publicite vous devais d'abord creer un compte
Tout publication d'anonce doit passer par le bouton Publier
vous verrai le formulaire a remplir .
Nous avons different categorie de propriete si votre anonce conserne un appartement 
vous devait remplir tout les champs .
Si votre anonce conserne une maison vous aller remplir les champs excepter 
le nombre de chambre, nomdre de salle de bain etc...
Toujours ajouter une photo pour vos anonce .
Les visiteurs pourrons vous joindre a partir de vos information personnel.
</p> -->
</div>
</div>

</form>
<div class="card-group">
  <div class="card">
    <img src="/images/imo.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="/images/imo.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
    <img src="/images/imo.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
@endsection