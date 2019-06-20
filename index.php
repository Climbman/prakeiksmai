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
    <div id="main_form">
        <div class="separator"></div>
        <textarea id="word_container" class="border_box" onclick=""></textarea>
        <div class="separator"></div>
        <div id="word_changer" class="border_box noselect" onclick="getWords(clback);playSound(audio);">Keiktis</div>
        <div class="separator"></div>
        <div id="copy_button" class="border_box noselect" onclick="copyText(word_container);">CopyPasta</div>
    </div>
</div>

</body>

</html>
