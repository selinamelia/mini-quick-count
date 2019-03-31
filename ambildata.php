<?php
include_once("config.php");
$kel=$_POST['kel'];
switch ($kel) {
    case 'Mencirim':
        $kel='men';
        break;
    
    case 'Dataran Tinggi':
        $kel='dat';
        break;
    
    case 'SM Rejo':
        $kel='rejo';
        break;
    
    case 'SM Karya':
        $kel='kar';
        break;

    case 'Tanah Tinggi':
        $kel='tan';

    case 'Timbang Langkat':
        $kel='tim';
        break;

    case 'Tunggurono':
        $kel='tun';
        break;

        break;
}
var_dump($kel);
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM partai where kel='$kel' ORDER BY id DESC");
 
    if (mysqli_num_rows($result) == 0 )
    {
        echo "<tr align='center'><td colspan='6'>Tidak ada data !</td></tr>";
    } 
                                    
    else {
        $id=1;
        while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$id."</td>";
            echo "<td>".$user_data['name']."</td>";
            echo "<td>".$user_data['score']."</td>";
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";  
            $id++;      
        }
    }
?>