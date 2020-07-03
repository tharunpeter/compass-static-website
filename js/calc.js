function buttonclick(val)
{
    console.log(val)
    document.getElementById("screen").value+=val
}
function clearDisplay(){
    document.getElementById("screen").value=""
}
function equalClick(){
    var text=document.getElementById("screen").value
    var result=text*1600
    document.getElementById("screen").value=result
}