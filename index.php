<?php
?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="style.css">

<link href='https://fonts.googleapis.com/css?family=Ewert' rel='stylesheet'>
<script type="text/javascript" src="functions.js"></script>
<script type="text/javascript">

</script>
</head>


<body>
<div class="page_header dontdisplay">
</div>
<div class="content_holder">
    <div id="message_box"></div>
    <div class="separator"></div>
    <div class="separator"></div>
    <div id="main_form" class="border_box" >
        <div class="separator"></div>
        <textarea id="main_word_container" class="border_box word_container noselect" readonly></textarea>
        <div class="separator"></div>
        <div id="word_changer" class="border_box noselect" onclick="getWords(clback);playSound(audio);">Keiktis</div>
        <div class="separator"></div>
        <div id="copy_button" class="border_box noselect" onclick="copyText(main_word_container);">CopyPasta</div>
    </div>
    <div class="separator"></div>
    <div id="ctrl_form" class="border_box">
    </div>
</div>

</body>

</html>
