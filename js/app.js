$(document).foundation();

function getTeamInfo(val){
	var xhr = new XMLHttpRequest();
	// var teamName = val;
	var url = 'getTeamInfo.php?teamName='+val;

	xhr.onreadystatechange = function(){
		if (xhr.readyState==4&&xhr.status==200) {
			response = xhr.responseText;
			document.getElementById('opponentInfo').innerHTML = response;	
			getGameHistory();
		//	$(document).foundation()
		};
	};

		xhr.open('GET', url, true);
		xhr.send();
	}

function getGameHistory(){
	var xhr = new XMLHttpRequest();
	var homeId = document.getElementById('teamId').innerHTML;
	var visitorId = document.getElementById('opponentIdNumber').innerHTML;
	var url = 'getGameHistory.php?homeTeamId='+homeId+'&visitorTeamId='+visitorId;

	xhr.onreadystatechange = function(){
		if (xhr.readyState==4&&xhr.status==200) {
			response = xhr.responseText;
			console.log(document.getElementById('opponentIdNumber').innerHTML);
			console.log(document.getElementById('teamId').innerHTML);

			document.getElementById('gameHistory').innerHTML = response;	
			//$(document).foundation()
		};
	};

		xhr.open('GET', url, true);
		xhr.send();

}

function getStatsFromDB(){
	var teamId = document.getElementById('teamId').innerHTML;
	var gameId = document.getElementById('gameId').innerHTML;
	console.log('getStatsFromDB()');
	var xhr = new XMLHttpRequest();
	var url = 'getStatsFromDB.php?teamId='+teamId+'&gameId='+gameId;

	xhr.onreadystatechange =  function(){
			if (xhr.readyState==4&&xhr.status==200) {
				console.log('success we got stats from DB');
				document.getElementById('getStatsFromDB').innerHTML=xhr.responseText;
				var scriptTags=homeTeamEvents.getElementsByTagName('getStatsFromDB');
				for(var n=0;n<scriptTags.length;n++){
					eval(scriptTags[n].innerHTML);
				}
				console.log(statsfromDB);
				console.log('gameId: '+gameId);
			};
		}
	xhr.open("GET", url, true);
	xhr.send();
}


function sendRoster(){
	var xhr = new XMLHttpRequest();
	var url = 'sendRoster.php';
	// var playerId = document.getElementById('playerId').value;
	var teamIdTag = document.getElementById('teamIdTag').value;
	var firstName = document.getElementById('firstName').value;
	var lastName = document.getElementById('lastName').value;
	var playerNumber = document.getElementById('playerNumber').value;
	var playerNotes = document.getElementById('playerNotes').value;
	var playerPosition = document.getElementById('playerPosition').value;
	var starter = document.getElementById('starter').value;
	var cacheControl = document.getElementById('cacheControl').value;

	var query="teamId="+teamIdTag+"&firstName="+firstName+"&lastName="+lastName+"&playerNumber="+playerNumber+"&playerNotes="+playerNotes+"&playerPosition="+playerPosition+"&starter="+starter+"&cacheControl="+cacheControl;
	xhr.open("POST", url, true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	// xhr.setHeader("Cache-Control", "no-cache, no-store, must-revalidate"); // HTTP 1.1.
	// xhr.setHeader("Pragma", "no-cache"); // HTTP 1.0.
	// xhr.setDateHeader("Expires", 0); // Proxies.
	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status==200){
			var returnData=xhr.responseText;
			//document.getElementById('resptxt').innerHTML=returnData;
			getHomeTeamList();
			getVisitorTeamList();

			console.log('roster send');
		}
	}
	xhr.send(query);
	document.getElementById('resptxt').innerHTML="AJAX!";
console.log("Sending The Roster adding a Player");
console.log('teamId '+teamIdTag);
document.getElementById('homeTeamList').innerHTML = '';
$('#teamIdTag').val('');
$('#firstName').val('');
$('#lastName').val('');	}

