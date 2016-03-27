/* SQLEditor (MySQL (2))*/

CREATE TABLE p2m_user_type
(
id int(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
name varchar(64) COLLATE utf8_unicode_ci NOT NULL,
value int(11) UNSIGNED NOT NULL UNIQUE,
PRIMARY KEY (id)
) ENGINE=InnoDB CHARACTER SET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE p2m_gender
(
id int(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
name varchar(64) COLLATE utf8_unicode_ci NOT NULL,
PRIMARY KEY (id)
) ENGINE=InnoDB CHARACTER SET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE p2m_status
(
id int(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
name varchar(64) COLLATE utf8_unicode_ci NOT NULL,
value int(11) UNSIGNED NOT NULL UNIQUE,
PRIMARY KEY (id)
) ENGINE=InnoDB CHARACTER SET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE p2m_profile
(
id int(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
user_id int(11) UNSIGNED NOT NULL,
given_name varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
family_name varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
birth_date DATE DEFAULT NULL,
gender_id int(11) UNSIGNED DEFAULT 0 NOT NULL,
created_at DATETIME NOT NULL,
updated_at DATETIME NOT NULL,
PRIMARY KEY (id)
) ENGINE=InnoDB CHARACTER SET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE p2m_role
(
id int(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
name varchar(64) COLLATE utf8_unicode_ci NOT NULL,
value int(11) UNSIGNED NOT NULL UNIQUE,
PRIMARY KEY (id)
) ENGINE=InnoDB CHARACTER SET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE p2m_user
(
id int(11) UNSIGNED NOT NULL AUTO_INCREMENT UNIQUE,
username varchar(255) COLLATE utf8_unicode_ci NOT NULL,
auth_key varchar(64) COLLATE utf8_unicode_ci NOT NULL,
password_hash varchar(255) COLLATE utf8_unicode_ci NOT NULL,
password_reset_token varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
email varchar(255) COLLATE utf8_unicode_ci NOT NULL,
role_id int(11) UNSIGNED DEFAULT 10 NOT NULL,
status_id int(11) UNSIGNED DEFAULT 10 NOT NULL,
user_type_id int(11) UNSIGNED DEFAULT 10 NOT NULL,
created_at DATETIME NOT NULL,
updated_at DATETIME NOT NULL,
PRIMARY KEY (id)
) ENGINE=InnoDB CHARACTER SET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE p2m_migration
(
version varchar(180) COLLATE utf8_unicode_ci NOT NULL,
apply_time int(11) DEFAULT NULL
) ENGINE=InnoDB CHARACTER SET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE p2m_profile ADD FOREIGN KEY gender_id_idxfk (gender_id) REFERENCES p2m_gender (id);

ALTER TABLE p2m_user ADD FOREIGN KEY role_id_idxfk (role_id) REFERENCES p2m_role (value);

ALTER TABLE p2m_user ADD FOREIGN KEY status_id_idxfk (status_id) REFERENCES p2m_status (value);

ALTER TABLE p2m_user ADD FOREIGN KEY user_type_id_idxfk (user_type_id) REFERENCES p2m_user_type (value);
