-- School Tour Database Schema for PostgreSQL
-- This is the PostgreSQL version for Railway/Supabase

-- Drop existing tables if they exist
DROP TABLE IF EXISTS bookmarks CASCADE;
DROP TABLE IF EXISTS tour_progress CASCADE;
DROP TABLE IF EXISTS contacts CASCADE;
DROP TABLE IF EXISTS newsletter_subscribers CASCADE;
DROP TABLE IF EXISTS users CASCADE;

-- Users table
CREATE TABLE users (
    id SERIAL PRIMARY KEY,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    phone VARCHAR(20),
    user_type VARCHAR(20) NOT NULL CHECK (user_type IN ('student', 'parent', 'teacher', 'visitor')),
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Create index on email
CREATE INDEX idx_users_email ON users(email);
CREATE INDEX idx_users_type ON users(user_type);

-- Tour progress tracking
CREATE TABLE tour_progress (
    id SERIAL PRIMARY KEY,
    user_id INTEGER NOT NULL,
    facility_name VARCHAR(100) NOT NULL,
    visited_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- Create indexes
CREATE INDEX idx_tour_progress_user ON tour_progress(user_id);
CREATE INDEX idx_tour_progress_facility ON tour_progress(facility_name);

-- Contact form submissions
CREATE TABLE contacts (
    id SERIAL PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    email VARCHAR(255) NOT NULL,
    subject VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    submitted_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status VARCHAR(20) DEFAULT 'new' CHECK (status IN ('new', 'read', 'replied'))
);

-- Create indexes
CREATE INDEX idx_contacts_status ON contacts(status);
CREATE INDEX idx_contacts_submitted ON contacts(submitted_at);

-- Newsletter subscribers
CREATE TABLE newsletter_subscribers (
    id SERIAL PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    subscribed_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    active BOOLEAN DEFAULT TRUE
);

-- Create indexes
CREATE INDEX idx_newsletter_email ON newsletter_subscribers(email);
CREATE INDEX idx_newsletter_active ON newsletter_subscribers(active);

-- Bookmarked facilities
CREATE TABLE bookmarks (
    id SERIAL PRIMARY KEY,
    user_id INTEGER NOT NULL,
    facility_name VARCHAR(100) NOT NULL,
    bookmarked_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
    UNIQUE(user_id, facility_name)
);

-- Create index
CREATE INDEX idx_bookmarks_user ON bookmarks(user_id);

-- Create function to update updated_at timestamp
CREATE OR REPLACE FUNCTION update_updated_at_column()
RETURNS TRIGGER AS $$
BEGIN
    NEW.updated_at = CURRENT_TIMESTAMP;
    RETURN NEW;
END;
$$ language 'plpgsql';

-- Create trigger for users table
CREATE TRIGGER update_users_updated_at BEFORE UPDATE ON users
FOR EACH ROW EXECUTE FUNCTION update_updated_at_column();

-- Insert sample admin user (password: Admin1234!)
-- Note: Password hash is bcrypt for 'Admin1234!'
INSERT INTO users (first_name, last_name, email, phone, user_type, password) 
VALUES ('Admin', 'User', 'admin@schooltour.edu.ph', '+63 917-000-0000', 'teacher', 
        '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

-- Insert sample demo user (password: Demo1234!)
INSERT INTO users (first_name, last_name, email, phone, user_type, password) 
VALUES ('Demo', 'User', 'demo@schooltour.edu.ph', '+63 917-555-0123', 'student', 
        '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi');

-- Verify tables created
SELECT 'Database setup complete!' as status;
SELECT COUNT(*) as user_count FROM users;
