<form action="/multisearch" method="GET" role="search">
  {{ csrf_field() }}

  <div class="container">

      <select class="form-control listings-drop" name"listcat">
         <option value="#">Category</option>
         <option value="For Sale">FOR SALE</option>
         <option value="For Rent">FOR RENT</option>
   </select>


   <select class="form-control listings-drop" name="loc">

     <option value="one">LOCATION</option>
     <option value="springfield">SPRINGFIELD</option>
     <option value="agawam">AGAWAM</option>
     <option value="Longmeadow">LONGMEADOW</option>
     <option value="Holyoke">HOLYOKE</option>
     <option value="Avon">AVON</option>
     <option value="Enfield">ENFIELD</option>
   </select>


   <!-- <select class="form-control listings-drop">
   <option value="one">MIN BEDS</option>
   <option value="two">1</option>
   <option value="two">2</option>
   <option value="two">3</option>
   <option value="two">4</option>
   <option value="two">5</option>
   <option value="two">6</option>
 </select> -->

   <select class="form-control listings-drop">
   <option value="one">MIN PRICE</option>
   <option value="two">70,000</option>
   <option value="two">80,000</option>
   <option value="two">90,000</option>
   <option value="two">100,000</option>
   <option value="two">110,000</option>
   <option value="two">120,000</option>
 </select>


   <select class="form-control listings-drop">
   <option value="one">MAX PRICE</option>
   <option value="two">70,000</option>
   <option value="two">80,000</option>
   <option value="two">90,000</option>
   <option value="two">100,000</option>
   <option value="two">110,000</option>
   <option value="two">120,000</option>
 </select>

<button type="submit" class="btn btn-off-white">SEARCH NOW</button>

 </div>


</form>
