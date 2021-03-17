
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>AET News</title>
	<link href="css/bootstrap.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
  <h5 class="my-0 mr-md-auto font-weight-normal">AET</h5>
  <nav class="my-2 my-md-0 mr-md-3">
    <a class="p-2 text-dark" href="#">Home</a>
    <a class="p-2 text-dark" href="#">News</a>
  </nav>
  <a class="btn btn-outline-primary" href="#">Sign up</a>
</div>

<div class="container">
	<div class="row mb-3">
		<div class="col-md-3">
			<div class="card mb-4 shadow-sm">
				<div class="card-body">
					<h5>Filters</h1>
					<div class="bg-light p-3">
						By Date<br>
						<div class="form-group mb-0">
							<input type="radio" />							
							<label>Any time</label>
						</div>
						<div class="form-group">
							<input type="radio" checked="checked" />
							<label>Custom Range</label>
						</div>
						
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card mb-4 border-0">
				<div class="card-body">
					<div class="text-muted">About 3000 results found</div>
					<strong>Recommended For You...</strong>
					<div>
						<span class="badge badge-light mr-2">Grant</span>
						<span class="badge badge-light mr-2">Health Grant</span>
						<span class="badge badge-light mr-2">Affordable Care Act</span>
						<span class="badge badge-danger mr-2">+5</span>
					</div>
					<div class="news-container mt-3" id="news-container">

					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card mb-4 shadow-sm">
				<div class="card-body">
					<h5 class="card-title pricing-card-title">Popular Topics</h5>
					<div class="mb-2 p-2 border shadow-sm" style="border-radius:7px;">
						<a href="#" data-toggle="modal" data-target="#new">Create News</a>
					</div>
					<div class="mb-2 p-2 border shadow-sm" style="border-radius:7px;">
						Trending Searches
					</div>
					<div class="mb-2 p-2 border shadow-sm" style="border-radius:7px;">
						Contribute
					</div>

				</div>
			</div>
			<div class="card mb-4 shadow-sm bg-success text-white">
				<div class="card-body">
					<h5 class="card-title pricing-card-title">Are you satisfied with your search?</h5>
					<div class="float-right">
						<span class="btn text-white btn-sm border-white">Create News</span>
						<span class="btn btn-sm btn-light">Create News</span>
					</div>
				</div>
			</div>
			<div class="card mb-4 shadow-sm bg-primary text-white">
				<div class="card-body">
					<h5 class="card-title pricing-card-title">Do you want to search your enterprise data?</h5>
					Contact us today
					<div class="float-right">
						<span class="btn btn-sm btn-light">Contact Us</span>
					</div>
				</div>
			</div>
		</div>
</div>
</div>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://jsonplaceholder.typicode.com/posts/"></script>
<script>
$(document).ready(function(){
		$.getJSON("https://jsonplaceholder.typicode.com/posts/",function(data){	
			if(data) {
			var json_data;
			$('#news-container').show();
			$.each(data, function(i,aet){
			json_data = '<div class="mb-3">'+
				'<div class="strong text-primary" onclick="loadNews('+aet.id+')"><strong>'+aet.title+'</strong></div>'+
				'<div>'+aet.body+'</div>'+
				'</div>';
			$(json_data).appendTo('#news-container');
			});
			} else {
			json_data += '<tr>'+
				'<td valign="top">No News Found</td>'+
				'</tr>';
			$(json_data).appendTo('#news-container');
			}		
		});
		
})

		function loadNews(id){
			$.getJSON('https://jsonplaceholder.typicode.com/posts/'+id, function(data) {
        
        var text = `<div class="strong text-primary mb-3"><strong> ${data.title}</strong></div>
                    <div> ${data.body}</div>`
        $(".news-container").html(text);
			
		});

		}
</script>
		<div class="modal fade" id="new" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title align-items-end" style="font-size:16px;"><span class="align-items-end">New Post</span></div>
                    </div>
					<div class="modal-body">
                    	<form>
							<div class="form-group">
							<label>Title</label>
							<input type="text" required="required" name="title" class="form-control">
							</div>
							<div class="form-group">
							<label>News Body</label>
							<textarea class="form-control" required="required" name="news" required="required"></textarea>
							</div>
							<div class="form-group">
							<input type="submit" name="submit" value="Submit" class="btn btn-primary">
							</div>
						</form>
					</div>
                </div>
            </div>

</body>
</html>