function updateRoster(){
	var xhr = new XMLHttpRequest();
	var url = 'updateRoster.php';
	var teamId = document.getElementById('teamIdTag').value;
	var playerId = document.getElementById('playerId').value;
	var firstName = document.getElementById('firstName').value;
	var lastName = document.getElementById('lastName').value;
	var playerNumber = document.getElementById('playerNumber').value;
	var playerNotes = document.getElementById('playerNotes').value;
	var playerPosition = document.getElementById('playerPosition').value;
	var starter = document.getElementById('starter').value;

	var query="teamId="+teamId+"&playerId="+playerId+"&firstName="+firstName+"&lastName="+lastName+"&playerNumber="+playerNumber+"&playerNotes="+playerNotes+"&playerPosition="+playerPosition+"&starter="+starter;
	xhr.open("POST", url, true);
	xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status==200){
			var returnData=xhr.responseText;
			document.getElementById('resptxt').innerHTML=returnData;
			getHomeTeamList();
			getVisitorTeamList();

		}
	}
	xhr.send(query);
	document.getElementById('resptxt').innerHTML="AJAX!";
console.log("Sending The Updted Roster information to Player");
console.log(teamId);
document.getElementById('homeTeamList').innerHTML = '';
$('#teamIdTag').val('');
$('#firstName').val('');
$('#lastName').val('');
	}

function getHomeTeamList(){
	console.log("getHomeTeamList();");
	var xhr = new XMLHttpRequest();
	var url = 'getHomeTeam.php';
	var teamId = document.getElementById('teamId').innerHTML;
	var visitorName = document.getElementById('opponentName').innerHTML;
	console.log(teamId+' '+visitorName);
	var query = "?teamId="+teamId;
	xhr.onreadystatechange=function(){
		if(xhr.readyState == 4 && xhr.status==200){
			var returnData=xhr.responseText;
			document.getElementById('homeTeamList').innerHTML=returnData;
		}
	}
	xhr.open('GET', url+query, true);
	xhr.send();
}

function getVisitorTeamList(){
	console.log("getVisitorTeamList();");
	var xhr = new XMLHttpRequest();
	var url = 'getVisitorTeam.php';
	var opponentId = document.getElementById('opponentId').innerHTML;
	var opponentName = document.getElementById('opponentName').innerHTML;
	console.log('opponentId '+opponentId+' and opponentName '+opponentName);
	var query = "?opponentId="+opponentId;
	xhr.onreadystatechange=function(){
		if(xhr.readyState == 4 && xhr.status==200){
			
			document.getElementById('visitorTeamList').innerHTML=xhr.responseText;
			// getVisitorTeamList();
		}
	}
	xhr.open('GET', url+query, true);
	xhr.send();
}


