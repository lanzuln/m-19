<div class="post_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="page_subtitle">Here is our all post</h4>
                <h1>Featured Posts</h1>

                <div id="featured_posts">

                </div>


            </div>
        </div>
    </div>
</div>


<script>
featured_posts();
async function featured_posts() {
    let URL = "/post";

    try {


        const res = await axios.get(URL);


        res.data.forEach(post => {
            document.getElementById('featured_posts').innerHTML +=
                (`<div class="single_post">
                    <div class="post_thumbnail">
                        <img src="${post.img}" alt="post img">
                    </div>
                    <div class="post_content">
                        <a href="/posts/${post.id}">
                            <h2 class="post_title">${post.title}</h2>
                        </a>
                        <div class="author_meta">
                            <span class="author_name">${post.author}</span>
                            <span class="date">${post.date}</span>
                        </div>
                        <p class="post_excerpt">${post.content}</p>
                    </div>
                </div>`)
        })
    } catch (error) {
        alert(error);
    }
}
</script>