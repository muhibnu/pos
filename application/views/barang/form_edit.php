<h3>Data Kategori</h3>
<?php
echo form_open('barang/edit');
?>
<table border="1">
<input type="hidden" name="id" value="<?php echo $record['barang_id']?>"
	<tr><td>Nama Barang</td>
			<td><input type="text" name="nama_barang" value="<?php echo $record['nama_barang']?>" placeholder="nama_barang">
			</td></tr>
	<tr><td>Kategori</td><td>		
			<select name="kategori">
				<?php
				foreach ($kategori as $k) 
				{
					echo "<option value='$k->kategori_id'";
					echo $record['kategori_id']==$k->kategori_id?'selected':'';
					echo">$k->nama_kategori</option>";
				}
				?>
			</select>
		</td></tr>	
	<tr><td>Harga</td>
			<td><input type="text" name="harga" value="<?php echo $record['harga']?>" placeholder="harga">
			</td></tr>
		  <tr><td colspan="2"><button type="submit" name="submit">simpan</button></td></tr>
</table>
</form>			  