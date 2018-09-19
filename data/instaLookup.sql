DROP TABLE IF EXISTS users;
CREATE TABLE  users (
  username VARCHAR(40) NOT NULL,
  email VARCHAR(60) NOT NULL,
  password  VARCHAR(60)  NOT NULL,
  PRIMARY KEY  (username)
);

INSERT INTO users (username, email, password) VALUES ('Tester', 'Test@test.ch',   sha1('test'));
