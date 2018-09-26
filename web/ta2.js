function clickMe() {
	alert("Clicked!");
}

function changeColor() {
    var textColor = document.getElementsByClassName('textColor');
    var div1 = document.getElementsByClassName('first');

    div1.style.color = textColor;
}