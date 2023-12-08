const imageUrls = [
    "../asetet/first.jpg",
    "../asetet/atv.avif",
    "../asetet/gene3.jpg",
    "../asetet/atv2.jpg",
  ];
  
  let currentIndex = 0;
  
  function changeImage() {
    const imageElement = document.getElementById("imageSlider");
    imageElement.src = imageUrls[currentIndex];
  
    currentIndex = (currentIndex + 1) % imageUrls.length;
  }
  
  setInterval(changeImage, 3500);