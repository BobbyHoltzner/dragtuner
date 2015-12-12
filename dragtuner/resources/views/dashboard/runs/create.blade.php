@extends('dashboard.layouts.main')

@section('content')

<h1>Add New Run</h1>


	<div class="row">
		<div class="col-md-8 col-xs-12">
			<form action="/" id="newRun" method="POST" class="" role="form">
				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingOne">
				      <h4 class="panel-title">
				        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          <i class="fa fa-clock-o"></i>Timeslip
				        </a>
				      </h4>
				    </div>
				    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
				      <div class="panel-body">
				     		<div class="form-inline">
								<div class="input-group">
								<label for="">Track Length</label><br />
									<input id="distance" type="checkbox" v-model="quarterMile" checked data-toggle="toggle">
								</div>
								<div class="input-group">
								<label for="">Lane</label><br />
									<input type="checkbox" id="lane-choice" checked data-toggle="toggle">
								</div>
							</div>
							<div class="form-group">
								<label for="">Reaction Time</label>
								<input type="text" class="form-control" id="RT" placeholder="Reaction Time">
							</div>
							<div class="form-group">
								<label for="">60FT</label>
								<input type="text" class="form-control" id="60ft" placeholder="60FT">
							</div>
							<div class="form-group">
								<label for="">330FT</label>
								<input type="text" class="form-control" id="330ft" placeholder="330FT">
							</div>
							<div class="form-group">
								<label for="">660FT</label>
								<input type="text" class="form-control" id="660ft" placeholder="660FT">
							</div>
							<div class="form-group">
								<label for="">660FT MPH</label>
								<input type="text" class="form-control" id="660ft_mph" placeholder="660FT MPH">
							</div>

							<!-- Start 1/4 Mile Only Inputs -->
							<div v-if="quarterMile">
								<div class="form-group">
									<label for="">1000FT</label>
									<input type="text" class="form-control" id="1000ft" placeholder="1000FT">
								</div>
								<div class="form-group">
									<label for="">1320FT</label>
									<input type="text" class="form-control" id="1320ft" placeholder="1320FT">
								</div>
								<div class="form-group">
									<label for="">1320FT MPH</label>
									<input type="text" class="form-control" id="1320ft_mph" placeholder="1320FT MPH">
								</div>
							</div>
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingTwo">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          <i class="fa fa-sun-o"></i>Weather
				        </a>
				      </h4>
				    </div>
				    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
				      <div class="panel-body">
				      		<div class="form-group">
				      			<label>Track Temperature</label>
				      			<input class="form-control" id="trackTemp" placeholder="Track Temperature" name="trackTemp">
				      		</div>
				      		<div class="form-group">
				      			<label>Air Temperature</label>
				      			<input class="form-control" id="airTemp" placeholder="Air Temperature" name="airTemp">
				      		</div>	
				      		<div class="form-group">
				      			<label>Density Altitude</label>
				      			<input class="form-control" id="densityAltitude" placeholder="Density Altitude" name="densityAltitude">
				      		</div>	
				      		<div class="form-group">
				      			<label>Corrected Altitude</label>
				      			<input class="form-control" id="correctedAltitude" placeholder="Corrected Altitude" name="correctedAltitude">
				      		</div>	
				      		<div class="form-group">
				      			<label>Water Grains</label>
				      			<input class="form-control" id="waterGrains" placeholder="Water Grains" name="waterGrains">
				      		</div>	
				      		<div class="form-group">
				      			<label>Humidity</label>
				      			<input class="form-control" id="humidity" placeholder="Humidity" name="humidity">
				      		</div>	
				      		<div class="form-group">
				      			<label>Barometer</label>
				      			<input class="form-control" id="barometer" placeholder="Barometer" name="barometer">
				      		</div>	
				      		<div class="form-group">
				      			<label>Track Grip</label>
				      			<input class="form-control" id="trackGrip" placeholder="Track Grip" name="trackGrip">
				      		</div>		
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingThree">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				         	<i class="fa fa-wrench"></i>Tune-Up
				        </a>
				      </h4>
				    </div>
				    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
				      <div class="panel-body">
				      		<div class="form-group">
				      			<label>Launch RPM</label>
				      			<input class="form-control" id="launchRPM" placeholder="Launch RPM" name="launchRPM">
				      		</div>
				      		<div class="form-group">
				      			<label>2nd System Timer</label>
				      			<input class="form-control" id="NOS2Timer" placeholder="2nd System Timer" name="NOS2Timer">
				      		</div>	
				      		<div class="form-group">
				      			<label>3rd System Timer</label>
				      			<input class="form-control" id="NOS3Timer" placeholder="3rd System Timer" name="NOS3Timer">
				      		</div>	
				      		<div class="form-group">
				      			<label>4th System Timer</label>
				      			<input class="form-control" id="NOS4Timer" placeholder="4th System Timer" name="NOS4Timer">
				      		</div>	
				      		<div class="form-group">
				      			<label>Tire Pressure</label>
				      			<input class="form-control" id="tirePressure" placeholder="Tire Pressure" name="tirePressure">
				      		</div>	
				      		<div class="form-group">
				      			<label>Wheelie Bar Height</label>
				      			<input class="form-control" id="wheelieBar" placeholder="Wheelie Bar Height" name="wheelieBar">
				      		</div>	
				      		<div class="form-group">
				      			<label>1-2 Shift Time/RPM</label>
				      			<input class="form-control" id="shift1" placeholder="1-2 Shift Time/RPM" name="shift1">
				      		</div>	
				      		<div class="form-group">
				      			<label>2-3 Shift Time/RPM</label>
				      			<input class="form-control" id="shift2" placeholder="2-3 Shift Time/RPM" name="shift2">
				      		</div>
				      		<div class="form-group">
				      			<label>Lock-up Timer</label>
				      			<input class="form-control" id="lockup" placeholder="Lock-up Timer" name="lockup">
				      		</div>
				      		<div class="form-group">
				      			<label>Other Notes</label>
				      			<textarea class="form-control" id="otherNotes" placeholder="Other Notes" name="otherNotes"></textarea>
				      		</div>
				      </div>
				    </div>
				  </div>
				  <div class="panel panel-default">
				    <div class="panel-heading" role="tab" id="headingFour">
				      <h4 class="panel-title">
				        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				          <i class="fa fa-upload"></i>Files
				        </a>
				      </h4>
				    </div>
				    </form>
				    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFor">
				      <div class="panel-body">
				      	<form action="/" class="dropzone" method="POST">
				      		<input type="file" name="file" />
				      	</form>
				      </div>
				    </div>
				  </div>
				</div>
			<button id="addRun" type="submit" class="btn btn-primary">Add Run <i class="fa fa-arrow-right"></i></button>
			</form>
		</div>
	</div>
</div>
@endsection