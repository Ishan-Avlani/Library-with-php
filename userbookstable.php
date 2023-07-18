<div class="libTable">
    <div class="table-title">
        <h3>All Books</h3>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Sr. No.</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Edit Details</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM booksdata";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                    // Iterate over each row of data
                    while ($row = $result->fetch_assoc()) {
                        $bookId = $row['id'];
                        $title = $row['title'];
                        $description = $row['description'];
                        $imagePath = $row['image_path'];
                
                        // Display the book data within the table rows
                        echo "<tr>";
                        echo "<td>" . $bookId . "</td>";
                        echo "<td>" . $title . "</td>";
                        echo "<td>" . $description . "</td>";
                        echo "<td><img src='" . $imagePath . "' /></td>";
                        echo "<td><a href='done.html'><button value='Get Book' class='btn'>Get Book</button></a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "No books found in the database.";
                }
                
                // Close the database connection
                $conn->close();
            ?>
        </tbody>
    </table>
</div>
