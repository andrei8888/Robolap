 var attempt = 3;
function validate(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if ( username == "admin" && password == "admin"){
        window.location = "admin_page.php";
        return true;
    }
    else{
        attempt--;
        alert("You have left "+attempt+" attempt;");
        if(attempt == 0){
            window.history.back()
            return false;
        }
    }
}