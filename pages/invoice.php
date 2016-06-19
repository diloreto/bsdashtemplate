<script type="text/javascript">
// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

var placeSearch, autocomplete;
var componentForm = {
  street_number: 'short_name', // address
  route: 'long_name',
  locality: 'long_name', // city
  administrative_area_level_1: 'short_name', // state
  country: 'long_name', // country
  postal_code: 'short_name' // zipcode
};

function initialize() {
  // Create the autocomplete object, restricting the search
  // to geographical location types.
  autocomplete = new google.maps.places.Autocomplete(
      /** @type {HTMLInputElement} */
	  (document.getElementById('autocomplete')),
      { types: ['geocode'] });
  // When the user selects an address from the dropdown,
  // populate the address fields in the form.
  google.maps.event.addListener(autocomplete, 'place_changed', function() {
    fillInAddress();
  });
}

// [START region_fillform]
function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details
  // and fill the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
    }
  }
}
// [END region_fillform]

// [START region_geolocation]
// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = new google.maps.LatLng(
          position.coords.latitude, position.coords.longitude);
      var circle = new google.maps.Circle({
        center: geolocation,
        radius: position.coords.accuracy
      });
      autocomplete.setBounds(circle.getBounds());
    });
  }
}
// [END region_geolocation]

google.maps.event.addDomListener(window, 'load', function () {
	initialize();
});

</script>



<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <i class="fa fa-table" aria-hidden="true"></i> Invoices
        </h1>
        <ol class="breadcrumb">
            <li>
                <i class="fa fa-home" aria-hidden="true"></i>  <a href="index.php">Home</a>
            </li>
            <li class="active">
                <i class="fa fa-table" aria-hidden="true"></i> <a href="index.php?a=invoice">Invoices</a>
            </li>
        </ol>
    </div>
</div>
<!-- /.row -->

<div class="row">
    <div class="col-lg-6">




<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Add Invoice</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Job Title">Job Title</label>  
  <div class="col-md-4">
  <input id="Job Title" name="Job Title" type="text" placeholder="Mike Smith Basement" class="form-control input-md" required="">
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="payment_terms">Payment Terms</label>
  <div class="col-md-4">
    <select id="payment_terms" name="payment_terms" class="form-control">
      <option value="CASH">Cash</option>
      <option value="CREDIT">Credit</option>
      <option value="CHECK">Check</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="duedate_year">Due Year</label>
  <div class="col-md-2">
    <select id="duedate_year" name="duedate_year" class="form-control">
      <option value="2016">2016</option>
      <option value="2017">2017</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="customername">Customer Name</label>  
  <div class="col-md-4">
  <input id="customername" name="customername" type="text" placeholder="John Smith" class="form-control input-md" required="">
  <span class="help-block">Enter Customer Name</span>  
  </div>
