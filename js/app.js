$(document).foundation();

function sendRoster(){
	var xhr = new XMLHttpRequest();
	var url = 'sendRoster.php';
	var teamId = document.getElementById('teamIdTag').value;
	var firstName = document.getElementById('firstName').value;
	var lastName = document.getElementById('lastName').value;
	var playerNumber = document.getElementById('playerNumber').value;
	var playerNotes = document.getElementById('playerNotes').value;
	var playerPosition = document.getElementById('playerPosition').value;
	var starter = document.getElementById('starter').value;

	var query="teamId="+teamId+"&firstName="+firstName+"&lastName="+lastName+"&playerNumber="+playerNumber+"&playerNotes="+playerNotes+"&playerPosition="+playerPosition+"&starter="+starter;
	xhr.open("POST", url, true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status==200){
			var returnData=xhr.responseText;
			document.getElementById('resptxt').innerHTML=returnData;
			getHomeTeamList();
		}
	}
	xhr.send(query);
	document.getElementById('resptxt').innerHTML="AJAX!";
console.log("Sending The Roster adding a Player");
console.log(teamId);
	}

function rosterForm(){
	var xhr = new XMLHttpRequest();

	xhr.onload = function(){
		if (xhr.status == 200) {
			document.getElementById('innerForm').innerHTML = xhr.responseText;	
		};
	};

	xhr.open('GET', 'rosterForm.php', true);
	xhr.send(null);
}

function getHomeTeamList(event){
	this.event.preventDefault();
	var xhr = new XMLHttpRequest();

	xhr.onload = function(){
		if (xhr.status == 200) {
			document.getElementById('homeTeamList').innerHTML = xhr.responseText;	
			$(document).foundation()
		};
	};

	xhr.open('GET', 'getHomeTeam.php', true);
	xhr.send(null);
}



function minusMinute(){
	minusMinuteBtn=document.getElementById('minusMinuteBtn');
	minusMinuteBtn.addEventListener('click', function(){
		clearInterval(timer)},false);
	time = window.document.getElementById('gameTime').innerHTML;
	console.log("length is "+time.length);
	var min = time.slice(0,-2);
	var sec = time.slice(2);
	min = parseInt(min);
	if (min!=0) {
	min=min-1;
}
	if (min<10 && min>=0) {
		min = "0"+min;
}
	console.log("Time is "+time);
	console.log("Minutes are "+min);
	console.log("Seconds are "+sec);
	document.getElementById('gameTime').innerHTML = min+sec;
}
function plusMinute(){
	plusMinuteBtn=document.getElementById('plusMinuteBtn');
	plusMinuteBtn.addEventListener('click', function(){
		clearInterval(timer)},false);
		time = window.document.getElementById('gameTime').innerHTML;
		console.log("length is "+time.length);
		var min = time.slice(0,-2);
		var sec = time.slice(2);
		min = parseInt(min);
		min=min+1;

		if (min<10) {
			min = "0"+min;

	}
		console.log("Time is "+time);
		console.log("Minutes are "+min);
		console.log("Seconds are "+sec);
		document.getElementById('gameTime').innerHTML = min+sec;
	}

function minusSecond(){
	minusSecondBtn=document.getElementById('minusSecondBtn');
	minusSecondBtn.addEventListener('click', function(){
		clearInterval(timer)},false);
		time = window.document.getElementById('gameTime').innerHTML;
		console.log("length is "+time.length);
		// if (time.length ==5) {
		var min = time.slice(0,-2);
		var sec = time.slice(-2);
		sec=parseInt(sec);

			sec=sec-1;
		
			if (sec<0) {
				sec=59;
			}else if(sec<10){
				sec= "0"+sec;
			}
		console.log("Time is "+time);
		console.log("Seconds are "+sec);
		document.getElementById('gameTime').innerHTML = min+sec;
	}
