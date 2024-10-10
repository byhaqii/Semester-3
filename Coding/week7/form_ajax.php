<!DOCTYPE html>
<html>
<head>
<title>Contoh Form dengan PHP dan JQuery</title>
<script src="https://code.jquery.com/jquery-3.6.8.min.js"></script>
</head>
<body>

<h2>Contoh Form</h2>

<form method="post" action="proses_lanjut.php">
<label for="pilihBuah">Pilih Buah:</label>
<select name="pilihBuah" id="pilihBuah">
<option value="apel">Apel</option>
<option value="pisang">Pisang</option>
<option value="jeruk">Jeruk</option>
</select><br><br>

<label for="warnaFavorit">Pilih Warna Favorit:</label>
<input type="checkbox" name="warna[]" value="merah">Merah
<input type="checkbox" name="warna[]" value="biru">Biru
<input type="checkbox" name="warna[]" value="hijau">Hijau<br><br>

<label for="jenisKelamin">Pilih Jenis Kelamin:</label>
<input type="radio" name="jenisKelamin" value="laki-laki">Laki-Laki
<input type="radio" name="jenisKelamin" value="perempuan">Perempuan<br><br>

<input type="submit" value="Submit">
</form>

<div id="hasil"></div>

<script>
$(document).ready(function() {
    $("form").submit(function(e) {
        e.preventDefault(); 

        var formData = $(this).serialize();

        $.ajax({
            url: "proses_lanjut.php", 
            type: "POST",
            data: formData,
            dataType: 'json', 
            success: function(response) {
                $("#hasil").html(response);
            }
        });
    });
});
</script>

</body>
</html>