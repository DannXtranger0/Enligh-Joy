<x-verb-to-be-challenge>
    <x-title>Complete The Dialogue</x-title>

    <p class="ml-20 paragraph">Write in the blanks of the dialogues using the verb to be</p>

    <form action="#" class="my-10 space-y-16">
        @csrf

        <article class="border-[3px] border-orange-smooth-0 rounded-md space-y-7 px-5 py-2 relative">
            <p class="absolute flex items-center justify-center bg-orange-smooth-0 h-10 aspect-square rounded-full text-white title text-xl -left-5 -top-5">1</p>
            
            <p class="paragraph"><span class="title text-xl font-medium">A: </span>Hi, Emma. <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue1_1" id=""> you okay? You look tired.</p>

            <p class="paragraph"><span class="title text-xl font-medium">B: </span>I <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue1_2" id=""> tired. I <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue1_3" id=""> not sleeping well these days.</p>

            <p class="paragraph"><span class="title text-xl font-medium">A: </span>Why <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue1_4" id=""> that? <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue1_5" id=""> everything okay at home?</p>

            <p class="paragraph"><span class="title text-xl font-medium">B: </span>Yes, everything <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue1_6" id=""> fine at home. I think I <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue1_7" id=""> just stressed because of work.</p>

            <p class="paragraph"><span class="title text-xl font-medium">A: </span>I understand. Work can be hard sometimes. But remember, you <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue1_8" id=""> not alone. We are friends.</p>
        </article>

        <article class="border-[3px] border-purple-principal-0 rounded-md space-y-7 px-5 py-2 relative">
            <p class="absolute flex items-center justify-center bg-purple-principal-0 h-10 aspect-square rounded-full text-white title text-xl -left-5 -top-5">2</p>
            
            <p class="paragraph"><span class="title text-xl font-medium">A: </span> <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue2_1" id=""> the kids ready for school?</p>

            <p class="paragraph"><span class="title text-xl font-medium">B: </span>No, they <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue2_2" id=""> not ready yet. They <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue2_3" id=""> still eating breakfast.</p>

            <p class="paragraph"><span class="title text-xl font-medium">A: </span>They need to hurry up; the bus <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue2_4" id=""> coming in 10 minutes.</p>

            <p class="paragraph"><span class="title text-xl font-medium">B: </span>I know, but they <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue2_5" id=""> always slow in the mornings.</p>

            <p class="paragraph"><span class="title text-xl font-medium">A: </span>That's true. Mornings <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue2_6" id=""> not easy for them. Maybe they <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue2_7" id=""> just sleepy.</p>
        </article>

        <article class="border-[3px] border-[#C55E7A] rounded-md space-y-7 px-5 py-2 relative">
            <p class="absolute flex items-center justify-center bg-[#C55E7A] h-10 aspect-square rounded-full text-white title text-xl -left-5 -top-5">3</p>
            
            <p class="paragraph"><span class="title text-xl font-medium">A: </span>How <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue3_1" id=""> your weekend, Jake?</p>

            <p class="paragraph"><span class="title text-xl font-medium">B: </span>It <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue3_2" id=""> good, but it <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue3_3" id=""> not long enough. I wish weekends <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue3_4" id=""> longer.</p>

            <p class="paragraph"><span class="title text-xl font-medium">A: </span>I agree. Two days <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue3_5" id=""> never enough to relax. What <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue3_6" id=""> you do?</p>

            <p class="paragraph"><span class="title text-xl font-medium">B: </span>I <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue3_7" id=""> just at home. But I <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue3_8" id=""> happy to rest.</p>

            <p class="paragraph"><span class="title text-xl font-medium">A: </span>That sounds nice. Sometimes staying at home <input class="border-b-2 border-black w-10 outline-none text-center" type="text" name="dialogue3_9" id=""> the best thing.</p>
        </article>

        <button type="submit" class="btn-verify">Verify</button>
    </form>
    
    <script>
        document.querySelector('.btn-verify').addEventListener('click', function(event) {
            event.preventDefault(); 
    
          
            const correctAnswers = [
                ["are", "am", "am", "is", "is", "is", "am", "are"], // Dialogue 1
                ["are", "are", "are","is", "are", "are", "are","are"], // Dialogue 2
                ["was", "was", "was", "were", "are", "did", "was", "am", "is"] // Dialogue 3
            ];

            let score = 0;
    
            // Check answers for each dialogue
            const dialogues = document.querySelectorAll('article');
            dialogues.forEach((dialogue, dialogueIndex) => {
                const inputs = dialogue.querySelectorAll('input');
                inputs.forEach((input, index) => {
                    const userAnswer = input.value.trim().toLowerCase(); 
                    const correctAnswer = correctAnswers[dialogueIndex][index]; 
    
                    if (userAnswer === correctAnswer) {
                        score++;
                        input.style.borderColor = '#1CED49'; // Correct 
                    } else {
                        input.style.borderColor = 'red'; // Incorrect 
                    }
                });
            });
    
            // // Display result
            // alert(`You got ${score} out of ${correctAnswers.flat().length} correct!`);
        });
    </script>
</x-verb-to-be-challenge>