function plusSecond(){
	plusSecondBtn=document.getElementById('plusSecondBtn');
	plusSecondBtn.addEventListener('click', function(){
		clearInterval(timer)},false);
		time = window.document.getElementById('gameTime').innerHTML;
		console.log("length is "+time.length);
		var min = time.slice(0,-2);
		var sec = time.slice(-2);
		sec=parseInt(sec);
		if (sec==59) {
			sec=-1;
		};
			sec=sec+1;
		
			 if(sec<10){
				sec= "0"+sec;
			}
		console.log("Time is "+time);
		console.log("Seconds are "+sec);
		document.getElementById('gameTime').innerHTML = min+sec;
	}
function rewindClock(){
		time = window.document.getElementById('gameTime').innerHTML;
		console.log("length is "+time.length);
		var min = time.slice(0,-2);
		var sec = time.slice(-2);
		sec=parseInt(sec);
		if(sec!=-1){
			sec=sec-10;
		}
			if (sec<0) {
				sec=59;
			}else if(sec<10){
				sec= "0"+sec;
			}
		console.log("Time is "+time);
		console.log("Seconds are "+sec);
		document.getElementById('gameTime').innerHTML = min+sec;
	}
function fastForwardClock(){
		time = window.document.getElementById('gameTime').innerHTML;
		console.log("length is "+time.length);
		var min = time.slice(0,-2);
		var sec = time.slice(-2);
		sec=parseInt(sec);
		if (sec>=59) {
			sec=59;
			sec=-1;
		};
			sec=sec+10;
		if (sec>=60){
			sec=5;
		}
			 if(sec<10){
				sec= "0"+sec;
			}
		console.log("Time is "+time);
		console.log("Seconds are "+sec);
		document.getElementById('gameTime').innerHTML = min+sec;
	}
	function playClock(){
		timer = setInterval(function(){
			time = window.document.getElementById('gameTime').innerHTML;
			console.log("length is "+time.length);
			// if (time.length ==5) {
			var min = time.slice(0,-3);
			var sec = time.slice(-2);
			sec=parseInt(sec);
			min=parseInt(min);

				sec=sec-1;
			
				if (min<10||min>=0) {
					min="0"+min;
				}
				if(sec<10&&sec>=0){
					sec= "0"+sec;
				}
	
				if (sec<0&&min!=0) {
					sec=59;
					if(min!=0){
						min=min-1;
						if(min==0){
							min="0"+min;
						}
					}
				}
				
			
					if(min==0&&sec==0)
			clearInterval(timer);
			console.log("Time is "+time);
			console.log("Seconds are "+sec);
			console.log("minutes are "+min);
			document.getElementById('gameTime').innerHTML = min+":"+sec;
			},1000);
		stopClockBtn=document.getElementById('stopClockBtn');
		stopClockBtn.addEventListener('click', function(){
			clearInterval(timer)},false);
		pauseClockBtn=document.getElementById('pauseClockBtn');
		pauseClockBtn.addEventListener('click', function(){
			clearInterval(timer)},false);

		}


function sendStats(){
	var xhr = new XMLHttpRequest();
	var url = 'sendStats.php';
	var shotId = document.getElementById('shotId').value;
	var eventCoordsX = document.getElementById('eventCoordsX').value;
	var eventCoordsY = document.getElementById('eventCoordsY').value;
	var playerId = document.getElementById('playerId').value;
	var shotType = shotList[$eventCount-1];
	if (shotType == 'miss') {
		shotType = 0;
	}else{
		shotType = 1;
	}
	console.log('SEND IT! '+shotList[$eventCount-1]);
	console.log('COUNT IT!! '+shotType);
	var query = "shotId="+shotId+"&eventCoordsX="+eventCoordsX+"&eventCoordsY="+eventCoordsY+"&playerId="+playerId+"&shotType="+shotType;

	xhr.open("POST", url, true);
xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhr.onreadystatechange = function(){
	if(xhr.readyState == 4 && xhr.status==200){
		var returnData=xhr.responseText;
		document.getElementById('resptxt').innerHTML=returnData;
	}
}
xhr.send(query);
document.getElementById('resptxt').innerHTML="AJAX!";

}

