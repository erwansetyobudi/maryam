<?php
# @Author: Erwan Setyo Budi <user>
# @Date:   2022-08-27T11:26:05+07:00
# @Email:  erwans818@gmail.com
# @Filename: wabutton.php
# @Last modified by:   user
# @Last modified time: 2018-01-23T11:26:47+07:00
?>



<link rel="stylesheet" href="<?php echo assets('css/venom-button.min.css'); ?>">
<script type="text/javascript" src="<?php echo assets('js/venom-button.min.js'); ?>"></script>
    
<div id="myButton"></div>


<script type="text/javascript">
    $('#myButton').venomButton({
        phone: ' 6285717438655',
        popupMessage: 'Assalamualaikum, adakah yang bisa kami bantu?',
        message: "",
        showPopup: true,
        position: "right",
        linkButton: false,
        showOnIE: false,
        headerTitle: '<p id="greetings"></p><?php echo $sysconf['library_name']; ?>',
        headerColor: '#25d366',
        backgroundColor: '#25d366',
        buttonImage: '<img src="<?php echo assets('images/whatsapp.svg'); ?>" />'
    });
</script>

<script>
    const time = new Date().getHours();
    let greeting;
    if (time < 10) {
      greeting = "Selamat Pagi";
    } else if (time < 20) {
      greeting = "Selamat Siang";
    } else {
      greeting = "Selamat Malam";
    }
    document.getElementById("greetings").innerHTML = greeting;
</script>
