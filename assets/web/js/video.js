function handleIntersection(entries) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const video = entry.target.querySelector('.video');
        video.play();
      } else {
        const video = entry.target.querySelector('.video');
        video.pause();
      }
    });
  }

  const observer = new IntersectionObserver(handleIntersection, {
    threshold: 0.5,
  });

  const videoContainers = document.querySelectorAll('.video-container');

  videoContainers.forEach((container) => {
    observer.observe(container);
  });