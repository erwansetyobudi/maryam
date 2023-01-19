<?php
# @Author: Waris Agung Widodo <user>
# @Date:   2018-01-23T11:26:05+07:00
# @Email:  ido.alit@gmail.com
# @Filename: footer.php
# @Last modified by:   Erwan Setyo Budi (erwans818@gmail.com)
# @Last modified time: 2018-01-23T11:26:47+07:00
?>


<footer class="py-4 bg-blue-darkest text-grey-lighter">
    <div class="container">
        <div class="row py-4">
            <div class="col-md-3">
              <?php
              if(isset($sysconf['logo_image']) && $sysconf['logo_image'] != '' && file_exists('images/default/'.$sysconf['logo_image'])){
                echo '<img class="h-16 mb-2" src="images/default/'.$sysconf['logo_image'].'">';
                }
              elseif (file_exists(__DIR__ . '/../assets/images/logo.png')) {
                echo '<img class="h-12 w-12 mb-2" src="' . assets('images/logo.png') . '">';
              } else {
                ?>
                  <svg
                          class="fill-current text-grey-lighter block h-12 w-12 mb-2"
                          version="1.1"
                          xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                          viewBox="0 0 118.4 135" style="enable-background:new 0 0 118.4 135;"
                          xml:space="preserve">
                    <path d="M118.3,98.3l0-62.3l0-0.2c-0.1-1.6-1-3-2.3-3.9c-0.1,0-0.1-0.1-0.2-0.1L61.9,0.8c-1.7-1-3.9-1-5.4-0.1l-54,31.1
                    l-0.4,0.2C0.9,33,0.1,34.4,0,36c0,0.1,0,0.2,0,0.3l0,62.4l0,0.3c0.1,1.6,1,3,2.3,3.9c0.1,0.1,0.2,0.1,0.2,0.2l53.9,31.1l0.3,0.2
                    c0.8,0.4,1.6,0.6,2.4,0.6c0.8,0,1.5-0.2,2.2-0.5l53.9-31.1c0.3-0.1,0.6-0.3,0.9-0.5c1.2-0.9,2-2.3,2.1-3.7c0-0.1,0-0.3,0-0.4
                    C118.4,98.6,118.3,98.5,118.3,98.3z M114.4,98.8c0,0.3-0.2,0.7-0.5,0.9c-0.1,0.1-0.2,0.1-0.2,0.1l-20.6,11.9L59.2,92.1l-33.9,19.6
                    L4.6,99.7l0,0l0,0C4.2,99.5,4,99.2,4,98.8l0-62.5l0,0l0-0.1c0-0.4,0.2-0.7,0.5-0.9l20.8-12l33.9,19.6l33.9-19.6l20.6,11.9l0.1,0
                    c0.3,0.2,0.5,0.5,0.6,0.9l0,62.3L114.4,98.8L114.4,98.8z M95.3,68.6v39.4L23.1,66.4V26.9L95.3,68.6z"/>
                </svg>
              <?php } ?>
                <div class="mb-4"><?php echo $sysconf['library_name']; ?></div>
                <ul class="list-reset">
                    <li><a class="text-light" href="index.php?p=libinfo"><?= __('Information'); ?></a></li>
                    <li><a class="text-light" href="index.php?p=services"><?= __('Services'); ?></a></li>
                    <li><a class="text-light" href="index.php?p=librarian"><?= __('Librarian'); ?></a></li>
                    <li><a class="text-light" href="index.php?p=member"><?= __('Member Area'); ?></a></li>
                </ul>
                </br>
                <p><?= $sysconf['template']['classic_map_desc']; ?></p>
            </div>
            <div class="col-md-5 pt-8 md:pt-0">
                <h4 class="mb-4"><?= __('About Us'); ?></h4>
                <p>
                    <?= $sysconf['template']['classic_footer_about_us']; ?>
                </p>
            </div>
            <div class="col-md-4 pt-8 md:pt-0">
                <h4 class="mb-4"><?= __('Search'); ?></h4>
                <div class="mb-2"><?= __('start it by typing one or more keywords for title, author or subject'); ?></div>
                <form action="index.php">
                    <div class="input-group mb-3">
                        <input name="keywords" type="text" class="form-control"
                               placeholder="<?= __('Enter keywords'); ?>"
                               aria-label="Enter keywords"
                               aria-describedby="button-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit" value="search" name="search"
                                    id="button-addon2"><?= __('Find Collection'); ?>
                            </button>
                        </div>
                    </div>
                </form>
                <hr>
                <a target="_blank" title="Support Us" class="btn btn-outline-success mb-2"
                   href="https://slims.web.id/web/pages/support-us/"><i
                            class="fas fa-heart mr-2"></i><?= __('Keep SLiMS Alive'); ?></a>
                <a target="_blank" title="Contribute" class="btn btn-outline-light mb-2"
                   href="https://github.com/slims/"><i
                            class="fab fa-github mr-2"></i><?= __('Want to Contribute?'); ?></a>
            </div>
        </div>
        
        
    </div>
