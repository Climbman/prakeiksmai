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

window.onload = function() {
    document.getElementById("content").addEventListener("click", handleClick);
}

function handleClick() {
    switch (event.target.id) {
        case "word_changer":
            getWords();
            playSound(a_objects, a_is_muted);
            clickEffect(event.target);
            break;
        case "copy_button":
            copyText(main_word_container);
            clickEffect(event.target);
            break;
        case "mute_button":
            mute(event.target);
            clickEffect(event.target);
            break;
    }
}

function getWords() {
    var index1, index2, index3;
    var phrase;

    index1 = random(0, dict1.length - 1);
    index2 = random(0, dict2.length - 1);
    index3 = random(0, dict3.length - 1);

    phrase = ''
        + dict1[index1] + ' '
        + dict2[index2] + ', '
        + dict3[index3];

    document.getElementById("main_word_container").value = phrase;
}


function copyText(elem) {
    elem.select();
    document.execCommand("copy");
    elem.blur();
    message_box.innerHTML = "Tekstas clipboard'e";
    message_box.style.opacity = 1.0;
    setTimeout(function(){message_box.style.opacity = 0.0;}, 2000);
}

function playSound(a_objects, a_is_muted) {
    if (!a_is_muted) {
        var rand = Math.floor(Math.random() * a_objects.length);
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

function clickEffect(elem) {
    if (isTouch) {
        elem.style.backgroundColor = "red";
        setTimeout(function(){elem.style.backgroundColor = "#ffffff";}, 200);
    }
}

function random(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}
    
