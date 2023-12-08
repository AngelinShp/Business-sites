// Массивы
array1=['молоко', 100, 25];
array2=['бананы', 250, 30];
array3=['макароны', 150, 20];
console.log(array1[0], array1[1]+array1[2]);
console.log(array2[0], array2[1]+array2[2]);
console.log(array3[0], array3[1]+array3[2]);

// Функции

function calc_summ(a, b) {
    return a+b
}

console.log(calc_summ(2, 3))

// локальные и глобальные переменные:
function showMessage() {
    var message = 'Привет, я - Вася!';
    alert(message); // доступ есть
    }
    showMessage();
    alert(message); // ошибка обращения - доступа нет
      
 
    
// локальные и глобальные переменные_2:    
    var userName = 'Вася';
    function showMessage() {
      userName = 'Петя'; // использование внешней переменной
      var message = 'Привет, я '+ userName;
      alert(message ); // вывод переменной, доступной только функции, так как в ней была объявлена
    }
    alert(userName); // здесь Вася, так как значение внешней переменной ещё НЕ ИЗМЕНЕНО функцией, функция пока не вызвана
    showMessage();
    alert(userName); // Петя, так как значение внешней переменной ИЗМЕНЕНО функцией, функция вызвана
    
// локальные и глобальные переменные_3:    
var userName = 'Вася';
function showMessage() {
  var userName = 'Петя'; // глобальная НЕ ИЗМЕНЯЕТСЯ 
  var message = 'Привет, я '+ userName;
  alert(message ); // вывод переменной, доступной только функции, так как в ней была объявлена
}
alert(userName); // здесь Вася, так как значение внешней переменной ещё НЕ ИЗМЕНЕНО функцией, функция пока не вызвана
showMessage();
alert(userName); // здесь ВАСЯ, так как значение внешней переменной НЕ ИЗМЕНЕНО функцией, функция вызвана    