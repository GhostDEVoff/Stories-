<?php
if (isset($_POST['story'])) {
    $story = strip_tags($_POST['story']);
    $story = nl2br(htmlspecialchars($story));
    $entry = "<p><strong>История:</strong><br>$story</p>\n<hr>\n";

    file_put_contents("stories.txt", $entry, FILE_APPEND);
}
header("Location: index.html");
exit;
?>