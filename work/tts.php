<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <title>JavaScript Text-to-Speech App</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="wrapper">
    <h1>JavaScript Text-to-Speech App</h1>
    <form id="form">
        <input type="text" id="text-input" placeholder="Enter Text" />
        <button type="submit" id="submit-button">Submit</button>
    </form>
</div>
<script src="script.js"></script>
</body>
</html>

<script type="text/javascript">
    'speechSynthesis' in window ? console.log("Web Speech API supported!") : console.log("Web Speech API not supported :-(")

</script>