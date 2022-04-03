

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oficjalna strona internetowa Nike. Nike PL</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/0aebde7c02.js" crossorigin="anonymous"></script>
    <link rel="icon" href="nikeicon.png">
</head>
<body>  
<?php include ("nav.php");?>

<?php

error_reporting(0);

if (isset($_SESSION['name'])) {
    print '<div class="wybor">
    <ul>
    <li>Moje zamówienia<li/>
    <li>Ustawienia</li>
    <li><a href="logout">Wyloguj się </a></li>

    </div>';

}

if (!isset($_SESSION['name'])) {
    if(isset($_GET['action'])){
    if(($_GET['action'] === 'join_us')){
        print '<div class="loginform">
        <center><br><br><br><br>
        <i><img src="nikeswoosh.png" width="2.5%"></i><br><br>
        <b>ZOSTAŃ CZŁONKIEM NIKE</b><br><br>
        <div style="font-size:14px;color:grey;padding-bottom:15px">Utwórz profil członka Nike i uzyskaj dostęp do<br>
        najlepszych produktów Nike, inspiracji i<br>społeczności.
        </div>
        <form method="post">
            <input type="email" name="email" class="lgform" placeholder="Adres e-mail" required><br>
            <input type="text" name="imie" class="lgform" placeholder="Imię" required><br>
            <input type="text" name="nazwisko" class="lgform" placeholder="Nazwisko" required><br>
            <input type="password" name="password" class="lgform" placeholder="Hasło" required><br>
            <input type="password" name="cpassword" class="lgform" placeholder="Powtórz hasło" required><br>
            <p style="padding-bottom:20px;padding-top:15px">Klikając "Dołącz do nas", wyrażasz zgodę na <a href="regulamin" style="color:#111;text-decoration: underline;">Regulamin.</a></p>
            <input type="submit" name="log-in" id="zaloguj" value="DOŁĄCZ DO NAS"><br>
            <p>Czy jesteś już członkiem? <a href="?action=log_in" style="color:#111;text-decoration: underline;">Zaloguj się.</a></p>
    </form>
    
    </div>';
    }
    if(($_GET['action'] !== 'join_us')) {
        print '<div class="loginform">
        <center><br><br><br><br>
        <i><img src="nikeswoosh.png" width="2.5%"></i><br><br>
        <b>KONTO UMOŻLIWIAJĄCE <br>
        DOSTĘP DO WSZYSTKICH <br>
        USŁUG NIKE</b><br><br>
        <form method="post">
            <input type="email" name="email" class="lgform" placeholder="Adres e-mail" required><br>
            <input type="password" name="password" class="lgform" placeholder="Hasło" required><br>';
            print
            '<p style="color:red;padding-top:10px;padding-bottom:10px;font-size:0px" id="error">Adres e-mail albo hasło są niepoprawne.</p>
            
            <a href="#" style="font-size:12px;color:grey;">Nie pamiętasz hasła?</a><br><br>
            <input type="submit" name="submit" id="zaloguj" value="ZALOGUJ SIĘ"><br>
            <p>Nie jesteś jeszcze członkiem? <a href="?action=join_us" style="color:#111;text-decoration: underline;">Dołącz do nas.</a></p>
    </form>
    
    </div>';
    }
}
else {
    header ("location: account?action=myprofile");
}
}
?>

<?php 

include 'config.php';


if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = ($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['name'] = $row['name'];
		header("Location: home.php");
	} else {
		echo '<script>document.getElementById("error").style.fontSize = "12px"</script>';
	}
}

?>

<?php include ("footer.php");?>

</body>
</html>