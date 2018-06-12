<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{

	
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		//nos conectamos a la bd
		$connection=YII::app()->db;
		//variable con el query
		$sql= "SELECT id, password FROM tbl_user";

		//var ejecutar comando
		$datareader=$connection->createCommand($sql)->query();

		//seleccionar la columna
		

		$datareader->bindColumn(1, $id );

		$datareader->bindcolumn(2, $password);

		//ciclo
		while ($datareader->read()!==false)
			$users[$id]=$password;







		if(!isset($users[$this->id]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		else if($users[$this->id]!==crypt($this->password,'salt'))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else

			
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;

	}



}