function showStats(e){
	
	homeTeamList = window.document.getElementById('homeTeamList');
		homeTeamList.addEventListener('click', showStats, false);
		var target = e.target.getAttribute('id');
		console.log('the target is: '+target);
		$('#test').html(target);
		var xhr = new XMLHttpRequest();
		var url = 'getStats.php?player='+target;
		xhr.onreadystatechange =  function(){
				if (xhr.readyState==4&&xhr.status==200) {
					document.getElementById('showStats').innerHTML = xhr.responseText;
				};
			}
		xhr.open("GET", url, true);
		xhr.send();
}


	shotList = [];
	shotLocX = [];
	shotLocY = [];

	function made(){
		targetPlayer();

		var icon = document.createElement("i");
		icon.setAttribute('class', 'fi-check courtMarkers');
		// icon.setAttribute('alt', 'Shot made');
		// icon.setAttribute('height', '10px');
		// icon.setAttribute('width', '10px');
		shotbox = window.document.getElementById('shotbox');
		posy = shotbox.style.top;
		posy = posy.slice(0, -2);
		posy = parseInt(posy);
		posy = posy + 45;
		posx = shotbox.style.left;
		posx = posx.slice(0, -2);
		posx = parseInt(posx);
		posx = posx + 45;
		icon.style.position = 'absolute';
		icon.style.top = posy +'px'; 
		icon.style.left = posx +'px';
		icon.style.color = 'green';
		console.log('the x xoord is: '+posx);
		console.log('the y coord is: '+posy);
		icon.style.zIndex=20;
		document.body.appendChild(icon);
		shotList.push('made');
		shotLocX.push(posx);
		shotLocY.push(posy);
		shotbox = window.document.getElementById('shotbox');
		console.log('cancle was clicked');
		console.log('shotList array: '+shotList);
		console.log('shotLocX array? '+shotLocX);
		window.document.getElementById('eventCoordsX').value=posx;
		window.document.getElementById('eventCoordsY').value=posy;

		console.log('shotLocY array? '+shotLocY);


			shotbox.style.display = 'none';
	}
		function miss(){
			 targetPlayer();
		var icon = document.createElement("i");
		var span = document.createElement("span");
		icon.setAttribute('class', 'fi-x');
		span.setAttribute('class', 'courtMarkers');
		// miss.setAttribute('alt', 'Shot made');
		// icon.setAttribute('height', '10');
		// icon.setAttribute('width', '10');
		shotbox = window.document.getElementById('shotbox');
		posy = shotbox.style.top;
		posy = posy.slice(0, -2);
		posy = parseInt(posy);
		posy = posy + 40;
		posx = shotbox.style.left;
		posx = posx.slice(0, -2);
		posx = parseInt(posx);
		posx = posx + 40;

		icon.style.zIndex=20;
		icon.style.color='red';
		span.appendChild(icon);
		document.body.appendChild(span);
		shotList.push('miss');
		shotLocX.push(posx);
		shotLocY.push(posy);
		icon.style.position = 'absolute';
		icon.style.top = (posy)+'px';
		icon.style.left = (posx)+'px';
		span.style.textShadow = 18+'px'+18+'px'+18+'px'+'black';
		shotbox = window.document.getElementById('shotbox');
		console.log('X was clicked for a missed shot');
		console.log('shotList Array: '+shotList);
		console.log('shotLocX array: '+shotLocX);
		window.document.getElementById('eventCoordsX').value=posx;
		window.document.getElementById('eventCoordsY').value=posy;
		console.log('shotLocY array: '+shotLocY);

			shotbox.style.display = 'none';
	}
		function cancel(){
		shotbox = window.document.getElementById('shotbox');
		$eventCount--;
		console.log('cancle was clicked');
		console.log('shotList array: '+shotList);


			shotbox.style.display = 'none';
	}
