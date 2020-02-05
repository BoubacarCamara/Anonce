@extends('layout.app')
@section("contenu_de_la_page")
<div class="row">

<div class="col-sm-4 col-md-4 col-lg-4  text-center color:black margin-top:15;"> 
<h3  style="border:1px solid black; padding-top:25px; color:red; margin-left:30px; width:150px; height:150px; border-radius:100%;"> <a href="/propriete/create">Publier</a> </h3>


</div>
<div class="col-sm-4 col-md-4 col-lg-4 text-center margin-top:15;">
<h3 style="border:1px solid black; padding-top:25px; color:red; margin-left:30px; width:150px; height:150px; border-radius:100%;"> <a href="#">Mes anonces</a> </h3>

</div>
<div class="col-sm-4 col-md-4 col-lg-4 text-center margin-top:15;">
<h3 style="border:1px solid black; padding-top:25px; color:dark; margin-left:30px; width:150px; height:150px; border-radius:100%;"><button type="button" display=center class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable">
  contrat
</button> 
<!-- Modal -->
<div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalScrollableTitle">lisez le contrat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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
</p> 
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary"> <a href="/propriete/create"></a>Accepter</button>
      </div>
    </div>
  </div>
</div> 
<!-- <form> --></h3>
<!-- Button trigger modal -->




</div>
</div>

</form>
<div class="card-group">
  <div class="card">
   <a href="#"> <img src="/images/index.jpeg" class="card-img-top" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title">Villa</h5>
      <p class="card-text">A vendre </p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Monanoce.com</small>
    </div>
  </div>
  <div class="card">
   <a href="#"> <img src="/images/ik.jpeg" class="card-img-top" alt="..."></a>
    <div class="card-body">
      <h5 class="card-title">Appartement</h5>
      <p class="card-text">A louer</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Monanoce.com</small>
    </div>
  </div>
  <div class="card">
   <a href="#"><img src="/images/imo.jpg" class="card-img-top" alt="..."></a> 
    <div class="card-body">
      <h5 class="card-title">Maison</h5>
      <p class="card-text">A louer</p>
    </div>
    <div class="card-footer">
      <small class="text-muted">Monanoce.com</small>
    </div>
  </div>
</div>

<form method="post" action="{{route('ajouter_message')}}">
<p>
<h3>Merci beaucoup</h3><h5>vous pouvez nous envoyer un message </h5>
</p>
  
  </div>
  <button  class="btn btn-primary"><a href="/sendemail">Votre message</a></button>

</form>

<!-- </form>
           <button type="button" class="btn btn-outline-primary">Servive</button>
<button type="button" class="btn btn-outline-secondary">Vehicule</button>
<button type="button" class="btn btn-outline-success">Recrutement</button>
<button type="button" class="btn btn-outline-danger">Mode-beaute</button>
<button type="button" class="btn btn-outline-warning">Creer votre site</button>
<button type="button" class="btn btn-outline-info">Information</button>
<button type="button" class="btn btn-outline-dark">Restaurant</button>
</body>
</html> -->
@endsection