<?php
include '../inc/dbconnection.php';
$dir= "../../" ;





// Check if the "mobile" word exists in User-Agent
$isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));

// Check if the "tablet" word exists in User-Agent
$isTab = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "tablet"));

// Platform check
$isWin = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "windows"));
$isAndroid = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "android"));
$isIPhone = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "iphone"));
$isIPad = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "ipad"));
$isIOS = $isIPhone || $isIPad;


if(isset($_GET['title'])){
    $blog_id = $_GET['title'];
}
else{
    $blog_id = $_GET['value'];
}
$query_user_email = "SELECT * FROM `blogs` WHERE `canonical_url`='$blog_id'";
$res_email = mysqli_query($link, $query_user_email);
$row_email = mysqli_fetch_assoc($res_email);
$userEmailID = $row_email['email_id'];
$query_user_info = "SELECT * FROM `user_details` WHERE `email`='$userEmailID'";
$res_user_info = mysqli_query($link, $query_user_info);
$row_user_info = mysqli_fetch_assoc($res_user_info);
$full_name = $row_user_info['field_1'];
$profile_pic = $row_user_info['profile_pic'];
$theme = $row_user_info['theme'];
$theme = strtolower($theme);
$username = $row_user_info['username'];
$font_set = $row_user_info['font'];
$query_fetch_font = "SELECT * FROM `font_styles` WHERE `font_id`='$font_set'";
$res_fetch_font = mysqli_query($link, $query_fetch_font);
$row_fetch_font = mysqli_fetch_assoc($res_fetch_font);
$row_blogs = $row_email;

$premium_domain = $row_user_info['premium_domain'];
if($premium_domain==''){
    $root_canonical_url = "https://wooble.org/".$username;
    $custom_url = "https://wooble.org/#directory#/".$username;
}
else{
    $root_canonical_url = "https://".$premium_domain;
    $custom_url = "https://".$premium_domain."/#directory#";
}



$blog_title = $row_blogs['title'];
$last_updated = $row_blogs['last_updated'];
$date_created = $row_blogs['time_created'];
$blog_id = $row_blogs['blog_id'];
$title = $row_email['title'];
$blog_content = $row_blogs['content'];
$description = substr($blog_content,0,160);
$description = strip_tags($description);
$plain_html = strip_tags($blog_content);
$plain_html = str_replace( array( "'","\'" ), '', $plain_html);
$plain_html = html_entity_decode($plain_html);

if(isset($_GET['color1']) && isset($_GET['color2']) && isset($_GET['color3']) && isset($_GET['color4'])){
    $bg_color = $_GET['color1'];
    $primary_color = $_GET['color2'];
    $secondary_color = $_GET['color3'];
    $text_color = $_GET['color4'];
    echo "Colors Defined in get method";
}
else{
    $bg_color = $row_user_info['background'];
    $primary_color = $row_user_info['primary_color'];
    $secondary_color = $row_user_info['secondary_color'];
    $text_color = $row_user_info['tertiary_color'];
}


preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $blog_content, $image);
            $post_image = $image['src'];
            list($width, $height, $type, $attr) = getimagesize($image['src']);

?>

<!DOCTYPE html>
<html lang="en-IN">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title><?php
        if(strlen($title)>57){
            echo substr($title, 0, 57).'...';
        }
        else{
            echo $title;
        }?></title>

    <html>
    <head>
        <title>Title of a News Article</title>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org",
                "@type": "NewsArticle",
                "headline": "<?php echo $title ?>",
                "image": [
                    "<?php echo $post_image ?>"
                ],
                "datePublished": "<?php echo $date_created ?>",
                "dateModified": "<?php echo $last_updated ?>",
                "author": [{
                    "@type": "Person",
                    "name": "<?php echo $full_name ?>",
                    "url": "https://wooble.org/<?php echo $username ?>"
                }]
            }
        </script>
    </head>
<body>
</body>
</html>
        <meta name="description" content="<?php echo $result = preg_replace("/[^a-zA-Z0-9 ]+/", "", $description); ?>">
        <meta property="og:description" content="<?php echo $result = preg_replace("/[^a-zA-Z0-9 ]+/", "", $description); ?>">
        <meta property="og:site_name" content="<?php echo $row_user_info['field_1'] ?> | Wooble">
        <meta property="og:url" content="https://www.wooble.org/<?php echo $row_email['canonical_url'] ?>">
        <meta property="og:title" content="<?php echo $title ?>">
        <meta property="og:image" content="<?php echo $post_image ?>">
        <meta property="og:image:width" content="<?php echo $width ?>">
        <meta property="og:image:height" content="<?php echo $height ?>">
        <meta property="og:description" content="<?php echo $result = preg_replace("/[^a-zA-Z0-9 ]+/", "", $description); ?>">
    <meta name="robots" content="all" />
    <meta name="twitter:card" content="image">
    <meta name="twitter:site" content="@Wooble">
    <meta name="twitter:url" content="https://www.wooble.org/<?php echo $row_email['canonical_url'] ?>">
    <meta name="twitter:title" content="<?php echo $title ?>">
    <meta name="twitter:description" content="<?php echo $result = preg_replace("/[^a-zA-Z0-9 ]+/", "", $description); ?>">
    <meta name="twitter:image" content="<?php echo $post_image ?>">


    <!-- Wooble icon -->
