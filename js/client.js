
var checkboxCode = document.querySelector("input[name='Ccodenull']");
var dateCode = document.querySelector("input[name='Ccode']");
var checkboxPermis = document.querySelector("input[name='Cpermisnull']");
var datePermis = document.querySelector("input[name='Cpermis']");

checkboxCode.onchange = function()
{
    if (!checkboxCode.checked)
    {
        dateCode.value = null;
        dateCode.disabled = true;
    }
    else dateCode.disabled = false;
}

checkboxPermis.onchange = function()
{
    if (!checkboxPermis.checked)
    {
        datePermis.value = null;
        datePermis.disabled = true;
    }
    else datePermis.disabled = false;
}

