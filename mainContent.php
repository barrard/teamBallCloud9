<div class='row'>
	<!-- AJAX and PHP generated homeTeamList -->
	 <ul id='homeTeamList' class='vertical menu columns small-2' data-accordion-menu>

	 </ul>
	<div class="small-8 columns">
		<img id="court" src="img/BasketballCourt.png" alt="">
	</div>
	<ul id='visitorTeam' class="vertical menu columns small-2" data-accordion-menu>
		
	  <li>
	    <a class='button'href="#">Player Name #</a>
	    <ul class="menu vertical">
	      <li><div class="callout">Shots made <br> Shots missed <br> Points: 1  Fouls:2  Rebound:3  Assists:4</div></li>
	    </ul>
	  </li>
	  
	  <li>
	    <a class='button'href="#">Player Name #</a>
	    <ul class="menu vertical nested">
	      <li><div class="callout">Shots made <br> Shots missed <br> Points: 1  Fouls:2  Rebound:3  Assists:4</div></li>
	    </ul>
	  </li>
	  <li>
	    <a class='button'href="#">Player Name #</a>
	    <ul class="menu vertical nested">
	      <li><div class="callout">Shots made <br> Shots missed <br> Points: 1  Fouls:2  Rebound:3  Assists:4</div></li>
	    </ul>
	  </li>
	</ul>
</div>

<a href="#" data-reveal-id="myModal">Click Me For A Modal</a>

<div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
  <h2 id="modalTitle">Awesome. I have it.</h2>
  <p class="lead">Your couch.  It is mine.</p>
  <p>I'm a cool paragraph that lives inside of an even cooler modal. Wins!</p>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

<!-- Event Pop-up -->
<div class="row">
  <div class="columns small-4">
    <div class='infobox' id='shotbox'>
    	<!-- Made shot button -->
    	<div class="row">
    		made miss travel block
    		<div class="columns small-12">
		<button onclick='made()'><span name='shotMade'class='shotboxBtn badge success'><i class='fi-check'></i></span></button>
		<!-- missed shot button -->
		<button onclick='miss()'><span name='shotMiss'class='shotboxBtn badge alert'><i class='fi-x'></i></span></button>
		<!-- cancle button -->
		<button onclick='cancel()'><span id='cancle'class='shotboxBtn badge secondary'><i class='fa fa-undo'></i></span></button>
		<!-- Traveling button -->
		<span id=''class='shotboxBtn badge warning'><i id=''class='glyphicon glyphicon-send'></i></span>
		<!-- Shot Block -->
		<span id=''class='shotboxBtn badge warning'><i id=''class='fa fa-hand-paper-o'></i></span>
		<!-- assists button -->
		<span id=''class='shotboxBtn badge'><i id='assist'class='fi-torsos'></i></span>	
		<!-- turnover -->
		<span id=''class='shotboxBtn badge warning'><i id='assist'class='fa fa-refresh'></i></span>
		<!-- foul -->
		<span id=''class='shotboxBtn badge warning'><i id=''class='fa fa-warning'></i></span>

		<!-- flash -->
		<span id=''class='shotboxBtn badge'><i id=''class='glyphicon glyphicon-flash'></i></span>
		<!-- flash -->
		<span id=''class='shotboxBtn badge'><i id=''class='fa fa-sort-amount-asc'></i></span>
		<!-- shield -->
		<span id=''class='shotboxBtn badge'><i id=''class='fa fa-shield'></i></span>
		</div>
		</div>
	</div>
  </div>
</div>
<div class="row">
	<div class="text-center small-12 small-centered columns">
		<div class="row">

		  <div id="gameClock"class=" small-centered columns">
		  	<span class='clockButtons badge primary' id='minusMinuteBtn'><i class='fi-minus'></i></span><span id='plusMinuteBtn'class='clockButtons badge primary'><i class='fi-plus'></i></span><span id='gameTime'>00:02</span><span id='minusSecondBtn'class='clockButtons badge primary'><i class='fi-minus'></i></span><span id='plusSecondBtn' class='clockButtons badge primary'><i class='fi-plus'></i></span>
		  </div>
		</div>
	</div>
</div>
<div class="row">
  <div class="text-center small-8 small-centered columns"><span id='rewindClockBtn'class='playButtons badge primary'><i class='fi-rewind'></i></span><span id='playClockBtn' class='playButtons badge success'><i class='fi-play'></i></span><span id='stopClockBtn' class='playButtons badge alert'><i class='fi-stop'></i></span><span id='pauseClockBtn'class='playButtons badge secondary'><i class='fi-pause'></i></span><span id='fastForwardClockBtn'class='playButtons badge primary'><i class='fi-fast-forward'></i></span></div>
</div>
		<input id='shotId'type="hidden" name='shotId' value=''>
		<input id='eventCoordsX'type="hidden" name='eventCoordsX' value=''>
		<input id='eventCoordsY'type="hidden" name='eventCoordsY' value=''>
		<input id='playerId'type="hidden" name='playerId' value=''>
		<input id='teamId' type="hidden" name='teamId'>

		<button class='hidden'onClick='javascript:sendStats();'id='submitEvent'name='eventSubmit'>Submit</button>
	<div id='showStats'></div>


<div data-alert class="alert-box success">
  <div class=" alert">HELLO!!! !!!!!!!!!!!!!!!!!!!!  THIS IS THE ALERT!</div>
  <a href="#" class="alert">&times;</a>
</div>

<div class="alert-box success" style="display: block;" data-alert="">Success! Your message has been sent.
 <a class="close" href="#">×</a></div>
<div id='innerForm'></div>

<div data-alert class="alert-box">
  This gives you a standard alert box
  <a href="" class="close">×</a>
</div>