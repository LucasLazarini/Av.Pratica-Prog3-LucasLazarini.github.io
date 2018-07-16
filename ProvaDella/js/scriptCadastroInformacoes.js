function exibirInput(select) {
  if (select.selectedIndex == 1) {
    document.getElementById('telefone').style.display = 'block';
    document.getElementById('email').style.display = 'none';
    document.getElementById('aniversario').style.display = 'none';
    document.getElementById('endereco').style.display = 'none ';
  }else if (select.selectedIndex == 2) {
    document.getElementById('telefone').style.display = 'none';
    document.getElementById('email').style.display = 'block';
    document.getElementById('aniversario').style.display = 'none';
    document.getElementById('endereco').style.display = 'none ';
  }else if (select.selectedIndex == 3){
    document.getElementById('telefone').style.display = 'none';
    document.getElementById('email').style.display = 'none';
    document.getElementById('aniversario').style.display = 'none';
    document.getElementById('endereco').style.display = 'block';
  }else if (select.selectedIndex == 4) {
    document.getElementById('telefone').style.display = 'none';
    document.getElementById('email').style.display = 'none';
    document.getElementById('aniversario').style.display = 'block';
    document.getElementById('endereco').style.display = 'none';
  }

}
