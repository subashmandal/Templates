<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<label for="txt">Enter text</label>
<div class="controls">
    <button onclick="read_paragraph('Hello Wooble! Welcome to World.')">Play</button>
</div>


<script type="text/javascript">
    const synth = window.speechSynthesis;
    const inputForm = document.querySelector("form");
    const inputTxt = document.querySelector(".txt");
    const voiceSelect = document.querySelector("select");
    voices = synth.getVoices();
    function populateVoiceList() {
        voices = synth.getVoices().sort(function (a, b) {
            const aname = a.name.toUpperCase();
            const bname = b.name.toUpperCase();
            if (aname < bname) {
                return -1;
            } else if (aname == bname) {
                return 0;
            } else {
                return +1;
            }
        });
    }
    populateVoiceList();

    if (speechSynthesis.onvoiceschanged !== undefined) {
        speechSynthesis.onvoiceschanged = populateVoiceList;
    }

    function read_paragraph(content) {
        if (synth.speaking) {
            console.error("speechSynthesis.speaking");
            return;
        }
        if (content != "") {
            const utterThis = new SpeechSynthesisUtterance(content);

            utterThis.onend = function (event) {
                console.log("SpeechSynthesisUtterance.onend");
            };

            utterThis.onerror = function (event) {
                console.error("SpeechSynthesisUtterance.onerror");
            };
            utterThis.voice = voices[50];
            utterThis.pitch = 1;
            utterThis.rate = 1;
            synth.speak(utterThis);
        }
    }
</script>
</body>
</html>