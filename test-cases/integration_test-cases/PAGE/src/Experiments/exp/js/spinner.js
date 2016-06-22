function RotateSpinner(spinnerId,up) 
{
    var cvalue=document.getElementById(spinnerId).value;
    if(up)
    {
        if(cvalue < 255)
        document.getElementById(spinnerId).value = parseInt(document.getElementById(spinnerId).value) + 1; 
    }

    else
    {
        if(cvalue > 0)
        document.getElementById(spinnerId).value = parseInt(document.getElementById(spinnerId).value) - 1;
    }
}