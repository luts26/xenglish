<?php include_once 'template/header.php';?>

<?php include_once 'template/nav_menu.php';?>

<div class="settings_page">
	<div class="row">
		<div class="col-12 intro_text">
			<h3 class="set_title">Passing score</h3>
			<p>To complete the training, you need to type a given percentage of correct answers</p>
		</div>
		<div class="col-2">
			<div class="form-group">
				<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required="">
			      <option value="10">10</option>
			      <option value="20">20</option>
			      <option value="30">30</option>
			      <option value="40">40</option>
			      <option value="50">50</option>
			      <option value="60">60</option>
			      <option value="70">70</option>
			      <option value="80" selected>80</option>
			      <option value="90">90</option>
			      <option value="100">100</option>
			    </select>
		  </div>
		</div>
		<div class="col-12 intro_text">
			<h3 class="set_title">Questions and answers</h3>
			<p>Number of words studied in one day</p>
		</div>
		<div class="col-2">
			<div class="form-group">
				<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required="">
			      <option value="2" selected>2</option>
			      <option value="3">3</option>
			      <option value="4">4</option>
			      <option value="5">5</option>
			      <option value="6">6</option>
			      <option value="10">10</option>
			      <option value="15">15</option>
			    </select>
		  </div>
		</div>
		<div class="col-12 intro_text">
			<p>Number of answer options in the tests</p>
		</div>
		<div class="col-2">
			<div class="form-group">
				<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required="">
			      <option value="3">3</option>
			      <option value="4" selected>4</option>
			      <option value="5">5</option>
			    </select>
		  	</div>
		</div>
		<div class="col-12 intro_text">
			<h3 class="set_title">Native language</h3>
			<p>Specify the native language on which translations of foreign words will be shown</p>
		</div>
		<div class="col-2">
			<div class="form-group">
				<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required="">
			      <option value="rus" selected>Russian</option>
			      <option value="ukr">Ukrainian</option>
			    </select>
		  </div>
		</div>
		<div class="col-12 intro_text">
			<h3 class="set_title">Exercises</h3>
			<p>How to check the result of training</p>
		</div>
        <div class="col-8">
        	<div class="row">
        	<div class="col-sm-4">
	          <div class="custom-control custom-checkbox my-1 mr-sm-2">
	            <input type="checkbox" class="custom-control-input" id="customControlInline1">
	            <label class="custom-control-label" for="customControlInline1">Ru -> En тесты</label>
	          </div>
	          <div class="custom-control custom-checkbox my-1 mr-sm-2">
	            <input type="checkbox" class="custom-control-input" id="customControlInline2" checked="">
	            <label class="custom-control-label" for="customControlInline2">En -> Ru тесты</label>
	          </div>
	      </div>
	      <div class="col-4">
	          <div class="custom-control custom-checkbox my-1 mr-sm-2">
	            <input type="checkbox" class="custom-control-input" id="customControlInline3" checked="">
	            <label class="custom-control-label" for="customControlInline3">Правописание</label>
	          </div>
	          <div class="custom-control custom-checkbox my-1 mr-sm-2">
	            <input type="checkbox" class="custom-control-input" id="customControlInline4">
	            <label class="custom-control-label" for="customControlInline4">Восприятие на слух</label>
	          </div>
	      </div>
        </div>
      </div>
      <div class="col-12 intro_text">
			<h3 class="set_title">Reiteration</h3>
			<p>How many days / times to study one set of questions</p>
		</div>
		<div class="col-2">
			<div class="form-group">
				<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required="">
			      <option value="1" selected>1</option>
			      <option value="2">2</option>
			      <option value="3">3</option>
			    </select>
		  </div>
		</div>
		<div class="col-12 intro_text">
			<h3 class="set_title">Tips in learning mode</h3>
			<p>Number of seconds how many hints will be visible in the learning mode</p>
		</div>
		<div class="col-2">
			<div class="form-group">
				<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required="">
			      <option value="1">1</option>
			      <option value="2">2</option>
			      <option value="3" selected>3</option>
			      <option value="4">4</option>
			      <option value="5">5</option>
		  </div>
		</div>
	</div>
</div>

<?php include_once 'template/footer.php';?>