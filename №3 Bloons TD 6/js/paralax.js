window.addEventListener('scroll', function() {
    const offset = window.pageYOffset;
    document.querySelector('.baner').style.backgroundPositionY = -offset * 0.2 + 'px';
    document.querySelector('.baner').style.opacity = 1 - offset / 700;
  });