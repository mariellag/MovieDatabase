-- Mariella Gauvreau
-- CSE 154
-- Section: AC
-- Starter dataset for Comedy of movielist.
DROP DATABASE IF EXISTS movielist;

CREATE DATABASE movielist;
USE movielist;

DROP TABLE IF EXISTS Comedy;
CREATE TABLE Comedy(
  title       VARCHAR(134) NOT NULL,
  description VARCHAR(134) NOT NULL,
  year        INT NOT NULL,
  rating      INT NOT NULL
);

INSERT INTO comedy (title, description, year, rating )
  VALUES ('Deadpool', 'Jokes, a rogue experiement, and revenge', 2016, 8);
INSERT INTO comedy (title, description, year, rating )
  VALUES ('Inside Out', 'Lot of emotions and a new city to navigate', 2015, 8.2);
INSERT INTO comedy (title, description, year, rating )
  VALUES ('The Hangover', '3 friends as they find their friend in Vegas', 2009, 7.7);
INSERT INTO comedy (title, description, year, rating )
  VALUES ('Ferris Bueller\'s Day Off', 'A high schooler\'s Day off from school', 1986, 7.8);
