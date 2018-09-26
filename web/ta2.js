function clickMe() {
	alert("Clicked!");
}

function changeColor() {
    var textColor = document.getElementsById('textColor');
    var div1 = document.getElementsById('first');

    div1.style.color = textColor;
}