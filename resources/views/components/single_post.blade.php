<div class="single_post_section">

    <div id="background_image" class="single_banner_area">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <p id="single_date" class="single_date"></p>
                    <h2 id="single_title"></h2>
                    <div class="single_author_area">
                        <span class="author_img"> <img id="single_author_img" src="" alt="await"></span>
                        <span id="single_author" class="single_author_name"></span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="single_content section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <p id="single_content"></p>
                </div>
            </div>
        </div>
    </div>
</div>


<h2 id="title"></h2>
<p id="content"></p>

<script>
single_post();
async function single_post() {
    let postURL = "/posts/data/{{$id}}";

    try {
        const response = await axios.get(postURL);
        const post = response.data;

        document.getElementById('single_date').textContent = post.date;
        document.getElementById('single_title').textContent = post.title;
        document.getElementById('single_content').textContent = post.content;
        document.getElementById('single_author').textContent = post.author;
        document.getElementById('single_author_img').src = post.author_img;
        document.getElementById('background_image').style.backgroundImage = 'url("' + post.img + '")';


    } catch (error) {
        console.error(error);
    }
}
</script>