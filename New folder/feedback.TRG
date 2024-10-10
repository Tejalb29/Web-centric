TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER trg_check_status\nBEFORE INSERT ON feedback\nFOR EACH ROW\nBEGIN\n    IF NEW.status NOT IN (\'resolved\', \'pending\') THEN\n        SIGNAL SQLSTATE \'45000\'\n        SET MESSAGE_TEXT = \'Invalid status value. Allowed values are "resolved" and "pending".\';\n    END IF;\nEND' 'CREATE DEFINER=`root`@`localhost` TRIGGER trg_check_rating\nBEFORE INSERT ON feedback\nFOR EACH ROW\nBEGIN\n    IF NEW.rating > 5 THEN\n        SIGNAL SQLSTATE \'45000\'\n        SET MESSAGE_TEXT = \'Invalid rating value. The rating must be less than or equal to 5.\';\n    END IF;\nEND' 'CREATE DEFINER=`root`@`localhost` TRIGGER before_insert_feedback\nBEFORE INSERT ON feedback\nFOR EACH ROW\nBEGIN\n    IF NEW.date >= CURDATE() THEN\n        SIGNAL SQLSTATE \'45000\'\n        SET MESSAGE_TEXT = \'Date must be before the current date.\';\n    END IF;\nEND'
sql_modes=1098907648 1098907648 1098907648
definers='root@localhost' 'root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci' 'utf8mb4_general_ci'
created=1725177481576858 1725178099884369 1725178372147301
