<?php
	$url = 'http://semarang.heritagejava.com/generatekategori.php';
	$xml=file_get_contents($url);
	$xml = simplexml_load_string($xml);
	$inc=0;
	?>
	<select>
	<?php
	foreach($xml as $x){
		?>
		 <option value="
		<?php
		echo $xml->kategori[$inc]['id'];
	?>
	"> <?php
		echo $xml->kategori[$inc]['namaKategori'];
		?>
		</option>
		<?php
		$inc++;
	}
?>
</select>