<div x-data="{ open: false }" class="w-full">
    <div :class="{ 'block': !open, 'hidden': open }" @click="open = !open"
        class="w-96 mb-10 mt-10 cursor-pointer border border-gray-300 bg-white rounded-lg">
        <img class="w-full border-2 border-black rounded-lg"
            src="https://wordlewebsite.com/upload/cache/upload/imgs/phrazle-m190x110.png" alt="Wordle Game">
        <p class="text-black text-3xl font-semibold text-center mt-3 mb-3">Phrazle</p>
    </div>
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden flex flex-col md:flex-row items-start gap-5 flex-grow relative w-full">
        <div class="w-full md:w-3/4">
            <p @click="open = !open"
                class="absolute cursor-pointer top-2 left-2 text-white flex items-center text-lg gap-2"><svg
                    fill="white" height="20" width="20" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 384 512">
                    <path
                        d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z" />
                </svg>Close</p>
            <iframe class="rounded-lg border-2 w-full" style="height: 750px; background: #fff;" id="iframehtml5"
                src="https://wordlewebsite.com/game/phrazle.embed" frameborder="0" scrolling="no" allowfullscreen="yes">
            </iframe>
            <div class="bg-slate-200 px-10 py-10 border rounded-lg mt-8">
                <p class="text-3xl text-start font-bold">Wordle Website</p>
                <p class="text-lg">Wordle Website - is a place to play the Wordle games that have consistently appeared
                    on informal organizations and sites. This is a fundamental game with many lines of letters like
                    other word puzzle. <br />
                <p></p>
                You have 6 lines of letters to figure out the right expression of the day. If you fill in an English
                word and the shade of the line changes to green, it implies you are correct. Conversely, if the
                shading is yellow, this implies the expected word has similar letters but is coordinated in another
                request.<br />
                <p></p>
                After each season of speculating, the shades of the tiles steadily change to show how you are near
                the right response. The game is almost similar to certain games that expect players to eliminate the
                given numbers and discover the last key.
                <p></p>
                <br />The game's connection point incorporates 30 separate squares above, coordinated like a table
                with 6 lines and 5 sections and tiles of various letters beneath. You can enter 6 words utilizing
                the given letters. As such, you can utilize the initial 5 words to track down hints about their
                letters and the place of the letters. Then, at that point, players ultimately triumph over the last
                opportunity to figure out the final word, and its shading changes to green.
                <p></p>
                <br />Wordle website is a good website to use when you are looking to play Wordle, as it can help
                relax and challenge your limit. It's also very fun and engaging, so you'll want to play Wordle often
                and share your results with your friends!


                </p>

            </div>
        </div>
        <div class="w-full md:w-1/4 min-h-screen px-5 py-5 border rounded-lg flex flex-grow">
            <p class="text-white">This section will be used for ads</p>
        </div>
    </div>
</div>