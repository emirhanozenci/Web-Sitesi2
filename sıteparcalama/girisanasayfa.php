<?php
        include_once 'girisheader.php';
    ?>
<div id="contents"> <!-- start of contents --> 
		<h2 class="booking"><span>Giris</span></h2>
		<div id="booking">
			<p>
				

			
  <div class="imgcontainer">
  </div>
  <form action="login.php" method="POST">
  <div class="container">
    <form action="veridene.php" method="POST">
    <label for="uname"><b>Kullanıcı Adı</b></label>
    <input type="text" placeholder="Kullanıcı Adı Giriniz" name="uname" required>

    <label for="psw"><b>Şifre</b></label>
    <input type="password" placeholder="Şifre Giriniz" name="psw" required>

    <button type="submit">Giriş</button>
    <label>
      
      <input type="checkbox" checked="checked" name="remember"> Beni Hatırla
    </label>
    <br>
    <span class="psw"> <a href="#">Şifremi Unuttum</a></span>
    </form>
  </div>
</form>


		
	</p>
			
		
			
		</div>
	</div> <!-- end of contents -->

    <?php
        include_once 'girisfooter.php';
    ?>