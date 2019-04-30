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
        break;

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
$result = mysqli_query($mysqli, "SELECT * FROM caleg where kel='$kel' ORDER BY tps ASC");
 
    if (mysqli_num_rows($result) == 0 )
    {
        echo "<tr align='center'><td colspan='6'>Tidak ada data !</td></tr>";
    } 
                                    
    else {
        $id=1;
        while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$id."</td>";
            echo "<td>".$user_data['tps']."</td>";
            echo "<td>".$user_data['score1']."</td>";
            echo "<td>".$user_data['score2']."</td>";
            echo "<td>".$user_data['score3']."</td>";
            echo "<td bgcolor=yellow>".$user_data['scorehj']."</td>";
            echo "<td>".$user_data['score5']."</td>";
            echo "<td>".$user_data['score6']."</td>";
            echo "<td>".$user_data['score7']."</td>";
            echo "<td><a href='edit1.php?id=$user_data[id]'>Edit</a> | <a href='delete1.php?id=$user_data[id]'>Delete</a></td></tr>";
            echo "<tr>";  
            $id++;      

        }
    }
?>
