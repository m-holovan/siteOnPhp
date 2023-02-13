function deltaLinear(progress){
	return progress;
}
function deltaAccel(progress){
	return Math.pow(progress,2);
}
function deltaAccelDown(progress){
	return (1 - deltaAccel(1 - progress));
}
function deltaBounce(progress, x){
	return Math.pow(2,10*(progress-1)) * Math.cos(20 * progress * Math.PI * x / 3);
}

function runAnimationBase(objId, mode){
	var element = document.getElementById(objId);
	var from = -160; // start Y
	var to = 0; // end Y
	var duration = 500;
	var fps = 100;
	var fps_tick = (1000 / fps);
	var start = new Date().getTime(); //start`s time

	setTimeout(function(){
		var now = (new Date().getTime()) - start;

		var progress = now / duration;

		if(progress > 1){
			progress = 1;
		}

		var delta = deltaLinear(progress);
		if(mode == "easeIn")
			delta = deltaAccel(progress);
		else if(mode == "easeOut")
			delta = deltaAccel(progress);
		else if(mode == "bounce")
			delta = deltaBounce(progress,0.5);
		var result = (to - from) * delta + from;

		element.style.marginTop = result + "px";
		if(progress < 1){
			setTimeout(arguments.callee, fps_tick);
		}
	}, 10);
}

function runAnim(objId){
	runAnimationBase(objId, "linear");
}