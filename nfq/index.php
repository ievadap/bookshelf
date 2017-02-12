<?php
include 'header.php';

$search = "";
$sort = "title";
$order = "ASC";
$page = 1;

if (isset($_GET['search'])) {
  $search = $_GET['search'];
}

if (isset($_GET['sortAndOrder'])) {
  $var = explode("_", $_GET['sortAndOrder']);
  $sort = $var[0];
  $order = $var[1];
}

if (isset($_GET['page'])) {
  $page = $_GET['page'];
}
?>

  <header class="container-fluid noMargin">
    <h1 class="text-center">The Bookshelf</h1>
  </header>

  <form id="collectInp" method="get" action="/nfq">
    <div class="container">
      <div class="row searchRow">
        <div class="col-md-8 col-md-offset-2">
          <div class="row">
            <div class="col-md-10">
              <input name="search" value="<?php echo $search; ?>" type="text" class="form-control search-placeholder"
                     placeholder="Search for a title, author, year or genre">
            </div>
            <div class="col-md-2">
              <button type="submit" class="btn btn-default">Search</button>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <?php
          $result = getBooks($sort, $order, $search, $page);
          if ($result->num_rows > 0): ?>
          <table class="table">
            <thead>
            <tr>
              <th>
                Title
                <input id="radio1" type="radio" name="sortAndOrder" value="title_ASC" class="icon-radio"
                  <?php if (($sort . "_" . $order) == "title_ASC"): ?> checked <?php endif; ?>>
                <label for="radio1">
                    <span class="glyphicon glyphicon-chevron-up
                    <?php if (($sort . "_" . $order) == "title_ASC"): echo "active"; endif; ?>" aria-hidden="true">
                    </span>
                </label>
                <input type="radio" name="sortAndOrder" value="title_DESC" id="radio2" class="icon-radio"
                  <?php if (($sort . "_" . $order) == "title_DESC"): ?> checked <?php endif; ?>>
                <label for="radio2">
                    <span class="glyphicon glyphicon-chevron-down
                    <?php if (($sort . "_" . $order) == "title_DESC"): echo "active"; endif; ?>" aria-hidden="true">
                    </span>
                </label>
              </th>
              <th>
                Author
                <input id="radio3" type="radio" name="sortAndOrder" value="author_ASC" class="icon-radio"
                  <?php if (($sort . "_" . $order) == "author_ASC"): ?> checked <?php endif; ?>>
                <label for="radio3">
                    <span class="glyphicon glyphicon-chevron-up
                    <?php if (($sort . "_" . $order) == "author_ASC"): echo "active"; endif; ?>" aria-hidden="true">
                    </span>
                </label>
                <input id="radio4" type="radio" name="sortAndOrder" value="author_DESC" class="icon-radio"
                  <?php if (($sort . "_" . $order) == "author_DESC"): ?> checked <?php endif; ?>>
                <label for="radio4">
                    <span class="glyphicon glyphicon-chevron-down
                    <?php if (($sort . "_" . $order) == "author_DESC"): echo "active"; endif; ?>" aria-hidden="true">
                    </span>
                </label>
              </th>
              <th>
                Published
                <input id="radio5" type="radio" name="sortAndOrder" value="published_ASC" class="icon-radio"
                  <?php if (($sort . "_" . $order) == "published_ASC"): ?> checked <?php endif; ?>>
                <label for="radio5">
                    <span class="glyphicon glyphicon-chevron-up
                    <?php if (($sort . "_" . $order) == "published_ASC"): echo "active"; endif; ?>" aria-hidden="true">
                    </span>
                </label>
                <input id="radio6" type="radio" name="sortAndOrder" value="published_DESC" class="icon-radio"
                  <?php if (($sort . "_" . $order) == "published_DESC"): ?> checked <?php endif; ?>>
                <label for="radio6">
                    <span class="glyphicon glyphicon-chevron-down
                    <?php if (($sort . "_" . $order) == "published_DESC"): echo "active"; endif; ?>" aria-hidden="true">
                    </span>
                </label>
              </th>
              <th>
                Genre
                <input id="radio7" type="radio" name="sortAndOrder" value="genre_ASC" class="icon-radio"
                  <?php if (($sort . "_" . $order) == "genre_ASC"): ?> checked <?php endif; ?>>
                <label for="radio7">
                    <span class="glyphicon glyphicon-chevron-up
                    <?php if (($sort . "_" . $order) == "genre_ASC"): echo "active"; endif; ?>" aria-hidden="true">
                    </span>
                </label>
                <input id="radio8" type="radio" name="sortAndOrder" value="genre_DESC" class="icon-radio"
                  <?php if (($sort . "_" . $order) == "genre_DESC"): ?> checked <?php endif; ?>>
                <label for="radio8">
                    <span class="glyphicon glyphicon-chevron-down
                    <?php if (($sort . "_" . $order) == "genre_DESC"): echo "active"; endif; ?>" aria-hidden="true">
                    </span>
                </label>
              </th>
            </tr>
            </thead>
            <?php while ($row = $result->fetch_assoc()): ?>
              <tr>
                <td>
                  <a href="/nfq/book.php?id=<?php echo $row["id"]; ?>"><?php echo $row["title"]; ?></a>
                </td>
                <td><?php echo $row["author"]; ?></td>
                <td><?php echo $row["published"]; ?></td>
                <td><?php echo $row["genre"]; ?></td>
              </tr>
            <?php endwhile; ?>
          </table>
          <div class="row text-center">
            <?php
            $result = getBookCount($search);
            if ($result->num_rows > 0):
              $row = $result->fetch_assoc();
              $number = $row["book_count"]; ?>
              <nav class="col-md-12 pages" aria-label="Page navigation">
                <ul class="pagination">
                  <?php for ($i = 1; $i <= ceil($number / 5); $i++): ?>
                    <li class="page-item <?php if ($i == $page) echo "active"; ?>">
                      <a
                        href="/nfq/?search=<?php echo $search . "&sortAndOrder=" . $sort . "_" . $order . "&page=" . $i; ?>">
                        <?php echo $i; ?>
                      </a>
                    </li>
                  <?php endfor; ?>
                </ul>
              </nav>
            <?php endif; ?>
            <?php else: ?>
              <p class="text-center">Sorry, no books are available at the moment.</p>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </form>

<?php include 'footer.php'; ?>