</footer>
<footer class="py-3 bg-dark text-grey-lighter">
    <div class="container">
        
        <div class="flex font-thin text-sm">
            <p class="flex-1">&copy; <?php echo date('Y'); ?> &mdash; <?php echo $sysconf['library_name']; ?></p>
            <div class="flex-1 text-right text-grey"><?= __('Powered by '); ?><code>SLiMS</code></div>
        </div>
    </div>
</footer>


<?php if ($sysconf['chat_system']['enabled'] && $sysconf['chat_system']['opac']) : ?>
    <div id="show-pchat2" style="position: fixed; bottom: 16px; right: 16px" class="shadow rounded">
        <button title="Chat" class="btn btn-primary"><i class="fas fa-comments mr-2"></i><?= __('Chat'); ?></button>
    </div>
<?php endif; ?>

<?php
// Chat Engine
include LIB . "contents/chat.php"; ?>

<!-- // Load modal -->
<?php include "_modal_topic.php"; ?>
<?php include "_modal_advanced.php"; ?>

<!-- // Load highlight -->
<script src="<?= JWB; ?>highlight.js"></script>
<?php if(isset($_GET['search']) && (isset($_GET['keywords'])) && ($_GET['keywords'] != ''))   : ?>
<script>
  $('.card-link, p, dl > dd').highlight(<?= $searched_words_js_array; ?>);
</script>
<?php endif; ?>

<!-- // load our vue app.js -->
<script src="<?php echo assets('js/app.js?v=' . date('Ymd-his')); ?>"></script>
<script src="<?php echo assets('js/app_jquery.js?v=' . date('Ymd-his')); ?>"></script>
<?php include __DIR__ . "./../assets/js/vegas.js.php"; ?>
<?php if ($sysconf['chat_system']['enabled'] && $sysconf['chat_system']['opac']) : ?>
    <script>
        $('#show-pchat').click(() => {
            $('.s-chat').hide()
            $('#show-pchat2').show()
        })
        $('#show-pchat2').click(() => {
            $('.s-chat').show(300, () => {
                $('#show-pchat2').hide()
            })
        })
    </script>
<?php endif; ?>
<!-- Add Wa Button by Erwan Setyo Budi -->

<div class="floating-whatsapp" id="floating-whatsapp">
  <div class="floating-whatsapp-form-container">
    <div class="floating-whatsapp-header">
      <div class="profile-photo">
        <img src="<?= get_home_url() ?>/wp-content/themes/vista/assets/images/profile.jpg" alt="Profile Photo">
      </div>
      <div class="profile-information">
        <div class="profile-name">
          <span>Fallen</span>
        </div>
        <div class="profile-status">
          <span>Online</span>
        </div>
      </div>
    </div>
    <form id="floating-whatsapp-form" method="get" action="https://api.whatsapp.com/send" target="_blank">
      <input type="hidden" name="phone" value="+5564992260920">
      <div class="initial-message">
        <div class="wp-message">
          <div class="wp-message-name">Fallen</div>
          <span>Oi!! Vamos cotar o seu seguro sem compromissos aqui pelo WhatsApp?? S贸 escrever sua mensagem abaixo e enviar. 馃槈</span>
        </div>
      </div>
      <input required type="text" name="text" placeholder="Digite uma mensagem">
    </form>
  </div>
  <button type="submit" form="floating-whatsapp-form">
    <img src="<?= get_home_url() ?>/wp-content/themes/vista/assets/images/whatsapp.png" class="whats">
    <img src="<?= get_home_url() ?>/wp-content/themes/vista/assets/images/send.png" class="send">
  </button>
