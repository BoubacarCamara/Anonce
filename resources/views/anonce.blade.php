
@extends('layout.app')
@section("contenu_de_la_page")
<!-- Page Content -->
<div class="container">

<!-- Page Heading/Breadcrumbs -->
<h1 class="mt-4 mb-3">Contact
  <small>Subheading</small>
</h1>

<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="index.html">Home</a>
  </li>
  <li class="breadcrumb-item active">Contact</li>
</ol>

<!-- Content Row -->
<div class="row">
  <!-- Map Column -->
  <div class="col-lg-8 mb-4">
    <!-- Embedded Google Map -->
    <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>
  </div>
  <!-- Contact Details Column -->
  <div class="col-lg-4 mb-4">
    <h3>Contact Details</h3>
    <p>
      3481 Melrose Place
      <br>Beverly Hills, CA 90210
      <br>
    </p>
    <p>
      <abbr title="Phone">P</abbr>: (123) 456-7890
    </p>
    <p>
      <abbr title="Email">E</abbr>:
      <a href="mailto:name@example.com">name@example.com
      </a>
    </p>
    <p>
      <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM
    </p>
  </div> -->
</div>
<!-- /.row -->

<!-- Contact Form -->
<!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
<div class="row">
  <div class="col-lg-8 mb-4">
    <h3>Send us a Message</h3>
    <form name="sentMessage" id="contactForm" novalidate>
      <div class="control-group form-group">
        <div class="controls">
          <label>Full Name:</label>
          <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
          <p class="help-block"></p>
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <label>Phone Number:</label>
          <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <label>Email Address:</label>
          <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
        </div>
      </div>
      <div class="control-group form-group">
        <div class="controls">
          <label>Message:</label>
          <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
        </div> 
      </div>
      <div id="success"></div>
      <!-- For success/fail messages -->
      <button type="submit" class="btn btn-primary" id="sendMessageButton">Send Message</button>
    </form>
  </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
<div class="container">
  <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
</div> -->
@endsection -->










<html></html>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">
<br>
<br>
	<div class="row" id="main">
        <div class="col-md-4 well" id="leftPanel">
            <div class="row">
                <div class="col-md-12">
                	<div>
        				<img src="http://lorempixel.com/200/200/abstract/1/" alt="Texto Alternativo" class="img-circle img-thumbnail">
        				<h2>Gopinath Perumal</h2>
        				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        				tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning">
                                Social</button>
                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Twitter</a></li>
                                <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Github</a></li>
                            </ul>
                        </div>
        			</div>
        		</div>
            </div>
        </div>
        <div class="col-md-8 well" id="rightPanel">
            <div class="row">
    <div class="col-md-12">
    	<form role="form">
			<h2>Edit your profile.<small>It's always easy</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="First Name" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Last Name" tabindex="2">
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control input-lg" placeholder="Email Address" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="6">
					</div>
				</div>
			</div>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6"></div>
				<div class="col-xs-12 col-md-6"><a href="#" class="btn btn-success btn-block btn-lg">Save</a></div>
			</div>
		</form>
	</div>
</div>
<!-- Modal -->
<div class="modal fade" id="t_and_c_m" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h4 class="modal-title" id="myModalLabel">Terms & Conditions</h4>
			</div>
			<div class="modal-body">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique, itaque, modi, aliquam nostrum at sapiente consequuntur natus odio reiciendis perferendis rem nisi tempore possimus ipsa porro delectus quidem dolorem ad.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-dismiss="modal">I Agree</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
        </div>
     </div>       
</div>

csscss

#leftPanel{
    background-color:#0079ac;
    color:#fff;
    text-align: center;
}

#rightPanel{
    min-height:415px;
}

/* Credit to bootsnipp.com for the css for the color graph */
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}