</div>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="google_address">Enter Address</label>
  <div class="col-md-5">
	<input id="autocomplete" placeholder="Enter customer address" onFocus="geolocate()" type="text"></input>    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="customeraddress1">Customer Address</label>  
  <div class="col-md-4">
  <input id="street_number" name="customeraddress1" type="text" placeholder="123 Main St" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="address2">Address 2</label>  
  <div class="col-md-4">
  <input id="route" name="address2" type="text" placeholder="Apt 5" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="city">City</label>  
  <div class="col-md-4">
  <input id="locality" name="city" type="text" placeholder="Buffalo" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="state">State</label>
  <div class="col-md-2">
    <select id="state" name="state" class="form-control">
      <option value="AL">AL</option>
      <option value="AK">AK</option>
      <option value="AS">AS</option>
      <option value="AZ">AZ</option>
      <option value="AR">AR</option>
      <option value="CA">CA</option>
      <option value="CO">CO</option>
      <option value="CT">CT</option>
      <option value="DE">DE</option>
      <option value="DC">DC</option>
      <option value="FL">FL</option>
      <option value="GA">GA</option>
      <option value="GU">GU</option>
      <option value="HI">HI</option>
      <option value="ID">ID</option>
      <option value="IL">IL</option>
      <option value="IN">IN</option>
      <option value="IA">IA</option>
      <option value="KS">KS</option>
      <option value="KY">KY</option>
      <option value="LA">LA</option>
      <option value="ME">ME</option>
      <option value="MH">MH</option>
      <option value="MD">MD</option>
      <option value="MA">MA</option>
      <option value="MI">MI</option>
      <option value="MN">MN</option>
      <option value="MS">MS</option>
      <option value="MO">MO</option>
      <option value="MT">MT</option>
      <option value="NE">NE</option>
      <option value="NV">NV</option>
      <option value="NH">NH</option>
      <option value="NJ">NJ</option>
      <option value="NM">NM</option>
      <option value="NY">NY</option>
      <option value="NC">NC</option>
      <option value="ND">ND</option>
      <option value="MP">MP</option>
      <option value="OH">OH</option>
      <option value="OK">OK</option>
      <option value="OR">OR</option>
      <option value="PW">PW</option>
      <option value="PA">PA</option>
      <option value="PR">PR</option>
      <option value="RI">RI</option>
      <option value="SC">SC</option>
      <option value="SD">SD</option>
      <option value="TN">TN</option>
      <option value="TX">TX</option>
      <option value="UT">UT</option>
      <option value="VT">VT</option>
      <option value="VI">VI</option>
      <option value="VA">VA</option>
      <option value="WA">WA</option>
      <option value="WV">WV</option>
      <option value="WI">WI</option>
      <option value="WY">WY</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="zipcode">Zipcode</label>  
  <div class="col-md-2">
  <input id="postal_code" name="zipcode" type="text" placeholder="14224" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="duedate_month">Due Month</label>
  <div class="col-md-2">
    <select id="duedate_month" name="duedate_month" class="form-control">
      <option value="1">Jan</option>
      <option value="2">Feb</option>
      <option value="3">Mar</option>
      <option value="4">Apr</option>
      <option value="5">May</option>
      <option value="6">Jun</option>
      <option value="7">Jul</option>
      <option value="8">Aug</option>
      <option value="9">Sep</option>
      <option value="10">Oct</option>
      <option value="11">Nov</option>
      <option value="12">Dec</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="duedate_day">Due Day</label>
  <div class="col-md-2">
    <select id="duedate_day" name="duedate_day" class="form-control">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
      <option value="7">7</option>
      <option value="8">8</option>
      <option value="9">9</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="section1">Section Title</label>  
  <div class="col-md-4">
  <input id="section1" name="section1" type="text" placeholder="Enter Seciton" class="form-control input-md" required="">
  <span class="help-block">Enter Section Name</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="projectdesc1">Project</label>  
  <div class="col-md-4">
  <input id="projectdesc1" name="projectdesc1" type="text" placeholder="Project Description" class="form-control input-md">
  <span class="help-block">Enter Project Description</span>  
  </div>
</div>

<!-- Appended Input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="project1_cost">Project Cost</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="project1_cost" name="project1_cost" class="form-control" placeholder="1000" type="text" required="">
      <span class="input-group-addon">$</span>
    </div>
    <p class="help-block">Enter Project Cost</p>
  </div>
</div>
<!-- Appended Input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="projectdays1">Project Days</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="projectdays1" name="projectdays1" class="form-control" placeholder="" type="text" required="">
      <span class="input-group-addon">days</span>
    </div>
    <p class="help-block">Enter Number of Days</p>
  </div>
</div>
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="jobimage1">Attach Image</label>
  <div class="col-md-4">
    <input id="jobimage1" name="jobimage1" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="submit"></label>
  <div class="col-md-4">
    <button id="submit" name="submit" class="btn btn-primary">Save</button>
  </div>
</div>

</fieldset>
</form>

</div>

</div>