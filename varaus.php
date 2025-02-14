<?php
include "db.php";

$json=isset($_POST["reservation"]) ? $_POST["reservation"] : "";
if (!($reservation=checkJson($json))) {
    echo "Täytä kaikki kentät";
    exit;
}
$currentDate = date('Y-m-d');
if ($reservation->pvm < $currentDate) {
    echo "Päivämäärä ei voi olla menneisyydessä!";
    exit;
}

$sql="insert into varaus (etunimi, sukunimi, puhnumero, sposti, maara, pvm) values(?, ?, ?, ?, ?, ?)";

$stmt=mysqli_prepare($yhteys, $sql);
mysqli_stmt_bind_param($stmt, 'ssssss', $reservation->etunimi, $reservation->sukunimi, $reservation->puhnumero, $reservation->sposti, $reservation->maara, $reservation->pvm);
mysqli_stmt_execute($stmt);

mysqli_close($yhteys);

?>
<?php
    function checkJson($json){
        if(empty($json)){
            return false;
        }
        $reservation=json_decode($json, false);
        if (empty($reservation->etunimi) || empty($reservation->sukunimi) || empty($reservation->puhnumero)|| empty($reservation->sposti) || empty($reservation->maara) || empty($reservation->pvm)){
            return false;
        }
        return $reservation;
    }
?>