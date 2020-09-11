<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<link
			href="https://fonts.googleapis.com/css2?family=Solway:wght@400;800&display=swap"
			rel="stylesheet"
		/>
		<link
			rel="stylesheet"
			href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
			integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
			crossorigin="anonymous"
		/>
		<title>Document</title>
	</head>

	<style>
		body {
			font-family: "Solway", Tahoma, sans-serif;
		}
		.container {
			padding-top: 5rem;
		}

		h1 {
			text-align: center;
			margin: 3rem;
			color: rgb(91, 30, 233);
		}
	</style>

	<body>
		<div id="app" class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>My Movie</h1>
				</div>
				<div class="col-md-12">
					<div class="input-group">
						<input
							type="text"
							class="form-control"
							aria-label="Text input with segmented dropdown button"
							placeholder="What movie you want to watch right now?"
						/>
						<div class="input-group-append">
							<button
								@click="searchMovie"
								class="btn btn-primary"
								type="button"
							>
								Search Movie
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script
			src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
			integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
			crossorigin="anonymous"
		></script>
		<script
			src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
			integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
			crossorigin="anonymous"
		></script>
		<script
			src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
			integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
			crossorigin="anonymous"
		></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.min.js"></script>
		<script>
			new Vue({
				el: "#app",
				data: {},
				methods: {
					async searchMovie() {
						console.log("click!");
						await fetch("http://localhost/mymovie")
							.then((response) => response.json())
							.then((data) => {
								console.log(data);
							});
					},
				},
			});
		</script>
	</body>
</html>
