var select = document.querySelector("select[name='FId_client'");
select.onchange = function()
{
    window.location.href = "?FId_client=" + select.value;
}