<?php 
    include_once 'rezheader.php';
?>

<div id="contents"> <!-- start of contents --> 
		<h2 class="booking"><span>Rezervasyon</span></h2>
		<div id="booking">
			<form action="" method="">
				<table>
					<tbody>
						<tr>
							<td colspan="2"><span>Adınız</span><input type="text" class="name"></td>
							<td><span>E-posta adresiniz</span><input type="text"></td>
						</tr>
						<tr>
							<td><span>Tarih</span><input type="text"></td>
							<td><span>Kişi sayısı</span><input type="text"  class="number"></td>
							<td>
								<span>Masa tercihi</span>
								<label for="outdoor"><input type="radio" class="radio" id="outdoor" name="preference">Dış mekan</label>
								<label for="indoor"><input type="radio" class="radio" id="indoor" name="preference">İç mekan</label>
							</td>
						</tr>
						<tr>
							<td colspan="3">
								<span>Bu özel bir durum mu? Lütfen bize buradan söyler misiniz?</span>
								<textarea></textarea>
								
							</td>
						</tr>
					</tbody>
				</table>
			</form>
			
		</div>
	</div> <!-- end of contents -->
    <?php 
    include_once 'rezfooter.php';
?>