function toggleFaq(id) {
  const faqItem = document.getElementById(id);
  faqItem.classList.toggle("faq-active");
}

// Function to toggle between image and video background
function toggleBackground() {
  const bgImage = document.querySelector(".bg-image");
  const videoBg = document.getElementById("videoBg");
  const toggleBtn = document.querySelector(".bg-toggle");

  if (bgImage.style.display !== "none") {
    bgImage.style.display = "none";
    videoBg.style.display = "block";
    toggleBtn.innerHTML = '<i class="fas fa-image"></i> Switch to Image';
  } else {
    bgImage.style.display = "block";
    videoBg.style.display = "none";
    toggleBtn.innerHTML = '<i class="fas fa-video"></i> Switch to Video';
  }
}

