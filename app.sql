DROP TABLE IF EXISTS guestbook_entries;

CREATE TABLE IF NOT EXISTS guestbook_entries (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    username VARCHAR(80) NOT NULL,
    email VARCHAR(120) DEFAULT NULL,
    message TEXT NOT NULL,
    ip_address VARCHAR(45) NOT NULL,
    user_agent VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id),
    INDEX idx_guestbook_entries_created_at (created_at)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO guestbook_entries (username, email, message, ip_address, user_agent, created_at) VALUES
('Alex Morgan', NULL, 'Clean structure and clear validation flow. This is a solid backend portfolio demo.', '127.0.0.1', 'Demo seed', '2026-05-08 09:30:00'),
('Nina Patel', 'nina@example.test', 'The Docker setup made the project straightforward to run locally.', '127.0.0.1', 'Demo seed', '2026-05-08 09:20:00'),
('Sam Rivera', NULL, 'Good example of prepared statements, escaping, and friendly form errors.', '127.0.0.1', 'Demo seed', '2026-05-08 09:10:00');