function newGame(){
	// this.event.preventDefault();
	var xhr = new XMLHttpRequest();
	var url = 'newGame.php';
	var homeId = document.getElementById('teamId').innerHTML;
	var visitorId = document.getElementById('opponentIdNumber').innerHTML;
	var dateString = document.getElementById('dateString').innerHTML;
	var homeName = document.getElementById('homeName').innerHTML;
	var visitorName = document.getElementById('visitorName').innerHTML;
	var query = "?homeTeamId="+homeId+"&visitorTeamId="+visitorId+"&homeTeamName="+homeName+"&visitorTeamName="+visitorName+"&dateString="+dateString;


	xhr.onreadystatechange = function(){
		if(xhr.readyState == 4 && xhr.status==200){
			 location.reload();
			console.log("NewGeame "+visitorId);
			getHomeTeamList();
			getVisitorTeamList();
		};
	};

	xhr.open('GET', url+query, true);
	xhr.send();

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
	var time = document.getElementById('gameTime').innerHTML;
	var teamId = document.getElementById('teamId').innerHTML;
	var shotId = shotList.length;
	// var shotId = document.getElementById('shotId').value;
	var eventCoordsX = document.getElementById('eventCoordsX').value;
	var eventCoordsY = document.getElementById('eventCoordsY').value;
	var playerId = document.getElementById('playerId').value;
	var gameId = document.getElementById('gameId').innerHTML;
	var shotType = shotList[shotList.length-1];
	if (shotType == 'miss') {
		shotType = 0;
	}else if(shotType == 'freethrow'){
		shotType = 1;
	}else if(shotType == 'made'){
		shotType = 2;
	}else if(shotType == 'three'){
		shotType = 3;
	}else if(shotType == 'block'){
		shotType = 4;
	}else if(shotType == 'steal'){
		shotType = 5;
	}else if(shotType == 'assist'){
		shotType = 6;
	}else if(shotType == 'rebound'){
		shotType = 7;
	}else if(shotType == 'turnover'){
		shotType = 8;
	}else if(shotType == 'foul'){
		shotType = 9;
	}else if(shotType == 'travel'){
		shotType = 10;
	}else if(shotType == 'freethrow'){
		shotType = 11;
	}



	//console.log('SEND IT! '+shotList[$eventCount-1]);
	console.log('COUNT IT!! '+shotType);
	var query = "shotId="+shotId+"&eventCoordsX="+eventCoordsX+"&eventCoordsY="+eventCoordsY+"&playerId="+playerId+"&shotType="+shotType+"&teamId="+teamId+"&time="+time+"&player="+player+"&gameId="+gameId;

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

function getInfoForm(event){
	var target = event.target.getAttribute('id');
	console.log('the target getInfoForm is: '+target);
	var xhr = new XMLHttpRequest();
	var url = 'getInfoForm.php?player='+target;
	xhr.onreadystatechange =  function(){
		if (xhr.readyState==4&&xhr.status==200) {
			var response = (xhr.responseText);
			response = response.split(',');
			console.log('the whole part of this array is '+response)
			$('#firstName').val(response[1]);
			$('#lastName').val(response[6]);
			$('#playerNumber').val(response[3]);
			$('#playerNotes').val(response[4]);
			$('#playerPosition').val(response[2]);
			$('#playerId').val(response[0])




		}
	}
	xhr.open("GET", url, true);
	xhr.send();
}

function deletePlayer(event){
	var target = event.target.getAttribute('id');
	console.log('the target to be deleted is: '+target);
	var xhr = new XMLHttpRequest();
	var url = 'deletePlayer.php?id='+target+'&t='+Date();
	xhr.onreadystatechange =  function(){
			if (xhr.readyState==4&&xhr.status==200) {
				var resp = xhr.responseText;
				console.log(resp);
				document.getElementById('resptxt').innerHTML = resp;
				getHomeTeamList();
				getVisitorTeamList();


			};
		}
	xhr.open("GET", url, true);
	xhr.send();
}




function mainStats(event){
	
	// homeTeamList = window.document.getElementById('homeTeamList');
		// homeTeamList.addEventListener('click', showStats, false);
		var target = event.target.getAttribute('id');
		var gameId=document.getElementById('gameId').innerHTML;
		console.log('the target mainStat is: '+target);
		var xhr = new XMLHttpRequest();
		var url = 'mainStats.php?player='+target+'&t='+Date()+'&gameId='+gameId;
		xhr.onreadystatechange =  function(){
				if (xhr.readyState==4&&xhr.status==200) {
					var resp = xhr.responseText;
					console.log(resp);
					document.getElementById('mainStats').innerHTML = resp;
							getHomeTeamEvents();

				};
			}
		xhr.open("GET", url, true);
		xhr.send();
		getHomeTeamEvents();
}

function getStats(event){
	console.log('getStats(event');

	// homeTeamList = window.document.getElementById('homeTeamList');
		// homeTeamList.addEventListener('click', showStats, false);
		var target = event.target.getAttribute('id');
		var gameId = document.getElementById('gameId').innerHTML;
		console.log('the target is: '+target);
		var xhr = new XMLHttpRequest();
		var url = 'getStats.php?player='+target+'&gameId='+gameId;

		xhr.onreadystatechange =  function(){
				if (xhr.readyState==4&&xhr.status==200) {
					document.getElementById('getStats').innerHTML = xhr.responseText;
				};
			}
		xhr.open("GET", url, true);
		xhr.send();
}


function getHomeTeamEvents(){
	var teamId = document.getElementById('teamId').innerHTML;
	var gameId = document.getElementById('gameId').innerHTML;
	console.log('getHomeTeamEvents()');
	var xhr = new XMLHttpRequest();
	var url = 'getHomeTeamEvents.php?teamId='+teamId+'&gameId='+gameId;

	xhr.onreadystatechange =  function(){
			if (xhr.readyState==4&&xhr.status==200) {
				var homeTeamEvents=document.getElementById('homeTeamEvents');
				homeTeamEvents.innerHTML = xhr.responseText;
				var scriptTags=homeTeamEvents.getElementsByTagName('script');
				// for(var n=0;n<scriptTags.length;n++){
				// 	eval(scriptTags[n].innerHTML);
				// }
				// console.log('gameId: '+gameId);
			};
		}
	xhr.open("GET", url, true);
	xhr.send();
}


	shotList = [];
	shotLocX = [];
	shotLocY = [];
	if (shotList.length==0) {
		getStatsFromDB();
	};


////////////////////////////////////////////////////////

function $event(fi, color, message, type){
	 targetPlayer();
var icon = document.createElement("i");
var span = document.createElement("span");
icon.setAttribute('class', fi);
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
icon.style.color=color;
span.appendChild(icon);
document.body.appendChild(span);
shotList.push(type);
shotLocX.push(posx);
shotLocY.push(posy);
icon.style.position = 'absolute';
icon.style.top = (posy)+'px';
icon.style.left = (posx)+'px';
span.style.textShadow = 18+'px'+18+'px'+18+'px'+'black';
shotbox = window.document.getElementById('shotbox');
console.log(message);
console.log('shotLocX array: '+shotLocX);
window.document.getElementById('eventCoordsX').value=posx;
window.document.getElementById('eventCoordsY').value=posy;
//window.document.getElementById('shotType').value=type;
console.log('shotLocY array: '+shotLocY);

	shotbox.style.display = 'none';
}

function pushShotList(type){
	shotList.push(type);
	console.log("pushShotList();");

}

/////////////////////////////////////////////////////////

function cancle(){
shotbox = window.document.getElementById('shotbox');
console.log('cancle was clicked');
console.log('shotList array: '+shotList);
// console.log('eventCount array: '+$eventCount);


			shotbox.style.display = 'none';
	}
//find target player to alter stats
function targetPlayer(){
	alert("Select a Player");
	function clickOnPlayer(e){
		e.preventDefault()
		// $eventCount++;

		console.log('target playerId: '+e.target.getAttribute('id'));
		console.log('target player: '+e.target.getAttribute('name'));
		//console.log("This is a: "+shotList[$eventCount-1]);
		playerId = e.target.getAttribute('id');
		player = e.target.getAttribute('name');
		window.document.getElementById('homeTeamList').removeEventListener('click', clickOnPlayer, false);
		window.document.getElementById('visitorTeamList').removeEventListener('click', clickOnPlayer, false);
		window.document.getElementById('playerId').value = playerId;
		window.document.getElementById('player').value = player;
		$submitEvent=window.document.getElementById('submitEvent');
		$submitEvent.click();
	}
	window.document.getElementById('homeTeamList').addEventListener('click', clickOnPlayer, false);
	window.document.getElementById('visitorTeamList').addEventListener('click', clickOnPlayer, false);
	window.document.getElementById('visitorTeamList').removeEventListener('click', getStats, false);
	window.document.getElementById('homeTeamList').removeEventListener('click', getStats, false);
//console.log($eventCount +' event count from target player finction');
}

//logs events, and initiates events records
//var $eventCount=shotList.length-1;
	 court = window.document.getElementById('court');
	function hi(e){
		if (shotbox.style.display != 'block') {
			getHomeTeamEvents();
			//console.log("This is event number before "+$eventCount);
			//console.log("This is event number after "+$eventCount);

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


minusMinuteBtn=window.document.getElementById('minusMinuteBtn');
plusMinuteBtn=window.document.getElementById('plusMinuteBtn');
minusSecondBtn=window.document.getElementById('minusSecondBtn');
plusSecondBtn=window.document.getElementById('plusSecondBtn');
rewindClockBtn=window.document.getElementById('rewindClockBtn');
fastForwardClockBtn=window.document.getElementById('fastForwardClockBtn');
playClockBtn=window.document.getElementById('playClockBtn');
stopClockBtn=window.document.getElementById('stopClockBtn');
pauseClockBtn=window.document.getElementById('pauseClockBtn');
startGameBtn=window.document.getElementById('startGameBtn');


	// document.addEventListener('mousemove', showCoords, false);		
	court.addEventListener('click', hi, false);
	// startGameBtn.addEventListener('click', getHomeTeamList, false);
	  minusMinuteBtn.addEventListener('click', minusMinute, false);
	  plusMinuteBtn.addEventListener('click', plusMinute, false);
	  minusSecondBtn.addEventListener('click', minusSecond, false);
	  plusSecondBtn.addEventListener('click', plusSecond, false);
	  rewindClockBtn.addEventListener('click', rewindClock, false);
	  playClockBtn.addEventListener('click', playClock, false);
	  // stopClockBtn.addEventListener('click', stopClock, false);
	  // pauseClockBtn.addEventListener('click', pauseClock, false);
	  fastForwardClockBtn.addEventListener('click', fastForwardClock, false);
	
	
