const mobileLinks = document.querySelector('.links')
const mobileInfo = document.querySelector(".info");


function openSlideMenu(){
      document.getElementById('side-menu').style.width = '100%';

      setTimeout(() => {
          mobileLinks.style.opacity=1
          mobileLinks.style.visibility = "visible";
          mobileInfo.style.opacity = 1;
          mobileInfo.style.visibility = "visible";
      }, 1000);

}


function closeSlideMenu(){

    setTimeout(() => {
        document.getElementById('side-menu').style.width = '0';
    }, 600);
    
    mobileLinks.style.opacity = 0;
    mobileLinks.style.visibility = null;
    mobileInfo.style.opacity = 0;
    mobileInfo.style.visibility = null;
}
