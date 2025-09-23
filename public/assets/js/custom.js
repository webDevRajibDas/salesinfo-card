function toggleFaq(id) {
  const faqItem = document.getElementById(id);
  faqItem.classList.toggle("faq-active");
}



document.addEventListener('DOMContentLoaded', function() {
  const circles = document.querySelectorAll('.circle');

  circles.forEach((circle, index) => {
    circle.style.opacity = '0';
    circle.style.transform = 'scale(0)';
    circle.style.transition = 'opacity 1s, transform 1s';

    setTimeout(() => {
      circle.style.opacity = '1';
      circle.style.transform = 'scale(1)';
    }, 500 + (index * 300));
  });
});


document.getElementById('open-whatsapp').addEventListener('click', function() {
  const phoneNumber = "8801751359305";
  const whatsappUrl = `https://wa.me/${phoneNumber}?text=আসসালামু আলাইকুম, আমি অর্ডার করতে সমস্যায় পড়েছি। সাহায্য করুন।`;
  window.open(whatsappUrl, '_blank');
});