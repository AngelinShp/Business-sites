function calculateSalary(zarplata) {
    if (zarplata < 100000) {
        var oklad = zarplata - (zarplata * 0.35);
        console.log(oklad);
    }
    else {
        var oklad = zarplata - (zarplata * 0.45);
    }
    return oklad
}

var zarplata = prompt('Введите оклад', 100);

alert('Оклад: ' + calculateSalary(zarplata));
var ok = confirm('Продолжить вычисления?')
while (ok) {
    var zarplata = prompt('Введите оклад', 100);
    alert('Оклад: ' + calculateSalary(zarplata));
    var ok = confirm('Продолжить вычисления?')
}