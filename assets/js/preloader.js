function loader(){
    document.querySelector('.loader-container').classList.add('fade-out');
  }
  
  function fadeOut(){
    setInterval(loader, 4850);
  }
  
  window.onload = fadeOut;
  

  