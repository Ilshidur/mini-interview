<div class="container">
    <h1>Fizz Buzz</h1>
    <table>
        <?php foreach ($filteredSongs as $song) { ?>
            <tr>
                <td><?php if (isset($song->artist)) echo htmlspecialchars($song->artist, ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php if (isset($song->id)) echo htmlspecialchars($song->id, ENT_QUOTES, 'UTF-8'); ?></td>
                <td><?php if (isset($song->id)) {
                    if ($song->id % 3 === 0 && $song->id % 5 === 0) {
                        echo "fizzbuzz";
                    } else if ($song->id % 5 === 0) {
                        echo "buzz";
                    } else if ($song->id % 3 === 0) {
                        echo "fizz";
                    }
                } ?></td>
            </tr>
        <?php } ?>
    </table>
</div>
