<h3><EditData Kategori</h3>
<?php
echo form_open('Kategori/edit');
?>
<input type="hidden" value="<?php echo $record['kategori_id']?>" name="id">
<table border="1">
	<tr><td>Nama Kategori</td>
			<td><input type="text" name="kategori" placeholder="kategori"
					   value="<?php echo $record['nama_kategori']?>">
			</td></tr>
		  <tr><td colspan="2"><button type="submit" name="submit">simpan</button></td></tr>
</table>
</form>			  