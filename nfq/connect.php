<?php

function getConnection()
{
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "archive";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  return $conn;
}

function getBookById($id)
{
  $conn = getConnection();

  $prepared = $conn->prepare("SELECT id, title, author, published, genre FROM bookcase WHERE id = ?");
  $prepared->bind_param("i", $id);
  $prepared->execute();
  $result = $prepared->get_result();

  $conn->close();

  return $result;
}

function getBooks($sortBy, $orderBy, $search, $page)
{
  $page_size = 5;
  $search = "%" . $search . "%";
  $offset = ($page - 1) * $page_size;
  $sortOrder = $sortBy . " " . $orderBy;

  $conn = getConnection();

  $prepared = $conn->prepare("
      SELECT id, title, author, published, genre FROM bookcase 
      WHERE title LIKE ? OR author LIKE ? OR published LIKE ? or genre LIKE ?
      ORDER BY ? LIMIT ? OFFSET ?"
  );

  $prepared->bind_param("sssssii", $search, $search, $search, $search, $sortOrder, $page_size, $offset);
  $prepared->execute();
  $result = $prepared->get_result();

  $conn->close();

  return $result;
}

function getBookCount($search)
{
  $search = "%" . $search . "%";

  $conn = getConnection();

  $prepared = $conn->prepare("
      SELECT COUNT(*) as 'book_count' FROM bookcase 
      WHERE title LIKE ? OR author LIKE ? OR published LIKE ? or genre LIKE ?
    ");

  $prepared->bind_param("ssss", $search, $search, $search, $search);
  $prepared->execute();
  $result = $prepared->get_result();

  $conn->close();

  return $result;
}