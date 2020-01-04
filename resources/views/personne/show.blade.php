<!-- @extends('layout.app')

@section('contenu_de_la_page')

   <div class="container mt-5" style="width: 60vw">
       <div class="row align-items-start my-5">
           <div class="col-lg-5">
               <p><img class="img-fluid rounded mb-4 mb-lg-0" src="{{$propriete->image ?? asset('uploads/images/default.png')}}" alt=""></p>
               <h3 class="font-weight-light">{{$propriete->localisation}}</h3>
               <p>{{$propriete->prix_min.'F CFA' ?? ''}}</p>
               <hr>
               <div class="seller-div">
                   <h3>Infos du vendeur</h3>
                   <strong>{{$propriete->users->name}}</strong><br><br>
                   <strong><i class="fa fa-home"></i>Adresse email:</strong>{{$propriete->users->email}}<br><br>
                   <strong><i class="fa fa-phone-alt"></i> telephone:</strong>{{$propriete->users->telephone}}<br>
               </div>
           </div>
           <!-- /.col-lg-8 -->
           <div class="col-lg-7">
               <p>{!!$propriete->description!!}</p>
               <a class="btn btn-primary" href="/propriete/{{$propriete->id}}/show">Call to Action!</a>
           </div>
           <!-- /.col-md-4 -->
       </div>
   </div>


@endsection -->
