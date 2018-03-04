
// JavaScript Document
function openSlideMenu(){
      document.getElementById('side-menu').style.width = '100%';

}

function closeSlideMenu(){
      document.getElementById('side-menu').style.width = '0';
}

function toggleNavPanel(x){
    var panel = document.getElementsByClassName("dwn-side-menu")[0], navarrow = document.getElementsByClassName("navarrow")[0], maxH="90px";
    if(panel.style.height == maxH){
        panel.style.height = "0px";
        navarrow.innerHTML = "&#9662;";
    } else {
        panel.style.height = maxH;
        navarrow.innerHTML = "&#9652;";
    }
    
}

function toggleNavPanel2(x){
    var panel = document.getElementsByClassName("dwn-side-menu")[1], navarrow = document.getElementsByClassName("navarrow")[1], maxH="90px";
    if(panel.style.height == maxH){
        panel.style.height = "0px";
        navarrow.innerHTML = "&#9662;";
    } else {
        panel.style.height = maxH;
        navarrow.innerHTML = "&#9652;";
    }
}

function toggleNavPanel3(x){
    var panel = document.getElementsByClassName("dwn-side-menu")[2], navarrow = document.getElementsByClassName("navarrow")[2], maxH="90px";
    if(panel.style.height == maxH){
        panel.style.height = "0px";
        navarrow.innerHTML = "&#9662;";
    } else {
        panel.style.height = maxH;
        navarrow.innerHTML = "&#9652;";
    }
}

function toggleNavPanel4(x){
    var panel = document.getElementsByClassName("dwn-side-menu")[3], navarrow = document.getElementsByClassName("navarrow")[3], maxH="130px";
    if(panel.style.height == maxH){
        panel.style.height = "0px";
        navarrow.innerHTML = "&#9662;";
    } else {
        panel.style.height = maxH;
        navarrow.innerHTML = "&#9652;";
    }
}