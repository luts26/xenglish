<?php include_once 'template/header.php';?>

<?php include_once 'template/nav_menu.php';?>

<div class="settings_page">
	<div class="row">
		<div class="col-12 intro_text">
			<h3 class="set_title">Class and evaluation</h3>
			<p>From the class will depend on the lexical base, which will be presented to the study ( Level of complexity of words ( you need to break the words in the database according to the levels of complexity ))</p>
		</div>
		<div class="col-2">
			<div class="form-group">
				<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
			      <option value="2" selected>2</option>
			      <option value="3">3</option>
			      <option value="4">4</option>
			      <option value="5">5</option>
			      <option value="6">6</option>
			      <option value="7">7</option>
			      <option value="8">8</option>
			      <option value="9">9</option>
			    </select>
		  </div>
		</div>
		<div class="col-12 intro_text">
			<h3 class="set_title">The rating system (maximum score)</h3>
		</div>
		<div class="col-2">
			<div class="form-group">
				<select class="custom-select mr-sm-2" id="inlineFormCustomSelect" required="">
			      <option value="5" selected>5</option>
			      <option value="6">6</option>
			      <option value="7">7</option>
			      <option value="8">8</option>
			      <option value="9">9</option>
			      <option value="10">10</option>
			      <option value="11">11</option>
			      <option value="12">12</option>
			    </select>
		  </div>
		</div>
	</div>
</div>

<?php include_once 'template/footer.php';?>