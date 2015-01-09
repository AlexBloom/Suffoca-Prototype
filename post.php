<?php include_once'inc/head.inc' ?>
<?php include_once'inc/header.inc' ?>

<article class="post">
    <header>
        <ul class="categories"> 
            <li> <a class="category-link" href="category">Category</a> </li>
        </ul>
        <h1>Article Title</h1>
        <h2>Article Subtitle</h2>
        <p class="author"> By <a class="author-link" href="/author-namely">Author Namely</a> </p> 
    </header>
    <section>
        <p>Paragraphs of text</p>
        <blockquote> Blockquote that looks great. </blockquote>
        <p>Paragraphs of text</p>
        <img src="img/content/imgtest.jpg" alt="Inline Full Width Image">
        <p>Paragraphs of text</p>
        <figure>
            <img src="img/content/imgtest.jpg" alt="Image with a caption">
            <figcaption> Image caption. </figcaption>
        </figure>
        <p>More paragraphs of text.</p>
        <figure>
            <blockquote> Blockquote that looks great. </blockquote>
            <figcaption> With a quote author. </figcaption>
        </figure>
        <p>More paragraphs of text.</p>
    </section>
    <footer>
        <ul class="tags">
            <li>tag</li>
            <li>tag</li>
            <li>tag</li>
        </ul>        
    </footer>
</article>

<?php include_once'inc/footer.inc' ?>