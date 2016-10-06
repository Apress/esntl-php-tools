CREATE TABLE eaters (
  id int(10) unsigned NOT NULL,
  name varchar(255) default NULL,
  PRIMARY KEY  (id)
);
CREATE TABLE orders (
  eater_id int(11) default NULL,
  ice_cream_id int(11) default NULL
);
