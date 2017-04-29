<?php include "atas.php";?>

<form name ="frm_cal" action="proses.php">

<input type="text" name="bilangan_1" />

<select name="cmbop">
<option value="tambah"> + </option>
<option value="kurang"> - </option>
<option value="kali"> * </option>
<option value="bagi"> / </option>
</select>
<input type="text" name="bilangan_2"/>
<input type="submit" value="=" />
</form>



<?php include "bawah.php";?>


