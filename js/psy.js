let Header = {

  els: {
    hamburguer: document.querySelector('#hamburguer'),
    menu: document.querySelector('menu'),
    call: document.querySelector('#call'),
    contato: document.querySelector('header .contato'),
  },

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

    document.body.addEventListener('click', function() {
      Header.els.menu.classList.remove('visivel');
      Header.els.contato.classList.remove('visivel');
    });
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
  oculta: function(el) {
    el.classList.add('oculto');
  },
  mostra: function(el) {
    el.classList.remove('oculto');
  },
};
Header.ini();