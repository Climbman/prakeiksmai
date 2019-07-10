var isTouch = (('ontouchstart' in window) || (navigator.msMaxTouchPoints > 0));

var a_dir = "sounds/";
var a_files = ["1", "2", "3", "4"];
var a_objects = [];
var a_vol = 0.1;
var a_is_muted = false;
for (var file of a_files) {
	a_obj = new Audio(a_dir + file + ".mp3");
	a_obj.volume = a_vol;
	a_objects.push(a_obj);
}



function getWords(clback) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            clback(this.responseText);
        }
    };
    xhttp.open("GET", "control.php?command=1", true);
    xhttp.send();
}

function checkObj(obj) {
    if (obj.phrase != "OK") {
        return false;
    }
    
    if (obj.length < 10) {
        return false;
    }
    
    if (!obj.combination) {
        return false;
    }
    
    return true;
}

function getInsult(combination) {
    word_array = combination.split(",");
    
    if (word_array.length != 3) {
        return false;
    }
    
    insult = word_array[0] + " " + word_array[1] + ", " + word_array[2];
    return insult;
}

function clback(json_txt) {
    //console.log(json_txt);
    json_obj = JSON.parse(json_txt);
    if (!checkObj(json_obj)) {
        return false;
    }
    text = getInsult(json_obj.combination);
    document.getElementById("main_word_container").value = text;
}

function copyText(elem) {
    elem.select();
    document.execCommand("copy");
    elem.blur();
    message_box.innerHTML = "Tekstas nukopijuotas į talpyklą";
    message_box.style.opacity = 1.0;
    setTimeout(function(){message_box.style.opacity = 0.0;}, 2000);
}

function playSound(a_objects, a_is_muted) {
	if (!a_is_muted) {
		var rand = Math.floor(Math.random() * a_objects.length);
		console.log(rand);
		a_objects[rand].play();
	}
}

function mute(element) {
    if (element.innerHTML == 'Tyliai') {
        element.innerHTML = 'Garsiai';
        a_is_muted = true;
    } else {
        element.innerHTML = 'Tyliai';
        a_is_muted = false;
    }
}

function oclk(elem) {
	if (isTouch) {
		elem.style.backgroundColor = "red";
		setTimeout(function(){elem.style.backgroundColor = "#ffffff";}, 200);
	}
}
    
