document.addEventListener('DOMContentLoaded', function() {
  var gdprAccepted = localStorage.getItem('gdprAccepted');
  var gdprPopup = document.getElementById('gdpr-popup');

  if (!gdprAccepted) {
    gdprPopup.style.display = 'block';
  }

  document.getElementById('accept-gdpr').addEventListener('click', function() {
    localStorage.setItem('gdprAccepted', 'true');
    gdprPopup.style.display = 'none';
  });
});
