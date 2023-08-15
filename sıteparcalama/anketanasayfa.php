<?php 
        include_once 'anketheader.php';
    ?>
<div id="contents"> <!-- start of contents --> 
		<h2 class="booking"><span>Anketler</span></h2>
		<div id="booking">
			<p>
				

<br><br>
<center>
  <form name="anketanasayfa" method="POST" action="survey.php">
<label> 1-) Cinsiyetiniz Nedir? </label>

<div data-component="radio">

              <input type="radio" value="Erkek" name="Cinsiyet" checked />
              <label> Erkek </label>
       
              <input type="radio" value="Kadın" name="Cinsiyet" />
              <label> Kadın </label>
    
          </div><br>

          

    
    <label> 2-) Lütfen yaşınızı seçiniz </label>

<div data-component="radio">

              <input type="radio" value="15-17" name="yas" checked/>
              <label> 15-17 </label>
              <input type="radio" value="18-20" name="yas" />
              <label> 18-20 </label>
              <input type="radio" value="21-25" name="yas" />
              <label> 21-25 </label>
              <input type="radio" value="26-30" name="yas" />
              <label> 26-30 </label>
              <input type="radio" value="30+" name="yas" />
              <label> 30+ </label>
    
          </div><br>

          <label> 3-) Menülerimiz sizce yeterli mi? </label>

<div data-component="radio">

              <input type="radio" value="Yeterli " name="menuyetermi" checked />
              <label> Yeterli  </label>
       
              <input type="radio" value="Yetersiz" name="menuyetermi" />
              <label> Yetersiz </label>
              
          </div><br>

          <label> 4-) Lütfen Favoriniz Olan İçeceğimizi Seçiniz </label>

<div data-component="radio">

             <textarea style="resize:none;  width:500px; height:100px" name="eklemekistedikleriniz" >...</textarea><br><br>
              
    
          </div><br>

          <label> 5-) Lütfen Favoriniz Olan Yemeğinizi Seçiniz </label>

<div data-component="radio">

               <textarea style="resize:none;  width:500px; height:100px" name="eklemekistedikleriniz" >...</textarea><br><br>
              
    
          </div><br>

          <label> 6-) Bizde Ne Sıklıkla Yemek Yiyorsunuz? </label>

<div data-component="radio">

              <input type="radio" value="Hafta İçi Hergün" name="hamburgeryemek" checked/>
              <label> Hafta İçi Hergün  </label>
              <input type="radio" value="Haftada 1-3 Gün " name="hamburgeryemek" />
              <label> Haftada 1-3 Gün  </label>
              <input type="radio" value="Hiç" name="hamburgeryemek" />
              <label> Hiç</label>
              
              
    
          </div><br>
 

          <label> 7-) Menümüzde Yer Alan Yemeklerin Porsiyonları Sizin İçin Yeterli Mi? </label>

          <div data-component="radio">

              <input type="radio" value="Yeterli " name="yemekporsiyonlari" checked/>
              <label> Yeterli  </label>
       
              <input type="radio" value="Yetersiz" name="yemekporsiyonlari" />
              <label> Yetersiz </label>
              
          </div><br>

          <label> 8-) Yediğiniz Yemeğin Çeşidi Ve Kalitesi Dikkate Alındığında Fiyatı Sizin İçin Uygun Mu Puan Verir Misiniz?</label>

<div data-component="radio">

              <input type="radio" value="Yeterli " name="yemekkalitesi" checked/>
              <label> 1 </label>
       
              <input type="radio" value="Yetersiz" name="yemekkalitesi" />
              <label> 2 </label>

              <input type="radio" value="Yetersiz" name="yemekkalitesi" />
              <label> 3 </label>

              <input type="radio" value="Yetersiz" name="yemekkalitesi" />
              <label> 4 </label>

              <input type="radio" value="Yetersiz" name="yemekkalitesi" />
              <label> 5 </label>
              
          </div><br>

          <label> 9-) Restorantımızın Fiziki Kapasitesi Sizce Yeterli Mi Puan Verir Misiniz? </label>

