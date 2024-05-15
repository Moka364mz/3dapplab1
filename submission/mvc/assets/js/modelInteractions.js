
function cokeScene(){
    nSwitch = 0;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function spriteScene(){
    nSwitch = 1;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

function pepperScene(){
    nSwitch = 2;
    document.getElementById('SceneSwitch').setAttribute('whichChoice', nSwitch);
}

var spinning = false;

function animateModel()
{
    if(document.getElementById('model__Timer').getAttribute('enabled')!= 'true')
        document.getElementById('model__Timer').setAttribute('enabled', 'true');
    else
        document.getElementById('model__Timer').setAttribute('enabled', 'false');
}


function animateModel2()
{
    if(document.getElementById('model__Timer2').getAttribute('enabled')!= 'true')
        document.getElementById('model__Timer2').setAttribute('enabled', 'true');
    else
        document.getElementById('model__Timer2').setAttribute('enabled', 'false');
}

function animateModel3()
{
    if(document.getElementById('model__Timer3').getAttribute('enabled')!= 'true')
        document.getElementById('model__Timer3').setAttribute('enabled', 'true');
    else
        document.getElementById('model__Timer3').setAttribute('enabled', 'false');
}

function stopRotation()
{
	spinning = false;
	document.getElementById('model__Timer').setAttribute('enabled', spinning.toString());
}

function stopRotation2()
{
	spinning = false;
	document.getElementById('model__Timer2').setAttribute('enabled', spinning.toString());
}

function stopRotation3()
{
	spinning = false;
	document.getElementById('model__Timer3').setAttribute('enabled', spinning.toString());
}


function wireFrame()
{
	var e = document.getElementById('wire');
	e.runtime.togglePoints(true);
	e.runtime.togglePoints(true);
}

var lightOn = true;

function headLight()
{
	lightOn = !lightOn;
	document.getElementById('model__headlight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function omniLight()
{
	lightOn = !lightOn;
	document.getElementById('model__omniLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function targetLight()
{
	lightOn = !lightOn;
	document.getElementById('model__targetLight').setAttribute('headlight', lightOn.toString());
	console.log(lightOn);
}

function cameraFront()
{
	document.getElementById('model__View_CameraFront').setAttribute('bind', 'true');
}

function cameraBack()
{
	document.getElementById('model__View_CameraBack').setAttribute('bind', 'true');
}

function cameraLeft()
{
	document.getElementById('model__View_CameraLeft').setAttribute('bind', 'true');
}

function cameraRight()
{
	document.getElementById('model__View_CameraRight').setAttribute('bind', 'true');
}

function cameraTop()
{
	document.getElementById('model__View_CameraTop').setAttribute('bind', 'true');
}

function cameraBottom()
{
	document.getElementById('model__View_CameraBottom').setAttribute('bind', 'true');
}


