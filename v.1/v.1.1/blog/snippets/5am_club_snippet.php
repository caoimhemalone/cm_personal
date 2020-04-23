<div class="post col-md-6">
    <div class="post-thumbnail">
        <a class="open-post" href="blog/the-5am-club">
            <img class="lazyload" data-src="../blog/images/desk.jpeg" alt="desk">
        </a>
    </div>
    <div class="post-title">
        <a class="open-post" href="https://www.key-vah.com/blog/the-5am-club"><h2>Why I don’t think the 5am club is the only way to be productive</h2></a>
        <p class="post-info">
            <span class="post-author">Caoimhe Malone</span>
            <span class="slash"></span>
            <span class="post-date">Jan 31, 2019</span>
            <span class="slash"></span>
            <span class="post-catetory">Productivity</span>
        </p>
    <span class="read-time"><p class="readingTimeThree"> min read</p></span>
    </div>
    <span class="hidden-text article-text-three">
        This started off as a journal entry but I decided that it was actually a good topic to write about. I’ve been thinking a lot about the 5am club. I’ve heard about it on many podcasts and have read numerous medium articles on the subject. I would 100% join the 5am club instead of staying up until 11:30 doing my side job of web dev or editing a video (which I rarely have time to do anymore). But right now in my life it’s just not ideal to get up at 5am. Yeah it would be great by the time I get into work at 8:30 I can have my gym workout done, a bit of web development done, my breakfast eaten nice and early to get my metabolism going and my 10km cycle to work done. I could have a really productive day before 9am. But there’s just one problem. It would take a huge toll on my relationship with my boyfriend. Our weekdays are so busy that we only get to talk to each other via text in the evening (and then we see each other on the weekend). And even at that the conversation is spread out because we aren’t looking at our phones the whole evening. We don’t live together so it makes catching up on eachothers day a little bit harder. So if I woke up at 5am I would have to go to sleep at 9pm to get my 8 hours sleep ( I need my 8 hours or I can’t function). And I just can’t do that right now. But my current routine does work for me. My Daily (weekday) Routine I wake up at 7:09 am to the sound of Alexa telling me the weather for the day (essential when living in Ireland and cycling to work). Then my alarm goes off at 7:10am indicating that it’s time to get out of bed. I eat a banana, that I bring to my room the night before, and get dressed into my gym/cycling gear. I brush my teeth then go downstairs and grab my lunch from the fridge. I put on everything I need to cycle (jacket, gloves, helmet, turn lights on) then leave the house around 7:30–7:45. I cycle 10km (40minutes) from Santry, Dublin to Leeson Street, Dublin. I get into work (a web development company) for 8:10–8:20, have a shower and get into my work clothes (the typical Developer attire of jeans and a hoodie) then I am at my desk by 8:30/40. Around 9am I will have my porridge (porridge oats, milk, peanut butter, chia seeds, and protein powder) It’s the best porridge ever. Then I work until 5pm. I’m back on the bike at 5:15pm, cycle 8.4km to the gym, do an hours workout, cycle ~2km home, get home around 7:15, have my dinner, shower or have a bath to relax my muscles while I read a book, then some days I sit down at my computer and work on my side hustle of Web Developement for a few local businesses. I’ll do maybe 2/2.5 hours of this then go to bed. A day well spent and I didn’t need to get up at 5am to do it. So yeah getting up at 5am means that you are productive early in the day but it doesn’t mean that getting up any later will make you less productive. Maybe in the future when me and my boyfriend are living together we can both join the 5am club and make it work. But for now my routine is pretty solid.
    </span>
    <div class="post-body">
        <p>This started off as a journal entry but I decided that it was actually a good topic to write about.I’ve been thinking a lot about the 5am club. I’ve heard about it on many podcasts and have read numerous medium articles on the subject. I would 100% join the 5am club instead of staying up until...</p>
        <a class="btn open-post" href="https://www.key-vah.com/blog/the-5am-club">Read More</a>
    </div>
</div>
<script>
    $(function () {
        $(".readingTimeThree").each(function(index) {
            var postContent = $(".article-text-three").get(index);
            var readTime = this;
            var imageCount = $(postContent).find("img").length;

            Countable.count(postContent, function(counter) {
                var seconds = counter.words / 275 * 60 + imageCount * 12;
                var minutes = Math.ceil(seconds / 60)+1;
                $(readTime).html(minutes + " min read");
            });
        })
    });
    </script>