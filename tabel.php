<?php include "header.php" ; ?>
<?php 
    if ( isset ($_GET["kelas"]) == true )
    {
        $kelas = " Kelas " . $_GET["kelas"];
    } else
    {
        $kelas = "" ;
    }
    
?>
<h1>Peserta Kuliah Pemrograman Web <?php echo $kelas ; ?></h1>
<table class="table-striped" width=600px>
<?php
for ($x = 1; $x <= 10; $x++) {
    ?>
    <tr>
        <td><?php echo $x ; ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
<?php    
}
?> 
</table>

<?php include "footer.php" ; ?>