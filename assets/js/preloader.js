function loader(){
    document.querySelector('.loader-container').classList.add('fade-out');
  }
  
  function fadeOut(){
    setInterval(loader, 0);
  }
  
  window.onload = fadeOut;
  

  