<!--    <dlink rel="icon" href="https://test.wooble.org/home/upload/--><?php //echo rawurlencode($profile_pic); ?><!--" type="image/x-icon" />-->
    <!-- Font Awesome -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
</script>
<script type="text/javascript"
        src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
<?php
$font_combo_id = $row_user_info['font_id'];
$query_fonts = "SELECT * FROM `font_options` WHERE `font_combo_id`='$font_combo_id'";
$res_fonts = mysqli_query($link, $query_fonts);
$row_fonts = mysqli_fetch_assoc($res_fonts);
echo $row_fonts['font_1_link'];
echo $row_fonts['font_2_link'];
?>

    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />

    <link rel="image_src" href="<?php echo $post_image ?>" />

<link rel="stylesheet" href="http://wooble.org/css/mdb.min.css"/>

    <!-- CSS rules for styling the element inside the editor such as p, h1, h2, etc. --><link href="froala_style.min.css" rel="stylesheet" type="text/css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="author" href="https://wooble.org/<?php echo $username ?>">
    <link rel="publisher" href="https://wooble.org">
    <link rel="canonical" href="https://wooble.org/blog/<?php echo $blog_id ?>"
    <link href="<?php echo $row_fetch_font['font_google_link'] ?>" rel="stylesheet">


    <style>
        .primary_color{
            color: rgb(3,3,3)!important;
        }
        .secondary_color {
            color: rgb(3,3,3)!important;
        }
        .my_font{
            font-family: <?php echo $row_fetch_font['font_family'] ?>!important;
        }
        mark {
            color: #000;
            background-color: #f4d03f;
        }

        .text_color{
            color: black;
        }

        .bg_color{
            color: white;
        }

        .text_color_white{
            color: white;
        }

        .bg_color_black{
            color: black;
        }

    </style>
</head>
<!--<body style="--><?php //echo $row_user_info['background']; ?><!--">-->
<body style="background-color:<?php echo $bg_color ?>">

<?php include '../header/'.$row_user_info["header_type"].'.php'; ?>
<br>

<div style="z-index:9999!important;" id="google_translate_element"></div>

