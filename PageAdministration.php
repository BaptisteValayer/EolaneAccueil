<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="css/administration.css" rel="stylesheet" type="text/css">
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/infobox.js"></script>
	<script src="js/timer.js"></script>
	<script src="js/adminAccueil.js"></script>
</head>

<body>

  <div>
      <table id="InfoBox">
				<thead>
	        <tr>
	          <th></th>
	          <th>Texte du message</th>
	          <th>Date de Fin d'utilisation du message</th>
	          <th></th>
	        </tr>
				</thead>
				<tbody id="TrinfoBoxDom">
        </tbody>
				<tfoot>
						<tr>
								<td><input type="disable"></input></td>
								<td><input type="text" placeholder="Texte du message"></input></td>
								<td><input type="text" placeholder="Date de Fin(si aucune mettre 9999 en année)"></input></td>
								<td><span class="glyphicon glyphicon-plus" onclick="addNewMessage();"></span></td>
						</tr>
				</tfoot>
      </table>
  </div>

</body>
</html>
