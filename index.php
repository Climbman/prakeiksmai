<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">

<link href='https://fonts.googleapis.com/css?family=Ewert' rel='stylesheet'>
<script type="text/javascript" src="main.js"></script>
<script type="text/javascript">

</script>
</head>


<body>
<div class="page_header dontdisplay">
</div>
<div id="message_box"></div>
<div class="content_holder">
    <div id="main_form" class="form border_box" >
        <div class="separator"></div>
        <textarea id="main_word_container" class="border_box word_container noselect" readonly></textarea>
        <div class="separator"></div>
        <div id="word_changer" class="main_button border_box noselect" onclick="getWords(clback);playSound(a_objects, a_is_muted); oclk(this);">Keiktis</div>
        <div class="separator"></div>
        <div id="copy_button" class="main_button border_box noselect" onclick="copyText(main_word_container); oclk(this);">CopyPasta</div>
    </div>
    <div class="separator"></div>
    <div id="ctrl_form" class="form border_box">
		<div class="separator"></div>
		<div id="mute_button" class="main_button border_box noselect" onclick="mute(this); oclk(this);">Tyliai</div>
		
    </div>
    <div class="separator"></div>
    <div id="footer" class="form border_box">
		<div id="contacts">
		<a id="gith" href="https://github.com/Climbman/prakeiksmai">GitHub</a></div>
    </div>
</div>

</body>

</html>
