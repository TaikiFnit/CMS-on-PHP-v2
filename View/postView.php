<main role="main">

	<form name="postForm" id="postForm" method="post" action="/news/" enctype="multipart/form-data">
		<div>
			<label for="title">Title: </label>
			<input type="text" name="title" id="title">
		</div>

		<div> 
			<label for="content">Content: </label>
			<textarea name="content" id="content"></textarea>
		</div>

		<div>
		<label for="created">Created: </label>
		<input type="date" name="created" id="created">
		</div>

		<div>
			<label for="team">Team: </label>
			<select name="team" id="team">
				<option value="0">IRC</option>
				<option value="1">ハード班</option>
				<option value="2">ソフト班</option>
				<option value="3">ウェブ班</option>
			</select>
		</div>

		<div>
			<label for="images">Images Number</label>
			<input type="number" name="images" id="images">
		</div>

		<div>
			<label for="image1">Image1: </label>
			<input type="file" name="image1" id="image1">
			<label for="image1">Image1 Alt: </label>
			<input type="text" name="image_alt1" id="image_alt1">
		</div>

		<div>
			<label for="image2">Image2: </label>
			<input type="file" name="image2" id="image2">
			<label for="image2">Image2 Alt:</label>
			<input type="text" name="image_alt2" id="image_alt2">
		</div>

		<button type="submit" id="send">Send!</button>
	</form>

</main>