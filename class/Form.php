<?php
class Form
{
	/**
	* Valide si l'email entré par l'utilisateur est une adresse valide
	* @param string $email entré par l'utilisateur
	* @return bool (1 - Email Valide) / ( 0 - Email Non Valide) 
	**/
	public function validEmail($email)
	{
		if(!preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $email))
		{
			return 0;
		}
		else 
			return 1;
	}

	/**
	* Valide si les deux mots de passes entré par l'utilisateur sont identiques
	* @param string $password 1er mot de passe
	* @param string $confirmed_pw confirmation du mot de passe
	* @return bool (1 - mdp identiques) / ( 0 - mdp différent) 
	**/
	public function validPassword($password, $confirmed_pw) {
		if($password != $confirmed_pw)
		{
			echo '<p style="color:red;"> Les mots de passe ne sont pas identiques</p>';
			return 0;
		}
		else {
			return 1;
		}
	}

	/**
	* Création du formulaire jour
	**/
	public function day()
	{
		for ($i = 1; $i <= 31; $i++)
		{
			echo '<option value="' .$i.'">' .$i. '</option>';
		}
	}

	/**
	* Création du formulaire année
	**/
	public function year()
	{
		for ($i = 1950; $i < date("Y"); $i++)
		{
			echo '<option value="' .$i.'">' .$i. '</option>';
		}
	}


}
