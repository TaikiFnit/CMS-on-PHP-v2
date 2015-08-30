<main role="main" class="container">

	<ul class="breadcrumb">
	    <li><a href="/">Home</a></li>
	    <li class="active">Post</li>
	</ul>

	<div class="panel panel-primary">
		<div class="panel-heading">
			<h2 class="panel-title">Post</h2>
		</div>

		<div class="panel-body">

			<form name="postForm" id="postForm" method="post" action="" enctype="multipart/form-data" class="">
				<div class="form-group">
					<label for="title">Title: </label>
					<input type="text" name="title" id="title" class="form-control" placeholder="Title">
				</div>

				<div class="form-group"> 
					<label for="content">Content: </label>
					<textarea name="content" id="content" class="form-control"></textarea>
				</div>

				<div class="form-group">
					<label for="author">author: </label>
					<input type="text" name="author" id="author" class="form-control">
				</div>

				<div class="form-group">
				<label for="created">Created: </label>
				<input type="date" name="created" id="created" class="form-control">
				</div>

				<div>
					<label for="team">Team: </label>
					<select name="team" id="team" class="form-control">
						<option value="0">IRC</option>
						<option value="1">ハード班</option>
						<option value="2">ソフト班</option>
						<option value="3">ウェブ班</option>
					</select>
				</div>

				<div>
					<label for="images">Images Number</label>
					<input type="number" name="images" id="images" class="form-control">
				</div>

				<div>
					<label for="image1">Image1: </label>
					<input type="file" name="image1" id="image1" class="form-control">
					<label for="image1">Image1 Alt: </label>
					<input type="text" name="image_alt1" id="image_alt1" class="form-control">
				</div>

				<div>
					<label for="image2">Image2: </label>
					<input type="file" name="image2" id="image2" class="form-control">
					<label for="image2">Image2 Alt:</label>
					<input type="text" name="image_alt2" id="image_alt2" class="form-control">
				</div>

				<button type="button" id="send" class="btn btn-primary btn-raised">Send!</button>
			</form>
		</div>
	</div>

</main>

<script src="/javascripts/postScript.js"></script>