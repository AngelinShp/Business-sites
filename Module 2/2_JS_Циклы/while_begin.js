while (условие) {
    // код, тело цикла
    }
    
    var i = 0;
      while (i < 10) {
        alert(i);
        i++;
    }
    
    var num;
    while (true) {
      num = prompt('Введите число, больше 100: ', 0);
      if (num > 100) {
        alert('Ваше число: ' + num + '.');
        break;
      } else if (num === null) {
        alert('Вынажали кнопку «Отмена».');
        break;
      } else {
        alert('Введите ещё раз.');
      }
    }
    