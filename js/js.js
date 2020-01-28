//------------------------------------------------------------------------------------------------------------------------------------------------------

var star = document.getElementById('star').value;

if(star == 1){
	document.getElementById("starShow").innerHTML = "★☆☆☆☆";
}else if(star == 2){
	document.getElementById("starShow").innerHTML = "★★☆☆☆";
}else if(star == 3){
	document.getElementById("starShow").innerHTML = "★★★☆☆";
}else if(star == 4){
	document.getElementById("starShow").innerHTML = "★★★★☆";
}else if(star == 5){
	document.getElementById("starShow").innerHTML = "★★★★★";
}
//------------------------------------------------------------------------------------------------------------------------------------------------------