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


 document.addEventListener('DOMContentLoaded', function() {
            // Initialize animations
            const appearElements = document.querySelectorAll('.appear-animation');
            
            appearElements.forEach(element => {
                const animationType = element.getAttribute('data-appear-animation');
                const delay = element.getAttribute('data-appear-animation-delay') || 0;
                
                setTimeout(() => {
                    element.classList.add(animationType);
                }, parseInt(delay));
            });
            
            // Typewriter effect
            const typewriterElement = document.querySelector('.typewriter');
            const words = ['Smart Cards', 'Digital Cards', 'NFC Cards', 'QR Cards'];
            let wordIndex = 0;
            let charIndex = 0;
            let isDeleting = false;
            let typingDelay = 100;
            let deletingDelay = 50;
            let pauseDelay = 1500;
            
            function type() {
                const currentWord = words[wordIndex];
                
                if (isDeleting) {
                    typewriterElement.textContent = currentWord.substring(0, charIndex - 1);
                    charIndex--;
                    typingDelay = deletingDelay;
                } else {
                    typewriterElement.textContent = currentWord.substring(0, charIndex + 1);
                    charIndex++;
                    typingDelay = 100;
                }
                
                if (!isDeleting && charIndex === currentWord.length) {
                    isDeleting = true;
                    typingDelay = pauseDelay;
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    wordIndex = (wordIndex + 1) % words.length;
                }
                
                setTimeout(type, typingDelay);
            }
            
            // Start the typewriter effect
            setTimeout(type, 500);
        });
