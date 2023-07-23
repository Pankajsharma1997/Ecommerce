function validate()
{
    //validation for username
    var fullname = document.getElementById("user").value;
    if(fullname=="")
    {
        alert("user name required");
        return false;
    }
    if(!isNaN(fullname))
    {
      alert("Only Character allowed");
      return false;
    }
    if (fullname.length<=2)
    {
        alert("username must be greater than 2 charater");
        return false;

    }  

    // validation for email 
    var email = document.getElementById("email").value;
    if(email=="") 
    {
       alert("email required");
       return false;
}
    if (email.indexOf("@")==0)
    {
       alert("@ at invalid position");
       return false;
    }
}