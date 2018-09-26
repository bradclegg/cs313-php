function clickMe() {
	alert("Clicked!");
}

function changeColor() {
    var textColor = document.getElementById('textColor');
    var div1 = document.getElementById('first');

    var color = textColor.value;
    div1.style.color = color;
}