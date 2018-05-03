INSERT INTO senator(senatorId , senatorName, senatorNumLives) VALUES (:senatorId, :senatorName, senatorNumLives)

UPDATE senator SET senatorName = "Arlo", senatorNumlives = "9" WHERE senatorId = :senatorId

DELETE FROM senator WHERE senatorId = :senatorId


