@extends('frontend.layouts.main')
@section('main-container')
	<div class="outer-slider">
   		<div class="owl-carousel owl-theme">
      		<div class="item">
      			<img src="{{url('frontend/image/feature5.jpg')}}">
      		</div>
      		<div class="item">
      			<img src="{{url('frontend/image/feature4.jpg')}}">
      		</div>
      		<div class="item">
      			<img src="{{url('frontend/image/floor_plan.png')}}">
      		</div>
      		<div class="item">
      			<img src="{{url('frontend/image/feature4.jpg')}}">
      		</div>
      		<div class="item">
      			<img src="{{url('frontend/image/feature5.jpg')}}">
      		</div>
  		</div>
	</div>
	<div class="product_info">
		<h2>Sophisticated Two Bedroom plus Study in Luxurious One30 Hyde Park</h2><br>
		<h3>Location: </h3><p>2202/130 Elizabeth Street, Sydney</p><br>
		<p>Exuding sophisticated grandeur and timeless charm, this elegant two-bedroom plus study apartment boasts breathtaking views over Hyde Park, St Mary’s Cathedral, and the city skyline. Meticulously designed by Bates Smart architects, in a joint development between Aoyuan International and Ecove Group, ‘One30 Hyde Park’ showcases premium quality fixtures and fittings, mirrored by magnificent northern views and positioned in Sydney’s premium residential dress circle.</p>
		<h3>Defining Features</h3>
		<li>Glass encased interiors showcasing sweeping Harbour & city views</li>
		<li>Spacious open plan living/dining drenched in northern light</li>
		<li>Glass encased interiors showcasing sweeping Harbour & city views</li>
		<li>Spacious open plan living/dining drenched in northern light</li>
		<li>Glass encased interiors showcasing sweeping Harbour & city views</li>
		<li>Spacious open plan living/dining drenched in northern light</li>
		<li>Glass encased interiors showcasing sweeping Harbour & city views</li>
		<li>Spacious open plan living/dining drenched in northern light</li><br><br>
		<p>On behalf of the team at Boutique Property Agents and the owners of ‘Apartment 2202 One30 Hyde Park’, we look forward to welcoming you at one of our inspections. Alternatively, please contact Tolga on 0410 888 939 to arrange a private inspection.<br><br>
		Disclaimer: All information contained herewith, have been obtained from sources we believe to be reliable; however, we cannot guarantee its accuracy. The information contained herewith should not be relied upon and you should make your own enquiries and seek advice in respect of this property or any property on this website.</p><br><br>

		<div class="property_features">
		<h3>Property Features</h3>
		<div class="property_feature">
			<img src="{{url('frontend/image/room.png')}}" height="50px">&nbsp;&nbsp;<h4>4 Bedrooms</h4>
		</div>
		<div class="property_feature">
			<img src="{{url('frontend/image/washroom.png')}}" height="50px">&nbsp;&nbsp;<h4>2 shower/ Washroom</h4>
		</div>
		<div class="property_feature">
			<img src="{{url('frontend/image/garage.png')}}" height="50px">&nbsp;&nbsp;<h4>2 shower/ Washroom</h4>
		</div>
		</div>
		<div class="product_contact">
			<h3>Contact Owner</h3>
			<p>You need to <a href="{{url('/login')}}">Login</a> first in order to schedule a visit.</p>
		</div>
		
	</div>
<!-- -----------------------------------------Footer section starts here---------------------------------- -->
@endsection