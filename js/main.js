// Smooth scroll effect
document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', e => {
      if (link.hash !== '') {
        e.preventDefault();
        document.querySelector(link.hash).scrollIntoView({ behavior: 'smooth' });
      }
    });
  });
  