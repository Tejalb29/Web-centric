TYPE=TRIGGERS
triggers='CREATE DEFINER=`root`@`localhost` TRIGGER before_insert_sessions\nBEFORE INSERT ON sessions\nFOR EACH ROW\nBEGIN\n    IF NEW.status NOT IN (\'completed\', \'scheduled\', \'cancelled\') THEN\n        SIGNAL SQLSTATE \'45000\'\n        SET MESSAGE_TEXT = \'Invalid status value. Allowed values are: completed, scheduled, cancelled.\';\n    END IF;\nEND' 'CREATE DEFINER=`root`@`localhost` TRIGGER check_times_before_insert\nBEFORE INSERT ON sessions\nFOR EACH ROW\nBEGIN\n    IF NEW.endTime <= NEW.startTime THEN\n        SIGNAL SQLSTATE \'45000\'\n        SET MESSAGE_TEXT = \'Error: endTime must be greater than startTime.\';\n    END IF;\nEND'
sql_modes=1098907648 1098907648
definers='root@localhost' 'root@localhost'
client_cs_names='utf8mb4' 'utf8mb4'
connection_cl_names='utf8mb4_unicode_ci' 'utf8mb4_unicode_ci'
db_cl_names='utf8mb4_general_ci' 'utf8mb4_general_ci'
created=1725178785419457 1725178968085896
