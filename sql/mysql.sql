CREATE TABLE tellafriend_log (
  lid            INT UNSIGNED          NOT NULL AUTO_INCREMENT,
  uid            MEDIUMINT(8) UNSIGNED NOT NULL DEFAULT 0,
  ip             VARCHAR(255)          NOT NULL DEFAULT '0.0.0.0',
  mail_fromname  VARCHAR(255)          NOT NULL DEFAULT '',
  mail_fromemail VARCHAR(255)          NOT NULL DEFAULT '',
  mail_to        VARCHAR(255)          NOT NULL DEFAULT '',
  mail_subject   VARCHAR(255)          NOT NULL DEFAULT '',
  mail_body      TEXT                  NOT NULL,
  agent          VARCHAR(255)          NOT NULL DEFAULT '',
  timestamp      TIMESTAMP,
  PRIMARY KEY (lid)
)
  ENGINE = MyISAM;
