let photo = document.getElementById('photo');
let mybtm = document.getElementById('mybtm');
let mybtmOff = document.getElementById('mybtm-off');

mybtm.onclick = function () {
	photo.style.display= "flex";
	mybtm.style.display = 'none'
	mybtmOff.style.display = 'block'

};

mybtmOff.onclick = function (){
	photo.style.display = "none";
	mybtm.style.display = 'block'
	mybtmOff.style.display = 'none'

}