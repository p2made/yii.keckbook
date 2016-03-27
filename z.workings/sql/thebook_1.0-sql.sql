/* SQLEditor (MySQL (2))*/

CREATE TABLE IF NOT EXISTS p2m_role
(
id int(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
name varchar(45) COLLATE utf8_unicode_ci NOT NULL,
value int(11) UNSIGNED NOT NULL UNIQUE,
description TEXT,
created_at int(11) UNSIGNED NOT NULL,
updated_at int(11) UNSIGNED NOT NULL,
PRIMARY KEY (id)
) ENGINE=InnoDB CHARACTER SET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS p2m_status
(
id int(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
name varchar(45) COLLATE utf8_unicode_ci NOT NULL,
value int(11) UNSIGNED NOT NULL UNIQUE,
description TEXT,
created_at int(11) UNSIGNED NOT NULL,
updated_at int(11) UNSIGNED NOT NULL,
PRIMARY KEY (id)
) ENGINE=InnoDB CHARACTER SET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS p2m_user_type
(
id int(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
name varchar(45) COLLATE utf8_unicode_ci NOT NULL,
value int(11) UNSIGNED NOT NULL UNIQUE,
description TEXT,
created_at int(11) UNSIGNED NOT NULL,
updated_at int(11) UNSIGNED NOT NULL,
PRIMARY KEY (id)
) ENGINE=InnoDB CHARACTER SET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS p2m_user
(
id int(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
username varchar(255) COLLATE utf8_unicode_ci NOT NULL,
auth_key varchar(32) COLLATE utf8_unicode_ci NOT NULL,
password_hash varchar(255) COLLATE utf8_unicode_ci NOT NULL,
password_reset_token varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
email varchar(255) COLLATE utf8_unicode_ci NOT NULL,
role_value int(11) UNSIGNED DEFAULT '1' NOT NULL,
status_value int(11) UNSIGNED DEFAULT '1' NOT NULL,
user_type_value int(11) UNSIGNED DEFAULT '1' NOT NULL,
created_at int(11) UNSIGNED NOT NULL,
updated_at int(11) UNSIGNED NOT NULL,
PRIMARY KEY (id)
) ENGINE=InnoDB CHARACTER SET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS p2m_gender
(
id int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
name varchar(45) COLLATE utf8_unicode_ci NOT NULL,
PRIMARY KEY (id)
) ENGINE=InnoDB CHARACTER SET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE IF NOT EXISTS p2m_profile
(
id int(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
user_id int(11) UNSIGNED NOT NULL UNIQUE,
first_name varchar(60) COLLATE utf8_unicode_ci NOT NULL,
last_name varchar(60) COLLATE utf8_unicode_ci NOT NULL,
birthdate DATE NOT NULL,
about TEXT,
gender_id int(11) UNSIGNED NOT NULL,
created_at int(11) UNSIGNED NOT NULL,
updated_at int(11) UNSIGNED NOT NULL,
PRIMARY KEY (id)
) ENGINE=InnoDB CHARACTER SET=utf8 COLLATE=utf8_unicode_ci;

CREATE INDEX role_value_idx ON p2m_user(role_value);
ALTER TABLE p2m_user ADD FOREIGN KEY role_value_idxfk (role_value) REFERENCES p2m_role (value);

CREATE INDEX status_value_idx ON p2m_user(status_value);
ALTER TABLE p2m_user ADD FOREIGN KEY status_value_idxfk (status_value) REFERENCES p2m_status (value);

CREATE INDEX user_type_value_idx ON p2m_user(user_type_value);
ALTER TABLE p2m_user ADD FOREIGN KEY user_type_value_idxfk (user_type_value) REFERENCES p2m_user_type (value);

ALTER TABLE p2m_profile ADD FOREIGN KEY user_id_idxfk (user_id) REFERENCES p2m_user (id);

ALTER TABLE p2m_profile ADD FOREIGN KEY gender_id_idxfk (gender_id) REFERENCES p2m_gender (id);
