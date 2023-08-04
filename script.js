function submit()
{
    var name=document.getElementById('floatingInput').value;
    var pass=document.getElementById('floatingPassword').value;
    if(name=="")
    {
        document.getElementById('floatingInput').focus();
        document.getElementById('msg').innerHTML="Please write the Username";
        return false;
    }
        else
        {
            document.getElementById('msg').remove();
        }
    if(pass=="")
    {
        document.getElementById('floatingPassword').focus();
        document.getElementById('msg').innerHTML="Please write the Password";
        return false;
    }
        else
        {
            document.getElementById('msg').remove();
        }

}