</div>
<style type="text/css">
 @keyframes floatingWhats {
  0% {
    transform: translate(-50%, -50%) scale(1);
    opacity: 1;
  }
  100% {
    transform: translate(-50%, -50%) scale(1.4);
    opacity: 0;
  }
}
.floating-whatsapp {
  position: fixed;
  bottom: 50px;
  right: 50px;
  z-index: 999;
}
.floating-whatsapp button {
  position: absolute;
  bottom: 0;
  right: 0;
  width: 70px;
  height: 70px;
  background-color: #25d366;
  border-radius: 50%;
  border: 0;
  cursor: pointer;
  outline: none;
  box-shadow: 0 3px 4px rgba(0, 0, 0, 0.1);
}
.floating-whatsapp button:focus {
    outline: none !important;
}
.floating-whatsapp button::before {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%;
  height: 100%;
  background: #25d366;
  border-radius: 50%;
  animation: .9s ease floatingWhats infinite;
}
.floating-whatsapp button img {
  width: 50%;
  filter: invert(1);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.floating-whatsapp button img.send {
  opacity: 0;
  transform: translate(-50%, -50%) rotate(-180deg) scale(0);
}
.floating-whatsapp button,
.floating-whatsapp button img,
.floating-whatsapp-form-container {
  transition: 0.7s ease;
}
.floating-whatsapp-form-container {
  position: relative;
  background-image: url(./assets/images/background_wp.png);
  background-color: antiquewhite;
  border-radius: 5px;
  box-shadow: 0 3px 4px rgba(0, 0, 0, 0.1);
  overflow: hidden;

  width: 0;
  height: 0;
  opacity: 0;
}
.floating-whatsapp-form-container form {
  height: 300px;
  width: 250px;
}
.floating-whatsapp-form-container form input {
  position: absolute;
  bottom: 5px;
  left: 5px;
  width: calc(100% - 60px);
  height: 40px;
  border: 0;
  border-radius: 40px;
  padding: 0 10px;
  outline: none;
  font-size: 14px;
  
}
.initial-message {
  position: relative;
}
.initial-message::before {
  content: '';
  position: absolute;
  top: 0;
  left: 2px;
  width: 0;
  height: 0;
  border-bottom: 15px solid transparent;
  border-right: 15px solid #ffffff;
}
.initial-message .wp-message {
  display: block;
  font-size: 14px;
  line-height: 18px;
  color: #323232;
  margin: 15px;
  padding: 10px 10px 18px;
  width: 100%;
  background-color: #FFF;
  border-radius: 5px;
  box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);
}
/* on over */
.floating-whatsapp:hover .floating-whatsapp-form-container {
  height: 350px;
  width: 300px;
  opacity: 1;
}
.floating-whatsapp:hover button {
  width: 40px;
  height: 40px;
  bottom: 5px;
  right: 5px;
}
.floating-whatsapp:hover button::before {
  animation: none;
}
.floating-whatsapp:hover button img.whats {
  opacity: 0;
  transform: translate(-50%, -50%) rotate(180deg) scale(0);
}
.floating-whatsapp:hover button img.send {
  opacity: 1;
  transform: translate(-50%, -50%) rotate(0) scale(1);
}




.floating-whatsapp-header {
    display: flex;
    padding: 15px 12px;
    background-color: #075E54;
    color: #fff;
}
.profile-photo {
    position: relative;
    width: 55px;
    height: 55px;
    margin-right: 15px;
}
.profile-photo::after {
    content: '';
    position: absolute;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background-color: #25d366;
    right: 0;
    bottom: 0;
    right: 5px;
    bottom: 2px;
}
.profile-photo img {
    border-radius: 50%;
}
.profile-information {
    flex: 1;
    
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.profile-status span {
    font-size: 12px; 
}
.profile-name {
    margin-bottom: -8px;
}
.wp-message span {
    font-weight: 500;
}
.wp-message-name {
    color: #7b7b7b;
    margin-bottom: 5px;
    font-size: 14px;
}

/*   
</style>
</body>
</html>
