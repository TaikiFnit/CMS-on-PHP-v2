<main role="main">

	<form name="putForm" id="putForm" action="/news/">
		<div>
			<label for="title">Title: </label>
			<input type="text" name="title" id="title">
		</div>

		<div> 
			<label for="content">Content: </label>
			<textarea name="content" id="content"></textarea>
		</div>

		<div>
			<label for="author">author: </label>
			<input type="text" name="author" id="author">
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
			<label for="image_src1">Image_src1: </label>
			<input type="text" name="image_src1" id="image_src1">
			<label for="image1">Image1 Alt: </label>
			<input type="text" name="image_alt1" id="image_alt1">
		</div>

		<div>
			<label for="image_src2">Image_src2: </label>
			<input type="text" name="image_src2" id="image_src2">
			<label for="image2">Image2 Alt:</label>
			<input type="text" name="image_alt2" id="image_alt2">
		</div>

		<input type="hidden" name="id" id="id">

		<button type="button" id="send">Send!</button>
	</form>

</main>

<script src="/javascripts/putScript.js"></script>