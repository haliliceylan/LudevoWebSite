<head>
	<meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="http://fontawesome.io/assets/font-awesome/css/font-awesome.css">
</head>
<body>


	<h1>LUDEVO'YA KATILMAK MI<br>İSTİYORSUNUZ  ?</br> </h1>

	<div class="info"><a href="https://www.grandvincent-marion.fr" target="_blank"><p> LUDEVO<i class="fa fa-heart"></i> SOFTWARE DEVELOPMENT TEAM </p></a></div>

	<form method="POST">
		{!! csrf_field() !!}
		<h1>Lütfen Aşağıdaki Formu Doldurunuz</h1>
		<div class="contentform">
			<div id="sendmessage"> Your message has been sent successfully. Thank you. </div>

			<div class="leftcontact">
				<div class="form-group">
					<p>Adı <span>*</span></p>
					<span class="icon-case"><i class="fa fa-user"></i></span>
					<input type="text" name="first_name" id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné."/>
					<div class="validation"></div>
				</div>

			<div class="form-group">
					<p>Soyadı<span>*</span></p>
					<span class="icon-case"><i class="fa fa-male"></i></span>
					<input type="text" name="last_name" id="nom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Nom' doit être renseigné."/>
					<div class="validation"></div>
				</div> 

				<div class="form-group">
					<p>E-posta <span>*</span></p>	
					<span class="icon-case"><i class="fa fa-envelope-o"></i></span>
					<input type="email" name="email" id="email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire."/>
					<div class="validation"></div>
				</div>	

				<div class="form-group">
					<p>Bizi Nereden Duydunuz ? <span>*</span></p>
					<span class="icon-case"><i class="fa fa-location-arrow"></i></span>
					<input type="text" name="hear" id="adresse" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Adresse' doit être renseigné."/>
					<div class="validation"></div>
				</div>

				<div class="form-group">
					<p>Bize Neden Katılmak İstiyorsunuz ? <span>*</span></p>
					<span class="icon-case"><i class="fa fa-location-arrow"></i></span>
					<textarea name="why" id="why" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Adresse' doit être renseigné."/></textarea>
					<div class="validation"></div>
				</div>





			</div>

			<div class="rightcontact">	

				<div class="form-group">
					<p>Telefon <span>*</span></p>	
					<span class="icon-case"><i class="fa fa-phone"></i></span>
					<input type="text" name="phone" id="phone" data-rule="maxlen:10" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Téléphone' doit être renseigné. Minimum 10 chiffres"/>
					<div class="validation"></div>
				</div>

				<div class="form-group">
					<p>Çalışmak İstediğiniz Pozisyon <span>*</span></p>
					<span class="icon-case"><i class="fa fa-info"></i></span>
					<select name="position">
						<option value="1">Yazılımcı</option>
						<option value="2">Tasarımcı</option>
						<option value="3">Algoritmacı</option>
						<option value="4">Databaseci</option>
						<option value="5">Kebapçı</option>
						<option value="6">Siparişci</option>
						<option value="7">Sucu</option>
						<option value="8">Esnaf</option>
						<option value="9">Ağlamam</option>
					</select>
				</div>

				<div class="form-group">
					<p>Linkedin Profil Linkiniz</p>	
					<span class="icon-case"><i class="fa fa-comment-o"></i></span>
					<input type="text" name="linkedin_url" id="sujet" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Sujet' doit être renseigné."/>
					<div class="validation"></div>
				</div>

				<div class="form-group">
					<p>Kendiniz bir paragrafla nasıl anlatırsınız ? <span>*</span></p>
					<span class="icon-case"><i class="fa fa-comments-o"></i></span>
					<textarea name="about" rows="14" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Message' doit être renseigné."></textarea>
					<div class="validation"></div>
				</div>	

				<div class="form-group">
					<p>Cinsiyet</p>	
					<span class="icon-case"><i class="fa fa-comment-o"></i></span>
				<select name="gender">
						<option value="Kadın">Kadın</option>
						<option value="Erkek">Erkek</option>
					</select>
					<div class="validation"></div>
				</div>	
			</div>
		</div>
		<button type="submit" class="bouton-contact">Başvur</button>

	</form>	


</body>
</html>
