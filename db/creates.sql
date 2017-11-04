CREATE TABLE CONTENT(
    ID INT PRIMARY KEY NOT NULL,
    PARENT_ID INT,
    TITLE TEXT NOT NULL,
    CONTENT_TYPE CHAR(20) NOT NULL,
    CONTENT TEXT,
    POSITION INT

);

CREATE TABLE RESOURCES(
    ID INT PRIMARY KEY NOT NULL,
    URL TEXT NOT NULL,
    CONTENT_TYPE CHAR(20) NOT NULL,
    ID_PARENT INT
);
