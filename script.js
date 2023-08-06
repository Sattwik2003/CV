function submit()
{
    var name=document.getElementById('floatingInput').value;
    var pass=document.getElementById('floatingPassword').value;
    if(name=="")
    {
        document.getElementById('floatingInput').focus();
        document.getElementsByClassName('msg')[0].innerHTML="Please write the Username";
        //return false;
    }
        if(name!="")
        {
            document.getElementsByClassName('msg')[0].innerHTML="";
        }
    if(pass=="")
    {
        document.getElementById('floatingPassword').focus();
        document.getElementsByClassName('msg')[1].innerHTML="Please write the Password";
        //return false;
    }
        if(pass!="")
        {
            document.getElementsByClassName('msg')[1].innerHTML="";
        }

}