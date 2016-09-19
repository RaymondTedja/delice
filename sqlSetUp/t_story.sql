CREATE TABLE t_story(
	v_storyId int UNIQUE NOT NULL AUTO_INCREMENT PRIMARY KEY ,
	v_likes int,
	v_username varchar(255) NOT NULL,
	FOREIGN KEY (v_username) REFERENCES t_user(v_username));
	
	--Consider using user ID for foreign key
	
