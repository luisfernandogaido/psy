let Carrossel = {

  aberta: null,
  botaoSel: null,
  timer: null,

  mostra: function(a) {
    let carrossel = document.querySelector('.carrossel');
    let letreiro = carrossel.querySelector('.letreiro');
    let linha1 = letreiro.querySelector('.linha1');
    let linha2 = letreiro.querySelector('.linha2');
    if (Carrossel.aberta) {
      Carrossel.aberta.classList.remove('visivel');
      Carrossel.botaoSel.classList.remove('sel');
    }
    let im = carrossel.querySelector('img[data-ordem="' + a.dataset.ordem + '"]');
    Carrossel.aberta = im;
    Carrossel.aberta.classList.add('visivel');
    Carrossel.botaoSel = a;
    Carrossel.botaoSel.classList.add('sel');
    let ratioCar = carrossel.offsetWidth / carrossel.offsetHeight;
    let ratioImg = im.naturalWidth / im.naturalHeight;
    if (ratioImg > ratioCar) {
      im.classList.add('muito-deitada');
    } else {
      im.classList.remove('muito-deitada');
    }
    letreiro.classList.remove('visivel');
    linha1.textContent = im.dataset.linha1;
    if (im.dataset.fonteClara == '1') {
      linha1.classList.add('clara');
      linha2.classList.add('clara');
    } else {
      linha1.classList.remove('clara');
      linha2.classList.remove('clara');
    }
    linha2.textContent = im.dataset.linha2;
    setTimeout(function() {
      letreiro.classList.add('visivel');
    }, 0);

    clearTimeout(Carrossel.timer);
    let proximo = a.nextSibling;
    if (!proximo) {
      proximo = a.parentNode.querySelector('a');
    }
    Carrossel.timer = setTimeout(function() {
      Carrossel.mostra(proximo);
    }, 5000);

  },

  ini: function() {
    let carrossel = document.querySelector('.carrossel');
    let botoes = document.createElement('div');
    botoes.className = 'botoes';
    carrossel.appendChild(botoes);
    let a;
    let imgs = carrossel.querySelectorAll('img');
    for (let i = 0; i < imgs.length; i++) {
      imgs[i].dataset.ordem = i.toString();
      a = document.createElement('a');
      a.dataset.ordem = i.toString();
      a.addEventListener('click', function() {
        Carrossel.mostra(this);
      });
      botoes.appendChild(a);
    }
    let letreiro = document.createElement('div');
    letreiro.className = 'letreiro';
    let linha1 = document.createElement('p');
    linha1.className = 'linha1';
    letreiro.appendChild(linha1);
    let linha2 = document.createElement('p');
    linha2.className = 'linha2';
    letreiro.appendChild(linha2);
    carrossel.appendChild(letreiro);
    botoes.querySelector('a').click();
  },
};

Carrossel.ini();