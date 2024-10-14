const showroomContainer = document.querySelector('.showrooom-container');
     
const buttons = document.querySelectorAll('.fon-button');

const backgroundImages = [
  './assets/img/showroom-images/Decor Plast 1.png',
  './assets/img/showroom-images/Decor Plast 2.png',
  './assets/img/showroom-images/Decor Plast 3.png',
  './assets/img/showroom-images/Decor Plast 4.png'
];

const updateBackground = (index) => {
  showroomContainer.style.backgroundImage = `url('${backgroundImages[index]}')`;

  buttons.forEach(button => button.classList.remove('fon-button-active'));

  buttons[index].classList.add('fon-button-active');
};

buttons.forEach((button, index) => {
  button.addEventListener('click', () => {
    updateBackground(index);
  });
});

updateBackground(0); 