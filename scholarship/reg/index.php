

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>
<body>
<div class="form-container">
    <?php
    if (isset($_POST["LeadForm1"])) {
        $fullName = $_POST["fullName"];
        $email = $_POST["email"];
        $contactNumber = $_POST["contactNumber"];
        $college = $_POST["college"];

        echo '<h1>'.$fullName.'</h1>';
    }
    ?>

    <h1>Wooble Legacy Scholarship Program</h1>
    <center><p style="color:red">Registration Date Extended till 22<sup>nd</sup> June 2023</p></center>
    <form id="leadForm" name="LeadForm" method="POST" action="">
        <input type="text" id="fullName" name="fullName" placeholder="Full Name" required>
        <input type="email" id="email" name="email" placeholder="Email ID" required>
        <input type="tel" id="contactNumber" name="contactNumber" pattern="[0-9]{10}" placeholder="Contact Number" required>
        <select id="college" name="college">
            <option disabled selected value="Not Selected">Select College (optional)</option>
            <option value="Indian Institute of Technology Madras">Indian Institute of Technology Madras</option>
            <option value="Indian Institute of Technology Delhi">Indian Institute of Technology Delhi</option>
            <option value="Indian Institute of Technology Bombay">Indian Institute of Technology Bombay</option>
            <option value="Indian Institute of Technology Kanpur">Indian Institute of Technology Kanpur</option>
            <option value="Indian Institute of Technology Kharagpur">Indian Institute of Technology Kharagpur</option>
            <option value="Indian Institute of Technology Roorkee">Indian Institute of Technology Roorkee</option>
            <option value="Indian Institute of Technology Guwahati">Indian Institute of Technology Guwahati</option>
            <option value="Indian Institute of Technology Hyderabad">Indian Institute of Technology Hyderabad</option>
            <option value="National Institute of Technology Tiruchirappalli">National Institute of Technology Tiruchirappalli</option>
            <option value="Indian Institute of Technology Indore">Indian Institute of Technology Indore</option>
            <option value="Indian Institute of Technology (BHU) Varanasi">Indian Institute of Technology (BHU) Varanasi</option>
            <option value="Indian Institute of Technology (Indian School of Mines)">Indian Institute of Technology (Indian School of Mines)</option>
            <option value="National Institute of Technology Karnataka">National Institute of Technology Karnataka</option>
            <option value="Vellore Institute of Technology">Vellore Institute of Technology</option>
            <option value="National Institute of Technology Rourkela">National Institute of Technology Rourkela</option>
            <option value="Jadavpur University">Jadavpur University</option>
            <option value="Institute of Chemical Technology">Institute of Chemical Technology</option>
            <option value="National Institute of Technology Warangal">National Institute of Technology Warangal</option>
            <option value="Amrita School of Engineering">Amrita School of Engineering</option>
            <option value="Indian Institute of Engineering Science and Technology">Indian Institute of Engineering Science and Technology</option>
            <option value="Indian Institute of Engineering Science and Technology">Indian Institute of Engineering Science and Technology</option>
            <option value="Indian Institute of Technology Bhubaneswar">Indian Institute of Technology Bhubaneswar</option>
            <option value="National Institute of Technology Calicut">National Institute of Technology Calicut</option>
            <option value="Indian Institute of Technology Gandhinagar">Indian Institute of Technology Gandhinagar</option>
            <option value="Fakir Mohan University, Odisha">Fakir Mohan University, Odisha</option>
            <option value="Indian Institute of Technology Ropar">Indian Institute of Technology Ropar</option>
            <option value="Indian Institute of Technology Patna">Indian Institute of Technology Patna</option>
            <option value="Siksha `O` Anusandhan">Siksha `O` Anusandhan</option>
            <option value="Malaviya National Institute of Technology">Malaviya National Institute of Technology</option>
            <option value="Delhi Technological University">Delhi Technological University</option>
            <option value="Shanmugha Arts Science Technology & Research Academy">Shanmugha Arts Science Technology & Research Academy</option>
            <option value="Birla Institute of Technology">Birla Institute of Technology</option>
            <option value="Aligarh Muslim University">Aligarh Muslim University</option>
            <option value="National Institute of Technology Kurukshetra">National Institute of Technology Kurukshetra</option>
            <option value="S. R. M. Institute of Science and Technology">S. R. M. Institute of Science and Technology</option>
            <option value="Kalinga Institute of Industrial Technology">Kalinga Institute of Industrial Technology</option>
            <option value="International Institute of Information Technology Hyderabad">International Institute of Information Technology Hyderabad</option>
            <option value="Sri Sivasubramaniya Nadar College of Engineering">Sri Sivasubramaniya Nadar College of Engineering</option>
            <option value="Manipal Institute of Technology">Manipal Institute of Technology</option>
            <option value="College of Engineering Pune">College of Engineering Pune</option>
            <option value="Sathyabama Institute of Science and Technology">Sathyabama Institute of Science and Technology</option>
            <option value="Dr. B. R. Ambedkar National Institute of Technology">Dr. B. R. Ambedkar National Institute of Technology</option>
            <option value="Indian Institute of Technology Jodhpur">Indian Institute of Technology Jodhpur</option>
            <option value="Sardar Vallabhbhai National Institute of Technology">Sardar Vallabhbhai National Institute of Technology</option>
            <option value="Visvesvaraya Technological University">Visvesvaraya Technological University</option>
            <option value="Indraprastha Institute of Information Technology Delhi">Indraprastha Institute of Information Technology Delhi</option>
            <option value="Jawaharlal Nehru Technological University">Jawaharlal Nehru Technological University</option>
            <option value="Koneru Lakshmaiah Education Foundation University">Koneru Lakshmaiah Education Foundation University</option>
            <option value="M. S. Ramaiah Institute of Technology">M. S. Ramaiah Institute of Technology</option>
            <option value="Kalasalingam Academy of Research and Higher Education">Kalasalingam Academy of Research and Higher Education</option>
            <option value="National Institute of Technology Meghalaya">National Institute of Technology Meghalaya</option>
            <option value="International Institute of Information Technology Bangalore">International Institute of Information Technology Bangalore</option>
            <option value="Defence Institute of Advanced Technology">Defence Institute of Advanced Technology</option>
            <option value="National Institute of Technology Raipur">National Institute of Technology Raipur</option>
            <option value="College of Engineering(A)">College of Engineering(A)</option>
            <option value="Veermata Jijabai Technological Institute">Veermata Jijabai Technological Institute</option>
            <option value="Panjab University">Panjab University</option>
            <option value="B.M.S. College of Engineering">B.M.S. College of Engineering</option>
            <option value="Indian Institute of Food Processing Technology (IIFPT)">Indian Institute of Food Processing Technology (IIFPT)</option>
            <option value="National Institute of Technology Agartala">National Institute of Technology Agartala</option>
            <option value="Netaji Subhas University of Technology (NSUT)">Netaji Subhas University of Technology (NSUT)</option>
            <option value="National Institute of Technology Goa">National Institute of Technology Goa</option>
            <option value="Shri Mata Vaishno Devi University">Shri Mata Vaishno Devi University</option>
            <option value="National Institute of Technology Jamshedpur">National Institute of Technology Jamshedpur</option>
            <option value="Karunya Institute of Technology and Sciences">Karunya Institute of Technology and Sciences</option>
            <option value="Indian Institute of Information Technology Design & Manufacturing Jabalpur">Indian Institute of Information Technology Design & Manufacturing Jabalpur</option>
            <option value="Kumaraguru College of Technology">Kumaraguru College of Technology</option>
            <option value="Sri Krishna College of Engineering and Technology">Sri Krishna College of Engineering and Technology</option>
            <option value="Chandigarh University">Chandigarh University</option>
            <option value="College of Engineering Trivandrum">College of Engineering Trivandrum</option>
            <option value="Lovely Professional University">Lovely Professional University</option>
            <option value="University College of Engineering">University College of Engineering</option>
            <option value="Graphic Era University">Graphic Era University</option>
            <option value="Coimbatore Institute of Technology">Coimbatore Institute of Technology</option>
            <option value="Siddaganga Institute of Technology">Siddaganga Institute of Technology</option>
            <option value="National Institute of Technology Patna">National Institute of Technology Patna</option>
            <option value="C.V. Raman Global University">C.V. Raman Global University</option>
            <option value="PES University">PES University</option>
            <option value="Vel Tech Rangarajan Dr. Sagunthala R & D Institute of Science and Technology">Vel Tech Rangarajan Dr. Sagunthala R & D Institute of Science and Technology</option>
            <option value="Jaypee Institute of Information Technology">Jaypee Institute of Information Technology</option>
            <option value="University College of Engineering">University College of Engineering</option>
            <option value="National Institute of Technology Hamirpur">National Institute of Technology Hamirpur</option>
            <option value="Bharati Vidyapeeth Deemed University College of Engineering">Bharati Vidyapeeth Deemed University College of Engineering</option>
            <option value="Atal Bihari Vajpayee Indian Institute of Information Technology and Management">Atal Bihari Vajpayee Indian Institute of Information Technology and Management</option>
            <option value="KIIT SCHOOL OF BIOTECHNOLOGY( KSBT), KIIT University">KIIT SCHOOL OF BIOTECHNOLOGY( KSBT), KIIT University</option>
            <option value="International Management Institute( IMI, Bhubhaneshwar)">International Management Institute( IMI, Bhubhaneshwar)</option>
            <option value="Indian Institute of Management Calcutta">Indian Institute of Management Calcutta</option>
            <option value="Indian Institute of Management Lucknow">Indian Institute of Management Lucknow</option>
            <option value="IIT Kharagpur (VGSoM) (West Bengal)">IIT Kharagpur (VGSoM) (West Bengal)</option>
            <option value="Indian Institute of Management Kozhikode">Indian Institute of Management Kozhikode</option>
            <option value="Indian Institute of Management Indore">Indian Institute of Management Indore</option>
            <option value="Indian Institute of Technology Delhi">Indian Institute of Technology Delhi</option>
            <option value="XLRI">XLRI</option>
            <option value="Indian Institute of Technology Roorkee">Indian Institute of Technology Roorkee</option>
            <option value="National Institute of Industrial Engineering">National Institute of Industrial Engineering</option>
            <option value="Indian Institute of Management Tiruchirappalli">Indian Institute of Management Tiruchirappalli</option>
            <option value="Indian Institute of Management Udaipur">Indian Institute of Management Udaipur</option>
            <option value="S. P. Jain Institute of Management and Research">S. P. Jain Institute of Management and Research</option>
            <option value="Indian Institute of Management Raipur">Indian Institute of Management Raipur</option>
            <option value="IIFT NEWDELHI">IIFT NEWDELHI</option>
            <option value="TAPMI">TAPMI</option>
            <option value="IIT, DHANBAD">IIT, DHANBAD</option>
            <option value="IIM, SHILLONG">IIM, SHILLONG</option>
            <option value="XIMB">XIMB</option>
            <option value="Institute Institute of Management Kashipur">Institute Institute of Management Kashipur</option>
            <option value="IMT Ghaziabad">IMT Ghaziabad</option>
            <option value="Goa Institute of Management">Goa Institute of Management</option>
            <option value="IMI Kolkata (West Bengal)">IMI Kolkata (West Bengal)</option>
            <option value="Thapar Institute of Engineering & Technology">Thapar Institute of Engineering & Technology</option>
            <option value="Vellore Institute of Technology, Vellore">Vellore Institute of Technology, Vellore</option>
            <option value="Guru Gobind Singh Indraprastha University">Guru Gobind Singh Indraprastha University</option>
            <option value="BIT Mesra, Ranchi">BIT Mesra, Ranchi</option>
            <option value="Anna University, chennai">Anna University, chennai</option>
            <option value="International Management Institute, bhubneswar">International Management Institute, bhubneswar</option>
            <option value="Jagan Institute of Management Studies, Delhi">Jagan Institute of Management Studies, Delhi</option>
            <option value="Principal L N Welingkar Institute of Management Development and Research, mumbai">Principal L N Welingkar Institute of Management Development and Research, mumbai</option>
            <option value="Bharathidasan Institute of Management, Tiruchirappalli">Bharathidasan Institute of Management, Tiruchirappalli</option>
            <option value="Christ University, bengaluru">Christ University, bengaluru</option>
            <option value="Dayalbagh Educational Institute, Agra">Dayalbagh Educational Institute, Agra</option>
            <option value="IIM Sambalpur">IIM Sambalpur</option>


        </select>
        <input name="LeadForm1" type="submit" value="Submit">
    </form>
</div>
<script type="text/javascript">
    document.getElementById('leadForm').addEventListener('submit', function(event) {
        event.preventDefault();

        var fullName = document.getElementById('fullName').value;
        var email = document.getElementById('email').value;
        var contactNumber = document.getElementById('contactNumber').value;
        var college = document.getElementById('college').value;

        if(fullName === '' || email === '' || contactNumber === '' || college === '') {
            alert('Please fill all the fields.');
            return false;
        }

        var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
        if(!email.match(emailPattern)) {
            alert('Please enter a valid email address.');
            return false;
        }

        if(contactNumber.length != 10) {
            alert('Please enter a valid 10-digit contact number.');
            return false;
        }
        $.ajax({
            url: 'process.php', // Update with the server-side PHP file that handles the form submission
            type: 'POST',
            data: {
                fullName: fullName,
                email: email,
                contactNumber: contactNumber,
                college: college
            },
            success: function(response) {
                $('#leadForm')[0].reset(); // Reset the form after successful submission
                window.location.href = '../thank-you/index.php';
            },
            error: function(xhr, status, error) {
                alert('An error occurred while submitting the form. Please try again.');
            }
        });
    });

</script>
</body>
</html>
