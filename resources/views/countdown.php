<html class=""><head><script src="//assets.codepen.io/assets/editor/live/console_runner-d0a557e5cb67f9cd9bbb9673355c7e8e.js"></script><script src="//assets.codepen.io/assets/editor/live/events_runner-21174b4c7273cfddc124acb0876792e0.js"></script><script src="//assets.codepen.io/assets/editor/live/css_live_reload_init-7618a0de08795409d8f6c9ef6805f7b2.js"></script><meta charset="UTF-8"><meta name="robots" content="noindex"><link rel="canonical" href="http://codepen.io/SitePoint/pen/MwNPVq">


<style class="cp-pen-styles">body{
	text-align: center;
	background: #000000;
  font-family: sans-serif;
  font-weight: 100;
}

h1{
  color: #396;
  font-weight: 100;
  font-size: 40px;
  margin: 40px 0px 20px;
}

#clockdiv{
	font-family: sans-serif;
	color: #fff;
	display: inline-block;
	font-weight: 100;
	text-align: center;
	font-size: 30px;
}

#clockdiv > div{
	padding: 10px;
	border-radius: 3px;
	background: #000000;
	display: inline-block;
}

#clockdiv div > span{
	padding: 15px;
	border-radius: 3px;
	background: #00816A;
	display: inline-block;
}

.smalltext{
	padding-top: 5px;
	font-size: 16px;
}</style></head><body>
<h1>Esencia 2016</h1>
<div id="clockdiv">
  <div>
    <span class="days">14</span>
    <div class="smalltext">D&iacute;as</div>
  </div>
  <div>
    <span class="hours">23</span>
    <div class="smalltext">Horas</div>
  </div>
  <div>
    <span class="minutes">59</span>
    <div class="smalltext">Minutos</div>
  </div>
  <div>
    <span class="seconds">08</span>
    <div class="smalltext">Segundos</div>
  </div>
</div>

<script src="//assets.codepen.io/assets/common/stopExecutionOnTimeout-02ca87916b03e6c52eed864acfc0a31a.js"></script>
<script>function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  var days = Math.floor(t / (1000 * 60 * 60 * 24));
  return {
    'total': t,
    'days': days,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var daysSpan = clock.querySelector('.days');
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);

    daysSpan.innerHTML = t.days;
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

    if (t.total <= 0) {
      clearInterval(timeinterval);
    }
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

var deadline = 'October 29 2016 09:00:00 GMT-0400';
initializeClock('clockdiv', deadline);
//# sourceURL=pen.js
</script>
</body></html>
