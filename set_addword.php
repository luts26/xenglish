<?php include_once 'template/header.php';?>

<?php include_once 'template/nav_menu.php';?>

<div class="settings_page">
	<div class="row">
		<div class="col-12 intro_text">
			<h3 class="set_title">Add new word</h3>
			<p>You can add a new word to the dictionary. You need to fill in the required fields: Word and Translation. You can also select a difficulty level, Add an image file and Add a Voice File.</p>
		</div>
		<div class="col-12">
			<form>
			  	<div class="row col-sm-12">
				  	<div class="col-sm-6">
			  			<div class="form-group">
						    <label for="formControlInputWord">Word</label>
						    <input type="text" class="form-control is-valid" id="formControlInputWord" placeholder="Word" required>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="formControlInputTranslate">Translate</label>
				    		<input type="text" class="form-control is-valid" id="formControlInputTranslate" placeholder="Translate" required>
						</div>
					</div>
			  </div>
			  <div class="row col-sm-12">
			  	<div class="col-sm-4">
				  <div class="form-group">
	  				<select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
	  				  <option value="none" selected>Select level</option>
				      <option value="2">2</option>
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
				<div class="col-sm-4">
				  <div class="form-group">
				    <div class="custom-file">
					  <input type="file" class="custom-file-input" id="formControlFileImg" lang="es">
					  <label class="custom-file-label" for="formControlFileImg">Select image</label>
					</div>
				  </div>
				</div>
				<div class="col-sm-4">
				  <div class="form-group">
				    <div class="custom-file">
					  <input type="file" class="custom-file-input" id="formControlFileVoice" lang="es">
					  <label class="custom-file-label" for="formControlFileVoice">Select voiceovers</label>
					</div>
				  </div>
				</div>
				</div>
				<div class="row col-sm-12">
					<div class="col-sm-4">
			  			<button type="submit" class="btn btn-primary btn-lg">Save</button>
			  		</div>
			  	</div>
			</form>
		</div>
	</div>
</div>


<?php include_once 'template/footer.php';?>