//find target player to alter stats
function targetPlayer(){
	alert("Select a Player");
	function clickOnPlayer(e){
		console.log('target player: '+e.target.innerHTML);
		console.log("This is a: "+shotList[$eventCount]);
		target = e.target.getAttribute('id');
		window.document.getElementById('homeTeamList').removeEventListener('click', clickOnPlayer, false);
		window.document.getElementById('visitorTeam').removeEventListener('click', clickOnPlayer, false);
		window.document.getElementById('playerId').value = target;
		$submitEvent=window.document.getElementById('submitEvent');
		$submitEvent.click();
	}
	window.document.getElementById('homeTeamList').addEventListener('click', clickOnPlayer, false);
	window.document.getElementById('visitorTeam').addEventListener('click', clickOnPlayer, false);
	window.document.getElementById('visitorTeam').removeEventListener('click', showStats, false);
	window.document.getElementById('homeTeamList').removeEventListener('click', showStats, false);
console.log($eventCount +' event count from target player finction');
}

//logs events, and initiates events records
$eventCount=0;
	 court = window.document.getElementById('court');
	function hi(e){
		if (shotbox.style.display != 'block') {
			$eventCount++;
			console.log($eventCount);
			window.document.getElementById('shotId').value=$eventCount;
		console.log('aloha');
		var pX = window.innerWidth/5;//resize the popup
		var pY = window.innerWidth/5;//resize the popup
		var posx = e.layerX;
		var posy = e.layerY;
		shotbox = window.document.getElementById('shotbox');
		shotbox.style.display = 'block';
		shotbox.style.height = 200+'px';
		shotbox.style.width = 200+'px';
		shotbox.style.position = 'absolute';
		shotbox.style.top = (posy-50)+'px';
		shotbox.style.left = (posx-50)+'px';
		shotbox.style.zIndex = 100;
		};
	}



// function showCoords(e) {
//     var cX = e.clientX;
//     var sX = e.screenX;
//     var pX = e.pageX;
//     var pY = e.pageY;
//     var lX = e.layerX;
//     var lY = e.layerY;
//     var cY = e.clientY;
//     var sY = e.screenY;
//     var ox = e.offsetX;//set location of popup
// 	var oy = e.offsetY;//set location of popup

//     var coords1 = "cX: " + cX + "<br> Y c:" + cY;
//     var coords0 = "oX: " + ox + "<br> Y o:" + oy;
//     var coords2 = "screen - X: " + sX + ", Y s: " + sY;
//     var coords3 = "page - X: " + pX + ", Y p: " + pY;
//     var coords4 = "layer - X: " + lX + ", l p: " + lY;
//     document.getElementById("demo").innerHTML = coords1 + "<br>" + coords2+ "<br>" +coords3 + "<br>" + coords4 + "<br>" + coords0;
// }
minusMinuteBtn=window.document.getElementById('minusMinuteBtn');
plusMinuteBtn=window.document.getElementById('plusMinuteBtn');
minusSecondBtn=window.document.getElementById('minusSecondBtn');
plusSecondBtn=window.document.getElementById('plusSecondBtn');
rewindClockBtn=window.document.getElementById('rewindClockBtn');
fastForwardClockBtn=window.document.getElementById('fastForwardClockBtn');
playClockBtn=window.document.getElementById('playClockBtn');
stopClockBtn=window.document.getElementById('stopClockBtn');
pauseClockBtn=window.document.getElementById('pauseClockBtn');
rosterBtn=window.document.getElementById('rosterBtn');
startGameBtn=window.document.getElementById('startGameBtn');


	// document.addEventListener('mousemove', showCoords, false);		
	court.addEventListener('click', hi, false);
	startGameBtn.addEventListener('touch', getHomeTeamList, false);
	rosterBtn.addEventListener('click', rosterForm, false);

	  minusMinuteBtn.addEventListener('click', minusMinute, false);
	  plusMinuteBtn.addEventListener('click', plusMinute, false);
	  minusSecondBtn.addEventListener('click', minusSecond, false);
	  plusSecondBtn.addEventListener('click', plusSecond, false);
	  rewindClockBtn.addEventListener('click', rewindClock, false);
	  playClockBtn.addEventListener('click', playClock, false);
	  // stopClockBtn.addEventListener('click', stopClock, false);
	  // pauseClockBtn.addEventListener('click', pauseClock, false);
	  fastForwardClockBtn.addEventListener('click', fastForwardClock, false);
	
	
