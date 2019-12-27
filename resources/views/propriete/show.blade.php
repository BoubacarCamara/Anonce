@section('content')
   <div class="container mt-5" style="width: 60vw">
       <div class="row align-items-start my-5">
           <div class="col-lg-5">
               <p><img class="img-fluid rounded mb-4 mb-lg-0" src="{{$product->images ?? asset('uploads/images/default.png')}}" alt=""></p>
               <h3 class="font-weight-light">{{$proprietes->localisation}}</h3>
               <p>{{$proprietes->prix_min.'F CFA' ?? ''}}</p>
               <p>{{$proprietes->prix_max.'F CFA' ?? ''}}</p>
               <hr>
               <div class="seller-div">
                   <h3>Infos du vendeur</h3>
                   <strong>{{$proprietes->seller->user->name}}</strong><br><br>
                   <strong><i class="fa fa-home"></i>Adresse:</strong>{{$proprietes->seller->business_address}}<br><br>
                   <strong><i class="fa fa-phone-alt"></i> Adresse:</strong>{{$proprietes->seller->business_phone_number}}<br>
               </div>
           </div>
           <!-- /.col-lg-8 -->
           <div class="col-lg-7">
               <p>{!!$proprietes->description!!}</p>
               <a class="btn btn-primary" href="/propriete/{{$proprietes->id}}/show">Call to Action!</a>
           </div>
           <!-- /.col-md-4 -->
       </div>
   </div>
@endsection
