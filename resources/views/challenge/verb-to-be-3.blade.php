<x-verb-to-be-challenge>
    <x-title>Jumbled Sentence</x-title>

    <p class="ml-20 paragraph">Click on the words below to create a correct sentence in the input box above. If you need to remove a word, just click on it again.</p>

    <form id="sentence-form" action="#" class="my-10 space-y-10">
        <h3 class="paragraph text-blue-principal-0 font-semibold">Affirmative</h3>

        <!-- Sentence 1 -->
        <article class="border-[3px] border-blue-principal-0 rounded-md space-y-7 px-5 py-2 relative">
            <p class="absolute flex items-center justify-center bg-blue-principal-0 h-10 aspect-square rounded-full text-white title text-xl -left-5 -top-5">1</p>

            <input type="text" disabled class="paragraph px-10 border-b-2 border-gray-600 w-full bg-transparent outline-none" id="sentence1">

            <section class="flex justify-around">
                <button type="button" class="btn bg-blue-principal-0 hover:bg-blue-principal-0 hover:scale-105" onclick="addWord('sentence1', 'they')">they</button>
                <button type="button" class="btn bg-blue-principal-0 hover:bg-blue-principal-0 hover:scale-105" onclick="addWord('sentence1', 'are')">are</button>
                <button type="button" class="btn bg-blue-principal-0 hover:bg-blue-principal-0 hover:scale-105" onclick="addWord('sentence1', 'my')">my</button>
                <button type="button" class="btn bg-blue-principal-0 hover:bg-blue-principal-0 hover:scale-105" onclick="addWord('sentence1', 'friends')">friends</button>
            </section>
        </article>

        <!-- Sentence 2 -->
        <article class="border-[3px] border-blue-principal-0 rounded-md space-y-7 px-5 py-2 relative">
            <p class="absolute flex items-center justify-center bg-blue-principal-0 h-10 aspect-square rounded-full text-white title text-xl -left-5 -top-5">2</p>

            <input type="text" disabled class="paragraph px-10 border-b-2 border-gray-600 w-full bg-transparent outline-none" id="sentence2">

            <section class="flex justify-around">
                <button type="button" class="btn bg-blue-principal-0 hover:bg-blue-principal-0 hover:scale-105" onclick="addWord('sentence2', 'we')">we</button>
                <button type="button" class="btn bg-blue-principal-0 hover:bg-blue-principal-0 hover:scale-105" onclick="addWord('sentence2', 'are')">are</button>
                <button type="button" class="btn bg-blue-principal-0 hover:bg-blue-principal-0 hover:scale-105" onclick="addWord('sentence2', 'good')">good</button>
                <button type="button" class="btn bg-blue-principal-0 hover:bg-blue-principal-0 hover:scale-105" onclick="addWord('sentence2', 'students')">students</button>
            </section>
        </article>

        <!-- Sentence 3 -->
        <article class="border-[3px] border-blue-principal-0 rounded-md space-y-7 px-5 py-2 relative">
            <p class="absolute flex items-center justify-center bg-blue-principal-0 h-10 aspect-square rounded-full text-white title text-xl -left-5 -top-5">3</p>

            <input type="text" disabled class="paragraph px-10 border-b-2 border-gray-600 w-full bg-transparent outline-none" id="sentence3">

            <section class="flex justify-around">
                <button type="button" class="btn bg-blue-principal-0 hover:bg-blue-principal-0 hover:scale-105" onclick="addWord('sentence3', 'they')">they</button>
                <button type="button" class="btn bg-blue-principal-0 hover:bg-blue-principal-0 hover:scale-105" onclick="addWord('sentence3', 'are')">are</button>
                <button type="button" class="btn bg-blue-principal-0 hover:bg-blue-principal-0 hover:scale-105" onclick="addWord('sentence3', 'now')">now</button>
                <button type="button" class="btn bg-blue-principal-0 hover:bg-blue-principal-0 hover:scale-105" onclick="addWord('sentence3', 'at home')">at home</button>
            </section>
        </article>

        <h3 class="paragraph text-[#1CEDB1] font-semibold">Affirmative</h3>

        <!-- Sentence 4 -->
        <article class="border-[3px] border-[#1CEDB1] rounded-md space-y-7 px-5 py-2 relative">
            <p class="absolute flex items-center justify-center bg-[#1CEDB1] h-10 aspect-square rounded-full text-white title text-xl -left-5 -top-5">4</p>

            <input type="text" disabled class="paragraph px-10 border-b-2 border-gray-600 w-full bg-transparent outline-none" id="sentence4">

            <section class="flex justify-around">
                <button type="button" class="btn bg-[#1CEDB1] hover:bg-[#1CEDB1] hover:scale-105" onclick="addWord('sentence4', 'she')">she</button>
                <button type="button" class="btn bg-[#1CEDB1] hover:bg-[#1CEDB1] hover:scale-105" onclick="addWord('sentence4', 'is')">is</button>
                <button type="button" class="btn bg-[#1CEDB1] hover:bg-[#1CEDB1] hover:scale-105" onclick="addWord('sentence4', 'at')">at</button>
                <button type="button" class="btn bg-[#1CEDB1] hover:bg-[#1CEDB1] hover:scale-105" onclick="addWord('sentence4', 'home')">home</button>
                <button type="button" class="btn bg-[#1CEDB1] hover:bg-[#1CEDB1] hover:scale-105" onclick="addWord('sentence4', '?')">?</button>
            </section>
        </article>

        <!-- Sentence 5 -->
        <article class="border-[3px] border-[#1CEDB1] rounded-md space-y-7 px-5 py-2 relative">
            <p class="absolute flex items-center justify-center bg-[#1CEDB1] h-10 aspect-square rounded-full text-white title text-xl -left-5 -top-5">5</p>

            <input type="text" disabled class="paragraph px-10 border-b-2 border-gray-600 w-full bg-transparent outline-none" id="sentence5">

            <section class="flex justify-around">
                <button type="button" class="btn bg-[#1CEDB1] hover:bg-[#1CEDB1] hover:scale-105" onclick="addWord('sentence5', 'they')">they</button>
                <button type="button" class="btn bg-[#1CEDB1] hover:bg-[#1CEDB1] hover:scale-105" onclick="addWord('sentence5', 'are')">are</button>
                <button type="button" class="btn bg-[#1CEDB1] hover:bg-[#1CEDB1] hover:scale-105" onclick="addWord('sentence5', 'going')">going</button>
                <button type="button" class="btn bg-[#1CEDB1] hover:bg-[#1CEDB1] hover:scale-105" onclick="addWord('sentence5', 'to the park')">to the park</button>
                <button type="button" class="btn bg-[#1CEDB1] hover:bg-[#1CEDB1] hover:scale-105" onclick="addWord('sentence5', '?')">?</button>
            </section>
        </article>

        <!-- Sentence 6 -->
        <article class="border-[3px] border-[#1CEDB1] rounded-md space-y-7 px-5 py-2 relative">
            <p class="absolute flex items-center justify-center bg-[#1CEDB1] h-10 aspect-square rounded-full text-white title text-xl -left-5 -top-5">6</p>

            <input type="text" disabled class="paragraph px-10 border-b-2 border-gray-600 w-full bg-transparent outline-none" id="sentence6">

            <section class="flex justify-around">
                <button type="button" class="btn bg-[#1CEDB1] hover:bg-[#1CEDB1] hover:scale-105" onclick="addWord('sentence6', 'you')">you</button>
                <button type="button" class="btn bg-[#1CEDB1] hover:bg-[#1CEDB1] hover:scale-105" onclick="addWord('sentence6', 'are')">are</button>
                <button type="button" class="btn bg-[#1CEDB1] hover:bg-[#1CEDB1] hover:scale-105" onclick="addWord('sentence6', 'where')">where</button>
                <button type="button" class="btn bg-[#1CEDB1] hover:bg-[#1CEDB1] hover:scale-105" onclick="addWord('sentence6', 'going')">going</button>
                <button type="button" class="btn bg-[#1CEDB1] hover:bg-[#1CEDB1] hover:scale-105" onclick="addWord('sentence6', '?')">?</button>
            </section>
        </article>

        <h3 class="paragraph text-orange-smooth-0 font-semibold">Negative</h3>

        <!-- Sentence 7 -->
        <article class="border-[3px] border-orange-smooth-0 rounded-md space-y-7 px-5 py-2 relative">
            <p class="absolute flex items-center justify-center bg-orange-smooth-0 h-10 aspect-square rounded-full text-white title text-xl -left-5 -top-5">7</p>

            <input type="text" disabled class="paragraph px-10 border-b-2 border-gray-600 w-full bg-transparent outline-none" id="sentence7">

            <section class="flex justify-around">
                <button type="button" class="btn bg-orange-smooth-0 hover:bg-orange-smooth-0 hover:scale-105" onclick="addWord('sentence7', 'I')">I</button>
                <button type="button" class="btn bg-orange-smooth-0 hover:bg-orange-smooth-0 hover:scale-105" onclick="addWord('sentence7', 'am')">am</button>
                <button type="button" class="btn bg-orange-smooth-0 hover:bg-orange-smooth-0 hover:scale-105" onclick="addWord('sentence7', 'not')">not</button>
                <button type="button" class="btn bg-orange-smooth-0 hover:bg-orange-smooth-0 hover:scale-105" onclick="addWord('sentence7', 'hungry')">hungry</button>
            </section>
        </article>

        <!-- Sentence 8 -->
        <article class="border-[3px] border-orange-smooth-0 rounded-md space-y-7 px-5 py-2 relative">
            <p class="absolute flex items-center justify-center bg-orange-smooth-0 h-10 aspect-square rounded-full text-white title text-xl -left-5 -top-5">8</p>

            <input type="text" disabled class="paragraph px-10 border-b-2 border-gray-600 w-full bg-transparent outline-none" id="sentence8">

            <section class="flex justify-around">
                <button type="button" class="btn bg-orange-smooth-0 hover:bg-orange-smooth-0 hover:scale-105" onclick="addWord('sentence8', 'friends')">friends</button>
                <button type="button" class="btn bg-orange-smooth-0 hover:bg-orange-smooth-0 hover:scale-105" onclick="addWord('sentence8', 'we')">we</button>
     
                <button type="button" class="btn bg-orange-smooth-0 hover:bg-orange-smooth-0 hover:scale-105" onclick="addWord('sentence8', 'not')">not</button>
                <button type="button" class="btn bg-orange-smooth-0 hover:bg-orange-smooth-0 hover:scale-105" onclick="addWord('sentence8', 'are')">are</button>
            
            </section>
        </article>

        <!-- Sentence 9 -->
        <article class="border-[3px] border-orange-smooth-0 rounded-md space-y-7 px-5 py-2 relative">
            <p class="absolute flex items-center justify-center bg-orange-smooth-0 h-10 aspect-square rounded-full text-white title text-xl -left-5 -top-5">9</p>

            <input type="text" disabled class="paragraph px-10 border-b-2 border-gray-600 w-full bg-transparent outline-none" id="sentence9">

            <section class="flex justify-around">
                <button type="button" class="btn bg-orange-smooth-0 hover:bg-orange-smooth-0 hover:scale-105" onclick="addWord('sentence9', 'not')">not</button>
                <button type="button" class="btn bg-orange-smooth-0 hover:bg-orange-smooth-0 hover:scale-105" onclick="addWord('sentence9', 'he')">he</button>
                <button type="button" class="btn bg-orange-smooth-0 hover:bg-orange-smooth-0 hover:scale-105" onclick="addWord('sentence9', 'is')">is</button>
                <button type="button" class="btn bg-orange-smooth-0 hover:bg-orange-smooth-0 hover:scale-105" onclick="addWord('sentence9', 'ready')">ready</button>
            </section>
        </article>

        <button type="submit" class="btn-verify">Verify</button>
    </form>

    <div id="result" class="mt-5"></div>

    <script>
        function addWord(sentenceId, word) {
            const input = document.getElementById(sentenceId);
            // Check if the word is already in the sentence
            if (input.value.includes(word)) {
                input.value = input.value.replace(` ${word}`, '').replace(`${word}`, '');
            } else {
                input.value += (input.value ? ' ' : '') + word;
            }
        }

        document.getElementById('sentence-form').addEventListener('submit', function(event) {
            event.preventDefault();
            const correctAnswers = [
                "my friends are they",
                "we are good students",
                "they are at home now",
                "is she at home ?",
                "are they going to the park ?",
                "are you going where ?",
                "I am not hungry",
                "we are not friends",
                "he is not ready"
            ];

            const userAnswers = [
                document.getElementById('sentence1').value.trim(),
                document.getElementById('sentence2').value.trim(),
                document.getElementById('sentence3').value.trim(),
                document.getElementById('sentence4').value.trim(),
                document.getElementById('sentence5').value.trim(),
                document.getElementById('sentence6').value.trim(),
                document.getElementById('sentence7').value.trim(),
                document.getElementById('sentence8').value.trim(),
                document.getElementById('sentence9').value.trim(),
            ];

            const resultDiv = document.getElementById('result');
            resultDiv.innerHTML = '';

            userAnswers.forEach((answer, index) => {
                const correctAnswer = correctAnswers[index];
                if (answer === correctAnswer) {
                    resultDiv.innerHTML += `<p style="color: green;">Sentence ${index + 1}: ${answer}</p>`;
                } else {
                    const userWords = answer.split(' ');
                    const correctWords = correctAnswer.split(' ');
                    const resultSentence = userWords.map((word, idx) => {
                        return correctWords[idx] === word ? `<span style="color: green;">${word}</span>` : `<span style="color: red;">${word}</span>`;
                    }).join(' ');
                    resultDiv.innerHTML += `<p>Sentence ${index + 1}: ${resultSentence}</p>`;
                }
            });
        });
    </script>
</x-verb-to-be-challenge>