<!--Share Buttons-->
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
<!--Share Buttons-->
            <div class="container rounded-4" style="min-height: 80vh;">
                <div class="row mb-4" style="<?php echo $bg_color ?>">
                <div class="col-lg-9 p-4 mb-4" style="background-color: <?php echo $bg_color ?> ;" align="center">
                    <div align="right"><i onclick="force_change_theme()" style="color: <?php echo $bg_color ?>" class="fas fa-adjust text_color"></i></div>
                    <div class="col-lg-9 col-12" align="left" >
                        <?php
                        //                    <span>by '.$full_name.'</span> <span> . '.$date_created.'
                        echo '<h1 style="font-family:'.$row_fonts["font_1"].';color:'.$text_color.'">'.$row_blogs['title'].'</h1></span>';?>
                        

                        <?php
                        echo '<br>';
                        echo '<div style="font-family:'.$row_fonts["font_2"].'; background-color:'.$bg_color.'; color:'.$text_color.'" class="fr-view justify-content-start" id="richViewer">'.$row_blogs['content'].'</div>';
                        echo '<div class="justify-content-start" id="textEl" style="display: none"></div>';
                        ?>


                    </div>
                <br>

                </div>
                    <br><br>
                <div class="col-lg-3" style="border-left: 0px solid rgb(100,100,100);">
                    <div class="sticky-top">
                    <?php
                    $query_blogs = "SELECT * FROM `blogs` WHERE `email_id`='$userEmailID' AND `blog_id`!='$blog_id' ORDER BY RAND() LIMIT 7";
                    $res_blogs = mysqli_query($link, $query_blogs);
                    while($row_blogs = mysqli_fetch_assoc($res_blogs)){

                    $blog_content = $row_blogs['content'];
                    $blog_title = $row_blogs['title'];
                    $last_updated = $row_blogs['last_updated'];
                    $date_created = $row_blogs['time_created'];
                    $blog_id = $row_blogs['blog_id'];

                        preg_match('/<img.+src=[\'"](?P<src>.+?)[\'"].*>/i', $blog_content, $image);
                        $post_image = $image['src'];


                    ?>

                        <a href="../blog/<?php echo $row_blogs['canonical_url'] ?>")">
                            <div class="row p-2 mb-2 rounded-4 shadow-1">
                            <div class="col-lg-8 col-6">
                                <p class="card-text text_color"><?php echo $blog_title ?></p>
                            </div>
                                <div class="col-lg-4 col-6">
                                    <img style="width:100px; height: 100px; border-radius: 100%; object-fit: cover" src="<?php echo $post_image ?>" onerror="this.onerror=null; this.src='../img/new_blog.webp'"  alt="<?php echo $blog_title ?>"/>
                                </div>

                            </div>
                        </a>



                    <?php } ?>
                </div>
                </div>
                </div>

            </div>




    <script type="text/javascript" src="../js/mdb.min.js"></script>
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
        const paragraphs = document.querySelectorAll(".fr-view");
        const readTimeDiv = document.querySelector("#read-time");

        const calculateReadTime = ( ) => {
            let numberofWords = 0;
            const averageWPM = 185;
            paragraphs.forEach(paragraph => {
                numberofWords += paragraph.innerHTML.split(" ").length;
            });
            let readTime = numberofWords/averageWPM;
            //console.log("number of words:"+numberofWords);
            //console.log("Read Time:"+Math.round(readTime));
            if(readTime==0){
                readTime=1;
            }
            readTimeDiv.innerHTML = Math.round(readTime)+" Min Read";
        };
        calculateReadTime();
       function check_end(){
           document.getElementById('textEl').style.display="none";
           document.getElementById('richViewer').style.display="block";
           cancel_reader();
           document.body.scrollTop = document.documentElement.scrollTop = 0;
        }

        window.onload = function(){
            if('speechSynthesis' in window){
                document.getElementById('control_play').style.visibility="visible";
            }
        };

        function read_paragraph(content){
            document.getElementById('control_play').style.display="none";
            document.getElementById('control_pause').style.display="block";
            document.getElementById('control_cancel').style.display="block";
            const textEl = document.getElementById('textEl');
            window.msg = [];
            const msg = new SpeechSynthesisUtterance(content);
            const voices = window.speechSynthesis.getVoices();
            // msg.voice = voices[0];
             // msg.voice = speechSynthesis.getVoices().filter(function(voice) {
            //     return voice.name == "Google UK Female"
            //
            // })[0];
            msg.lang="en";
            msg.rate = 0.85;
            msg.pitch = 1.3;
            window.speechSynthesis.speak(msg);
            msg.onboundary = function(event) {
                var text = '<?php echo $plain_html ?>';
                document.getElementById('richViewer').style.display="none";
                document.getElementById('textEl').style.display="block";
                //console.log(event.charIndex);
                //console.log(event.charLength);
                const wordStart = event.charIndex;
                let wordLength = event.charLength;
                if (wordLength === undefined) {
                    // Safari doesn't provide charLength, so fall back to a regex to find the current word and its length (probably misses some edge cases, but good enough for this demo)
                    const match = text.substring(wordStart).match(/^[a-z\d']*/i);
                    wordLength = match[0].length;
                }
                const wordEnd = wordStart + wordLength;
                //console.log(wordEnd);
                var word = text.substring(wordStart, wordEnd);
                //console.log(word);
                const markedText = text.substring(0, wordStart) + '<mark id="98437">' + word + '</mark>' + text.substring(wordEnd);
                //console.log(markedText);
                textEl.innerHTML = markedText;
                const hg = document.getElementById("98437");
                //hg.scrollIntoView();
                hg.scrollIntoView({ behavior: 'smooth', block: 'center' })
                //console.log(event.name + ' boundary reached after ' + event.elapsedTime + ' milliseconds.');
            }
            msg.addEventListener('end', check_end);
        }
        var state=0;
        $(document).ready(function () {
             //state=0;
            change_theme();
        });

        function force_change_theme(){
            if(localStorage.getItem("theme_state")==1){
                localStorage.setItem("theme_state", "0");
            }
            else{
                localStorage.setItem("theme_state", "1");
            }

            change_theme();
        }


        function change_theme(){
            if (localStorage.getItem("theme_state") === null) {
                state=0;
            }
            else if(localStorage.getItem("theme_state")==0){
                state=0;
            }
            else{
                state=1;
            }
            if(state==0){
                const texts = document.querySelectorAll('.text_color');
                texts.forEach(text => {
                    text.style.color = 'rgb(200,200,200)';
                    text.style.backgroundColor="rgb(25,26,27)";
                });

                const div_bg_elem = document.querySelectorAll('.div_color');
                div_bg_elem.forEach(div_bg => {
                    div_bg.style.color = 'rgb(200,200,200)';
                    div_bg.style.backgroundColor="rgb(25,26,27)";
                });
                document.getElementById("bg_color").style.backgroundColor="rgb(25,26,27)";
                state=1;
            }
            else{
                const texts = document.querySelectorAll('.text_color');
                texts.forEach(text => {
                    text.style.color = 'rgb(25,26,27)';
                    text.style.backgroundColor="rgb(255,255,255)";
                });

                const div_bg_elem = document.querySelectorAll('.div_color');
                div_bg_elem.forEach(div_bg => {
                    div_bg.style.color = 'rgb(25,26,27)';
                    div_bg.style.backgroundColor="rgb(255,255,255)";
                });
                document.getElementById("bg_color").style.backgroundColor="rgb(255,255,255)";
                state=0;
            }

        }
</body>

        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement(
            {pageLanguage: 'en'},
            'google_translate_element'
        );
    }
</script>
</html>
