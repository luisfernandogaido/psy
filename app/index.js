window.addEventListener('scroll', function() {
  artigos.style.backgroundPositionY = ((-document.scrollingElement.scrollTop + artigos.offsetTop) / 3) + 'px';
});
let artigos = document.getElementById('artigos');
setTimeout(function() {
  artigos.style.backgroundPositionY = ((-document.scrollingElement.scrollTop + artigos.offsetTop) / 3) + 'px';
}, 100);