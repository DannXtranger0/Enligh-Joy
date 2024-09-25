 <x-verb-to-be-challenge>
    <x-title>Choose The Correct Option</x-title>
    
    <p class="ml-20 paragraph">Fill in the blank by selecting the correct answer</p>
    
    <form action="" class="my-10 space-y-10">
        @csrf
        
        <x-question-challenge 
            number_question="1"
            start="1.She"
            finish="my sister"
            a="am"
            b="is"
            c="are"
            color="#5F3A84"
        />

        <x-question-challenge 
            number_question="2"
            start="2. We"
            finish="ready for the trip"
            a="am"
            b="is"
            c="are"
            color="#5F3A84"
        />

        <x-question-challenge 
            number_question="3"
            start="3. I"
            finish="ready for the trip"
            a="am"
            b="is"
            c="are"
            color="#5F3A84"
        />

        <x-question-challenge 
            number_question="4"
            start="4."
            finish="they at the library today?"
            a="we"
            b="are"
            c="is"
            color="#5F3A84"
        />

        <x-question-challenge 
            number_question="5"
            start="5."
            finish="you interested in learning Spanish?"
            a="we"
            b="are"
            c="is"
            color="#5F3A84"
        />

        <x-question-challenge 
            number_question="6"
            start="6. Where"
            finish="he going after school?"
            a="we"
            b="are"
            c="is"
            color="#5F3A84"
        />

        <x-question-challenge 
            number_question="7"
            start="7. She"
            finish="happy about the results."
            a="isn't"
            b="aren't"
            c="am not"
            color="#5F3A84"
        />

        <x-question-challenge
            number_question="8"
            start="8. We"
            finish="going to the party tonight."
            a="isn't"
            b="aren't"
            c="am not"
            color="#5F3A84"
        />

        <x-question-challenge 
            number_question="9"
            start="9. I"
            finish="sure about this decision."
            a="isn't"
            b="aren't"
            c="am not"
            color="#5F3A84"
        />
        
        <div class="flex items-center space-x-4 mt-4">
            <button class="btn-verify">Verify</button>
            <div class="results border-2 border-red-600 px-6 left-64 w-1/4 relative p-4 rounded hidden">
                <p id="result-text" class="paragraph"></p>
            </div>
        </div>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const correctAnswers = {
                1: 'is',
                2: 'are',
                3: 'am',
                4: 'are',
                5: 'are',
                6: 'is',
                7: "isn't",
                8: "aren't",
                9: "am not",
            };

            const totalQuestions = Object.keys(correctAnswers).length;

            document.querySelector('.btn-verify').addEventListener('click', function (event) {
                event.preventDefault(); // Evita que el formulario se envíe

                // Inicializo contadores en 0
                let correctCount = 0;
                let incorrectCount = 0;

                // Verifica las respuestas
                for (let questionNumber in correctAnswers) {
                    const selectedAnswer = document.querySelector(`input[name='question-${questionNumber}']:checked`);
                    const questionDiv = document.getElementById(`question-${questionNumber}`);
                    let icon = questionDiv.querySelector('img'); // Selecciona la imagen existente

                    // Si no existe la imagen, la creamos
                    if (!icon) {
                        icon = document.createElement('img');
                        icon.style.width = '20px'; 
                        icon.style.position = 'relative'; 
                        icon.style.right = '-70vw'; 
                        icon.style.top = '-11vw'; // Espa
                        questionDiv.appendChild(icon); // Agregar la imagen al div
                    }

                    if (selectedAnswer) {
                        const answerValue = selectedAnswer.value;

                        if (answerValue === correctAnswers[questionNumber]) {
                            questionDiv.style.border = '3px solid #1CED49'; // Respuesta correcta
                            icon.src = '{{asset('images/correct.png')}}'; // Ruta a la imagen de check
                            correctCount++;
                        } else {
                            questionDiv.style.border = '3px solid #912F2F'; // Respuesta incorrecta
                            icon.src = '{{asset('images/incorrect.png')}}'; // Ruta a la imagen de X
                            incorrectCount++;
                        }
                    } else {
                        incorrectCount++; // Contar como incorrecta si no se selecciona respuesta
                    }
                }
                
                // Mostrar resultados
                const resultText = document.getElementById('result-text');
                resultText.innerHTML = `
                    <span class="text-red-600">¡Errors!: ${incorrectCount}</span><br>
                    <span class="text-green-600">¡Corrects!: ${correctCount}</span>`;
                
                // Hacer visible el contenedor de resultados
                document.querySelector('.results').classList.remove('hidden');

                // Redirigir si todas las respuestas son correctas
                if (correctCount === totalQuestions) {
                    window.location.href = '/verb-to-be-challenge/2'; 
                }
            });
        });
    </script>
</x-verb-to-be-challenge> 


