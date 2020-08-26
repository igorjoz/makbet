const logoTitle = document.querySelector('.logo__text');
const logoImage = document.querySelector('.logo__image');

// sizes (from main.scss)
const extraSmall = 450;
const small = 600;
const medium = 900;
const large = 1200;
const extraLarge = 1450;

const getWidth = () => {
  return Math.max(
    document.body.scrollWidth,
    document.documentElement.scrollWidth,
    document.body.offsetWidth,
    document.documentElement.offsetWidth,
    document.documentElement.clientWidth
  );
}

const adjustLogo = () => {
  const width = getWidth();
  console.log(width);

  if (width < extraSmall) {
    logoTitle.textContent = 'Makbet';
  } else if (width < small) {
    logoTitle.textContent = 'Makbet';
  } else if (width < medium - 100) {
    logoTitle.textContent = 'Makbet';
  } else if (width < large) {
    logoTitle.textContent = 'Shakespeare - Makbet';
  } else {
    logoTitle.textContent = 'Shakespeare bez tajemnic - Makbet';
  }

  if (width < extraSmall) {
    logoTitle.style.fontSize = '40px';
    logoImage.style.width = '60px';
  } else {
    logoTitle.style.fontSize = '48px';
    logoImage.style.width = '70px';
  }
}

adjustLogo();
window.addEventListener('resize', adjustLogo);