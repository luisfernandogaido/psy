let Header = {

  els: {
    hamburguer: document.querySelector('#hamburguer'),
    menu: document.querySelector('menu'),
    call: document.querySelector('#call'),
    contato: document.querySelector('header .contato'),
    aSubs: document.querySelectorAll('menu > a.sub'),
    subs: document.querySelectorAll('menu div.sub'),
  },

  timerSub: null,

  ini: function() {

    Header.els.hamburguer.addEventListener('click', function(e) {
      e.stopPropagation();
      Header.els.menu.classList.toggle('visivel');
      Header.ocultaContato();
    });

    Header.els.call.addEventListener('click', function(e) {
      e.stopPropagation();
      if (Header.els.contato.classList.contains('visivel')) {
        Header.ocultaContato();
      } else {
        Header.mostraContato();
      }
      Header.els.menu.classList.remove('visivel');
    });

    for (let i = 0; i < Header.els.aSubs.length; i++) {
      Header.els.aSubs[i].addEventListener('click', function(e) {
        if (Tela.isTouch()) {
          if (window.matchMedia('(min-width: 1024px)').matches) {
            e.stopPropagation();
            e.preventDefault();
            let subAberto = document.querySelector('menu div.sub.visivel');
            if (subAberto) {
              subAberto.classList.remove('visivel');
            }
            let a = this;
            let sub = a.nextSibling.nextSibling;
            sub.classList.add('visivel');
            let rect = a.getBoundingClientRect();
            sub.style.left = (rect.left) + 'px';

          } else {
            if (e.clientX > 200) {
              let a = this;
              let sub = a.nextSibling.nextSibling;
              sub.classList.toggle('visivel');
              e.stopPropagation();
              e.preventDefault();
            }
          }
        }
      });

      Header.els.aSubs[i].addEventListener('mouseover', function() {
        if (!Tela.isTouch()) {
          let a = this;
          let sub = a.nextSibling.nextSibling;
          sub.classList.add('visivel');
          let rect = a.getBoundingClientRect();
          sub.style.left = (rect.left) + 'px';
        }
      });

      Header.els.aSubs[i].addEventListener('mouseout', function() {
        if (!Tela.isTouch()) {
          let a = this;
          let sub = a.nextSibling.nextSibling;
          Header.timerSub = setTimeout(function() {
            sub.classList.remove('visivel');
          }, 25);
        }
      });
    }

    for (let i = 0; i < Header.els.subs.length; i++) {

      Header.els.subs[i].addEventListener('mouseover', function() {
        if (!Tela.isTouch()) {
          clearTimeout(Header.timerSub);
        }
      });

      Header.els.subs[i].addEventListener('mouseout', function() {
        if (!Tela.isTouch()) {
          let sub = this;
          Header.timerSub = setTimeout(function() {
            sub.classList.remove('visivel');
          }, 25);
        }
      });

    }

    document.body.addEventListener('click', function() {
      Header.els.menu.classList.remove('visivel');
      Header.els.contato.classList.remove('visivel');
    });

    if (window.matchMedia('(min-width: 1024px)').matches) {
      document.body.addEventListener('click', function() {
        let sub = document.querySelector('menu div.sub.visivel');
        if (sub) {
          sub.classList.remove('visivel');
        }
      });
    } else {
      Tela.oculta(Header.els.contato);
    }

  },

  ocultaContato: function() {
    Header.els.contato.classList.remove('visivel');
    setTimeout(function() {
      Tela.oculta(Header.els.contato);
    }, 250);
  },

  mostraContato: function() {
    setTimeout(function() {
      Header.els.contato.classList.add('visivel');
    }, 0);
    Tela.mostra(Header.els.contato);
  },

};

let Tela = {

  device: {
    touch: null,
    size: null,
  },

  oculta: function(el) {
    el.classList.add('oculto');
  },

  mostra: function(el) {
    el.classList.remove('oculto');
    el.classList.remove('oculta');
  },

  isOculto: function(el) {
    return el.classList.contains('oculto') || el.classList.contains('oculta');
  },

  isTouch: function() {
    return 'ontouchstart' in window;
  },

  getDevice: function() {
    let device = {};
    if (window.matchMedia('(min-width: 1024px)').matches) {
      device.size = 'g';
    } else if (window.matchMedia('(min-width: 768px)').matches) {
      device.size = 'm';
    } else {
      device.size = 'p';
    }
    device.touch = Tela.isTouch();
    return device;
  },

  ini: function() {
    Tela.device = Tela.getDevice();
    if (Tela.device.touch) {
      document.body.classList.add('touch');
    }
    window.addEventListener('resize', function() {
      let device = Tela.getDevice();
      if (device.size != Tela.device.size || device.touch != Tela.device.touch) {
        window.location.reload();
      }
    });
  },

};

(function() {

  Header.ini();
  Tela.ini();

  document.getElementById('to-top').addEventListener('click', function() {
    document.scrollingElement.scrollTop = 0;
  });
  window.addEventListener('scroll', function() {
    if (document.scrollingElement.scrollTop) {
      document.getElementById('to-top').classList.add('visivel');
    } else {
      document.getElementById('to-top').classList.remove('visivel');
    }
  });

  let observer = new MutationObserver(function() {
    let botoes = document.querySelectorAll('.botoes a:not([href])');
    for (let i = 0; i < botoes.length; i++) {
      botoes[i].href = 'javascript:void(0)';
    }
  });
  observer.observe(document.body, {
    childList: true,
    attributes: true,
    characterData: true,
    subtree: true,
  });

})();