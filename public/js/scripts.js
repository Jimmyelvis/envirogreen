/*
  Run a check on all select box to insure that the 
  value  selected is not == to "". If it is then
  run to prevent the page from submitting.
*/

const CityOptions = document.querySelector("#cityOptions");
const SubmitSearch = document.querySelector(".submitSearch");

console.log(CityOptions);

SubmitSearch.addEventListener("click", (e) => {
  
  if (CityOptions.value === '') {
    e.preventDefault()
    alert('you must select something')
  } 


});
