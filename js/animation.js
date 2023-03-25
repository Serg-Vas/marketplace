var animationH1 = document.getElementById("animation-1").animate([
    // keyframes
    { transform: "translateX(-1200px)" },
    { transform: "translateX(1200px)" },
  ],
  {
    // timing options
    duration: 8000,
    iterations: Infinity,
  }
);
animationH1.play();