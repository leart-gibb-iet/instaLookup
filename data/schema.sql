DROP TABLE IF EXISTS users;
CREATE TABLE  users (
  username VARCHAR(40) NOT NULL,
  email VARCHAR(60),
  password  VARCHAR(60)  NOT NULL,
  PRIMARY KEY  (username)
);

INSERT INTO user (firstName, lastName, email, password) VALUES ('Tester', 'Test@test.ch',   sha1('test'));
