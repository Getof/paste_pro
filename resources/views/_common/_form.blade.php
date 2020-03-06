<form action="{{action('PasteController@store')}}" method='POST' id='id-form_paste' class='border border-left-0 border-right-0 py-4 my-4'>
	@csrf
		<div class='form-group'>
			<label for='paste_text'>Текст:</label>
			<textarea class='form-control' rows="10" name='paste_text' type='text' id='paste_text'></textarea>
		</div>

		<div class='form-group'>
			<label for='sintax'>Подсветка </label>
			<select class="form-control" name="sintax" id="sintax">
  				<option>None</option>
  				<option>Html</option>
  				<option>Php</option>
  				<option>JS</option>
			</select>
		</div>

		<div class='form-group'>
			<label for='expir'>Срок доступа: </label>
			<select class="form-control" name="expir" id="expir">
  				<option>Без ограничения</option>
  				<option>10 мин.</option>
  				<option>1 час</option>
  				<option>3 часа</option>
  				<option>1 день</option>
  				<option>1 неделя</option>
  				<option>1 месяц</option>
			</select>
		</div>

		<div class='form-group'>
			<label for='expose'>Доступ: </label>
			<select class="form-control" name="expose" id="expose">
  				<option>Public</option>
  				<option>Unlisted</option>  				
			</select>
		</div>

		<div class='form-group'>
			<label for='title'>Заголовок: </label>
			<input class="form-control" type="text" name="title" id="title"> 
		</div>
		<button type="submit" class="btn btn-primary">Отправить</button>

	</form>