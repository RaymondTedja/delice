create table t_follower(
	v_user int NOT NULL,
	v_follower int NOT NULL,
	FOREIGN KEY(v_user) REFERENCES t_user(v_userId),
	FOREIGN KEY(v_follower) REFERENCES t_user(v_userId));