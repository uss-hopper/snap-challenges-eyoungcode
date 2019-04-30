drop table if exists Tweet;
create table Tweet(
tweetId binary(16) not null,
tweetProfileId varchar(128) not null,
tweetContent varchar(97) not null,
tweetDate binary(32) not null,
primary key(tweetId)
);

/**
 * updates this Tweet in mySQL
 *
 * @param \PDO $pdo PDO connection object
 * @throws \PDOException when mySQL related errors occur
 * @throws \TypeError if $pdo is not a PDO connection object
 **/
public function update(\PDO $pdo) : void {

	// create query template
	$query = "UPDATE tweet SET tweetProfileId = :tweetProfileId, tweetContent = :tweetContent, tweetDate = :tweetDate WHERE tweetId = :tweetId";
	$statement = $pdo->prepare($query);


	$formattedDate = $this->tweetDate->format("Y-m-d H:i:s.u");
	$parameters = ["tweetId" => $this->tweetId->getBytes(),"tweetProfileId" => $this->tweetProfileId->getBytes(), "tweetContent" => $this->tweetContent, "tweetDate" => $formattedDate];
	$statement->execute($parameters);
/**
get Tweet from tweetDates
**/




