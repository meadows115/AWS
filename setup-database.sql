CREATE TABLE members (
  firstname varchar(20) NOT NULL,
  lastname varchar(50) NOT NULL,
  address varchar(50) NOT NULL,
  contactnumber varchar(15) NOT NULL,
  height varchar(50) NOT NULL,
  weight varchar(50) NOT NULL,	
  bodyfat varchar(50) NOT NULL,
  exerciselevel varchar(50) NOT NULL,
  sex varchar(20),	
  goal varchar (20)
);

INSERT INTO members VALUES('Nikki', 'Meadows', '40 high street', '23 345 345', '164', '62', '24', '4', 'Female', 'Gain Weight');
INSERT INTO members VALUES('Shaun', 'Drabble', '80 Elm street' , '21 878 2334', '164', '62', '24', '3', 'Male', 'Gain Weight');