<form action="/" method="get">
    <label for="search">Search
        <input type="text" name="s" id="search" value="<?php the_search_query();?>" required>
        <button type="submit">Find it!</button>
    </label>
</form>