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
    console.log(json_txt);
    json_obj = JSON.parse(json_txt);
    if (!checkObj(json_obj)) {
        return false;
    }
    text = getInsult(json_obj.combination);
    document.getElementById("word_container").value = text;
}

function copyText(elem) {
    elem.select();
    document.execCommand("copy");
    elem.blur();
    alert("Copied the text: " + elem.value);
}