<div data-component="radio">

              <input type="radio" value="Yeterli " name="fizikikapasite" checked/>
              <label> 1 </label>
       
              <input type="radio" value="Yetersiz" name="fizikikapasite" />
              <label> 2 </label>

              <input type="radio" value="Yetersiz" name="fizikikapasite" />
              <label> 3 </label>

              <input type="radio" value="Yetersiz" name="fizikikapasite" />
              <label> 4 </label>

              <input type="radio" value="Yetersiz" name="fizikikapasite" />
              <label> 5 </label>
              
          </div><br>

          <label> 10-) Restorant Çalışanlarımızdan Ne Kadar Memnunsunuz? </label>

<div data-component="radio">

              <input type="radio" value="Fazlasıyla  " name="calisanmemnuniyeti" checked/>
              <label> Fazlasıyla  </label>
              <input type="radio" value="İdare Eder " name="calisanmemnuniyeti" />
              <label> İdare Eder </label>
              <input type="radio" value="Biraz " name="calisanmemnuniyeti" />
              <label> Biraz</label>
              <input type="radio" value="Memnun Değilim " name="calisanmemnuniyeti" />
              <label> Memnun Değilim </label>
              
    
          </div><br>


          <label> 11-) Restorantımızın Temizliğinden Memnun musunuz? </label>

<div data-component="radio">

              <input type="radio" value="Evet" name="temizlik" checked/>
              <label> Evet  </label>
       
              <input type="radio" value="Hayır" name="temizlik" />
              <label> Hayır </label>
              
          </div><br>


          <label> 12-) Restorantımızın Paket Servis Çalışanlarından Memnun Musunuz? </label>

<div data-component="radio">

              <input type="radio" value="Evet " name="paketservis" checked/>
              <label> Evet  </label>
       
              <input type="radio" value="Hayır" name="paketservis" />
              <label> Hayır </label>
              
          </div><br>


          <label> 13-) Yemeklerin Sunuluş Biçiminden Memnun Musunuz?</label>

<div data-component="radio">

              <input type="radio" value="Evet " name="sunum" checked/>
              <label> Evet  </label>
       
              <input type="radio" value="Hayır" name="sunum" />
              <label> Hayır </label>

              <input type="radio" value="Geliştirilebilir" name="sunum" />
              <label> Geliştirilebilir </label>
              
          </div><br>


          <label> 14-) Restorantımızın Yiyecek Ve İçeceklerinden Memnun Musunuz? </label>

<div data-component="radio">

              <input type="radio" value="Evet " name="yiyecekmemnun" checked/>
              <label> Evet  </label>
       
              <input type="radio" value="Hayır" name="yiyecekmemnun" />
              <label> Hayır </label>
              
          </div><br>


          <label> 15-) Restorantımızın Dekorasyonundan Memnun Musunuz? </label>

<div data-component="radio">

              <input type="radio" value="Evet " name="isiklandirma" checked/>
              <label> Evet  </label>
       
              <input type="radio" value="Hayır" name="isiklandirma" />
              <label> Hayır </label>

              <input type="radio" value="Geliştirilebilir" name="isiklandirma" />
              <label> Geliştirilebilir </label>
              
          </div><br>



           <label> 16-) Restorantımız Hakkında Anket İçeriğinden Ayrı Olarak Eklemek İstediklerinizi Yazabilirsiniz	  </label><br>
  
    <textarea style="resize:none;  width:500px; height:100px" name="eklemekistedikleriniz" >Memnun Kaldık Teşekkür Ederiz</textarea><br><br>
              </form>
          </div>

          
  
    





 


            <center>           

            <button type="submit" name="submit">
            	<a href="#">
              Gönder
          </a>
            </button>

          </center>



        </center>
        


 

			

		
	</p>
			
		
			
		</div>
	</div> <!-- end of contents -->
    <?php 
        include_once 'anketfooter.php';
    ?>