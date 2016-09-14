--create database delice              
                                    
create table t_customer(    
	userId int UNIQUE NOT NULL AUTO_INCREMENT,      
	username varchar(255) NOT NULL PRIMARY KEY,
	userPassword varchar(255) NOT NULL,
	firstName varchar(255),          
	lastName varchar(255),           
	email varchar(255),              
	dob date);    
	
	--Consider having customerId using autoincrement
                
	                                 







		                                                         

		