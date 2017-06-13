@extends('main')

@section('title', 'Contact Us')

@section('content')

	<div class="row">
		<div id="googleMap" style="width:100%;height:400px;"></div>
	</div>

	<div class="row">
		<div class="col-xs-10 col-xs-offset-1">

			<h2 class="section-title">Contact Us</h2>

			<div class="row">

				<form action="contact-submit" method="GET" data-parsley-validate=''>
			        <div class="row margin-bottom">
			            <div class="col-md-6">

			                <div class="form-group">
			                    <label for="name">
			                        Name</label>
			                    <input type="text" name="name" class="form-control required" id="name" placeholder="Enter name" required="required" />
			                </div>

			                <div class="form-group">
			                    <label for="email">
			                        Email Address</label>
			                    <div class="input-group">
			                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
			                        </span>
			                        <input type="email" name="email" class="form-control required" id="email" placeholder="Enter email" required="required" /></div>
			                </div>

			                <div class="form-group">
			                    <label for="subject">
			                        Subject</label>
			                    <input type="text" name="subject" class="form-control required" id="subject" placeholder="Enter subject" required="required" />
			                </div>

			            </div>

			            <div class="col-md-6">

			                <div class="form-group">
			                    <label for="message">
			                        Message</label>
			                    <textarea name="message" id="message" class="form-control required" rows="9" cols="25" required="required"
			                        placeholder="Message"></textarea>
			                </div>

			            </div>

			            <div class="col-md-12">

			                <button type="submit" class="btn btn-default pull-right" id="btnContactUs">
			                    Send Message</button>

			            </div>
			        </div>
		        </form>

			</div>

		</div>
	</div>

@endsection

@section('scripts')

<script>
function myMap() {
	var myCenter = new google.maps.LatLng(52.6285,-2.1517);
	var mapProp= {
		center:myCenter,
	    zoom:10,
	    scrollwheel:false,
	    draggable:true,
	    mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

	var marker = new google.maps.Marker({position: myCenter});
	marker.setMap(map);

	google.maps.event.addDomListener(window, 'resize', function() {
    	map.setCenter(myCenter);
	});
}

google.maps.event.addDomListener(window, 'load', myMap);
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCazfDARomAZstbcxEVB7hY9PXZ38LPwY0&callback=myMap"></script>

@endsection