<!--share btn start-->
<div class="d-flex justify-content-center flex-column d-block d-md-none" style="position: fixed; z-index: 10000;!important; height: 80vh">
    <a class="btn btn-sm text-white" style="background-color: #3b5998;" href="#!" id="shareBtn" onclick="share()" role="button">
        <i class="fas fa-share-alt"></i>
    </a>
</div>
<!--    Share Link button for desktop-->
<div class="d-none d-md-block">

    <div class="d-flex justify-content-center flex-column " style="position: fixed; z-index: 100; height: 80vh">

        <!-- Whatsapp -->
        <div class="btn text-white mb-1" style="background-color: #25d366;" role="button" onclick="whatsapp('<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>');">
            <i class="fab fa-whatsapp"></i>
        </div>

        <!-- Linkedin -->
        <div class="btn btn-sm text-white mb-1" style="background-color: #0082ca;" role="button" onclick="linkedin('<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>');">
            <i class="fab fa-linkedin-in"></i>
        </div>

        <!-- Twitter -->
        <div class="btn text-white mb-1" style="background-color: #55acee;" role="button" onclick="twitter('<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>');">
            <i class="fab fa-twitter"></i>
        </div>

        <!-- Google -->
        <div class="btn text-white mb-1" style="background-color: #dd4b39;" role="button" onclick="gmail('<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>');">
            <i class="fab fa-google"></i>
        </div>

        <!-- SMS -->
        <div class="btn text-white mb-1" style="background-color: #4c75a3;" role="button" onclick="sms('<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>', <?php echo $isIOS ?>);">
            <i class="fas fa-sms"></i>
        </div>

        <!-- copy -->
        <div class="btn text-white mb-1" style="background-color: #ac2bac;"  role="button" onclick="copy()">
            <i class="fas fa-copy"></i>
        </div>
    </div>
</div>
<!--Share Buttons end-->
<script type="text/javascript">
    function whatsapp(text){
        var cop = 'https://'+text;
        var whatsapp = 'https://api.whatsapp.com/send/?phone=&text=I+found+this+blog+Interesting.+You+can+read+it+here:%0A%0A+'+ cop;
        window.open(whatsapp);
    }

    function twitter(text){
        var cop = 'https://'+text;
        var twitter = 'https://twitter.com/intent/tweet?text=I+found+this+blog+Interesting.+You+can+read+it+here:%0A%0A+'+cop;
        window.open(twitter);
    }

    function gmail(text){
        var cop = 'https://'+text;
        var gmail = "mailto:?Subject=Hello,%20I%20found%20this%20interesting.&Body=I%20found%20this%20blog%20interesting.%20You%20can%20read%20it%20here.%0A%0A"+cop;
        window.open(gmail);
    }

    function linkedin(text){
        var cop = 'https://'+text;
        var linkedin = 'https://www.linkedin.com/sharing/share-offsite/?url='+cop;
        window.open(linkedin);
    }

    function sms(text, platform){
        var cop = 'https://'+text;
        if(platform=="iOS"){
            var sms = "sms:7004909749&body=I found this blog Interesting. You can read  it  here";
        }
        else{
            var sms = 'sms:?body=I+found+this+blog+Interesting.+You+can+read+it+here:%0A%0A+'+cop;
        }

        window.open(sms);
    }

    function copy(){
        var inputc = document.body.appendChild(document.createElement("input"));
        inputc.value = window.location.href;
        inputc.focus();
        inputc.select();
        document.execCommand('copy');
        inputc.parentNode.removeChild(inputc);
        var cop = inputc.value;
        console.log(cop);
        alert('Hello, Website URL is copied.');
        copyToClipboard(cop);
    }

    var forced_pause=0;

    let r = setInterval(() => {
        if (!speechSynthesis.speaking || forced_pause === 1) {
            clearInterval(r);
        } else {
            speechSynthesis.pause();
            speechSynthesis.resume();
        }
    }, 14000);






    function cancel_reader(){
        document.getElementById('control_pause').style.display="none";
        document.getElementById('control_cancel').style.display="none";
        document.getElementById('control_resume').style.display="none";
        document.getElementById('control_play').style.display="block";
        speechSynthesis.cancel();
    }
    function pause_reader(){
        forced_pause=1;
        document.getElementById('control_play').style.display="none";
        document.getElementById('control_pause').style.display="none";
        document.getElementById('control_resume').style.display="block";
        document.getElementById('control_cancel').style.display="block";

        speechSynthesis.pause();
    }
    function resume_reader(){
        forced_pause=1;
        document.getElementById('control_resume').style.display="none";
        document.getElementById('control_play').style.display="none";
        document.getElementById('control_pause').style.display="block";
        document.getElementById('control_cancel').style.display="block";
        speechSynthesis.resume();
    }

    $(document).ready(function() {
        var voices = window.speechSynthesis.getVoices();
        speechSynthesis.cancel();
    })

    // web share API
    function share(){
        const shareBtn = document.getElementById('shareBtn')

        shareBtn.addEventListener('click', event => {

            // Check for Web Share api support
            if (navigator.share) {
                // Browser supports native share api
                navigator.share({
                    text: 'I found this blog Interesting. You can read  it  here: ',
                    url: ''
                }).then(() => {
                    console.log('Thanks for sharing!');
                })
                    .catch((err) => console.error(err));
            } else {
                // Fallback
                alert("The current browser does not support the share function. Please, manually share the link")
            }
        });
    }
</script>