<?php
/**
 * Created by PhpStorm.
 * User: Gusli
 * Date: 5/3/2018
 * Time: 8:27 AM
 */
class Senator {
	protected $senatorId;

	protected $senatorName;

	protected $senatorNumLives;



	/**
	 *
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 **/
	public function insert(\PDO $pdo): void {
		$query = "INSERT INTO senator(senatorId , senatorName, senatorNumLives) VALUES (:senatorId, :senatorName, senatorNumLives)";
		$statement = $pdo->prepare($query);
		$parameters = ["senatorId" => $this->senatorId, "senatorName" => $this->senatorName, "senatorNumLives" => $this->senatorNumLives];
		$statement->execute($parameters);
	}

	/**
	 *
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 **/
	public function delete(\PDO $pdo): void {
		$query = "DELETE FROM senator WHERE senatorId = :senatorId";
		$statement = $pdo->prepare($query);
		$parameters = ["senatorId" => $this->senatorId];
		$statement->execute($parameters);
	}

	/**
	 *
	 * @param \PDO $pdo PDO connection object
	 * @throws \PDOException when mySQL related errors occur
	 * @throws \TypeError if $pdo is not a PDO connection object
	 **/
	public function update(\PDO $pdo): void {
		$query = "UPDATE senator SET senatorName = "Arlo", senatorNumlives = "9" WHERE senatorId = :senatorId";
		$statement = $pdo->prepare($query);
		$parameters = ["senatorId" => $this->senatorId, "sentatorName" => $this->senatorName, "senatorNumLives" => $this->senatorNumLives];
		$statement->execute($parameters);
	}
}