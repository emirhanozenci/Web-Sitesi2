<?php 
        include_once 'kayıtheader.php';
    ?>
<div id="contents"> <!-- start of contents --> 
		<h2 class="booking"><span>Kayıt Ol</span></h2>
		<div id="booking">
			<p>
				
  <div class="container">
    <form action="kayıtanasayfa.php" method="get">
    <h1>Kayıt Ol</h1>
    <p>Bir hesap oluşturmak için lütfen bu formu doldurun.</p>
    <hr>
    <form class="signup-form" action="includes/signup.inc.php" method="POST">
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Email Giriniz" name="email" required>

    <label for="kullanıcıadı"><b>Kullanıcı Adı</b></label>
    <input type="text" placeholder="Kullanıcı Adı Giriniz" name="kullanıcıadı" required>


    <label for="psw"><b>Şifre</b></label>
    <input type="password" placeholder="Şifre Giriniz" name="psw" required>

    <label for="pswrepeat"><b>Şifrenizi Tekrar Giriniz</b></label>
    <input type="password" placeholder="Şifrenizi Tekrar Giriniz" name="pswrepeat" required>

    
    <div class="clearfix">
      <button type="submit" class="signupbtn">Kayıt Ol</button>
    </div>
    </form>
    </form>
  </div>


			

		
	</p>
			
		
			
		</div>
	</div> <!-- end of contents -->
    <?php 
        include_once 'kayıtfooter.php';
    ?>