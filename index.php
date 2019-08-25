<?php
function slugify( $string, $delimiter = '-' ){
	if( !empty($replace) ){
		$string = str_replace((array)$replace, ' ', $string);
	}
	$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $string);
	$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
	$clean = strtolower(trim($clean, '-'));
	$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
	return $clean;
}

$string = $results = '';
if( isset( $_POST['action'] ) && $_POST['action'] == 'slugify' ){
	extract( $_POST );
	$results = slugify( $string, trim($delimiter) );
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Slugify</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Cache-control" content="public">
		<link rel="icon" href="favicon.ico"/>
		<link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Lato:300,400,700,900|Cagliostro" rel="stylesheet">
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/smt-bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/style.min.css" rel="stylesheet" type="text/css" media="all" />
		<script>
			function copyToClipboard() {
			    var textBox = document.getElementById("results");
			    textBox.select();
			    document.execCommand("copy");
			}
		</script>
		<style>#results{cursor:pointer;}</style>
	</head>
	<body>
		<div class="hekllo"></div>
		<section class="container">
			<div class="row">
				<div class="colxs-12 col-sm-12">
					<h1>Slugify Magic Tool</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3">
					<div class="recipt-form">
						<form class="form-horizontal" action="" method="POST" autocomplete="off">
							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" class="form-control" name="string" value="<?php echo $string; ?>" placeholder="Enter your text here" autocomplete="off">
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<select class="form-control" name="delimiter">
										<option value="_">Underscore</option>
										<option value="-">Dash</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<textarea class="form-control" name="results" rows="3" id="results" readonly placeholder="Result will be shown here"  onclick="copyToClipboard();"><?php echo $results; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input type="hidden" name="action" value="slugify">
									<button type="submit" class="btn btn-primary btn-lg btn-block">Slugify</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</body>
</html>

fdsafsdafsdaf
