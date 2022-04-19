<div class="page-section">
        <div class="container">
            <h2 class="text-center wow fadeInUp" style=" background-color:skyblue; " >Saisissez vos informations  </h2>
			<br>

            <form  class="main-form" method="GET"  action="{{url('professorinfo')}}" enctype="multipart/form-data">
      @csrf
        <fieldset>
            

	<table border="1">

		<tr>
			<td>Nom : </td>
			<td><input type="text" name="nom"  /></td>
		</tr>
		<tr>
			<td>Prenom :</td>
			<td><input type="text" name="prenom"  /></td>
		</tr>
		<tr>
			<td>Photo : </td>
			<td><input type="file" name="photo"   /></td>

		</tr>
		<tr>
		<td>Cin : </td>
			<td><input type="text" name="cin"  /></td>
		</tr>
		<tr>
		<td>drpp : </td>
			<td><input type="text" name="drpp"  /></td>
			
		</tr>
		<tr>
		<td>date de recrutement : </td>
			<td><input type="date" name="date_recrutement"  /></td>
			
		</tr>
		<tr>
		<td>telephone : </td>
			<td><input type="number" name="telephone"  /></td>
			
		</tr>
		<tr>
		<td>email : </td>
			<td><input type="text" name="email"  /></td>
			
		</tr>
		<tr>
		<td>date de naissance  : </td>
			<td><input type="date" name="date_naissance"  /></td>
			
		</tr>
		
		<tr>
		<td>specialite : </td>
			<td><input type="text" name="specialite"  /></td>
			
		</tr>
		<tr>
		<td>structure de recherche : </td>
			<td><input type="text" name="structure"  /></td>
			
		</tr>
		<tr>
		<td>directeur : </td>
			<td><input type="text" name="directeur"  /></td>
			
		</tr>
		<tr>
		<td>dossier A : </td>
		<td><a download><input type="file" name="dossierA"  id="dossierA" /></a></td>
			
		</tr>
		<tr>
		<td>dossier P: </td>
		<td><input type="file" name="dossierP"  /></td>
			
		</tr>
		<tr>
		<td>dossier S : </td>
		<td><input type="file" name="dossierS"  /></td>
			
		</tr>
		<tr>
	
		<td> <button type="submit" class="btn btn-primary mt-3 wow zoomIn" style="background-color:green;" >Envoyer </button></td>
			
		</tr>

	</table>


</fieldset>
</form>
        </div>
    </div>